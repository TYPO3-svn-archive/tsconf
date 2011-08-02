<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}

  $extIconPath = t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/';

  $TCA['pages']['columns']['module']['config']['items'][] =
     array('Flag', 'flg_black', $extIconPath . 'flag-black.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Flag', 'flg_blue', $extIconPath . 'flag-blue.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Flag', 'flg_green', $extIconPath . 'flag-green.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Flag', 'flg_red', $extIconPath . 'flag-red.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Flag', 'flg_yellow', $extIconPath . 'flag-yellow.png');

  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_brown', $extIconPath . 'folder-brown.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_green', $extIconPath . 'folder-green.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_cyan', $extIconPath . 'folder-cyan.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_blue', $extIconPath . 'folder-blue.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld', $extIconPath . 'folder.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_violet', $extIconPath . 'folder-violet.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_red', $extIconPath . 'folder-red.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_orange', $extIconPath . 'folder-orange.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_yellow', $extIconPath . 'folder-yellow.png');

  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_bkmrk', $extIconPath . 'folder-bookmark.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_dev', $extIconPath . 'folder-development.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_docs', $extIconPath . 'folder-documents.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_down', $extIconPath . 'folder-downloads.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_fvrts', $extIconPath . 'folder-favorites.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_imprtt', $extIconPath . 'folder-important.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_locked', $extIconPath . 'folder-locked.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_remote', $extIconPath . 'folder-remote.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_sound', $extIconPath . 'folder-sound.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_tar', $extIconPath . 'folder-tar.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_txt', $extIconPath . 'folder-txt.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Folder', 'fld_video', $extIconPath . 'folder-video.png');

  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Library', 'library', $extIconPath . 'library.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Template', 'tsconf', $extIconPath . 'template.gif');


  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_black',  $extIconPath . 'flag-black.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_blue',   $extIconPath . 'flag-blue.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_green',  $extIconPath . 'flag-green.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_red',    $extIconPath . 'flag-red.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-flg_yellow', $extIconPath . 'flag-yellow.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_blue',   $extIconPath . 'folder-blue.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_bkmrk',  $extIconPath . 'folder-bookmark.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_brown',  $extIconPath . 'folder-brown.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_cyan',   $extIconPath . 'folder-cyan.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_dev',    $extIconPath . 'folder-development.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_docs',   $extIconPath . 'folder-documents.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_down',   $extIconPath . 'folder-downloads.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_fvrts',  $extIconPath . 'folder-favorites.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_green',  $extIconPath . 'folder-green.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_imprtt', $extIconPath . 'folder-important.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_locked', $extIconPath . 'folder-locked.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_orang',  $extIconPath . 'folder-orange.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld',        $extIconPath . 'folder.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_red',    $extIconPath . 'folder-red.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_remote', $extIconPath . 'folder-remote.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_sound',  $extIconPath . 'folder-sound.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_tar',    $extIconPath . 'folder-tar.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_txt',    $extIconPath . 'folder-txt.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_video',  $extIconPath . 'folder-video.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_violet', $extIconPath . 'folder-violet.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-fld_yellow', $extIconPath . 'folder-yellow.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-library',    $extIconPath . 'library.png');
  t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-tsconf',     $extIconPath . 'template.gif');
?>