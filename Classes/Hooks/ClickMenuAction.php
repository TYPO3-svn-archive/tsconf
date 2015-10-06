<?php

namespace Netzmacher\Tsconf\Hooks;

use TYPO3\CMS\Backend\Tree\Pagetree\Commands;
use TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNode;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Andreas Kießling <andreas.kiessling@web.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

class ClickMenuAction extends Commands
{

  /**
   * Hide page in menu
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setHiddenInMenus( $nodeData )
  {

    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'nav_hide' ] = 1;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * Show page in menu
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setVisibleInMenus( $nodeData )
  {
    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'nav_hide' ] = 0;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * Force SSL for a page
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setForceSsl( $nodeData )
  {
    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'url_scheme' ] = 2;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * Set url_scheme to default for a page
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setNoForceSsl( $nodeData )
  {
    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'url_scheme' ] = 0;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * Set url_scheme to default for a page
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setExcludeFromSearch( $nodeData )
  {
    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'no_search' ] = 1;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * Set url_scheme to default for a page
   *
   * @param \stdClass $nodeData
   * @return string Error message for the BE user
   */
  public function setIncludeInSearch( $nodeData )
  {
    try
    {
      /* @var $node PagetreeNode */
      $node = GeneralUtility::makeInstance( 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode', ( array ) $nodeData );

      $data[ 'pages' ][ $node->getWorkspaceId() ][ 'no_search' ] = 0;
      $returnValue = $this->saveData( $node, $data );
    }
    catch ( \Exception $e )
    {
      $returnValue = array(
        'success' => FALSE,
        'message' => $e->getMessage()
      );
    }

    return $returnValue;
  }

  /**
   * @param PagetreeNode $node
   * @param array $data
   * @return array
   */
  private function saveData( PagetreeNode $node, array $data )
  {
    self::processTceCmdAndDataMap( array(), $data );

    $newNode = Commands::getNode( $node->getId() );
    $newNode->setLeaf( $node->isLeafNode() );
    return $newNode->toArray();
  }

  /**
   * called from ext_tables.php to set up the context menu items
   */
  public static function addContextMenuItems()
  {
    // Add items of the context menu to the default userTS configuration
    $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'BE' ][ 'defaultUserTSconfig' ] .= '
            options.contextMenu.table.pages.items {
                540 = ITEM
                540 {
                    name = hideInMenu
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setHiddenInMenus
                    spriteIcon = apps-pagetree-page-not-in-menu
                    callbackAction = setHiddenInMenus
                    displayCondition = getRecord|nav_hide = 0 && canEditHideInMenu = 1
                }
                541 = ITEM
                541 {
                    name = hideInMenu
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setVisibleInMenus
                    spriteIcon = apps-pagetree-page-not-in-menu
                    callbackAction = setVisibleInMenus
                    displayCondition = getRecord|nav_hide = 1 && canEditHideInMenu = 1
                }
            }
        ';

    $emConf = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'tsconf' ] );
    $forceMenuItem = false;
    if ( isset( $emConf[ 'enableSslMenuItem' ] ) && ( bool ) $emConf[ 'enableSslMenuItem' ] === true )
    {
      $forceMenuItem = true;
    }

    if ( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'BE' ][ 'lockSSL' ] > 0 || $forceMenuItem )
    {
      $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'BE' ][ 'defaultUserTSconfig' ] .= '
            options.contextMenu.table.pages.items {
                542 = ITEM
                542 {
                    name = urlScheme
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setNoForceSsl
                    icon = ../typo3conf/ext/tsconf/Resources/Public/Icons/lock_open.png
                    callbackAction = setNoForceSsl
                    displayCondition = getRecord|url_scheme = 2 && canEditUrlScheme = 1
                }
                543 = ITEM
                543 {
                    name = urlScheme
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setForceSsl
                    spriteIcon = status-status-locked
                    callbackAction = setForceSsl
                    displayCondition = getRecord|url_scheme < 2 && canEditUrlScheme = 1
                }
            }
        ';
    }

    $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'BE' ][ 'defaultUserTSconfig' ] .= '
            options.contextMenu.table.pages.items {
                544 = ITEM
                544 {
                    name = excludeFromSearch
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setExcludeFromSearch
                    icon = ../typo3conf/ext/tsconf/Resources/Public/Icons/magnifier_zoom_out.png
                    callbackAction = setExcludeFromSearch
                    displayCondition = getRecord|no_search = 0 && canEditNoSearch = 1
                }
                545 = ITEM
                545 {
                    name = excludeFromSearch
                    label = LLL:EXT:tsconf/Resources/Private/Language/locallang_cm:setIncludeInSearch
                    icon = ../typo3conf/ext/tsconf/Resources/Public/Icons/magnifier_zoom_in.png
                    callbackAction = setIncludeInSearch
                    displayCondition = getRecord|no_search = 1 && canEditNoSearch = 1
                }
            }
        ';
  }

}
