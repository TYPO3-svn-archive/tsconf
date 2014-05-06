<?php

########################################################################
# Extension Manager/Repository config file for ext "tsconf".
#
# Auto generated 20-03-2012 01:01
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TSconfig Pages and Users by extManager',
	'description' => 'Configure the TSconfig for your pages and users with the mouse! tsconf offers the eight most commonly used porperties like page tree uids, activated extended view, activated clipboard, activated admin panel and cache management for editors among others.',
	'category' => 'be',
	'shy' => 0,
	'version' => '1.4.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dirk Wildt - Die Netzmacher GbR',
	'author_email' => 'http://wildt.at.die-netzmacher.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:79:{s:9:"ChangeLog";s:4:"d026";s:21:"ext_conf_template.txt";s:4:"2c5a";s:12:"ext_icon.gif";s:4:"cf75";s:17:"ext_localconf.php";s:4:"0bfd";s:14:"ext_tables.php";s:4:"adda";s:22:"locallang_tsConfig.php";s:4:"6e6e";s:30:"pageTSconfig_tceform_pages.txt";s:4:"1dfc";s:34:"pageTSconfig_tceform_ttcontent.txt";s:4:"d1b0";s:41:"pageTSconfig_weblayout_menu_functions.txt";s:4:"877c";s:38:"pageTSconfig_weblist_enablebuttons.txt";s:4:"b5f8";s:27:"userTSconfig_adminPanel.txt";s:4:"4be4";s:39:"userTSconfig_filelist_enablebuttons.txt";s:4:"5a62";s:30:"userTSconfig_options_cache.txt";s:4:"a2b3";s:36:"userTSconfig_options_pagetreeuid.txt";s:4:"a032";s:14:"doc/manual.pdf";s:4:"51e6";s:14:"doc/manual.sxw";s:4:"1f18";s:30:"ext_icons/application-exit.png";s:4:"f968";s:33:"ext_icons/application-rss+xml.png";s:4:"faf3";s:38:"ext_icons/applications-development.png";s:4:"345f";s:35:"ext_icons/applications-internet.png";s:4:"ce2b";s:24:"ext_icons/call-start.png";s:4:"ce14";s:23:"ext_icons/call-stop.png";s:4:"7d85";s:26:"ext_icons/camera-photo.png";s:4:"b0e4";s:25:"ext_icons/chronometer.png";s:4:"0183";s:24:"ext_icons/code-class.png";s:4:"cf37";s:26:"ext_icons/code-context.png";s:4:"a069";s:23:"ext_icons/configure.png";s:4:"0180";s:27:"ext_icons/dialog-cancel.png";s:4:"99c7";s:26:"ext_icons/dialog-close.png";s:4:"3581";s:29:"ext_icons/dialog-ok-apply.png";s:4:"d14c";s:29:"ext_icons/dialog-password.png";s:4:"c74a";s:23:"ext_icons/edit-bomb.png";s:4:"56cd";s:29:"ext_icons/emblem-favorite.png";s:4:"8e9e";s:30:"ext_icons/emblem-important.png";s:4:"97f4";s:24:"ext_icons/flag-black.png";s:4:"a049";s:23:"ext_icons/flag-blue.png";s:4:"4434";s:24:"ext_icons/flag-green.png";s:4:"6420";s:22:"ext_icons/flag-red.png";s:4:"dbf9";s:25:"ext_icons/flag-yellow.png";s:4:"c21e";s:25:"ext_icons/folder-blue.png";s:4:"7952";s:29:"ext_icons/folder-bookmark.png";s:4:"f035";s:26:"ext_icons/folder-brown.png";s:4:"6066";s:25:"ext_icons/folder-cyan.png";s:4:"df95";s:32:"ext_icons/folder-development.png";s:4:"5396";s:30:"ext_icons/folder-documents.png";s:4:"8a63";s:30:"ext_icons/folder-downloads.png";s:4:"88f4";s:30:"ext_icons/folder-favorites.png";s:4:"b2df";s:26:"ext_icons/folder-green.png";s:4:"f1bd";s:25:"ext_icons/folder-grey.png";s:4:"6c24";s:30:"ext_icons/folder-important.png";s:4:"f7ab";s:27:"ext_icons/folder-locked.png";s:4:"debd";s:27:"ext_icons/folder-orange.png";s:4:"0a98";s:24:"ext_icons/folder-red.png";s:4:"e72a";s:27:"ext_icons/folder-remote.png";s:4:"0765";s:26:"ext_icons/folder-sound.png";s:4:"642b";s:24:"ext_icons/folder-tar.png";s:4:"bb73";s:24:"ext_icons/folder-txt.png";s:4:"9f17";s:26:"ext_icons/folder-video.png";s:4:"b7c5";s:27:"ext_icons/folder-violet.png";s:4:"768c";s:27:"ext_icons/folder-yellow.png";s:4:"a96c";s:20:"ext_icons/folder.png";s:4:"b396";s:30:"ext_icons/games-highscores.png";s:4:"87d6";s:23:"ext_icons/help-hint.png";s:4:"6525";s:22:"ext_icons/home-mdk.png";s:4:"3a17";s:21:"ext_icons/library.png";s:4:"1606";s:38:"ext_icons/media-optical-recordable.png";s:4:"d57d";s:29:"ext_icons/office-calendar.png";s:4:"3820";s:32:"ext_icons/preferences-system.png";s:4:"73a5";s:18:"ext_icons/roll.png";s:4:"42e8";s:27:"ext_icons/security-high.png";s:4:"2459";s:26:"ext_icons/security-low.png";s:4:"fe8b";s:29:"ext_icons/security-medium.png";s:4:"5fb9";s:21:"ext_icons/speaker.png";s:4:"cdb5";s:28:"ext_icons/status_unknown.png";s:4:"b439";s:22:"ext_icons/template.gif";s:4:"2f14";s:27:"ext_icons/tool-animator.png";s:4:"d90e";s:24:"ext_icons/user-trash.png";s:4:"52b4";s:39:"ext_icons/view-conversation-balloon.png";s:4:"6b6c";s:25:"ext_icons/view-filter.png";s:4:"4d5a";}',
	'suggests' => array(
	),
);

?>