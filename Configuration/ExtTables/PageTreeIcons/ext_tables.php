<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

$extIconPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icons/';

// Own Icons
// #66176, 150331, dwildt, +
if ( $confArr[ 'mytsconf.' ][ 'path' ] )
{
  $myTsconfPath = $confArr[ 'mytsconf.' ][ 'path' ];
  $myTsconfPath = trim( $myTsconfPath, '/' );
  $myFile = PATH_site . $myTsconfPath;
  if ( file_exists( $myFile ) )
  {
    require_once( $myFile );
  }
}

// Default Icons
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application animator', 'animator', $extIconPath . 'tool-animator.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application balloon', 'balloon', $extIconPath . 'view-conversation-balloon.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application calendar', 'calendar', $extIconPath . 'office-calendar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application exit', 'appl-exit', $extIconPath . 'application-exit.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application filter', 'filter', $extIconPath . 'view-filter.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application rss', 'appl-rss', $extIconPath . 'application-rss+xml.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application web', 'appl-intrnt', $extIconPath . 'applications-internet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code class', 'code-class', $extIconPath . 'code-class.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code context', 'code-cntxt', $extIconPath . 'code-context.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog call start', 'call-start', $extIconPath . 'call-start.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog call stop', 'call-stop', $extIconPath . 'call-stop.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog cancel', 'dlg-cancel', $extIconPath . 'dialog-cancel.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog close', 'dlg-close', $extIconPath . 'dialog-close.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem favorite', 'favorite', $extIconPath . 'emblem-favorite.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem important', 'important', $extIconPath . 'emblem-important.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog help', 'help', $extIconPath . 'help-hint.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device media recorder', 'media-dvd', $extIconPath . 'media-optical-recordable.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog ok', 'dlg-ok', $extIconPath . 'dialog-ok-apply.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog password', 'dlg-passwd', $extIconPath . 'dialog-password.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device photo', 'cam-photo', $extIconPath . 'camera-photo.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device speaker', 'speaker', $extIconPath . 'speaker.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag black', 'flg_black', $extIconPath . 'flag-black.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag blue', 'flg_blue', $extIconPath . 'flag-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag green', 'flg_green', $extIconPath . 'flag-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag red', 'flg_red', $extIconPath . 'flag-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag yellow', 'flg_yellow', $extIconPath . 'flag-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder default', 'fld', $extIconPath . 'folder.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder blue', 'fld_blue', $extIconPath . 'folder-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder brown', 'fld_brown', $extIconPath . 'folder-brown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder cyan', 'fld_cyan', $extIconPath . 'folder-cyan.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder green', 'fld_green', $extIconPath . 'folder-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder orange', 'fld_orange', $extIconPath . 'folder-orange.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder red', 'fld_red', $extIconPath . 'folder-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder violet', 'fld_violet', $extIconPath . 'folder-violet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder yellow', 'fld_yellow', $extIconPath . 'folder-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder bookmark ', 'fld_bkmrk', $extIconPath . 'folder-bookmark.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder development', 'fld_dev', $extIconPath . 'folder-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder documents', 'fld_docs', $extIconPath . 'folder-documents.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder downloads', 'fld_down', $extIconPath . 'folder-downloads.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder favorites', 'fld_fvrts', $extIconPath . 'folder-favorites.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder important', 'fld_imprtt', $extIconPath . 'folder-important.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder locked', 'fld_locked', $extIconPath . 'folder-locked.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder remote', 'fld_remote', $extIconPath . 'folder-remote.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder sound', 'fld_sound', $extIconPath . 'folder-sound.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder tar', 'fld_tar', $extIconPath . 'folder-tar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder txt', 'fld_txt', $extIconPath . 'folder-txt.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder video', 'fld_video', $extIconPath . 'folder-video.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games highscore', 'highscore', $extIconPath . 'games-highscores.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games roll', 'roll', $extIconPath . 'roll.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'jQuery', 'jquery', $extIconPath . 'jQuery.gif' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Library', 'library', $extIconPath . 'library.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System bomb', 'bomb', $extIconPath . 'edit-bomb.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System chronometer', 'chronom', $extIconPath . 'chronometer.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System configure', 'configure', $extIconPath . 'configure.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System development', 'appl-dev', $extIconPath . 'applications-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System home', 'home', $extIconPath . 'home-mdk.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System preferences', 'prefrncs', $extIconPath . 'preferences-system.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System security-high', 'sec-high', $extIconPath . 'security-high.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System security-low', 'sec-low', $extIconPath . 'security-low.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System security-medium', 'sec-mdm', $extIconPath . 'security-medium.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System status unknown', 'stat-unknw', $extIconPath . 'status_unknown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System trash', 'trash', $extIconPath . 'user-trash.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3 backend-layouts', 'belayout', $extIconPath . 'backend_layout.gif' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3 logo', 'typo3', $extIconPath . 'typo3.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3 template', 'tsconf', $extIconPath . 'template.gif' );

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/addTcaTypeIcon/ext_tables.php' );