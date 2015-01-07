<?php

/*==============================================================================
* File: load.php                                      
* Author: Reuben Rova
* Copyright: GreenCE INC
* Purpose: Load required files for this website
* Origin: 20131230
* Revision: 20150106
* notes: 
* ============================================================================*/


/* Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );


/* List the files to load */
$files = array(  "config.php",
				 "settings.php",
				 "classes/web_page.php",
				 "includes/page_maker.php",
				 "includes/clean_encoding.php" 
				 );

/* Attempt to load configuration and settings */
foreach ( $files as $file ) {
  if ( file_exists( ABSPATH . $file) ) {
  
  	/* The config file resides in the DOMAIN root path */
  	require_once( ABSPATH . $file );
  
  } else {
  
  	// A file doesn't exist
  
  		// show an error message
  	echo "<h1>ERROR: The required file <code>".$file."</code> is invalid or missing.</h1>";
  }
}

?>