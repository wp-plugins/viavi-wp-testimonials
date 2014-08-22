<?php

$tm = '<div id="'.$colors_theme.'">';
$tm .= '<section class="WordPress_Testimonials-list slider-two style-'.$style.'">' . "\n";
$tm .= '<div class="sld-pagination-'.$style.' flr">
            <a href="#" class="previous disabled"><img src="' . plugins_url( 'images/arrow-left.png' , __FILE__ ) . '" border="0"></a>
            <a href="#" class="next"><img src="' . plugins_url( 'images/arrow-right.png' , __FILE__ ) . '" border="0"></a>
          </div>'."\n"; 
  $tm .= '<ul class="slides">' . "\n";
$counter = 1;
while( $WordPress_Testimonials->have_posts() ): $WordPress_Testimonials->the_post();
  $name = the_title('<div class="tm_author author-name vcard"><em>', '</em></div>', false);
  $position = get_post_meta(get_the_ID(), '_sub_title', true);
  $web_url = get_post_meta(get_the_ID(), '_website', true);
  $web_url_text = ( get_post_meta(get_the_ID(), '_website_text', true) != '' ) ? get_post_meta(get_the_ID(), '_website_text', true) : $web_url;
  
  $tm .= '<li class="WordPress_Testimonials-'.get_the_ID().'">' . "\n";
  $tm .= '<div class="WordPress_Testimonials">' . "\n";
  $tm .= '<div class="WordPress_Testimonials-content">' . apply_filters('the_content', get_the_content()) . '</div>' . "\n";
  $tm .= '<div class="WordPress_Testimonials-meta">' . "\n";
  if( has_post_thumbnail()){
   $tm .= '<div class="author-pic thumb-'.$thumb.'">' . get_the_post_thumbnail(get_the_ID(), 'tm-thumb') . '</div>' . "\n";
  }
  $tm .= $name . "\n";
  if($position) $tm .= '<span class="position">' . $position . '</span>' . "\n";
  if($web_url) $tm .= '<span class="website"><a href="'.$web_url.'" target="_blank">' . $web_url_text . '</a></span>' . "\n";
  $tm .= '</div>' . "\n";
  $tm .= '</div>' . "\n";
  $tm .= '</li>' . "\n";
                  
  $counter++;
endwhile;
$tm .= '</ul>' . "\n";
$tm .= '</section>' . "\n";   
$tm .= '</div>' . "\n";   
$tm .= '<script type="text/javascript">
         jQuery(document).ready(function() {
          jQuery(".slider-two").flexslider({
            selector: ".slides > li",
            animation: "'.$animation.'",
            slideshow: '.$autoslide.',         
            slideshowSpeed: '.$slideshowSpeed.',    
            animationSpeed: '.$animationSpeed.', 
            controlNav: false,
            directionNav: false,
            pauseOnHover: true,
            pauseOnAction: false,
          }).flexsliderManualDirectionControls();
        });
        </script>' . "\n";
?>