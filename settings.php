<?php 

/*==============================================================================
* File: settings.php                                      
* Author: Reuben Rova
* Copyright: Reuben Rova
* Purpose: Settings 
* Origin: 20131230
* Revision: 20150104
* notes:  will not work if config.php is not loaded prior to loading this file.
* ============================================================================*/

    
/* Favicon link */
define( "FAVICON_LINK", "<link rel=\"icon\" href=\"".DOMAIN."favicon.ico\" type=\"image/x-icon\" />");

/* Hosted Font Links */
define( "HOSTED_FONT_LINKS", "<link href=\"http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Berkshire+Swash\" rel=\"stylesheet\" type=\"text/css\">\n" );

/* Sitewide JavaScript Links */
define( "SITEWIDE_JS_LINKS", "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>\n"); 

/* Sitewide CSS Links */
define( "SITEWIDE_CSS_LINKS", "<link rel=\"stylesheet\" type=\"text/css\" href=\"".CSS."layout.css\">\n" );

?>