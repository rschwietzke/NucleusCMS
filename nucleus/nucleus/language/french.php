<?php
// French Nucleus Language File
// 
// Auteur: Papachango (pfffouitt@yahoo.fr)
// Nucleus version: v1.0-v2.5
//
// Nota bene : si vous souhaitez traduire ce fichier dans votre propre langue, soyez conscient
// que dans une version ult�rieure de Nucleus, de nouvelles variables peuvent �tre apparues et
// d'autres avoir �t� supprim�es. Il est donc important de sp�cifier la version de Nucleus pour
// laquelle le fichier a �t� �crit, dans votre document.
//
// Le fichier traduit peut-�tre envoy� � Wouter Demuynck (nucleus@demuynck.org)
// et sera disponible en t�l�chargement (avec le cr�dit de l'auteur, bien entendu)

// START introduced after v2.0 START

// media library
define('_MEDIA_VIEW',			'afficher');
define('_MEDIA_VIEW_TT',		'Afficher la page (ouvrir une nouvelle fen�tre)');
define('_MEDIA_FILTER_APPLY',		'Appliquer le filtre');
define('_MEDIA_FILTER_LABEL',		'Filtre: ');
define('_MEDIA_UPLOAD_TO',		'T�l�charger dans...');
define('_MEDIA_UPLOAD_NEW',		'T�l�charger un nouveau fichier...');
define('_MEDIA_COLLECTION_SELECT',	'S�lectionner');
define('_MEDIA_COLLECTION_TT',		'Changer de biblioth�que');
define('_MEDIA_COLLECTION_LABEL',	'Biblioth�que actuelle: ');

// tooltips on toolbar
define('_ADD_ALIGNLEFT_TT',		'Aligner � gauche');
define('_ADD_ALIGNRIGHT_TT',		'Aligner � droite');
define('_ADD_ALIGNCENTER_TT',		'Centrer');

// searchable blog setting (yes/no)
define('_EBLOG_SEARCH',			'Inclure dans la recherche');

// generic upload failure
define('_ERROR_UPLOADFAILED',		'Echec du t�l�chargement');

// END introduced after v2.0 END

// START introduced after v1.5 START

// posting to the past/edit timestamps
define('_EBLOG_ALLOWPASTPOSTING',	'Permettre d\'antidater');
define('_ADD_CHANGEDATE',		'Mise �  jour  de la date');
define('_BMLET_CHANGEDATE',		'Mise �  jour de la date');

// skin import/export
define('_OVERVIEW_SKINIMPORT',		'Habillage import/export...');

// skin settings
define('_PARSER_INCMODE_NORMAL',	'Normal');
define('_PARSER_INCMODE_SKINDIR',	'Utiliser un dossier d\'habillage');
define('_SKIN_INCLUDE_MODE',		'Type d\'inclusion');
define('_SKIN_INCLUDE_PREFIX',		'Pr�fixe d\'inclusion');

// global settings
define('_SETTINGS_BASESKIN',		'Habillage de base');
define('_SETTINGS_SKINSURL',		'URL pour l\'habillage');
define('_SETTINGS_ACTIONSURL',		'URL complet pour action.php');

// category moves (batch)
define('_ERROR_MOVEDEFCATEGORY',	'Impossible de d�placer le th�me par d�faut');
define('_ERROR_MOVETOSELF',		'Impossible de d�placer le th�me (le blog de destination est identique au blog source)');
define('_MOVECAT_TITLE',		'S�lectionner le blog dans lequel vous souhaitez d�placer ce th�me');
define('_MOVECAT_BTN',			'D�placer le th�me');

// URLMode setting
define('_SETTINGS_URLMODE',		'Type de lien');
define('_SETTINGS_URLMODE_NORMAL',	'Normal');
define('_SETTINGS_URLMODE_PATHINFO',	'Fancy');

// Batch operations
define('_BATCH_NOSELECTION',		'Aucune action s�lectionn�e');
define('_BATCH_ITEMS',			'Action sur les billets');
define('_BATCH_CATEGORIES',		'Action sur les th�mes');
define('_BATCH_MEMBERS',		'Action sur les participants');
define('_BATCH_TEAM',			'Action sur les participants d\'un blog');
define('_BATCH_COMMENTS',		'Action sur les commentaires');
define('_BATCH_UNKNOWN',		'Action inconnue: ');
define('_BATCH_EXECUTING',		'En cours');
define('_BATCH_ONCATEGORY',		'sur un th�me');
define('_BATCH_ONITEM',			'sur un �l�ment');
define('_BATCH_ONCOMMENT',		'sur un commentaire');
define('_BATCH_ONMEMBER',		'sur un participant');
define('_BATCH_ONTEAM',			'sur le participant du blog');
define('_BATCH_SUCCESS',		'Action r�ussie!');
define('_BATCH_DONE',			'Termin�!');
define('_BATCH_DELETE_CONFIRM',		'Confirmer la suppression');
define('_BATCH_DELETE_CONFIRM_BTN',	'Confirmer');
define('_BATCH_SELECTALL',		'Tout s�lectionner');
define('_BATCH_DESELECTALL',		'Annuler la s�lection');

// batch operations: options in dropdowns
define('_BATCH_ITEM_DELETE',		'Supprimer');
define('_BATCH_ITEM_MOVE',		'D�placer');
define('_BATCH_MEMBER_DELETE',		'Supprimer');
define('_BATCH_MEMBER_SET_ADM',		'Donner les droits d\'administrateur');
define('_BATCH_MEMBER_UNSET_ADM',	'Retirer les droits d\'administrateur');
define('_BATCH_TEAM_DELETE',		'Retirer de l\'�quipe');
define('_BATCH_TEAM_SET_ADM',		'Donner les droits d\'administrateur');
define('_BATCH_TEAM_UNSET_ADM',		'Retirer les droits d\'administrateur');
define('_BATCH_CAT_DELETE',		'Supprimer');
define('_BATCH_CAT_MOVE',		'D�placer vers un autre blog');
define('_BATCH_COMMENT_DELETE',		'Supprimer');

// itemlist: Add new item...
define('_ITEMLIST_ADDNEW',		'Ajouter un nouveau billet...');
define('_ADD_PLUGIN_EXTRAS',		'Options suppl�mentaires des modules');

// errors
define('_ERROR_CATCREATEFAIL',		'Impossible de cr�er le nouveau th�me');
define('_ERROR_NUCLEUSVERSIONREQ',	'Ce module requiert une version ult�rieure de Nucleus: ');

// backlinks
define('_BACK_TO_BLOGSETTINGS',		'Retour au menu de configuration des blogs');

