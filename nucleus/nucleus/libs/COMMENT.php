<?php

/*
 * Nucleus: PHP/MySQL Weblog CMS (http://nucleuscms.org/)
 * Copyright (C) 2002-2007 The Nucleus Group
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * (see nucleus/documentation/index.html#license for more info)
 */
/**
 * A class representing a single comment
 *
 * @license http://nucleuscms.org/license.txt GNU General Public License
 * @copyright Copyright (C) 2002-2007 The Nucleus Group
 * @version $Id$
 */
class Comment 
{
	/**
	 * Comment::getComment()
	 * Returns the requested comment
	 *
	 * @static
	 * @param	integer	$commentid	id for comment
	 * @return	array	comment information
	 * 
	 */
	static function getComment($commentid)
	{
		$query = 'SELECT cnumber AS commentid,'
		              . ' cbody AS body,'
		              . ' cuser AS user,'
		              . ' cmail AS userid,'
		              . ' cemail AS email,'
		              . ' cmember AS memberid,'
		              . ' ctime,'
		              . ' chost AS host,'
		              . ' mname AS member,'
		              . ' cip AS ip,'
		              . ' cblog AS blogid'
		       . ' FROM %s LEFT OUTER JOIN %s ON cmember = mnumber'
		       . ' WHERE cnumber = %d;';
		
		$query = sprintf($query, sql_table('comment'), sql_table('member'), (integer) $commentid);
		$aCommentInfo = DB::getRow($query);
		
		if ( $aCommentInfo )
		{
			$aCommentInfo['timestamp'] = strtotime($aCommentInfo['ctime']);
		}
		
		return $aCommentInfo;
	}
	
	/**
	 * Comment::prepare()
	 * Prepares a comment to be saved
	 *
	 * @static
	 * @param	array	$comment	comment data
	 * @return	array	comment date
	 * 
	 */
	static function prepare($comment)
	{
		$comment['user']	= strip_tags($comment['user']);
		$comment['userid']	= strip_tags($comment['userid']);
		$comment['email']	= strip_tags($comment['email']);
		
		// remove newlines from user; remove quotes and newlines from userid and email; trim whitespace from beginning and end
		$comment['user']	= trim(strtr($comment['user'], "\n", ' ') );
		$comment['userid']	= trim(strtr($comment['userid'], "\'\"\n", '-- ') );
		$comment['email']	= trim(strtr($comment['email'], "\'\"\n", '-- ') );
		
		// begin if: a comment userid is supplied, but does not have an "http://" or "https://" at the beginning - prepend an "http://"
		if ( array_key_exists('userid', $comment)
		  && !empty($comment['userid'])
		  && (i18n::strpos($comment['userid'], 'http://') !== 0)
		  && (i18n::strpos($comment['userid'], 'https://') !== 0) )
		{
			$comment['userid'] = 'http://' . $comment['userid'];
		}
		
		$comment['body'] = Comment::prepareBody($comment['body']);
		
		return $comment;
	}
	
	/**
	 * Comment::prepareBody()
	 * Prepares the body of a comment
	 *
	 * @static
	 * @param	string	$body	string for comment body
	 * @return	string	validate string for comment body
	 */
	static public function prepareBody($body)
	{
		// convert Windows and Mac style 'returns' to *nix newlines
		$body = preg_replace("/\r\n/", "\n", $body);
		$body = preg_replace("/\r/", "\n", $body);
		
		// then remove newlines when too many in a row (3 or more newlines get converted to 1 newline)
		$body = preg_replace("/\n{3,}/", "\n\n", $body);
		
		// encode special characters as entities
		$body = Entity::hsc($body);
		
		// trim away whitespace and newlines at beginning and end
		$body = trim($body);
		
		// add <br /> tags
		$body = addBreaks($body);
		
		// create hyperlinks for http:// addresses
		// there's a testcase for this in /build/testcases/urllinking.txt
		$replace_from = array(
			'/([^:\/\/\w]|^)((https:\/\/)([\w\.-]+)([\/\w+\.~%&?@=_:;#,-]+))/i',
			'/([^:\/\/\w]|^)((http:\/\/|www\.)([\w\.-]+)([\/\w+\.~%&?@=_:;#,-]+))/i',
			'/([^:\/\/\w]|^)((ftp:\/\/|ftp\.)([\w\.-]+)([\/\w+\.~%&?@=_:;#,-]+))/i',
			'/([^:\/\/\w]|^)(mailto:(([a-zA-Z\@\%\.\-\+_])+))/i'
		);
		
		return preg_replace_callback($replace_from, array(__CLASS__, 'prepareBody_cb'), $body);
	}
	
	/**
	 * Comment::createLinkCode()
	 * Creates a link code for unlinked URLs with different protocols
	 *
	 * @static
	 * @param	string	$pre	Prefix of comment
	 * @param	string	$url	URL
	 * @param	string	$protocol	http, mailto and so on
	 * @return	string	string	including anchor element and child text
	 */
	static private function createLinkCode($pre, $url, $protocol = 'http')
	{
		$post = '';
		
		// it's possible that $url ends contains entities we don't want,
		// since htmlspecialchars is applied _before_ URL linking
		// move the part of URL, starting from the disallowed entity to the 'post' link part
		$aBadEntities = array('&quot;', '&gt;', '&lt;');
		foreach ( $aBadEntities as $entity )
		{
			$pos = i18n::strpos($url, $entity);
			
			if ( $pos )
			{
				$post = i18n::substr($url, $pos) . $post;
				$url = i18n::substr($url, 0, $pos);
			}
		}
		
		// remove entities at end (&&&&)
		if ( preg_match('/(&\w+;)+$/i', $url, $matches) )
		{
			$post = $matches[0] . $post;	// found entities (1 or more)
			$url = i18n::substr($url, 0, i18n::strlen($url) - i18n::strlen($post) );
		}
		
		// move ending comma from url to 'post' part
		if ( i18n::substr($url, i18n::strlen($url) - 1) == ',' )
		{
			$url = i18n::substr($url, 0, i18n::strlen($url) - 1);
			$post = ',' . $post;
		}
		
		if ( !preg_match('#^' . $protocol . '://#', $url) )
		{
			$linkedUrl = $protocol . ( ($protocol == 'mailto') ? ':' : '://') . $url;
		}
		else
		{
			$linkedUrl = $url;
		}
		
		if ( $protocol != 'mailto' )
		{
			$displayedUrl = $linkedUrl;
		}
		else
		{
			$displayedUrl = $url;
		}
		
		return $pre . '<a href="' . $linkedUrl . '" rel="nofollow">' . Entity::hsc(Entity::shorten($displayedUrl,30,'...')) . '</a>' . $post;
	}
	
	/**
	 * Comment::prepareBody_cb()
	 * This method is a callback for creating link codes
	 * 
	 * @param	array	$match	elements for achor
	 * @return	string	including anchor element and child text
	 * 
	 */
	static public function prepareBody_cb($match)
	{
		if ( !preg_match('/^[a-z]+/i', $match[2], $protocol) )
		{
			return $match[0];
		}
		
		switch( strtolower($protocol[0]) )
		{
			case 'https':
				return self::createLinkCode($match[1], $match[2], 'https');
			break;
			
			case 'ftp':
				return self::createLinkCode($match[1], $match[2], 'ftp');
			break;
			
			case 'mailto':
				return self::createLinkCode($match[1], $match[3], 'mailto');
			break;
			
			default:
				return self::createLinkCode($match[1], $match[2], 'http');
			break;
		}
		return;
	}
}
