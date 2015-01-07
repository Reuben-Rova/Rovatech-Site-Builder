<?php 

/*==============================================================================
* File: index.php                                      
* Author: Reuben Rova
* Copyright: Reuben Rova
* Purpose: Homepage
* Origin: 20140109
* Revision: 20150106
* notes: 
* ============================================================================*/

/* Attempt to load cofiguation and settings. */
if ( file_exists( dirname(__FILE__) . "/load.php" ) ) {
  
	require_once( dirname(__FILE__) . "/load.php" );

} else {

	// A file doesn't exist

		// show an error message
	echo "<h1>ERROR: The required file <code>load.php</code> is invalid or missing.</h1>";
}


/* Properties for this page */
/** Instructions ----------------------------------------------------------------
* Default properties are set in the config.php and settings.php files.
* Defaults properties can be overridden or expended on this page by editing its value.
* Do not use relative paths. (Absolute paths are better for SEO.)
* Use dynamic absolute paths to point to files for easy host migration.          
* Access the public domain root with the <DOMAIN> global.
* There are other dynaymic path globals refferenced in the config.php
* ----------------------------------------------------------------------------*/

/* doctype */
$doctype = DOCTYPE;

 
 //* Charecter set meta tag */
$charset = CHARSET;


/* Favidon Link tag */
$favicon_link = FAVICON_LINK;


/* Keywords meta tag */
$keywords = "<meta content=\"WEB DEVELOPMENT, WEB DESIGN, CONTENT CREATION, PHP, JAVASCRIPT, HTML5, CSS3, XHTML, VIDEO, AUDIO, PHOTOGAPHY, TYPOGROPHY\" 
            name=\"Keywords\">";
            

/* Description meta tag */          
$description = "<meta content=\"WEB DEVELOPMENT, WEB DESIGN, CONTENT CREATION, PHP, JAVASCRIPT, HTML5, CSS3, XHTML, VIDEO, AUDIO, PHOTOGAPHY, TYPOGROPHY\" 
                name=\"Description\">";
                

/* Title tag */                
$title = "<title>Rovatech - Site Builder</title>";


/** instructions for using font, css, and script links----------------------------------------------------------------
* This is a string of values.
* Add page specific links by concatonation.
* Sepparate and or terminate links with <\n>.
* Example:  $hosted_font_links = HOSTED_FONT_LINKS . "<link rel=\stylesheet\" type=\"text/css\" href=\"".CSS."layout.css\">\n;
* ----------------------------------------------------------------------------*/
/* Hosted font link tags */
$hosted_font_links = HOSTED_FONT_LINKS;


/* CSS link tags */
$css_links = SITEWIDE_CSS_LINKS;


/* Script link tags */
$script_links = SITEWIDE_JS_LINKS;


/* Page name */
/** instructions ---------------------------------------------------------------
*The name of the html file used for the body content of this page. 
*Used for setting the ID of the body tag and to load the html file.
* ----------------------------------------------------------------------------*/
$page_name = "home";

/* Header html */
$header = file_get_contents( "header.html" ); 


/* Nav html */
$nav = file_get_contents( "nav.html" );  


/* Body html */
$body = file_get_contents( $page_name.".html"); 


/* Footer html */
$footer = file_get_contents( "footer.html" );  


/* main conent html*/
$main_content = array(); 


/** Do not edit anything below this line */
/**---------------------------------------------------------------------------*/


/* Create this web page */
make_page( $doctype, $charset, $body, $page_name, $favicon_link, $keywords, $description, $title, $hosted_font_links, $css_links, 
           $script_links, $header, $nav, $footer, $main_content  );                            

?>