// skin import export
define('_SKINIE_TITLE_IMPORT',		'Importation');
define('_SKINIE_TITLE_EXPORT',		'Exportation');
define('_SKINIE_BTN_IMPORT',		'Importation');
define('_SKINIE_BTN_EXPORT',		'Exporter les habillages/mod�les s�lectionn�s');
define('_SKINIE_LOCAL',			'Importer depuis un fichier local:');
define('_SKINIE_NOCANDIDATES',		'Aucun habillage trouv� dans le r�pertoire skins');
define('_SKINIE_FROMURL',		'Importer � partir d\'un lien:');
define('_SKINIE_EXPORT_INTRO',		'S�lectionnez ci-dessous les habillages et mod�les que vous souhaitez exporter:');
define('_SKINIE_EXPORT_SKINS',		'Habillages');
define('_SKINIE_EXPORT_TEMPLATES',	'Mod�les');
define('_SKINIE_EXPORT_EXTRA',		'Notes');
define('_SKINIE_CONFIRM_OVERWRITE',	'Ecraser l\'ancienne version?');
define('_SKINIE_CONFIRM_IMPORT',	'Oui, je veux importer ceci');
define('_SKINIE_CONFIRM_TITLE',		'A propos de l\'importation d\'habillage et de mod�le');
define('_SKINIE_INFO_SKINS',		'Habillages dans le fichier:');
define('_SKINIE_INFO_TEMPLATES',	'Mod�les dans le fichier:');
define('_SKINIE_INFO_GENERAL',		'Notes:');
define('_SKINIE_INFO_SKINCLASH',	'Nom de l\'habillage:');
define('_SKINIE_INFO_TEMPLCLASH',	'Nom du mod�le:');
define('_SKINIE_INFO_IMPORTEDSKINS',	'Habillage import�:');
define('_SKINIE_INFO_IMPORTEDTEMPLS',	'Mod�le import�:');
define('_SKINIE_DONE',			'Importation r�ussie');

define('_AND',				'et');
define('_OR',				'ou');

// empty fields on template edit
define('_EDITTEMPLATE_EMPTY',		'Champ vide (cliquer pour modifier)');

// skin overview list
define('_LIST_SKINS_INCMODE',		'Type d\'inclusion:');
define('_LIST_SKINS_INCPREFIX',		'Pr�fixe d\'inclusion:');
define('_LIST_SKINS_DEFINED',		'Habillages d�finis:');

// backup
define('_BACKUPS_TITLE',		'Sauvegarde / R�cup�ration');
define('_BACKUP_TITLE',			'Sauvegarde');
define('_BACKUP_INTRO',			'Cliquez sur le bouton ci-dessous pour cr�er une sauvegarde de votre base de donn�es Nucleus. Enregistrez-la dans un fichier. Gardez-le en lieu s�r.');
define('_BACKUP_ZIP_YES',		'Essayer d\'utiliser la compression');
define('_BACKUP_ZIP_NO',		'Ne pas utiliser la compression');
define('_BACKUP_BTN',			'Sauvegarder!');
define('_BACKUP_NOTE',			'<b>NB:</b> Seul le contenu de la base de donn�es est sauvegard�. Les fichiers Media import�s et la configuration de config.php <b>NE SONT PAS</b> inclus dans la sauvegarde.');
define('_RESTORE_TITLE',		'R�cup�ration');
define('_RESTORE_NOTE',			'<b>ATTENTION:</b> Restaurer une sauvegarde <b>EFFACERA</b> toutes les donn�es contenues dans la base de donn�es Nucleus! N\'agissez qu\'en connaissance de cause!<br /><b>NB:</b> V�rifiez que la version de Nucleus de votre sauvegarde soit la m�me que celle que vous utilisez actuellement autrement cela ne fonctionnera pas.');
define('_RESTORE_INTRO',		'S�lectionnez le fichier de r�cup�ration ci-dessous (il sera t�l�charg� sur le serveur) et cliquez sur le bouton "R�cup�ration" pour proc�der.');
define('_RESTORE_IMSURE',		'Oui, je suis s�r!');
define('_RESTORE_BTN',			'R�cup�ration');
define('_RESTORE_WARNING',		'(V�rifiez que vous restaurez le bon fichier de sauvegarde. Faites une nouvelle sauvegarde avant de commencer si vous n\'�tes pas s�r.)');
define('_ERROR_BACKUP_NOTSURE',		'Vous devez cliquer sur le bouton \'je suis s�r\'');
define('_RESTORE_COMPLETE',		'R�cup�ration termin�e');

// new item notification
define('_NOTIFY_NI_MSG',		'Nouveau billet:');
define('_NOTIFY_NI_TITLE',		'Nouveau!');
define('_NOTIFY_KV_MSG',		'Votes Karma pour le billet:');
define('_NOTIFY_KV_TITLE',		'Nucleus karma:');
define('_NOTIFY_NC_MSG',		'Commentaires sur le billet:');
define('_NOTIFY_NC_TITLE',		'Commentaire Nucleus:');
define('_NOTIFY_USERID',		'Utilisateur:');
define('_NOTIFY_USER',			'Utilisateur:');
define('_NOTIFY_COMMENT',		'Commentaire:');
define('_NOTIFY_VOTE',			'Vote:');
define('_NOTIFY_HOST',			'H�te:');
define('_NOTIFY_IP',			'IP:');
define('_NOTIFY_MEMBER',		'Participant:');
define('_NOTIFY_TITLE',			'Titre:');
define('_NOTIFY_CONTENTS',		'Contenu:');

// member mail message
define('_MMAIL_MSG',			'Vous avez re�u un message de');
define('_MMAIL_FROMANON',		'un visiteur anonyme');
define('_MMAIL_FROMNUC',		'Post� depuis un weblog Nucleus �');
define('_MMAIL_TITLE',			'Un message de');
define('_MMAIL_MAIL',			'Message:');

// END introduced after v1.5 END


// START introduced after v1.1 START

// bookmarklet buttons
define('_BMLET_ADD',			'Ajouter un  billet');
define('_BMLET_EDIT',			'Modifier un billet');
define('_BMLET_DELETE',			'Effacer un billet');
define('_BMLET_BODY',			'Corps');
define('_BMLET_MORE',			'D�veloppement');
define('_BMLET_OPTIONS',		'Options');
define('_BMLET_PREVIEW',		'Pr�visualisation');

// used in bookmarklet
define('_ITEM_UPDATED',			'Billet mis � jour');
define('_ITEM_DELETED',			'Billet effac�');

// Modules (plugins)
define('_CONFIRMTXT_PLUGIN',		'Etes-vous sur de vouloir supprimer ce module?');
define('_ERROR_NOSUCHPLUGIN',		'Pas de module correspondant');
define('_ERROR_DUPPLUGIN',		'D�sol�, ce module est d�j� install�');
define('_ERROR_PLUGFILEERROR',		'Ce module n\'existe pas, ou les permissions sont mal configur�es');
define('_PLUGS_NOCANDIDATES',		'Pas de module valide trouv�');

