<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  |--------------------------------------------------------------------------
  | Active template
  |--------------------------------------------------------------------------
  |
  | The $template['active_template'] setting lets you choose which template
  | group to make active.  By default there is only one group (the
  | "default" group).
  |
 */
$template['active_template'] = 'public';

/*
  |--------------------------------------------------------------------------
  | Explaination of template group variables
  |--------------------------------------------------------------------------
  |
  | ['template'] The filename of your master template file in the Views folder.
  |   Typically this file will contain a full XHTML skeleton that outputs your
  |   full template or region per region. Include the file extension if other
  |   than ".php"
  | ['regions'] Places within the template where your content may land.
  |   You may also include default markup, wrappers and attributes here
  |   (though not recommended). Region keys must be translatable into variables
  |   (no spaces or dashes, etc)
  | ['parser'] The parser class/library to use for the parse_view() method
  |   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
  |   Smarty Parser that works perfectly with Template
  | ['parse_template'] FALSE (default) to treat master template as a View. TRUE
  |   to user parser (see above) on the master template
  |
  | Region information can be extended by setting the following variables:
  | ['content'] Must be an array! Use to set default region content
  | ['name'] A string to identify the region beyond what it is defined by its key.
  | ['wrapper'] An HTML element to wrap the region contents in. (We
  |   recommend doing this in your template file.)
  | ['attributes'] Multidimensional array defining HTML attributes of the
  |   wrapper. (We recommend doing this in your template file.)
  |
  | Example:
  | $template['default']['regions'] = array(
  |    'header' => array(
  |       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
  |       'name' => 'Page Header',
  |       'wrapper' => '<div>',
  |       'attributes' => array('id' => 'header', 'class' => 'clearfix')
  |    )
  | );
  |
 */

/*
  |--------------------------------------------------------------------------
  | Default Template Configuration (adjust this or create your own)
  |--------------------------------------------------------------------------
 */
//public template
$template['public']['template'] = 'templates/public/template';
$template['public']['regions'] = array(
    'title',
    'content'
);
$template['public']['parser'] = 'parser';
$template['public']['parser_method'] = 'parse';
$template['public']['parse_template'] = TRUE;

//menu template
$template['page']['template'] = 'templates/menu/template';
$template['page']['regions'] = array(
    'title',
    'content'
);
$template['page']['parser'] = 'parser';
$template['page']['parser_method'] = 'parse';
$template['page']['parse_template'] = TRUE;

//login template
$template['login_signup']['template'] = 'templates/login_signup/template';
$template['login_signup']['regions'] = array(
    'title',
    'content'
);
$template['login_signup']['parser'] = 'parser';
$template['login_signup']['parser_method'] = 'parse';
$template['login_signup']['parse_template'] = TRUE;

$template['new_design']['template'] = 'templates/new_design/template';
$template['new_design']['regions'] = array(
    'title',
    'content'
);
$template['new_design']['parser'] = 'parser';
$template['new_design']['parser_method'] = 'parse';
$template['new_design']['parse_template'] = TRUE;


$template['new_register']['template'] = 'templates/new_register/template';
$template['new_register']['regions'] = array(
    'title',
    'content'
);
$template['new_register']['parser'] = 'parser';
$template['new_register']['parser_method'] = 'parse';
$template['new_register']['parse_template'] = TRUE;



$template['admin_template']['template'] = 'templates/admin_template/template';
$template['admin_template']['regions'] = array(
    'title',
    'content'
);
$template['admin_template']['parser'] = 'parser';
$template['admin_template']['parser_method'] = 'parse';
$template['admin_template']['parse_template'] = TRUE;



/* End of file template.php */
/* Location: ./config/template.php */