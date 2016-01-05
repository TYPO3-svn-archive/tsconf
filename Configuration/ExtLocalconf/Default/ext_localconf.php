<?php

//$typo_db_extTableDef_script = 'extTables.php';
// #70445, 151006, dwildt, 3+
if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}


// #70445, 151006, dwildt, 6+
if ( TYPO3_MODE == 'BE' && $_EXTCONF[ 'pagetree_enhanced_context_menu' ] )
{
  // ##i0010, dwildt, 3-: Fatal error: Class 'Netzmacher\Tsconf\Xclass\PagetreeNode' not found in /opt/typo3_src-7.6.2/typo3/sysext/core/Classes/Utility/GeneralUtility.php on line 4508
//  $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SYS' ][ 'Objects' ][ 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode' ] = array(
//    'className' => '\\Netzmacher\\Tsconf\\Xclass\\PagetreeNode',
//  );
}

if ( $_EXTCONF[ 'page_mod_web_layout_menu_function' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_weblayout_menu_functions.txt">' );
}

if ( $_EXTCONF[ 'page_mod_web_list_enableButtons' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_weblist_enablebuttons.txt">' );
}

switch ( $_EXTCONF[ 'tca_ttcontentimages' ] )
{
  case('Bootstrap'):
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
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript( $key, $type, $content, $afterStaticUid );
    break;
  case('Disabled'):
  case('Default (recommended)'):
  default:
    break;
}

if ( $_EXTCONF[ 'user_options_filelist_enableButtons' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_filelist_enablebuttons.txt">' );
}

if ( $_EXTCONF[ 'page_tceform_pages' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_pages.txt">' );
}

if ( $_EXTCONF[ 'page_tceform_ttcontent' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_tceform_ttcontent.txt">' );
}

switch ( $_EXTCONF[ 'page_mod_shared_deflangauge' ] )
{
  case('de'):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_mod_shared_defaultlang_de.txt">' );
    break;
  case('en'):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/pageTSconfig_mod_shared_defaultlang_en.txt">' );
    break;
  case(null):
  default:
    // Don't include nothing
    break;
}

if ( $_EXTCONF[ 'user_adminpanel' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_adminPanel.txt">' );
}
if ( $_EXTCONF[ 'user_clearcachesystem' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_clearCacheSystem.txt">' );
}

if ( $_EXTCONF[ 'user_options_cache' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_options_cache.txt">' );
}

if ( $_EXTCONF[ 'user_options_defaultUploadFolder' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_options_defaultUploadFolder.txt">' );
}
if ( $_EXTCONF[ 'user_options_pagetreeuid' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/userTSconfig_options_pagetreeuid.txt">' );
}