define('_PLUGS_TITLE_MANAGE',		'G�rer les modules');
define('_PLUGS_TITLE_INSTALLED',	'D�j� install�s');
define('_PLUGS_TITLE_UPDATE',		'Mettre � jour la liste des installations');
define('_PLUGS_TEXT_UPDATE',		'Nucleus garde un cache des inscriptions des modules. Quand vous mettez � jour un module en rempla�ant son fichier, vous devez utiliser cette fonction pour mettre � jour le cache.');
define('_PLUGS_TITLE_NEW',		'Installer un nouveau module');
define('_PLUGS_ADD_TEXT',		'Vous trouverez ci-dessous la liste de tous les fichiers contenus dans votre r�pertoire de plugins. Il peut s\'agir de modules non-install�s. Soyez <strong>vraiment</strong> s�r qu\'il s\'agit d\'un module avant de l\'ajouter.');
define('_PLUGS_BTN_INSTALL',		'Installer le module');
define('_BACKTOOVERVIEW',		'Retour au sommaire');

// editlink
define('_TEMPLATE_EDITLINK',		'Modifier le lien du billet');

// add left / add right tooltips
define('_ADD_LEFT_TT',			'Ajouter un cadre � gauche');
define('_ADD_RIGHT_TT',			'Ajouter un cadre � droite');

// add/edit item: new category (in dropdown box)
define('_ADD_NEWCAT',			'Nouveau th�me...');

// new settings
define('_SETTINGS_PLUGINURL',		'URL des modules');
define('_SETTINGS_MAXUPLOADSIZE',	'Taille maxi. du fichier t�l�charg� (bytes)');
define('_SETTINGS_NONMEMBERMSGS',	'Autoriser les non-participants � envoyer des messages');
define('_SETTINGS_PROTECTMEMNAMES',	'Prot�ger les noms des participants');

// overview screen
define('_OVERVIEW_PLUGINS',		'G�rer les modules...');

// actionlog
define('_ACTIONLOG_NEWMEMBER',		'Inscription d\'un nouveau participant:');

// membermail (when not logged in)
define('_MEMBERMAIL_MAIL',		'Votre adresse email:');

// file upload
define('_ERROR_DISALLOWEDUPLOAD2',	'Vous n\'avez pas les droits d\'admin sur les blogs de ce participant. Vous n\'�tes donc pas autoris� � t�l�charger de fichier sur le r�pertoire media de ce participant.');

// plugin list
define('_LISTS_INFO',			'Information');
define('_LIST_PLUGS_AUTHOR',		'de:');
define('_LIST_PLUGS_VER',		'Version:');
define('_LIST_PLUGS_SITE',		'Visiter le site');
define('_LIST_PLUGS_DESC',		'Description:');
define('_LIST_PLUGS_SUBS',		'Inscription aux �v�nements suivants:');
define('_LIST_PLUGS_UP',		'monter');
define('_LIST_PLUGS_DOWN',		'descendre');
define('_LIST_PLUGS_UNINSTALL',		'd�sinstaller');
define('_LIST_PLUGS_ADMIN',		'admin');
define('_LIST_PLUGS_OPTIONS',		'modifier les options');

// plugin option list
define('_LISTS_VALUE',			'Valeur');

// plugin options
define('_ERROR_NOPLUGOPTIONS',		'ce plugin n\'a pas d\'option');
define('_PLUGS_BACK',			'Retour au menu des modules');
define('_PLUGS_SAVE',			'Sauvegarder les options');
define('_PLUGS_OPTIONS_UPDATED',	'Options du module mises � jour');

define('_OVERVIEW_MANAGEMENT',		'Gestion');
define('_OVERVIEW_MANAGE',		'Gestion de Nucleus...');
define('_MANAGE_GENERAL',		'Gestion globale');
define('_MANAGE_SKINS',			'Habillages et mod�les');
define('_MANAGE_EXTRA',			'Options suppl�mentaires');

define('_BACKTOMANAGE',			'Retour au menu de gestion de Nucleus');


// END introduced after v1.1 END




// charset to use 
define('_CHARSET',			'iso-8859-1');

// global stuff
define('_LOGOUT',			'D�connexion');
define('_LOGIN',			'Connexion');
define('_YES',				'Oui');
define('_NO',				'Non');
define('_SUBMIT',			'Envoyer');
define('_ERROR',			'Erreur');
define('_ERRORMSG',			'Une erreur est survenue!');
define('_BACK',				'Retour');
define('_NOTLOGGEDIN',			'Non connect�');
define('_LOGGEDINAS',			'Connect� en tant que');
define('_ADMINHOME',			'Accueil');
define('_NAME',				'Nom');
define('_BACKHOME',			'Retout � l\'accueil');
define('_BADACTION',			'Action inconnue');
define('_MESSAGE',			'Message');
define('_HELP_TT',			'Aide!');
define('_YOURSITE',			'Votre site');


define('_POPUP_CLOSE',			'Fermer la fen�tre');

define('_LOGIN_PLEASE',			'Connectez-vous d\'abord, SVP');

// commentform
define('_COMMENTFORM_YOUARE',		'Vous �tes');
define('_COMMENTFORM_SUBMIT',		'Ajouter un commentaire');
define('_COMMENTFORM_COMMENT',		'Votre commentaire');
define('_COMMENTFORM_NAME',		'Nom');
define('_COMMENTFORM_MAIL',		'Email/HTTP');
define('_COMMENTFORM_REMEMBER',		'Retenir votre nom');

// loginform
define('_LOGINFORM_NAME',		'Nom d\'utilisateur');
define('_LOGINFORM_PWD',		'Mot de passe');
define('_LOGINFORM_YOUARE',		'Connect� en tant que');
define('_LOGINFORM_SHARED',		'Ordinateur partag�');

// member mailform
define('_MEMBERMAIL_SUBMIT',		'Envoyer un message');

// search form
define('_SEARCHFORM_SUBMIT',		'Rechercher');

// add item form
define('_ADD_ADDTO',			'Ajouter un billet �');
define('_ADD_CREATENEW',		'Cr�er un nouveau billet');
define('_ADD_BODY',			'Corps');
define('_ADD_TITLE',			'Titre');
define('_ADD_MORE',			'D�veloppement (facultatif)');
define('_ADD_CATEGORY',			'Th�me');
define('_ADD_PREVIEW',			'Pr�visualisation');
define('_ADD_DISABLE_COMMENTS',		'Interdire les commentaires?');
define('_ADD_DRAFTNFUTURE',		'Brouillons &amp; billets � venir');
define('_ADD_ADDITEM',			'Ajouter le billet');
define('_ADD_ADDNOW',			'Ajouter maintenant');
define('_ADD_ADDLATER',			'Ajouter plus tard');
define('_ADD_PLACE_ON',			'Dat� du');
define('_ADD_ADDDRAFT',			'Ajouter aux brouillons');
define('_ADD_NOPASTDATES',		'(Les dates et heures pass�es ne sont pas valides, la date d\'aujourd\'hui sera utilis�e)');
define('_ADD_BOLD_TT',			'Gras');
define('_ADD_ITALIC_TT',		'Italiques');
define('_ADD_HREF_TT',			'Faire un lien');
define('_ADD_MEDIA_TT',			'Ajouter un document');
define('_ADD_PREVIEW_TT',		'Montrer/cacher la pr�visualisation');
define('_ADD_CUT_TT',			'Couper');
define('_ADD_COPY_TT',			'Copier');
define('_ADD_PASTE_TT',			'Coller');


