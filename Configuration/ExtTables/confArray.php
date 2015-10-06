<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$confArr = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'tsconf' ] );

if( !isset( $confArr['mytsconf.']['path']))
{
  $confArr['mytsconf.']['path'] = 'typo3conf/ext/tsconf/Resources/Private/myPageTreeIcons.php';
}

if( !isset( $confArr['page_mod_shared_deflangauge']))
{
  $confArr['page_mod_shared_deflangauge'] = '';
}

if( !isset( $confArr['page_mod_web_layout_menu_function']))
{
  $confArr['page_mod_web_layout_menu_function'] = 1;
}

if( !isset( $confArr['page_mod_web_list_enableButtons']))
{
  $confArr['page_mod_web_list_enableButtons'] = 1;
}

if( !isset( $confArr['page_tceform_pages']))
{
  $confArr['page_tceform_pages'] = 1;
}

if( !isset( $confArr['page_tceform_ttcontent']))
{
  $confArr['page_tceform_ttcontent'] = 1;
}

if( !isset( $confArr['tca_systemplate']))
{
  $confArr['tca_systemplate'] = 1;
}

if( !isset( $confArr['tca_ttcontentimages']))
{
  $confArr['tca_ttcontentimages'] = 'Default (recommended)';
}

if( !isset( $confArr['user_adminpanel']))
{
  $confArr['user_adminpanel'] = 1;
}

if( !isset( $confArr['user_clearcachesystem']))
{
  $confArr['user_clearcachesystem'] = 1;
}

if( !isset( $confArr['user_options_cache']))
{
  $confArr['user_options_cache'] = 1;
}

if( !isset( $confArr['user_options_defaultUploadFolder']))
{
  $confArr['user_options_defaultUploadFolder'] = 0;
}

if( !isset( $confArr['user_options_filelist_enableButtons']))
{
  $confArr['user_options_filelist_enableButtons'] = 1;
}

if( !isset( $confArr['user_options_pagetreeuid']))
{
  $confArr['user_options_pagetreeuid'] = 1;
}
