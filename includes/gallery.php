<?php
function ptc_gallery_filter( $output = '', $atts, $content = false, $tag = false ) {

  $gallery = '<div class="freetile">';

  $ids = explode(',', $atts['ids']);
  foreach ($ids as $key => $id) {
    $gallery .= "<div class='image freetile-image'>\n";
    $gallery .= wp_get_attachment_image( $id, 'large' );
    $gallery .= "</div>\n";
  }

  $gallery .= '</div>';
  return $gallery;
}

add_filter( 'post_gallery', 'ptc_gallery_filter', 10, 4 );
?>