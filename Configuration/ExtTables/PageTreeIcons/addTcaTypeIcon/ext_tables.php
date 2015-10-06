<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

switch ( true )
{
  case( $typo3Version < 6000000 ):
    require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/addTcaTypeIcon/4x/ext_tables.php' );
    break;
  default:
    require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/addTcaTypeIcon/Default/ext_tables.php' );
    break;
}