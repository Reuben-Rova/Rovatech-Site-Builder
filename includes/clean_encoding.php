<?php   

/*==============================================================================
* File: clean_encoding.php                                      
* Author: Alan Whipple
* Copyright: Alan Whipple
* Purpose: Constructs web pages for this site based on the WebPage class.
* Origin: 20110604
* Revision: 20110504
* notes: http://alanwhipple.com/2011/06/04/php-clean-encoding-issues-smart-curly-quotes-em-dashes/
* ============================================================================*/

/**
 * cleanEncoding deals with pesky characters like curly smart quotes and em dashes (and some other encoding related problems)
 *
 * @param string $text Text string to cleanup / convert
 * @param string $type 'standard' for standard characters, 'reference' for decimal numerical character reference
 *
 * @return $text Cleaned up UTF-8 string
 */
function cleanEncoding( $text, $type='standard' ){
    // determine the encoding before we touch it
    $encoding = mb_detect_encoding($text, 'UTF-8, ISO-8859-1');
    // The characters to output
    if ( $type=='standard' ){
        $outp_chr = array('...',          "'",            "'",            '"',            '"',            '�',            '-',            '-'); // run of the mill standard characters
    } elseif ( $type=='reference' ) {
        $outp_chr = array('&#8230;',      '&#8216;',      '&#8217;',      '&#8220;',      '&#8221;',      '&#8226;',      '&#8211;',      '&#8212;'); // decimal numerical character references
    }
    // The characters to replace (purposely indented for comparison)
        $utf8_chr = array("\xe2\x80\xa6", "\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9c", "\xe2\x80\x9d", '\xe2\x80\xa2', "\xe2\x80\x93", "\xe2\x80\x94"); // UTF-8 hex characters
        $winc_chr = array(chr(133),       chr(145),       chr(146),       chr(147),       chr(148),       chr(149),       chr(150),       chr(151)); // ASCII characters (found in Windows-1252)
    // First, replace UTF-8 characters.
    $text = str_replace( $utf8_chr, $outp_chr, $text);
    // Next, replace Windows-1252 characters.
    $text = str_replace( $winc_chr, $outp_chr, $text);
    // even if the string seems to be UTF-8, we can't trust it, so convert it to UTF-8 anyway
    $text = mb_convert_encoding($text, 'UTF-8', $encoding);
    return $text;
}

?>