// edit item form
define('_EDIT_ITEM',			'Modifier le billet');
define('_EDIT_SUBMIT',			'Valider');
define('_EDIT_ORIG_AUTHOR',		'Auteur');
define('_EDIT_BACKTODRAFTS',		'Remettre aux brouillons');
define('_EDIT_COMMENTSNOTE',		'(NB: D�sactiver les commentaires ne cachera pas les anciens)');

// used on delete screens
define('_DELETE_CONFIRM',		'SVP, confirmez la suppression');
define('_DELETE_CONFIRM_BTN',		'Confirmer');
define('_CONFIRMTXT_ITEM',		'Vous allez effacer le billet suivant:');
define('_CONFIRMTXT_COMMENT',		'Vous allez effacer le commentaire suivant:');
define('_CONFIRMTXT_TEAM1',		'Vous allez effacer ');
define('_CONFIRMTXT_TEAM2',		' de l\'�quipe pour le blog ');
define('_CONFIRMTXT_BLOG',		'Le blog que vous allez effacer est: ');
define('_WARNINGTXT_BLOGDEL',		'Attention! Effacer un blog effarcera TOUS les billets de ce blog et tous les commentaires associ�s. Soyez certain de ne pas faire erreur. <br />Et n\'interrompez pas le processus.');
define('_CONFIRMTXT_MEMBER',		'Vous allez effacer le profil du participant suivant: ');
define('_CONFIRMTXT_TEMPLATE',		'Vous allez effacer le mod�le  ');
define('_CONFIRMTXT_SKIN',		'Vous allez effacer l\'habillage ');
define('_CONFIRMTXT_BAN',		'Vous allez annuler l\'exclusion du rang d\'IP');
define('_CONFIRMTXT_CATEGORY',		'Vous allez effacer le th�me ');

// some status messages
define('_DELETED_ITEM',			'Billet supprim�');
define('_DELETED_MEMBER',		'Participant effac�');
define('_DELETED_COMMENT',		'Commentaire supprim�');
define('_DELETED_BLOG',			'Blog effac�');
define('_DELETED_CATEGORY',		'Categorie supprim�e');
define('_ITEM_MOVED',			'Billet d�plac�');
define('_ITEM_ADDED',			'Billet ajout�');
define('_COMMENT_UPDATED',		'Commentaire mis � jour');
define('_SKIN_UPDATED',			'Habillage modifi�');
define('_TEMPLATE_UPDATED',		'Mod�le modifi�');

// errors
define('_ERROR_COMMENT_LONGWORD',	'SVP, n\'employez pas de mot de plus de 90 caract�res dans votre commentaire');
define('_ERROR_COMMENT_NOCOMMENT',	'Tapez votre commentaire');
define('_ERROR_COMMENT_NOUSERNAME',	'Nom invalide');
define('_ERROR_COMMENT_TOOLONG',	'Votre commentaire est trop long (max. 5000 cars)');
define('_ERROR_COMMENTS_DISABLED',	'Les commentaires sur ce blog sont actuellement d�sactiv�s.');
define('_ERROR_COMMENTS_NONPUBLIC',	'Vous devez �tre connect� en tant que participant pour pouvoir commenter ce blog.');
define('_ERROR_COMMENTS_MEMBERNICK',	'Ce nom est d�j� utilis� par un participant du blog. Choisissez autre chose.');
define('_ERROR_SKIN',			'Erreur d\'habillage');
define('_ERROR_ITEMCLOSED',		'Ce billet est prot�g�. Il n\'est pas possible de le commenter ni de voter pour lui.');
define('_ERROR_NOSUCHITEM',		'Billet inexistant');
define('_ERROR_NOSUCHBLOG',		'Blog inexistant');
define('_ERROR_NOSUCHSKIN',		'Habillage inexistant');
define('_ERROR_NOSUCHMEMBER',		'Participant inexistant');
define('_ERROR_NOTONTEAM',		'Vous n\'appartenez pas � l\'�quipe de ce blog.');
define('_ERROR_BADDESTBLOG',		'Le blog de destination n\'existe pas.');
define('_ERROR_NOTONDESTTEAM',		'Impossible de d�placer le billet car vous ne faites pas partie de l\'�quipe du blog de destination.');
define('_ERROR_NOEMPTYITEMS',		'Impossible d\'ajouter un billet vide!');
define('_ERROR_BADMAILADDRESS',		'Adresse email incorrecte');
define('_ERROR_BADNOTIFY',		'Adresse(s) de notification incorrecte(s)');
define('_ERROR_BADNAME',		'Nom incorrect (seuls les lettres de a � z et les chiffres de 0 � 9 sont autoris�s, sans espace au d�but ni � la fin)');
define('_ERROR_NICKNAMEINUSE',		'Un autre participant utilise d�j� ce nom');
define('_ERROR_PASSWORDMISMATCH',	'Les mots de passe doivent correspondre');
define('_ERROR_PASSWORDTOOSHORT',	'Le mot de passe doit commprendre au moins 6 caract�res');
define('_ERROR_PASSWORDMISSING',	'Il FAUT un mot de passe');
define('_ERROR_REALNAMEMISSING',	'Vous devez inscrire votre nom');
define('_ERROR_ATLEASTONEADMIN',	'Il doit toujours y avoir un super admin qui puisse se connecter.');
define('_ERROR_ATLEASTONEBLOGADMIN',	'Cela emp�cherait la gestion de votre blog. Assurez-vous qu\'il y ait toujours au-moins un administrateur.');
define('_ERROR_ALREADYONTEAM',		'Ce participant est d�j� dans l\'�quipe');
define('_ERROR_BADSHORTBLOGNAME',	'Le diminutif du blog ne peut contenir que des lettres de a � z et des chiffres de 0 � 9, sans espace.');
define('_ERROR_DUPSHORTBLOGNAME',	'Un autre blog utilise d�j� ce diminutif. Les diminutifs doivent �tre uniques.');
define('_ERROR_UPDATEFILE',		'Impossible de mettre � jour le fichier. V�rifiez le r�glage de permissions d\'�criture (faites un chmod 666). Remarquez aussi que le chemin est relatif au r�pertoire de la zone admin ; vous devriez utiliser un chemin absolu (quelque chose comme /votre/chemin/vers/nucleus/)');
define('_ERROR_DELDEFBLOG',		'Impossible d\'effacer le blog par d�faut');
define('_ERROR_DELETEMEMBER',		'Impossible de supprimer ce participant car il est probablement l\'auteur de billets ou de commentaires.');
define('_ERROR_BADTEMPLATENAME',	'Nom de mod�le incorrect, n\'utilisez que des lettres de a � z et des chiffres de 0 � 9, sans espace.');
define('_ERROR_DUPTEMPLATENAME',	'Il existe d�j� un mod�le de ce nom');
define('_ERROR_BADSKINNAME',		'Nom d\'habillage incorrect, n\'utilisez que des lettres de a � z et des chiffres de 0 � 9, sans espace.');
define('_ERROR_DUPSKINNAME',		'Il existe d�j� un habillage de ce nom');
define('_ERROR_DEFAULTSKIN',		'Il doit toujours subsister un habillage nomm� "default"');
define('_ERROR_SKINDEFDELETE',		'Impossible de supprimer l\'habillage car il s\'agit de l\'habillage par d�faut du blog: ');
define('_ERROR_DISALLOWED',		'Vous n\'�tes pas autoris� � faire cela');
define('_ERROR_DELETEBAN',		'Erreur en essayant de supprimer l\'exclusion (elle n\'existe pas)');
define('_ERROR_ADDBAN',			'Erreur en essayant d\'ajouter l\'exclusion. L\'exclusion n\'a pas �t� ajout�e correctement dans tous vos blogs.');
define('_ERROR_BADACTION',		'L\'action demand�e n\'existe pas');
define('_ERROR_MEMBERMAILDISABLED',	'Messages de participant � participant d�sactiv�s');
define('_ERROR_MEMBERCREATEDISABLED',	'Creation de nouveaux comptes d�sactiv�e');
define('_ERROR_INCORRECTEMAIL',		'Email incorrect');
define('_ERROR_VOTEDBEFORE',		'Vous avez d�j� vot� pour ce billet');
define('_ERROR_BANNED1',		'Action impossible car vous (ip range ');
define('_ERROR_BANNED2',			') �tes exclu. Le message �tait: \'');
define('_ERROR_BANNED3',			'\'');
define('_ERROR_LOGINNEEDED',		'Vous devez �tre connect� pour faire cela');
define('_ERROR_CONNECT',		'Erreur de connexion');
define('_ERROR_FILE_TOO_BIG',		'Fichier trop gros!');
define('_ERROR_BADFILETYPE',		'D�sol�, cette extension n\'est pas autoris�e');
define('_ERROR_BADREQUEST',		'Mauvaise demande de t�l�chargement');
define('_ERROR_DISALLOWEDUPLOAD',	'Vous ne faites partie d\'aucune �quipe. Vous n\'�tes donc pas autoris� � t�l�charger des fichiers.');
define('_ERROR_BADPERMISSIONS',		'Les permissions de fichiers/r�pertoires ne sont pas correctement configur�es');
define('_ERROR_UPLOADMOVEP',		'Erreur de d�placement de fichier');
define('_ERROR_UPLOADCOPY',		'Erreur de copie de fichier');
define('_ERROR_UPLOADDUPLICATE',	'Un fichier de ce nom existe d�j�. Essayez de le renommer avant de le t�l�charger.');
define('_ERROR_LOGINDISALLOWED',	'D�sol�, vous n\'�tes pas autoris� � vous connecter � la zone admin. Vous pouvez vous connecter sous un autre nom');
define('_ERROR_DBCONNECT',		'Impossible de se connecter au serveur mySQL');
define('_ERROR_DBSELECT',		'Impossible de s�lectionner la base Nucleus.');
define('_ERROR_NOSUCHLANGUAGE',		'Fichier de langue indisponible');
define('_ERROR_NOSUCHCATEGORY',		'Th�me indisponible');
define('_ERROR_DELETELASTCATEGORY',	'Il doit y avoir au moins un th�me');
define('_ERROR_DELETEDEFCATEGORY',	'Impossible d\'effacerle th�me par d�faut');
define('_ERROR_BADCATEGORYNAME',	'Nom de th�me incorrect');
define('_ERROR_DUPCATEGORYNAME',	'Ce th�me existe d�j�');

