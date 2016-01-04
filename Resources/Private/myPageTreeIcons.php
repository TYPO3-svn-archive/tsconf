<?php

/* * *************************************************************
 *  My Icons
 *
 *  Sample configuration for own page tree icons
 *  For TYPO3 6.x
 * ************************************************************* */

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/* * *************************************************************
 *  Please remove the code from below.
 *  Code is just for checking, if the Netzmacher icon will displayed
 * ************************************************************* */

$myExtIconPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'Resources/Public/Icons/';

$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Netzmacher', 'myNetzm', $myExtIconPath . 'netzmacher_icon.gif' );

// SWITCH  : TYPO3 version
switch ( true )
{
  case( $typo3Version < 6000000 ):
    t3lib_SpriteManager::addTcaTypeIcon( 'pages', 'contains-myNetzm', $myExtIconPath . 'netzmacher_icon.gif' );
    break;
  default:
    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon( 'pages', 'contains-myNetzm', $myExtIconPath . 'netzmacher_icon.gif' );
    break;
}

/* * *************************************************************
 *  Please adapt code from below to your needs
 *
 *  1. Copy this file to fileadmin/mytsconf
 *     # cp typo3conf/ext/tsconf/Resources/Private/myPageTreeIcons.php fileadmin/mytsconf
 *  2. Copy your icons to fileadmin/mytsconf
 *     In the sample below:
 *     * fileadmin/mytsconf/my.gif
 *     * fileadmin/mytsconf/myOtherIcon.gif
 *  3. Adapt the properties to your needs.
 *     Be aware, that in the methods below
 *     the second parameter should not
 *     be longer than ten characters
 *     Proper     : myOthIcon   <-  9 characters
 *     Not proper : myOtherIcon <- 11 characters
 *  4. Include your configuration file:
 *     Configure tsconf by the Extension Manager
 *     a. Select the tab [my icons]
 *     b. Field "Path"
 *        Enter the path from this file
 *        here: fileadmin/mytsconf/myPageTreeIcons.php
 * ************************************************************* */

//$myExtIconPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath( $_EXTKEY ) . '../fileadmin/mytsconf/';
//
//$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
//  'My icon', 'myIcon', $myExtIconPath . 'my.gif'
//);
//$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
//  'My other icon', 'myOthIcon', $myExtIconPath . 'myOtherIcon.gif'
//);
//
//switch ( true )
//{
//  case( $typo3Version < 6000000 ):
//    t3lib_SpriteManager::addTcaTypeIcon(
//            'pages', 'contains-myIcon', $myExtIconPath . 'my.gif'
//    );
//    t3lib_SpriteManager::addTcaTypeIcon(
//            'pages', 'contains-myOthIcon', $myExtIconPath . 'myOtherIcon.gif'
//    );
//    break;
//  default:
//    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
//            'pages', 'contains-myIcon', $myExtIconPath . 'my.gif'
//    );
//    TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
//            'pages', 'contains-myOthIcon', $myExtIconPath . 'myOtherIcon.gif'
//    );
//    break;
//}