<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}




  ////////////////////////////////////////////////////////////////////////////
  //
  // INDEX

  // Set TYPO3 version
  // Add pagetree icons



  ////////////////////////////////////////////////////////////////////////////
  //
  // Set TYPO3 version

  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;
  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
  // Set TYPO3 version



  ////////////////////////////////////////////////////////////////////////////
  //
  // Add pagetree icons

$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-exit', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-exit.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-rss', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-rss+xml.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-intrnt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-internet.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'calendar', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/office-calendar.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'animator', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/tool-animator.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'balloon', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-conversation-balloon.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'filter', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-filter.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Code', 'code-class', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-class.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Code', 'code-cntxt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-context.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'cam-photo', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/camera-photo.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'media-dvd', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/media-optical-recordable.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'speaker', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/speaker.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'call-start', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-start.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'call-stop', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-stop.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-cancel', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-cancel.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-close', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-close.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-ok', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-ok-apply.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-passwd', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-password.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'help', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/help-hint.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Emblem', 'favorite', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-favorite.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Emblem', 'important', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-important.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_black', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-black.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_blue', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-blue.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_green', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-green.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_red', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-red.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_yellow', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-yellow.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_brown', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-brown.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_green', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-green.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_cyan', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-cyan.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_blue', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-blue.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_violet', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-violet.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_red', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-red.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_orange', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-orange.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_yellow', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-yellow.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_bkmrk', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-bookmark.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_dev', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-development.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_docs', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-documents.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_down', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-downloads.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_fvrts', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-favorites.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_imprtt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-important.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_locked', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-locked.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_remote', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-remote.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_sound', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-sound.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_tar', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-tar.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_txt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-txt.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_video', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-video.png');

