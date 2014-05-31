<?php

  //$typo_db_extTableDef_script = 'extTables.php';

  // unserializing the configuration so we can use it here:
$_EXTCONF = unserialize($_EXTCONF);

if ($_EXTCONF['page_mod_web_layout_menu_function'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_weblayout_menu_functions.txt">');
}

if ($_EXTCONF['page_mod_web_list_enableButtons'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_weblist_enablebuttons.txt">');
}

if ($_EXTCONF['user_options_filelist_enableButtons'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_filelist_enablebuttons.txt">');
}

if ($_EXTCONF['page_tceform_pages'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_pages.txt">');
}

if ($_EXTCONF['page_tceform_ttconent'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_ttcontent.txt">');
}

if ($_EXTCONF['user_adminpanel'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_adminPanel.txt">');
}

if ($_EXTCONF['user_clearcachesystem'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_clearCacheSystem.txt">');
}

if ($_EXTCONF['user_options_cache'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_options_cache.txt">');
}

if ($_EXTCONF['user_options_pagetreeuid'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_options_pagetreeuid.txt">');
}

?>