// some warnings (used for mediadir setting)
define('_WARNING_NOTADIR',		'Attention: ceci n\'est pas un r�pertoire!');
define('_WARNING_NOTREADABLE',		'Attention: ceci n\'est pas un r�pertoire avec droit de lecture!');
define('_WARNING_NOTWRITABLE',		'Attention: ceci n\'est pas un r�pertoire avec droit d\'�criture!');

// media and upload
define('_MEDIA_UPLOADLINK',		'T�l�charger un nouveau fichier');
define('_MEDIA_MODIFIED',		'modifi�');
define('_MEDIA_FILENAME',		'nom de fichier');
define('_MEDIA_DIMENSIONS',		'dimensions');
define('_MEDIA_INLINE',			'Ins�r�');
define('_MEDIA_POPUP',			'Popup');
define('_UPLOAD_TITLE',			'Choisir le fichier');
define('_UPLOAD_MSG',			'S�lectionnez le fichier � t�l�charger ci-dessous et pressez le bouton \'T�l�charger\'.');
define('_UPLOAD_BUTTON',		'T�l�charger');

// some status messages
define('_MSG_ACCOUNTCREATED',		'Compte cr��, le mot de passe sera envoy� par email');
define('_MSG_PASSWORDSENT',		'Mot de passe envoy� par email');
define('_MSG_LOGINAGAIN',		'Vous devrez vous reconnecter car vos informations ont chang�');
define('_MSG_SETTINGSCHANGED',		'R�glages modifi�s');
define('_MSG_ADMINCHANGED',		'Admin chang�');
define('_MSG_NEWBLOG',			'Nouveau blog cr��');
define('_MSG_ACTIONLOGCLEARED',		'Journal effac�');

// actionlog in admin area
define('_ACTIONLOG_DISALLOWED',		'Action interdite: ');
define('_ACTIONLOG_PWDREMINDERSENT',	'Nouveau mot de passe envoy� pour ');
define('_ACTIONLOG_TITLE',		'Journal des �v�nements');
define('_ACTIONLOG_CLEAR_TITLE',	'Effacer le journal des �v�nements');
define('_ACTIONLOG_CLEAR_TEXT',		'Effacer le journal des �v�nements maintenant');

// team management
define('_TEAM_TITLE',			'G�rer les participants ');
define('_TEAM_CURRENT',			'Equipe actuelle');
define('_TEAM_ADDNEW',			'Ajouter un participant');
define('_TEAM_CHOOSEMEMBER',		'Choisir un participant');
define('_TEAM_ADMIN',			'Privil�ges d\'administrateur? ');
define('_TEAM_ADD',			'Ajouter � l\'�quipe');
define('_TEAM_ADD_BTN',			'Ajouter!');

