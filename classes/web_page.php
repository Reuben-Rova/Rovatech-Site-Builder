<?php

/*==============================================================================
* File: web_page.php                                      
* Author: Reuben Rova
* Copyright: GreenCE INC
* Purpose: Base template for pages in this domain
* Origin: 20140102
* Revision: 20140103
* notes: 
* 20141202 add all() function to return string version of this entire object
* ============================================================================*/



class WebPage {
  /* Properties */
  public $doctype;
  public $charset;
  public $favicon;
  public $keywords;
  public $description;
  public $title;
  public $hosted_font_links;
  public $css_links;
  public $script_links;
  public $header;
  public $nav;
  public $body;
  public $footer; 
  
  /* FUNCTION -- Constructor */                              
  public function __construct( $doctype, $charset, $favicon_link, $keywords, $description, $title, $hosted_font_links, $css_links, $script_links,
                        $header, $nav, $body, $footer ) {                        
      
      $this->doctype         = $doctype;
      $this->charset         = $charset;
      $this->favicon         = $favicon_link;
      $this->keywords        = $keywords;
      $this->description     = $description;
      $this->title           = $title;
      $this->fonts           = $hosted_font_links;
      $this->css_links       = $css_links;
      $this->script_links    = $script_links;
      $this->header          = $header; 
      $this->nav             = $nav;
      $this->body            = $body;
      $this->footer          = $footer;
  
  }
  
  public function all(){
    return $this->__toString();
  }  
  
  

  /* FUNCTION -- Create HTML4.01 style non-symantic tags. */
  public function get_tag( $tag, $type ){
  
    if( $type !== "<!DOCTYPE HTML>") {
       
      $tag = "div id=\"".$tag."\"";
      
    } 
    return $tag;            
  }
  
    public function __toString(){ 
      return  "\n{$this->doctype}\n".
              "<html>\n".
              "<head>\n".
              "{$this->charset}\n".
              "{$this->title}\n". 
              "{$this->description}\n".
              "{$this->keywords}\n". 
              "{$this->favicon}\n". 
              "{$this->fonts}\n".
              "{$this->script_links}\n".
              "{$this->css_links}\n". 
              "</head>\n". 
              "<body>\n".
              "<header>\n".
              "{$this->header}\n".
              "</header>\n".
              "<nav>\n".
              "{$this->nav}\n".
              "</nav>\n".  
              "{$this->body}\n". 
              "<footer>\n".
              "{$this->footer}\n".
              "</footer>\n". 
              "</body>\n".
              "</html>";  
            
  }
  
}

?>