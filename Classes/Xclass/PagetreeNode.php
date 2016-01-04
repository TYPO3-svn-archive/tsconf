<?php

namespace \Netzmacher\Tsconf\Xclass;

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

class PagetreeNode extends \TYPO3\CMS\Backend\Tree\Pagetree\PagetreeNode
{

  /**
   * @return bool
   */
  public function canEditHideInMenu()
  {
    return $this->checkAccessRightsForField( 'nav_hide' );
  }

  /**
   * @return bool
   */
  public function canEditUrlScheme()
  {
    return $this->checkAccessRightsForField( 'url_scheme' );
  }

  /**
   * @return bool
   */
  public function canEditNoSearch()
  {
    return $this->checkAccessRightsForField( 'no_search' );
  }

  /**
   * @param $field
   * @return bool
   */
  protected function checkAccessRightsForField( $field )
  {
    if ( !isset( $this->cachedAccessRights[ 'edit_' . $field ] ) )
    {
      $this->cachedAccessRights[ 'edit_' . $field ] = true;

      if ( isset( $GLOBALS[ 'TCA' ][ 'pages' ][ 'columns' ][ $field ][ 'exclude' ] ) && ( bool ) $GLOBALS[ 'TCA' ][ 'pages' ][ 'columns' ][ $field ][ 'exclude' ] === true
      )
      {

        $this->cachedAccessRights[ 'edit_' . $field ] = $this->getBeUser()->check(
                'non_exclude_fields', 'pages' . ':' . $field
        );
      }
    }

    return $this->cachedAccessRights[ 'edit_' . $field ];
  }

  /**
   * @return \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
   */
  protected function getBeUser()
  {
    return $GLOBALS[ 'BE_USER' ];
  }

}