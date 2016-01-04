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

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/confArray.php' );

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/ext_tables.php' );

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
    // #i0006, 141208, dwildt, -
    // Breaking: #61785 - loadTCA function in GeneralUtility removed
    //\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'tt_content' );
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
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'selectedListStyle' ] = 'width:385px;';
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'itemListStyle' ] = 'width:385px;';
  $TCA[ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'size' ] = '40';
}
// improve sys_template

// #70445, 151006, dwildt, 9+
if ( TYPO3_MODE == 'BE' && $confArr[ 'pagetree_enhanced_context_menu' ])
{
  $extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY );
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent(
          'TYPO3.Tsconf.ClickmenuAction', 'Netzmacher\\Tsconf\\Hooks\\ClickMenuAction'
  );
  $GLOBALS[ 'TBE_MODULES' ][ '_configuration' ][ $_EXTKEY ][ 'jsFiles' ][ 'TreeActions' ] = 'EXT:tsconf/Resources/Public/Js/TreeActions.js';
  \Netzmacher\Tsconf\Hooks\ClickMenuAction::addContextMenuItems();
}

