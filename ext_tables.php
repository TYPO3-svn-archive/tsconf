<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}




////////////////////////////////////////////////////////////////////////////
//
// INDEX
// Set TYPO3 version
// Configuration by the extension manager
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// Configuration by the extension manager

$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'tsconf' ] );



////////////////////////////////////////////////////////////////////////////
//
// Add pagetree icons

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-exit', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/application-exit.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-rss', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/application-rss+xml.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-intrnt', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/applications-internet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'calendar', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/office-calendar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'animator', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/tool-animator.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'balloon', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/view-conversation-balloon.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'filter', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/view-filter.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code', 'code-class', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/code-class.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code', 'code-cntxt', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/code-context.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'cam-photo', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/camera-photo.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'media-dvd', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/media-optical-recordable.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'speaker', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/speaker.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'call-start', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/call-start.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'call-stop', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/call-stop.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-cancel', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/dialog-cancel.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-close', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/dialog-close.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-ok', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/dialog-ok-apply.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-passwd', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/dialog-password.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'help', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/help-hint.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem', 'favorite', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/emblem-favorite.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem', 'important', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/emblem-important.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_black', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/flag-black.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_blue', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/flag-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_green', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/flag-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_red', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/flag-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_yellow', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/flag-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_brown', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-brown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_green', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_cyan', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-cyan.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_blue', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_violet', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-violet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_red', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_orange', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-orange.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_yellow', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_bkmrk', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-bookmark.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_dev', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_docs', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-documents.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_down', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-downloads.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_fvrts', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-favorites.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_imprtt', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-important.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_locked', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-locked.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_remote', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-remote.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_sound', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-sound.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_tar', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-tar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_txt', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-txt.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_video', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/folder-video.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games', 'highscore', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/games-highscores.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games', 'roll', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/roll.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'jQuery', 'jquery', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/jQuery.gif' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Library', 'library', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/library.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'appl-dev', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/applications-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'chronom', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/chronometer.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'configure', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/configure.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'bomb', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/edit-bomb.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'home', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/home-mdk.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'prefrncs', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/preferences-system.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-high', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/security-high.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-low', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/security-low.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-mdm', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/security-medium.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'stat-unknw', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/status_unknown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'trash', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/user-trash.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'belayout', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/backend_layout.gif' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'tsconf', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/template.gif' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'typo3', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/typo3.png' );