// blogsettings
define('_EBLOG_TITLE',			'Modifier les r�glages du blog');
define('_EBLOG_TEAM_TITLE',		'Modifier l\'�quipe');
define('_EBLOG_TEAM_TEXT',		'Cliquez ici pour modifier votre �quipe...');
define('_EBLOG_SETTINGS_TITLE',		'R�glages du blog');
define('_EBLOG_NAME',			'Nom du blog');
define('_EBLOG_SHORTNAME',		'Diminutif');
define('_EBLOG_SHORTNAME_EXTRA',	'<br />(seulement de a � z et sans espace)');
define('_EBLOG_DESC',			'Description');
define('_EBLOG_URL',			'URL');
define('_EBLOG_DEFSKIN',		'Habillage par d�faut');
define('_EBLOG_DEFCAT',			'Th�me par d�faut');
define('_EBLOG_LINEBREAKS',		'Convertir les sauts de ligne');
define('_EBLOG_DISABLECOMMENTS',	'Activer les commentaires?<br /><small>(Cela signifie qu\'il sera impossible d\'en ajouter.)</small>');
define('_EBLOG_ANONYMOUS',		'Autoriser les commentaires par des non-participants?');
define('_EBLOG_NOTIFY',			'Adresse(s) de notification (s�par�es par des ;)');
define('_EBLOG_NOTIFY_ON',		'Notification activ�e');
define('_EBLOG_NOTIFY_COMMENT',		'Nouveaux commentaires');
define('_EBLOG_NOTIFY_KARMA',		'Nouveaux votes karma');
define('_EBLOG_NOTIFY_ITEM',		'Nouveau billet');
define('_EBLOG_PING',			'Pinger Weblogs.com � la mise � jour?');
define('_EBLOG_MAXCOMMENTS',		'Nombre maximum de commentaires');
define('_EBLOG_UPDATE',			'Fichier de mise-�-jour');
define('_EBLOG_OFFSET',			'D�calage horaire');
define('_EBLOG_STIME',			'Heure du serveur:');
define('_EBLOG_BTIME',			'Heure du blog:');
define('_EBLOG_CHANGE',			'Changer les r�glages');
define('_EBLOG_CHANGE_BTN',		'Valider');
define('_EBLOG_ADMIN',			'G�rer le blog');
define('_EBLOG_ADMIN_MSG',		'Les privil�ges d\'administrateur vous seront attribu�s');
define('_EBLOG_CREATE_TITLE',		'Cr�er un nouveau blog');
define('_EBLOG_CREATE_TEXT',		'Remplissez le formulaire ci-dessous pour cr�er un nouveau blog. <br /><br /> <b>NB:</b> Seules les options n�cessaires sont list�es. Pour plus d\'options, changez les param�tres apr�s la cr�ation.');
define('_EBLOG_CREATE',			'Cr�er le blog');
define('_EBLOG_CREATE_BTN',		'Cr�er');
define('_EBLOG_CAT_TITLE',		'Th�mes');
define('_EBLOG_CAT_NAME',		'Th�mes');
define('_EBLOG_CAT_DESC',		'Description du th�me');
define('_EBLOG_CAT_CREATE',		'Cr�er un nouveau th�me');
define('_EBLOG_CAT_UPDATE',		'Mettre � jour le th�me');
define('_EBLOG_CAT_UPDATE_BTN',		'Mettre � jour le th�me');

// templates
define('_TEMPLATE_TITLE',		'Modifier les mod�les');
define('_TEMPLATE_AVAILABLE_TITLE',	'Mod�les disponibles');
define('_TEMPLATE_NEW_TITLE',		'Nouveau mod�le');
define('_TEMPLATE_NAME',		'Nom du mod�le');
define('_TEMPLATE_DESC',		'Description du mod�le');
define('_TEMPLATE_CREATE',		'Cr�er le mod�le');
define('_TEMPLATE_CREATE_BTN',		'Cr�er le mod�le');
define('_TEMPLATE_EDIT_TITLE',		'Modifier le mod�le');
define('_TEMPLATE_BACK',		'Retour au sommaire des mod�les');
define('_TEMPLATE_EDIT_MSG',		'Tous les �l�ments de mod�le ne sont pas n�cessaires. Laissez vides ceux dont vous n\'avez pas besoin');
define('_TEMPLATE_SETTINGS',		'R�glages de mod�le');
define('_TEMPLATE_ITEMS',		'Billet');
define('_TEMPLATE_ITEMHEADER',		'En-t�te du billet');
define('_TEMPLATE_ITEMBODY',		'Corps du billet');
define('_TEMPLATE_ITEMFOOTER',		'Pied du billet');
define('_TEMPLATE_MORELINK',		'Lien vers le d�veloppement');
define('_TEMPLATE_NEW',			'Indication de nouveau billet');
define('_TEMPLATE_COMMENTS_ANY',	'Commentaires (si n�cessaire)');
define('_TEMPLATE_CHEADER',		'En-t�te des commentaires');
define('_TEMPLATE_CBODY',		'Corps des commentaires');
define('_TEMPLATE_CFOOTER',		'Pied des commentaires');
define('_TEMPLATE_CONE',		'Un seul commentaire');
define('_TEMPLATE_CMANY',		'Deux (ou plus) commentaires');
define('_TEMPLATE_CMORE',		'Commentaires: en voir plus');
define('_TEMPLATE_CMEXTRA',		'Infos participant');
define('_TEMPLATE_COMMENTS_NONE',	'Commentaire (si aucun)');
define('_TEMPLATE_CNONE',		'Pas de commentaire');
define('_TEMPLATE_COMMENTS_TOOMUCH',	'Commentaires (s\'il y en a, mais trop pour les montrer tous)');
define('_TEMPLATE_CTOOMUCH',		'Trop de commentaires');
define('_TEMPLATE_ARCHIVELIST',		'Listes d\'archives');
define('_TEMPLATE_AHEADER',		'En-t�te d\'archives');
define('_TEMPLATE_AITEM',		'Archive (billet)');
define('_TEMPLATE_AFOOTER',		'Pied de liste d\'archives');
define('_TEMPLATE_DATETIME',		'Date et heure');
define('_TEMPLATE_DHEADER',		'En-t�te de date');
define('_TEMPLATE_DFOOTER',		'Pied de date');
define('_TEMPLATE_DFORMAT',		'Format de la date');
define('_TEMPLATE_TFORMAT',		'Format de l\'heure');
define('_TEMPLATE_LOCALE',		'Locale');
define('_TEMPLATE_IMAGE',		'Fen�tre popup');
define('_TEMPLATE_PCODE',		'Code de lien popup');
define('_TEMPLATE_ICODE',		'Code d\'image ins�r�e');
define('_TEMPLATE_MCODE',		'Code lien objet media');
define('_TEMPLATE_SEARCH',		'Recherche');
define('_TEMPLATE_SHIGHLIGHT',		'Surbrillance');
define('_TEMPLATE_SNOTFOUND',		'Rien trouv�');
define('_TEMPLATE_UPDATE',		'Mettre � jour');
define('_TEMPLATE_UPDATE_BTN',		'Mettre � jour le mod�me');
define('_TEMPLATE_RESET_BTN',		'R�tablir les donn�es');
define('_TEMPLATE_CATEGORYLIST',	'Listes de th�mes');
define('_TEMPLATE_CATHEADER',		'En-t�te de liste de th�mes');
define('_TEMPLATE_CATITEM',		'Liste des th�mes (billet)');
define('_TEMPLATE_CATFOOTER',		'Pied de liste de th�mes');

