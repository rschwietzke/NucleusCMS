<?php
/**
  * Nucleus: PHP/MySQL Weblog CMS (http://nucleuscms.org/) 
  * Copyright (C) 2002 The Nucleus Group
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License
  * as published by the Free Software Foundation; either version 2
  * of the License, or (at your option) any later version.
  * (see nucleus/documentation/index.html#license for more info)
  */
	// we are using admin stuff:
	$CONF = array();
	$CONF['UsingAdminArea'] = 1;

	// include the admin code
	include('../config.php');
	
	if ($CONF['alertOnSecurityRisk'] == 1)
	{
		// check if files exist and generate an error if so
		$aFiles = array(
			'../install.sql' => 'install.sql', 
			'../install.php' => 'install.php',
			'upgrades' => 'nucleus/upgrades directory',
			'convert' => 'nucleus/convert directory',
		);
		$aFound = array();
		foreach($aFiles as $fileName => $fileDesc)
		{
			if (@file_exists($fileName))
				array_push($aFound, $fileDesc);
		}
		if (sizeof($aFound) > 0)
		{
			startUpError(
				'<p>One or more of the Nucleus installation files are still present on the webserver.</p><p>You should remove these files to ensure security. Here are the files that were found by Nucleus</p> <ul><li>'. implode($aFound, '</li><li>').'</li></ul><p>If you don\'t want to see this error message again, without solving the problem, set <code>$CONF[\'alertOnHeadersSent\']</code> in <code>globalfunctions.php</code> to <code>0</code>, or do this at the end of <code>config.php</code>.</p>',
				'Security Risk'
			);
		}
	}

	if (!$member->isLoggedIn() || ($action == 'logout')) {
		$HTTP_POST_VARS['oldaction'] = $action;	// see ADMIN::login()
		$_POST['oldaction'] = $action;	
		$action = "showlogin";
	}
	
	// show error if member cannot login to admin
	if ($member->isLoggedIn() && !$member->canLogin()) {
		$error = _ERROR_LOGINDISALLOWED;
		$HTTP_POST_VARS['oldaction'] = $action; // see ADMIN::login()
		$_POST['oldaction'] = $action; 
		$action = "showlogin";
		
	}
	
	$admin = new ADMIN();
	$admin->action($action);
?>