$TCA['pages']['columns']['module']['config']['items'][] = array('Games', 'highscore', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/games-highscores.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Games', 'roll', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/roll.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Library', 'library', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/library.png');

$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'appl-dev', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-development.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'chronom', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/chronometer.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'configure', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/configure.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'bomb', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/edit-bomb.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'home', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/home-mdk.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'prefrncs', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/preferences-system.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-high', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-high.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-low', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-low.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-mdm', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-medium.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'stat-unknw', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/status_unknown.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'trash', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/user-trash.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Template', 'tsconf', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');


  // SWITCH  : TYPO3 version
switch( true )
{
  case( $typo3Version < 4004000 ):
    $ICON_TYPES['pages'] = array('flg_black' => $extIconPath . 'flag-black.png');
    $ICON_TYPES['pages'] = array('appl-exit' => $extIconPath . 'application-exit.png');
    $ICON_TYPES['pages'] = array('appl-rss' => $extIconPath . 'application-rss+xml.png');
    $ICON_TYPES['pages'] = array('appl-intrnt' => $extIconPath . 'applications-internet.png');
    $ICON_TYPES['pages'] = array('calendar' => $extIconPath . 'office-calendar.png');
    $ICON_TYPES['pages'] = array('animator' => $extIconPath . 'tool-animator.png');
    $ICON_TYPES['pages'] = array('balloon' => $extIconPath . 'view-conversation-balloon.png');
    $ICON_TYPES['pages'] = array('filter' => $extIconPath . 'view-filter.png');
    $ICON_TYPES['pages'] = array('code-class' => $extIconPath . 'code-class.png');
    $ICON_TYPES['pages'] = array('code-cntxt' => $extIconPath . 'code-context.png');
    $ICON_TYPES['pages'] = array('cam-photo' => $extIconPath . 'camera-photo.png');
    $ICON_TYPES['pages'] = array('media-dvd' => $extIconPath . 'media-optical-recordable.png');
    $ICON_TYPES['pages'] = array('speaker' => $extIconPath . 'speaker.png');
    $ICON_TYPES['pages'] = array('call-start' => $extIconPath . 'call-start.png');
    $ICON_TYPES['pages'] = array('call-stop' => $extIconPath . 'call-stop.png');
    $ICON_TYPES['pages'] = array('dlg-cancel' => $extIconPath . 'dialog-cancel.png');
    $ICON_TYPES['pages'] = array('dlg-close' => $extIconPath . 'dialog-close.png');
    $ICON_TYPES['pages'] = array('dlg-ok' => $extIconPath . 'dialog-ok-apply.png');
    $ICON_TYPES['pages'] = array('dlg-passwd' => $extIconPath . 'dialog-password.png');
    $ICON_TYPES['pages'] = array('help' => $extIconPath . 'help-hint.png');
    $ICON_TYPES['pages'] = array('favorite' => $extIconPath . 'emblem-favorite.png');
    $ICON_TYPES['pages'] = array('important' => $extIconPath . 'emblem-important.png');
    $ICON_TYPES['pages'] = array('highscore' => $extIconPath . 'games-highscores.png');
    $ICON_TYPES['pages'] = array('roll' => $extIconPath . 'roll.png');
    $ICON_TYPES['pages'] = array('appl-dev' => $extIconPath . 'applications-development.png');
    $ICON_TYPES['pages'] = array('chronom' => $extIconPath . 'chronometer.png');
    $ICON_TYPES['pages'] = array('configure' => $extIconPath . 'configure.png');
    $ICON_TYPES['pages'] = array('bomb' => $extIconPath . 'edit-bomb.png');
    $ICON_TYPES['pages'] = array('home' => $extIconPath . 'home-mdk.png');
    $ICON_TYPES['pages'] = array('prefrncs' => $extIconPath . 'preferences-system.png');
    $ICON_TYPES['pages'] = array('sec-high' => $extIconPath . 'security-high.png');
    $ICON_TYPES['pages'] = array('sec-low' => $extIconPath . 'security-low.png');
    $ICON_TYPES['pages'] = array('sec-mdm' => $extIconPath . 'security-medium.png');
    $ICON_TYPES['pages'] = array('stat-unknw' => $extIconPath . 'status_unknown.png');
    $ICON_TYPES['pages'] = array('trash' => $extIconPath . 'user-trash.png');

    $ICON_TYPES['pages'] = array('flg_black' => $extIconPath . 'flag-black.png');
    $ICON_TYPES['pages'] = array('flg_blue' => $extIconPath . 'flag-blue.png');
    $ICON_TYPES['pages'] = array('flg_green' => $extIconPath . 'flag-green.png');
    $ICON_TYPES['pages'] = array('flg_red' => $extIconPath . 'flag-red.png');
    $ICON_TYPES['pages'] = array('flg_yellow' => $extIconPath . 'flag-yellow.png');

    $ICON_TYPES['pages'] = array('fld_blue' => $extIconPath . 'folder-blue.png');
    $ICON_TYPES['pages'] = array('fld_bkmrk' => $extIconPath . 'folder-bookmark.png');
    $ICON_TYPES['pages'] = array('fld_brown' => $extIconPath . 'folder-brown.png');
    $ICON_TYPES['pages'] = array('fld_cyan' => $extIconPath . 'folder-cyan.png');
    $ICON_TYPES['pages'] = array('fld_dev' => $extIconPath . 'folder-development.png');
    $ICON_TYPES['pages'] = array('fld_docs' => $extIconPath . 'folder-documents.png');
    $ICON_TYPES['pages'] = array('fld_down' => $extIconPath . 'folder-downloads.png');
    $ICON_TYPES['pages'] = array('fld_fvrts' => $extIconPath . 'folder-favorites.png');
    $ICON_TYPES['pages'] = array('fld_green' => $extIconPath . 'folder-green.png');
    $ICON_TYPES['pages'] = array('fld_imprtt' => $extIconPath . 'folder-important.png');
    $ICON_TYPES['pages'] = array('fld_locked' => $extIconPath . 'folder-locked.png');
    $ICON_TYPES['pages'] = array('fld_orange' => $extIconPath . 'folder-orange.png');
    $ICON_TYPES['pages'] = array('fld' => $extIconPath . 'folder.png');
    $ICON_TYPES['pages'] = array('fld_red' => $extIconPath . 'folder-red.png');
    $ICON_TYPES['pages'] = array('fld_remote' => $extIconPath . 'folder-remote.png');
    $ICON_TYPES['pages'] = array('fld_sound' => $extIconPath . 'folder-sound.png');
    $ICON_TYPES['pages'] = array('fld_tar' => $extIconPath . 'folder-tar.png');
    $ICON_TYPES['pages'] = array('fld_txt' => $extIconPath . 'folder-txt.png');
    $ICON_TYPES['pages'] = array('fld_video' => $extIconPath . 'folder-video.png');
    $ICON_TYPES['pages'] = array('fld_violet' => $extIconPath . 'folder-violet.png');
    $ICON_TYPES['pages'] = array('fld_yellow' => $extIconPath . 'folder-yellow.png');

    $ICON_TYPES['pages'] = array('library' => $extIconPath . 'library.png');
    $ICON_TYPES['pages'] = array('tsconf' => $extIconPath . 'template.gif');
    break;
  default:
    // #34858, 120320, dwildt
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-appl-exit', '../typo3conf/ext/tsconf/ext_icons/application-exit.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-appl-rss', '../typo3conf/ext/tsconf/ext_icons/application-rss+xml.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-appl-intrnt', '../typo3conf/ext/tsconf/ext_icons/applications-internet.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-calendar', '../typo3conf/ext/tsconf/ext_icons/office-calendar.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-animator', '../typo3conf/ext/tsconf/ext_icons/tool-animator.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-balloon', '../typo3conf/ext/tsconf/ext_icons/view-conversation-balloon.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-filter', '../typo3conf/ext/tsconf/ext_icons/view-filter.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-code-class', '../typo3conf/ext/tsconf/ext_icons/code-class.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-code-cntxt', '../typo3conf/ext/tsconf/ext_icons/code-context.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-cam-photo', '../typo3conf/ext/tsconf/ext_icons/camera-photo.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-media-dvd', '../typo3conf/ext/tsconf/ext_icons/media-optical-recordable.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-speaker', '../typo3conf/ext/tsconf/ext_icons/speaker.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-call-start', '../typo3conf/ext/tsconf/ext_icons/call-start.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-call-stop', '../typo3conf/ext/tsconf/ext_icons/call-stop.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-dlg-cancel', '../typo3conf/ext/tsconf/ext_icons/dialog-cancel.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-dlg-close', '../typo3conf/ext/tsconf/ext_icons/dialog-close.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-dlg-ok', '../typo3conf/ext/tsconf/ext_icons/dialog-ok-apply.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-dlg-passwd', '../typo3conf/ext/tsconf/ext_icons/dialog-password.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-help', '../typo3conf/ext/tsconf/ext_icons/help-hint.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-favorite', '../typo3conf/ext/tsconf/ext_icons/emblem-favorite.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-important', '../typo3conf/ext/tsconf/ext_icons/emblem-important.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-highscore', '../typo3conf/ext/tsconf/ext_icons/games-highscores.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-roll', '../typo3conf/ext/tsconf/ext_icons/roll.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-appl-dev', '../typo3conf/ext/tsconf/ext_icons/applications-development.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-chronom', '../typo3conf/ext/tsconf/ext_icons/chronometer.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-configure', '../typo3conf/ext/tsconf/ext_icons/configure.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-bomb', '../typo3conf/ext/tsconf/ext_icons/edit-bomb.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-home', '../typo3conf/ext/tsconf/ext_icons/home-mdk.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-prefrncs', '../typo3conf/ext/tsconf/ext_icons/preferences-system.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-sec-high', '../typo3conf/ext/tsconf/ext_icons/security-high.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-sec-low', '../typo3conf/ext/tsconf/ext_icons/security-low.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-sec-mdm', '../typo3conf/ext/tsconf/ext_icons/security-medium.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-stat-unknw', '../typo3conf/ext/tsconf/ext_icons/status_unknown.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-trash', '../typo3conf/ext/tsconf/ext_icons/user-trash.png');

    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_black', '../typo3conf/ext/tsconf/ext_icons/flag-black.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_blue', '../typo3conf/ext/tsconf/ext_icons/flag-blue.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_green', '../typo3conf/ext/tsconf/ext_icons/flag-green.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_red', '../typo3conf/ext/tsconf/ext_icons/flag-red.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_yellow', '../typo3conf/ext/tsconf/ext_icons/flag-yellow.png');

    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_blue', '../typo3conf/ext/tsconf/ext_icons/folder-blue.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_bkmrk', '../typo3conf/ext/tsconf/ext_icons/folder-bookmark.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_brown', '../typo3conf/ext/tsconf/ext_icons/folder-brown.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_cyan', '../typo3conf/ext/tsconf/ext_icons/folder-cyan.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_dev', '../typo3conf/ext/tsconf/ext_icons/folder-development.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_docs', '../typo3conf/ext/tsconf/ext_icons/folder-documents.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_down', '../typo3conf/ext/tsconf/ext_icons/folder-downloads.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_fvrts', '../typo3conf/ext/tsconf/ext_icons/folder-favorites.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_green', '../typo3conf/ext/tsconf/ext_icons/folder-green.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_imprtt', '../typo3conf/ext/tsconf/ext_icons/folder-important.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_locked', '../typo3conf/ext/tsconf/ext_icons/folder-locked.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_orange', '../typo3conf/ext/tsconf/ext_icons/folder-orange.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld', '../typo3conf/ext/tsconf/ext_icons/folder.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_red', '../typo3conf/ext/tsconf/ext_icons/folder-red.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_remote', '../typo3conf/ext/tsconf/ext_icons/folder-remote.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_sound', '../typo3conf/ext/tsconf/ext_icons/folder-sound.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_tar', '../typo3conf/ext/tsconf/ext_icons/folder-tar.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_txt', '../typo3conf/ext/tsconf/ext_icons/folder-txt.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_video', '../typo3conf/ext/tsconf/ext_icons/folder-video.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_violet', '../typo3conf/ext/tsconf/ext_icons/folder-violet.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_yellow', '../typo3conf/ext/tsconf/ext_icons/folder-yellow.png');

    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-library', '../typo3conf/ext/tsconf/ext_icons/library.png');
    t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-tsconf', '../typo3conf/ext/tsconf/ext_icons/template.gif');
    break;    
}
  // SWITCH  : TYPO3 version
  // Add pagetree icons

?>