// skins
define('_SKIN_EDIT_TITLE',		'Modification des habillages');
define('_SKIN_AVAILABLE_TITLE',		'Habillages disponibles');
define('_SKIN_NEW_TITLE',		'Nouvel habillage');
define('_SKIN_NAME',			'Nom');
define('_SKIN_DESC',			'Description');
define('_SKIN_TYPE',			'Type de contenu');
define('_SKIN_CREATE',			'Cr�er l\'habillage');
define('_SKIN_CREATE_BTN',		'Cr�er');
define('_SKIN_EDITONE_TITLE',		'Modifier l\'habillage');
define('_SKIN_BACK',			'Retour au menu habillage');
define('_SKIN_PARTS_TITLE',		'Elements d\'habillage');
define('_SKIN_PARTS_MSG',		'Tous les �l�ments ne sont pas requis. Laissez vides ceux dont vous n\'avez pas esoin. Choisissez ci-dessous l\'�l�ment d\'habillage � modifier:');
define('_SKIN_PART_MAIN',		'Page index');
define('_SKIN_PART_ITEM',		'Page billet');
define('_SKIN_PART_ALIST',		'Liste des archives');
define('_SKIN_PART_ARCHIVE',		'Archive');
define('_SKIN_PART_SEARCH',		'Recherche');
define('_SKIN_PART_ERROR',		'Erreurs');
define('_SKIN_PART_MEMBER',		'Fiches des participants');
define('_SKIN_PART_POPUP',		'Fen�tres Popups');
define('_SKIN_GENSETTINGS_TITLE',	'R�glages d\'ensemble');
define('_SKIN_CHANGE',			'Modifier');
define('_SKIN_CHANGE_BTN',		'Modifier ces r�glages');
define('_SKIN_UPDATE_BTN',		'Mettre � jour');
define('_SKIN_RESET_BTN',		'R�tablir');
define('_SKIN_EDITPART_TITLE',		'Modifier l\'habillage');
define('_SKIN_GOBACK',			'Retour');
define('_SKIN_ALLOWEDVARS',		'Variables autoris�es (cliquer pour info):');

// global settings
define('_SETTINGS_TITLE',		'R�glages d\'ensemble');
define('_SETTINGS_SUB_GENERAL',		'R�glages d\'ensemble');
define('_SETTINGS_DEFBLOG',		'Blog par d�faut');
define('_SETTINGS_ADMINMAIL',		'Email de l\'administrateur');
define('_SETTINGS_SITENAME',		'Nom du site');
define('_SETTINGS_SITEURL',		'URL du site (termin� par un /)');
define('_SETTINGS_ADMINURL',		'URL de la zone admin (termin� par un /)');
define('_SETTINGS_DIRS',		'R�pertoires Nucleus');
define('_SETTINGS_MEDIADIR',		'R�pertoire media');
define('_SETTINGS_SEECONFIGPHP',	'(voir config.php)');
define('_SETTINGS_MEDIAURL',		'URL du repertoire media (termin� par un /)');
define('_SETTINGS_ALLOWUPLOAD',		'Autoriser le t�l�chargement ascendant de fichier?');
define('_SETTINGS_ALLOWUPLOADTYPES',	'Indiquer les extensions de fichier autoris�es');
define('_SETTINGS_CHANGELOGIN',		'Autoriser les participants � changer de login/mot de passe?');
define('_SETTINGS_COOKIES_TITLE',	'Param�tres des cookies');
define('_SETTINGS_COOKIELIFE',		'Dur�e de vie du cookie de connexion');
define('_SETTINGS_COOKIESESSION',	'Cookies de session');
define('_SETTINGS_COOKIEMONTH',		'Dur�e de vie d\'un mois');
define('_SETTINGS_COOKIEPATH',		'Chemin du cookie (utilisateur averti)');
define('_SETTINGS_COOKIEDOMAIN',	'Domaine du cookie (utilisateur averti)');
define('_SETTINGS_COOKIESECURE',	'Cookie de s�curit� (utilisateur averti)');
define('_SETTINGS_LASTVISIT',		'Garder les cookies de la derni�re visite');
define('_SETTINGS_ALLOWCREATE',		'Autoriser les visiteurs � cr�er un compte');
define('_SETTINGS_NEWLOGIN',		'Connexion autoris�e pour les comptes cr��s par des utilisateurs');
define('_SETTINGS_NEWLOGIN2',		'(ne vaut que pour les comptes r�cemment cr��s)');
define('_SETTINGS_MEMBERMSGS',		'Autoriser les services de participant � participant');
define('_SETTINGS_LANGUAGE',		'Langue par d�faut');
define('_SETTINGS_DISABLESITE',		'D�sactiver le site');
define('_SETTINGS_DBLOGIN',		'mySQL Login &amp; Database');
define('_SETTINGS_UPDATE',		'Mettre � jour les r�glages');
define('_SETTINGS_UPDATE_BTN',		'Mettre � jour');
define('_SETTINGS_DISABLEJS',		'D�sactiver la barre d\'outils JavaScript');
define('_SETTINGS_MEDIA',		'Param�tres de t�l�chargement de m�dias');
define('_SETTINGS_MEDIAPREFIX',		'Pr�fixer le nom des fichiers avec la date');
define('_SETTINGS_MEMBERS',		'R�glages des participants');

// bans
define('_BAN_TITLE',			'Liste des exclusions pour');
define('_BAN_NONE',			'Pas d\'exclusion pour ce blog');
define('_BAN_NEW_TITLE',		'Ajouter une exclusion');
define('_BAN_NEW_TEXT',			'Ajouter une exclusion maintenant');
define('_BAN_REMOVE_TITLE',		'Retirer une exclusion');
define('_BAN_IPRANGE',			'Rangs d\'IP');
define('_BAN_BLOGS',			'Quels blogs?');
define('_BAN_DELETE_TITLE',		'Supprimer une exclusion');
define('_BAN_ALLBLOGS',			'Tous les blogs dont vous �tes administrateur.');
define('_BAN_REMOVED_TITLE',		'Exclusion supprim�e');
define('_BAN_REMOVED_TEXT',		'L\'exclusion a �t� supprim�e pour les blogs suivants:');
define('_BAN_ADD_TITLE',		'D�finir des exclusions');
define('_BAN_IPRANGE_TEXT',		'Choisissez le rang d\'IP que vous voulez bloquer. Moins il y aura de nombres, plus il y aura d\'IP bloqu�es.');
define('_BAN_BLOGS_TEXT',		'Vous pouvez choisir d\'exclure une IP pour un blog seulement ou pour tous ceux dont vous �tes admin. Choisissez ici.');
define('_BAN_REASON_TITLE',		'Motif');
define('_BAN_REASON_TEXT',		'Vous pouvez motiver l\'exclusion: La raison s\'affichera quand l\'IP concern�e essaiera d\'ajouter un commentaire ou un vote. Longueur max. 256 caract�res.');
define('_BAN_ADD_BTN',			'Exclure');

// LOGIN screen
define('_LOGIN_MESSAGE',		'Message');
define('_LOGIN_NAME',			'Nom');
define('_LOGIN_PASSWORD',		'Mot de passe');
define('_LOGIN_SHARED',			_LOGINFORM_SHARED);
define('_LOGIN_FORGOT',			'Mot de passe oubli�?');

