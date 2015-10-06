<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

$extIconPath = t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icons/';

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
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-exit', $extIconPath . 'application-exit.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-rss', $extIconPath . 'application-rss+xml.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'appl-intrnt', $extIconPath . 'applications-internet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'calendar', $extIconPath . 'office-calendar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'animator', $extIconPath . 'tool-animator.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'balloon', $extIconPath . 'view-conversation-balloon.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Application', 'filter', $extIconPath . 'view-filter.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code', 'code-class', $extIconPath . 'code-class.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Code', 'code-cntxt', $extIconPath . 'code-context.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'cam-photo', $extIconPath . 'camera-photo.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'media-dvd', $extIconPath . 'media-optical-recordable.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Device', 'speaker', $extIconPath . 'speaker.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'call-start', $extIconPath . 'call-start.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'call-stop', $extIconPath . 'call-stop.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-cancel', $extIconPath . 'dialog-cancel.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-close', $extIconPath . 'dialog-close.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-ok', $extIconPath . 'dialog-ok-apply.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'dlg-passwd', $extIconPath . 'dialog-password.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Dialog', 'help', $extIconPath . 'help-hint.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem', 'favorite', $extIconPath . 'emblem-favorite.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Emblem', 'important', $extIconPath . 'emblem-important.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_black', $extIconPath . 'flag-black.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_blue', $extIconPath . 'flag-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_green', $extIconPath . 'flag-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_red', $extIconPath . 'flag-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Flag', 'flg_yellow', $extIconPath . 'flag-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_brown', $extIconPath . 'folder-brown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_green', $extIconPath . 'folder-green.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_cyan', $extIconPath . 'folder-cyan.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_blue', $extIconPath . 'folder-blue.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld', $extIconPath . 'folder.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_violet', $extIconPath . 'folder-violet.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_red', $extIconPath . 'folder-red.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_orange', $extIconPath . 'folder-orange.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_yellow', $extIconPath . 'folder-yellow.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_bkmrk', $extIconPath . 'folder-bookmark.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_dev', $extIconPath . 'folder-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_docs', $extIconPath . 'folder-documents.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_down', $extIconPath . 'folder-downloads.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_fvrts', $extIconPath . 'folder-favorites.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_imprtt', $extIconPath . 'folder-important.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_locked', $extIconPath . 'folder-locked.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_remote', $extIconPath . 'folder-remote.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_sound', $extIconPath . 'folder-sound.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_tar', $extIconPath . 'folder-tar.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_txt', $extIconPath . 'folder-txt.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Folder', 'fld_video', $extIconPath . 'folder-video.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games', 'highscore', $extIconPath . 'games-highscores.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Games', 'roll', $extIconPath . 'roll.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'jQuery', 'jquery', $extIconPath . 'jQuery.gif' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Library', 'library', $extIconPath . 'library.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'appl-dev', $extIconPath . 'applications-development.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'chronom', $extIconPath . 'chronometer.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'configure', $extIconPath . 'configure.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'bomb', $extIconPath . 'edit-bomb.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'home', $extIconPath . 'home-mdk.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'prefrncs', $extIconPath . 'preferences-system.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-high', $extIconPath . 'security-high.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-low', $extIconPath . 'security-low.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'sec-mdm', $extIconPath . 'security-medium.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'stat-unknw', $extIconPath . 'status_unknown.png' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'System', 'trash', $extIconPath . 'user-trash.png' );

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'belayout', $extIconPath . 'backend_layout.gif' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'tsconf', $extIconPath . 'template.gif' );
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'TYPO3', 'typo3', $extIconPath . 'typo3.png' );

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/addTcaTypeIcon/ext_tables.php' );