<?php

$_EXTCONF = unserialize( $_EXTCONF );

if( !isset( $_EXTCONF['mytsconf.']['path']))
{
  $_EXTCONF['mytsconf.']['path'] = 'typo3conf/ext/tsconf/Resources/Private/myPageTreeIcons.php';
}

if( !isset( $_EXTCONF['page_mod_shared_deflangauge']))
{
  $_EXTCONF['page_mod_shared_deflangauge'] = '';
}

if( !isset( $_EXTCONF['page_mod_web_layout_menu_function']))
{
  $_EXTCONF['page_mod_web_layout_menu_function'] = 1;
}

if( !isset( $_EXTCONF['page_mod_web_list_enableButtons']))
{
  $_EXTCONF['page_mod_web_list_enableButtons'] = 1;
}

if( !isset( $_EXTCONF['page_tceform_pages']))
{
  $_EXTCONF['page_tceform_pages'] = 1;
}

if( !isset( $_EXTCONF['page_tceform_ttcontent']))
{
  $_EXTCONF['page_tceform_ttcontent'] = 1;
}

if( !isset( $_EXTCONF['tca_systemplate']))
{
  $_EXTCONF['tca_systemplate'] = 1;
}

if( !isset( $_EXTCONF['tca_ttcontentimages']))
{
  $_EXTCONF['tca_ttcontentimages'] = 'Default (recommended)';
}

if( !isset( $_EXTCONF['user_adminpanel']))
{
  $_EXTCONF['user_adminpanel'] = 1;
}

if( !isset( $_EXTCONF['user_clearcachesystem']))
{
  $_EXTCONF['user_clearcachesystem'] = 1;
}

if( !isset( $_EXTCONF['user_options_cache']))
{
  $_EXTCONF['user_options_cache'] = 1;
}

if( !isset( $_EXTCONF['user_options_defaultUploadFolder']))
{
  $_EXTCONF['user_options_defaultUploadFolder'] = 0;
}

if( !isset( $_EXTCONF['user_options_filelist_enableButtons']))
{
  $_EXTCONF['user_options_filelist_enableButtons'] = 1;
}

if( !isset( $_EXTCONF['user_options_pagetreeuid']))
{
  $_EXTCONF['user_options_pagetreeuid'] = 1;
}