// membermanagement
define('_MEMBERS_TITLE',		'Gestion des participants');
define('_MEMBERS_CURRENT',		'Participants actuels');
define('_MEMBERS_NEW',			'Nouveau participant');
define('_MEMBERS_DISPLAY',		'Nom affich�');
define('_MEMBERS_DISPLAY_INFO',		'(C\'est le nom que vous utilisez pour vous connecter)');
define('_MEMBERS_REALNAME',		'Nom');
define('_MEMBERS_PWD',			'Mot de passe');
define('_MEMBERS_REPPWD',		'R�p�ter le mot de passe');
define('_MEMBERS_EMAIL',		'Adresse email');
define('_MEMBERS_EMAIL_EDIT',		'(Quand vous changez d\'adresse email, un nouveau mot de passe est envoy� � cette adresse)');
define('_MEMBERS_URL',			'Adresse du site (URL)');
define('_MEMBERS_SUPERADMIN',		'Privil�ges de super admin');
define('_MEMBERS_CANLOGIN',		'Peut ouvrir une session comme admin');
define('_MEMBERS_NOTES',		'Notes');
define('_MEMBERS_NEW_BTN',		'Ajouter un participant');
define('_MEMBERS_EDIT',			'Modifier les participants');
define('_MEMBERS_EDIT_BTN',		'Modifier');
define('_MEMBERS_BACKTOOVERVIEW',	'Retour au sommaire des participants');
define('_MEMBERS_DEFLANG',		'Langue');
define('_MEMBERS_USESITELANG',		'- utiliser les r�glages du site -');

// List of blogs (TT = tooltip)
define('_BLOGLIST_TT_VISIT',		'Visiter le site');
define('_BLOGLIST_ADD',			'Ajouter un billet');
define('_BLOGLIST_TT_ADD',		'Ajouter un billet � ce blog');
define('_BLOGLIST_EDIT',		'Modifier/Supprimer les billets');
define('_BLOGLIST_TT_EDIT',		'');
define('_BLOGLIST_BMLET',		'Bookmarklet');
define('_BLOGLIST_TT_BMLET',		'');
define('_BLOGLIST_SETTINGS',		'Param�tres');
define('_BLOGLIST_TT_SETTINGS',		'Modifier r�glages ou g�rer �quipe');
define('_BLOGLIST_BANS',		'Exclusions');
define('_BLOGLIST_TT_BANS',		'Consulter, ajouter ou supprimer les exclusions IP');
define('_BLOGLIST_DELETE',		'Tout effacer');
define('_BLOGLIST_TT_DELETE',		'Effacer ce blog');

// OVERVIEW screen
define('_OVERVIEW_YRBLOGS',		'Vos blogs');
define('_OVERVIEW_YRDRAFTS',		'Vos brouillons');
define('_OVERVIEW_YRSETTINGS',		'Vos r�glages');
define('_OVERVIEW_GSETTINGS',		'R�glages d\'ensemble');
define('_OVERVIEW_NOBLOGS',		'Vous ne faites partie d\'aucune �quipe');
define('_OVERVIEW_NODRAFTS',		'Pas  de brouillon');
define('_OVERVIEW_EDITSETTINGS',	'Modifier vos r�glages...');
define('_OVERVIEW_BROWSEITEMS',		'Consulter vos billets...');
define('_OVERVIEW_BROWSECOMM',		'Consulter vos commentaires...');
define('_OVERVIEW_VIEWLOG',		'Consulter le journal des �v�nements...');
define('_OVERVIEW_MEMBERS',		'G�rer les participants...');
define('_OVERVIEW_NEWLOG',		'Cr�er un nouveau blog...');
define('_OVERVIEW_SETTINGS',		'Modifier les r�glages...');
define('_OVERVIEW_TEMPLATES',		'Modifier les mod�les...');
define('_OVERVIEW_SKINS',		'Modifier les habillages...');
define('_OVERVIEW_BACKUP',		'Sauvegarde/R�cup�ration...');

// ITEMLIST
define('_ITEMLIST_BLOG',		'Billets du blog'); 
define('_ITEMLIST_YOUR',		'Vos billets');

// Comments
define('_COMMENTS',			'Commentaires');
define('_NOCOMMENTS',			'Pas de commentaire pour ce billet');
define('_COMMENTS_YOUR',		'Vos commentaires');
define('_NOCOMMENTS_YOUR',		'Vous n\'avez pas �crit de commentaire');

// LISTS (general)
define('_LISTS_NOMORE',			'Rien de plus ou pas de r�sultat du tout');
define('_LISTS_PREV',			'Pr�c�dent');
define('_LISTS_NEXT',			'Suivant');
define('_LISTS_SEARCH',			'Rechercher');
define('_LISTS_CHANGE',			'Changer');
define('_LISTS_PERPAGE',		'billets/page');
define('_LISTS_ACTIONS',		'Actions');
define('_LISTS_DELETE',			'Supprimer');
define('_LISTS_EDIT',			'Modifier');
define('_LISTS_MOVE',			'D�placer');
define('_LISTS_CLONE',			'Dupliquer');
define('_LISTS_TITLE',			'Titre');
define('_LISTS_BLOG',			'Blog');
define('_LISTS_NAME',			'Nom');
define('_LISTS_DESC',			'Description');
define('_LISTS_TIME',			'Heure');
define('_LISTS_COMMENTS',		'Commentaires');
define('_LISTS_TYPE',			'Type');


// member list 
define('_LIST_MEMBER_NAME',		'Nom affich�');
define('_LIST_MEMBER_RNAME',		'Nom');
define('_LIST_MEMBER_ADMIN',		'Super admin? ');
define('_LIST_MEMBER_LOGIN',		'Peut se connecter? ');
define('_LIST_MEMBER_URL',		'Site');

// banlist
define('_LIST_BAN_IPRANGE',		'IP Range');
define('_LIST_BAN_REASON',		'Motif');

// actionlist
define('_LIST_ACTION_MSG',		'Message');

// commentlist
define('_LIST_COMMENT_BANIP',		'Exclure l\'IP');
define('_LIST_COMMENT_WHO',		'Auteur');
define('_LIST_COMMENT',			'Commentaire');
define('_LIST_COMMENT_HOST',		'H�te');

// itemlist
define('_LIST_ITEM_INFO',		'Info');
define('_LIST_ITEM_CONTENT',		'Titre et contenu');


// teamlist
define('_LIST_TEAM_ADMIN',		'Admin ');
define('_LIST_TEAM_CHADMIN',		'Changer l\'admin');

// edit comments
define('_EDITC_TITLE',			'Modifier les commentaires');
define('_EDITC_WHO',			'Auteur');
define('_EDITC_HOST',			'D\'o�?');
define('_EDITC_WHEN',			'Quand?');
define('_EDITC_TEXT',			'Contenu');
define('_EDITC_EDIT',			'Modifier le commentaire');
define('_EDITC_MEMBER',			'participant');
define('_EDITC_NONMEMBER',		'non participant');

// move item
define('_MOVE_TITLE',			'D�placer dans quel blog?');
define('_MOVE_BTN',			'D�placer le billet');

?>