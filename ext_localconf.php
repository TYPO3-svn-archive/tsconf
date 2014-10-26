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

if ( $_EXTCONF[ 'tca_ttcontentimages' ] )
{
  $key = 'tsconf';
  $type = 'setup';
  $content = '
#############################################
## TypoScript added by extension "tsconf"
#############################################
tt_content.image.20.1.file.height.field = imageheight
tt_content.image.20.addClassesCol.override.cObject.10.12 = TEXT
tt_content.image.20.addClassesCol.override.cObject.10.12.value = col-md-1 col-sm-1 col-xs-12'
;
  $afterStaticUid = 'defaultContentRendering';
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript($key, $type, $content, $afterStaticUid);
}

if ($_EXTCONF['user_options_filelist_enableButtons'])
{
  t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_filelist_enablebuttons.txt">');
}

if ($_EXTCONF['page_tceform_pages'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_pages.txt">');
}

if ($_EXTCONF['page_tceform_ttcontent'])
{
  t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_ttcontent.txt">');
}

switch( $_EXTCONF['page_mod_shared_deflangauge'] )
{
  case('de'):
    t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_mod_shared_defaultlang_de.txt">');
    break;
  case('en'):
    t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_mod_shared_defaultlang_en.txt">');
    break;
  case(null):
  default:
    // Don't include nothing
    break;
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
