<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}

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


  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Library', 'library', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/library.png');
  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Template', 'tsconf', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

  $ICON_TYPES['flg_black']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-black.png');
  $ICON_TYPES['flg_blue']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-blue.png');
  $ICON_TYPES['flg_green']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-green.png');
  $ICON_TYPES['flg_red']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-red.png');
  $ICON_TYPES['flg_yellow']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-yellow.png');
  $ICON_TYPES['fld_blue']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-blue.png');
  $ICON_TYPES['fld_bkmrk']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-bookmark.png');
  $ICON_TYPES['fld_brown']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-brown.png');
  $ICON_TYPES['fld_cyan']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-cyan.png');
  $ICON_TYPES['fld_dev']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-development.png');
  $ICON_TYPES['fld_docs']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-documents.png');
  $ICON_TYPES['fld_down']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-downloads.png');
  $ICON_TYPES['fld_fvrts']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-favorites.png');
  $ICON_TYPES['fld_green']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-green.png');
  $ICON_TYPES['fld_imprtt']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-important.png');
  $ICON_TYPES['fld_locked']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-locked.png');
  $ICON_TYPES['fld_orange']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-orange.png');
  $ICON_TYPES['fld']		= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder.png');
  $ICON_TYPES['fld_red']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-red.png');
  $ICON_TYPES['fld_remote']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-remote.png');
  $ICON_TYPES['fld_sound']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-sound.png');
  $ICON_TYPES['fld_tar']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-tar.png');
  $ICON_TYPES['fld_txt']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-txt.png');
  $ICON_TYPES['fld_video']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-video.png');
  $ICON_TYPES['fld_violet']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-violet.png');
  $ICON_TYPES['fld_yellow']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-yellow.png');
  $ICON_TYPES['library']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/library.png');
  $ICON_TYPES['tsconf']    	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

?>
