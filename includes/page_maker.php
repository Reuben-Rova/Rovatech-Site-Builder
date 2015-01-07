<?php 

/*==============================================================================
* File: page_maker.php                                      
* Author: Reuben Rova
* Copyright: Reuben Rova
* Purpose: Constructs web pages for this site based on the WebPage class.
* Origin: 20140109
* Revision: 20150104
* notes: 
* 20141202 add $webPage->all() function to avoid casting object as string 
* ============================================================================*/


function make_page($doctype, $charset, $body, $page_name, $favicon_link, $keywords, $description, $title, 
					$hosted_font_links, $css_links, $script_links, $header, $nav, $footer, 
					$main_content ){
	


    /* Create this web page */
    $WebPage = new WebPage( $doctype, $charset, $favicon_link, $keywords, $description, $title, $hosted_font_links, $css_links, 
                                  $script_links, $header, $nav, $body, $footer );
    
    /* Set the id on the body tag */
    $WebPage = preg_replace("/<body>/x", "<body id=\"".$page_name."\">", $WebPage->all() );
    
    
    /* Set the copyright in the footer */ 
    $year = gmdate("Y");
    $WebPage = preg_replace("/&copy; GreenCE, Inc/", "&copy; GreenCE, Inc. ".$year, $WebPage);
    
    /* set active nav class */
    $pattern = "/php-nav-".$page_name."/";
    if ( preg_match($pattern, $WebPage) ) {
      $WebPage = preg_replace($pattern, "php-nav-".$page_name." active", $WebPage);
    } 
    
    
    /* load headings */
    if( $headings ) {
      foreach( $headings as $c => $f ) { 
      $pattern = "/replace_with_".$c."/";
      $WebPage = preg_replace($pattern, $f, $WebPage);
      }
    }
    
    /* load content */
    if( isset($main_content) ) {
      foreach( $main_content as $c => $f ) {
      $pattern = "/replace_with_".$c."/";   
      $WebPage = preg_replace($pattern, $f, $WebPage);
      }
    }
    
    /* make links absolute */
    //$WebPage = seo_links($WebPage); 
    
    /* Display this web page */
    echo $WebPage; 
     
}
?>