// SWITCH  : TYPO3 version
switch ( true )
{
  case( $typo3Version < 4004000 ):
    $ICON_TYPES[ 'pages' ] = array( 'flg_black' => $extIconPath . 'flag-black.png' );
    $ICON_TYPES[ 'pages' ] = array( 'appl-exit' => $extIconPath . 'application-exit.png' );
    $ICON_TYPES[ 'pages' ] = array( 'appl-rss' => $extIconPath . 'application-rss+xml.png' );
    $ICON_TYPES[ 'pages' ] = array( 'appl-intrnt' => $extIconPath . 'applications-internet.png' );
    $ICON_TYPES[ 'pages' ] = array( 'calendar' => $extIconPath . 'office-calendar.png' );
    $ICON_TYPES[ 'pages' ] = array( 'animator' => $extIconPath . 'tool-animator.png' );
    $ICON_TYPES[ 'pages' ] = array( 'balloon' => $extIconPath . 'view-conversation-balloon.png' );
    $ICON_TYPES[ 'pages' ] = array( 'filter' => $extIconPath . 'view-filter.png' );
    $ICON_TYPES[ 'pages' ] = array( 'code-class' => $extIconPath . 'code-class.png' );
    $ICON_TYPES[ 'pages' ] = array( 'code-cntxt' => $extIconPath . 'code-context.png' );
    $ICON_TYPES[ 'pages' ] = array( 'cam-photo' => $extIconPath . 'camera-photo.png' );
    $ICON_TYPES[ 'pages' ] = array( 'media-dvd' => $extIconPath . 'media-optical-recordable.png' );
    $ICON_TYPES[ 'pages' ] = array( 'speaker' => $extIconPath . 'speaker.png' );
    $ICON_TYPES[ 'pages' ] = array( 'call-start' => $extIconPath . 'call-start.png' );
    $ICON_TYPES[ 'pages' ] = array( 'call-stop' => $extIconPath . 'call-stop.png' );
    $ICON_TYPES[ 'pages' ] = array( 'dlg-cancel' => $extIconPath . 'dialog-cancel.png' );
    $ICON_TYPES[ 'pages' ] = array( 'dlg-close' => $extIconPath . 'dialog-close.png' );
    $ICON_TYPES[ 'pages' ] = array( 'dlg-ok' => $extIconPath . 'dialog-ok-apply.png' );
    $ICON_TYPES[ 'pages' ] = array( 'dlg-passwd' => $extIconPath . 'dialog-password.png' );
    $ICON_TYPES[ 'pages' ] = array( 'help' => $extIconPath . 'help-hint.png' );
    $ICON_TYPES[ 'pages' ] = array( 'favorite' => $extIconPath . 'emblem-favorite.png' );
    $ICON_TYPES[ 'pages' ] = array( 'important' => $extIconPath . 'emblem-important.png' );
    $ICON_TYPES[ 'pages' ] = array( 'highscore' => $extIconPath . 'games-highscores.png' );
    $ICON_TYPES[ 'pages' ] = array( 'roll' => $extIconPath . 'roll.png' );
    $ICON_TYPES[ 'pages' ] = array( 'appl-dev' => $extIconPath . 'applications-development.png' );
    $ICON_TYPES[ 'pages' ] = array( 'chronom' => $extIconPath . 'chronometer.png' );
    $ICON_TYPES[ 'pages' ] = array( 'configure' => $extIconPath . 'configure.png' );
    $ICON_TYPES[ 'pages' ] = array( 'bomb' => $extIconPath . 'edit-bomb.png' );
    $ICON_TYPES[ 'pages' ] = array( 'home' => $extIconPath . 'home-mdk.png' );
    $ICON_TYPES[ 'pages' ] = array( 'prefrncs' => $extIconPath . 'preferences-system.png' );
    $ICON_TYPES[ 'pages' ] = array( 'sec-high' => $extIconPath . 'security-high.png' );
    $ICON_TYPES[ 'pages' ] = array( 'sec-low' => $extIconPath . 'security-low.png' );
    $ICON_TYPES[ 'pages' ] = array( 'sec-mdm' => $extIconPath . 'security-medium.png' );
    $ICON_TYPES[ 'pages' ] = array( 'stat-unknw' => $extIconPath . 'status_unknown.png' );
    $ICON_TYPES[ 'pages' ] = array( 'trash' => $extIconPath . 'user-trash.png' );

    $ICON_TYPES[ 'pages' ] = array( 'flg_black' => $extIconPath . 'flag-black.png' );
    $ICON_TYPES[ 'pages' ] = array( 'flg_blue' => $extIconPath . 'flag-blue.png' );
    $ICON_TYPES[ 'pages' ] = array( 'flg_green' => $extIconPath . 'flag-green.png' );
    $ICON_TYPES[ 'pages' ] = array( 'flg_red' => $extIconPath . 'flag-red.png' );
    $ICON_TYPES[ 'pages' ] = array( 'flg_yellow' => $extIconPath . 'flag-yellow.png' );

    $ICON_TYPES[ 'pages' ] = array( 'fld_blue' => $extIconPath . 'folder-blue.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_bkmrk' => $extIconPath . 'folder-bookmark.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_brown' => $extIconPath . 'folder-brown.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_cyan' => $extIconPath . 'folder-cyan.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_dev' => $extIconPath . 'folder-development.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_docs' => $extIconPath . 'folder-documents.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_down' => $extIconPath . 'folder-downloads.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_fvrts' => $extIconPath . 'folder-favorites.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_green' => $extIconPath . 'folder-green.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_imprtt' => $extIconPath . 'folder-important.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_locked' => $extIconPath . 'folder-locked.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_orange' => $extIconPath . 'folder-orange.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld' => $extIconPath . 'folder.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_red' => $extIconPath . 'folder-red.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_remote' => $extIconPath . 'folder-remote.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_sound' => $extIconPath . 'folder-sound.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_tar' => $extIconPath . 'folder-tar.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_txt' => $extIconPath . 'folder-txt.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_video' => $extIconPath . 'folder-video.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_violet' => $extIconPath . 'folder-violet.png' );
    $ICON_TYPES[ 'pages' ] = array( 'fld_yellow' => $extIconPath . 'folder-yellow.png' );

    $ICON_TYPES[ 'pages' ] = array( 'jquery' => $extIconPath . 'jQuery.gif' );

    $ICON_TYPES[ 'pages' ] = array( 'library' => $extIconPath . 'library.png' );

    $ICON_TYPES[ 'pages' ] = array( 'belayout' => $extIconPath . 'backend_layout.gif' );
    $ICON_TYPES[ 'pages' ] = array( 'tsconf' => $extIconPath . 'template.gif' );
    $ICON_TYPES[ 'pages' ] = array( 'typo3' => $extIconPath . 'typo3.png' );
    break;
  default:
    // #34858, 120320, dwildt
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-appl-exit', '../typo3conf/ext/tsconf/ext_icons/application-exit.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-appl-rss', '../typo3conf/ext/tsconf/ext_icons/application-rss+xml.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-appl-intrnt', '../typo3conf/ext/tsconf/ext_icons/applications-internet.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-calendar', '../typo3conf/ext/tsconf/ext_icons/office-calendar.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-animator', '../typo3conf/ext/tsconf/ext_icons/tool-animator.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-balloon', '../typo3conf/ext/tsconf/ext_icons/view-conversation-balloon.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-filter', '../typo3conf/ext/tsconf/ext_icons/view-filter.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-code-class', '../typo3conf/ext/tsconf/ext_icons/code-class.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-code-cntxt', '../typo3conf/ext/tsconf/ext_icons/code-context.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-cam-photo', '../typo3conf/ext/tsconf/ext_icons/camera-photo.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-media-dvd', '../typo3conf/ext/tsconf/ext_icons/media-optical-recordable.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-speaker', '../typo3conf/ext/tsconf/ext_icons/speaker.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-call-start', '../typo3conf/ext/tsconf/ext_icons/call-start.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-call-stop', '../typo3conf/ext/tsconf/ext_icons/call-stop.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-dlg-cancel', '../typo3conf/ext/tsconf/ext_icons/dialog-cancel.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-dlg-close', '../typo3conf/ext/tsconf/ext_icons/dialog-close.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-dlg-ok', '../typo3conf/ext/tsconf/ext_icons/dialog-ok-apply.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-dlg-passwd', '../typo3conf/ext/tsconf/ext_icons/dialog-password.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-help', '../typo3conf/ext/tsconf/ext_icons/help-hint.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-favorite', '../typo3conf/ext/tsconf/ext_icons/emblem-favorite.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-important', '../typo3conf/ext/tsconf/ext_icons/emblem-important.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-highscore', '../typo3conf/ext/tsconf/ext_icons/games-highscores.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-roll', '../typo3conf/ext/tsconf/ext_icons/roll.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-appl-dev', '../typo3conf/ext/tsconf/ext_icons/applications-development.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-chronom', '../typo3conf/ext/tsconf/ext_icons/chronometer.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-configure', '../typo3conf/ext/tsconf/ext_icons/configure.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-bomb', '../typo3conf/ext/tsconf/ext_icons/edit-bomb.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-home', '../typo3conf/ext/tsconf/ext_icons/home-mdk.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-prefrncs', '../typo3conf/ext/tsconf/ext_icons/preferences-system.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-sec-high', '../typo3conf/ext/tsconf/ext_icons/security-high.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-sec-low', '../typo3conf/ext/tsconf/ext_icons/security-low.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-sec-mdm', '../typo3conf/ext/tsconf/ext_icons/security-medium.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-stat-unknw', '../typo3conf/ext/tsconf/ext_icons/status_unknown.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-trash', '../typo3conf/ext/tsconf/ext_icons/user-trash.png' );

    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-flg_black', '../typo3conf/ext/tsconf/ext_icons/flag-black.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-flg_blue', '../typo3conf/ext/tsconf/ext_icons/flag-blue.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-flg_green', '../typo3conf/ext/tsconf/ext_icons/flag-green.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-flg_red', '../typo3conf/ext/tsconf/ext_icons/flag-red.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-flg_yellow', '../typo3conf/ext/tsconf/ext_icons/flag-yellow.png' );

    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_blue', '../typo3conf/ext/tsconf/ext_icons/folder-blue.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_bkmrk', '../typo3conf/ext/tsconf/ext_icons/folder-bookmark.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_brown', '../typo3conf/ext/tsconf/ext_icons/folder-brown.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_cyan', '../typo3conf/ext/tsconf/ext_icons/folder-cyan.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_dev', '../typo3conf/ext/tsconf/ext_icons/folder-development.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_docs', '../typo3conf/ext/tsconf/ext_icons/folder-documents.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_down', '../typo3conf/ext/tsconf/ext_icons/folder-downloads.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_fvrts', '../typo3conf/ext/tsconf/ext_icons/folder-favorites.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_green', '../typo3conf/ext/tsconf/ext_icons/folder-green.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_imprtt', '../typo3conf/ext/tsconf/ext_icons/folder-important.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_locked', '../typo3conf/ext/tsconf/ext_icons/folder-locked.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_orange', '../typo3conf/ext/tsconf/ext_icons/folder-orange.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld', '../typo3conf/ext/tsconf/ext_icons/folder.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_red', '../typo3conf/ext/tsconf/ext_icons/folder-red.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_remote', '../typo3conf/ext/tsconf/ext_icons/folder-remote.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_sound', '../typo3conf/ext/tsconf/ext_icons/folder-sound.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_tar', '../typo3conf/ext/tsconf/ext_icons/folder-tar.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_txt', '../typo3conf/ext/tsconf/ext_icons/folder-txt.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_video', '../typo3conf/ext/tsconf/ext_icons/folder-video.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_violet', '../typo3conf/ext/tsconf/ext_icons/folder-violet.png' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-fld_yellow', '../typo3conf/ext/tsconf/ext_icons/folder-yellow.png' );

    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-jquery', '../typo3conf/ext/tsconf/ext_icons/jQuery.gif' );

    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-library', '../typo3conf/ext/tsconf/ext_icons/library.png' );

    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-belayout', '../typo3conf/ext/tsconf/ext_icons/backend_layout.gif' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-tsconf', '../typo3conf/ext/tsconf/ext_icons/template.gif' );
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-typo3', '../typo3conf/ext/tsconf/ext_icons/typo3.png' );

    break;
}
// SWITCH  : TYPO3 version
// Add pagetree icons
////////////////////////////////////////////////////////////////////////////
//
// improve tt_content
// #62476, 141026, dwildt, +
switch ( $confArr[ 'tca_ttcontentimages' ] )
{
  case('Disabled'):
    break;
  case('Bootstrap'):
  case('Default (recommended)'):
  default:
    \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'tt_content' );
    // default: $TCA['tt_content']['columns']['imageheight']['config']['eval'] = 'int';
    unset( $TCA[ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'eval' ] );
    unset( $TCA[ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'eval' ] );
    break;
}
switch ( $confArr[ 'tca_ttcontentimages' ] )
{
  case('Disabled'):
    break;
  case('Bootstrap'):
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '0' ] = 12;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '1' ] = 12;
    break;
  case('Default (recommended)'):
  default:
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '8' ][ '0' ] = 8;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '8' ][ '1' ] = 8;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '9' ][ '0' ] = 9;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '9' ][ '1' ] = 9;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '10' ][ '0' ] = 10;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '10' ][ '1' ] = 10;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '11' ][ '0' ] = 11;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '11' ][ '1' ] = 11;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '0' ] = 12;
    $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '1' ] = 12;
    break;
}



// improve tt_content
////////////////////////////////////////////////////////////////////////////
//
// improve sys_template

if ( $confArr[ 'tca_systemplate' ] )
{
  // #i0006, 141208, dwildt, -
  // Breaking: #61785 - loadTCA function in GeneralUtility removed
  //\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'sys_template' );
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'selectedListStyle' ] = 'width:360px;';
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'itemListStyle' ] = 'width:360px;';
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'size' ] = '40';
}
// improve sys_template
?>