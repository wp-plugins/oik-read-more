<?php // (C) Copyright Bobbing Wide 2014

/** 
 * Return the next unique ID for the read_more selector
 */
function oik_rm_id() { 
  global $oik_rm_id; 
  if ( is_null( $oik_rm_id ) ) {
    $oik_rm_id = 0;
  }
  $oik_rm_id++;
  return( "bw_more-$oik_rm_id" );
}

/**
 * Implement [bw_more] shortcode for a jQuery read more link
 *
 * Note: This method may hide a lot of other content that's added by other plugins implementing the 'the_content' filter.
 *
 * Note: This version simply hides the read more link. 
 * It shouldn't take much to include a read less button which reverts the processing, 
 * although there could be a problem with slideToggle logic, which may be needed 
 * but didn't appear to work when multiple bw_more shortcodes were implemented in a post.
 *
 * @param array $atts - shortcode parameters
 * @param string $content - not expected
 * @param string $tag - not expected
 */
function oik_rm( $atts=null, $content=null, $tag=null ) {
  $text = bw_array_get_from( $atts, "0,read_more", "read more" );
  $class = bw_array_get( $atts, "class", null );
  oik_require( "includes/bw_jquery.inc" );
  $selector = oik_rm_id();
  bw_jquery_af( "div.bw_read_more#$selector", "click" , "span.bw_button#$selector", "hide" );
  bw_jquery_af( "div.bw_read_more#$selector", "click" , "div.bw_more#$selector", "slideDown" );
  sdiv( "bw_read_more", $selector );
  span( "button art-button bw_button $class", $selector );
  e( $text );
  epan();
  stag( 'div', "bw_more", $selector, kv( "style", "display:none;" ) );
  
  add_filter( "the_content", "oik_rm_end", 9999 );
  return( bw_ret() );
}
  
/**
 * Append the final div tags for the hidden content.
 *
 * @param string $content - the HTML content
 * @return string the content with the appended div tag
 */
function oik_rm_end( $content ) {
  static $done = 0;
  global $oik_rm_id;
  $todo = $oik_rm_id - $done;
  while ( $todo ) { 
    $content .= "<!-- bw_more_end --></div>";
    $todo--;
  }
  $done = $oik_rm_id;
  // remove_filter( "bw_more_end" );
  return( $content );
}
 
/**
 * Help hook for [bw_more] shortcode
 */
function bw_more__help( $shortcode="bw_more" ) {
  return( "Hide remaining content behind 'read more' button" );
}

/**
 * Syntax hook for [bw_more] shortcode
 */
function bw_more__syntax( $shortcode="bw_more" ) {
  $syntax = array( "read_more" => bw_skv( "read more", "<i>text</i>", "Text for read more button" )
                 );
  return( $syntax );
}
                 
