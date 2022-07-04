<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/


function wpschool_load_fontawesome() {
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/12345678abcdef.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpschool_load_fontawesome');