<?php

// Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;

// SWITCH  : TYPO3 version
switch ( true )
{
  case( $typo3Version < 6000000 ):
    require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtLocalconf/4x/ext_localconf.php' );
    break;
  default:
    require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtLocalconf/Default/ext_localconf.php' );
    break;
}

?>