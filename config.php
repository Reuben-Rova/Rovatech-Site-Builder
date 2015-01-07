<?php

/*==============================================================================
* File: config.php                                      
* Author: Reuben Rova
* Copyright: Reuben Rova 
* Purpose: Configuration for this website
* Origin: 20131230
* Revision: 20150104
* notes: 
* ============================================================================*/

/* Doctype */
define( "DOCTYPE",      "<!DOCTYPE HTML>" );


/* Character Set */
define( "CHARSET",      "<meta charset='UTF-8'>" );


/* MySQL settings */
define( "DB_NAME",      "database_name_here" );
define( "DB_USER",      "username_here" );
define( "DB_PASSWORD",  "password_here" );
define( "DB_HOST",      "localhost" );
define( "DB_CHARSET",   "utf8" );


/* Source directories */ 
define( "CSS",          "css/" );       //CSS
define( "CLASSES",      "classes/" );   //PHP Classes
define( "JS",           "js/" );        //JavaScript


/* Domain */
/** use a  complete domain such as <http://www.website.com/>
*** include the forward slash at the end.
**/ 
define( "DOMAIN",       "http://www.your-domain.com/" );  

                                


/** Dot not edit anything below this line */
/**---------------------------------------------------------------------------*/

/* Absolute path to the website public directory. */ 
if ( !defined("ABSPATH") ) {

	define("ABSPATH", dirname(__FILE__) . "/"); 
  
}  

?>