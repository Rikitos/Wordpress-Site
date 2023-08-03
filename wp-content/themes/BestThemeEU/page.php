<?php
get_header();
?>
dsadsa
<?php

while(have_posts()) {
  the_post();
  the_content();
}

// $homepagePosts = new WP_Query(array(
//   'post_per_page' => 2
// ));

if(is_page('cat-generator')) {
  get_template_part('template-parts/content-cat');
  ?> 
  <div style="width: 150px; height: 150px; background-image: image-set(url('http://localhost/Wordpress-Site/wp-content/themes/BestThemeEU/images/cat.jpg') 1x, url('http://localhost/Wordpress-Site/wp-content/themes/BestThemeEU/images/cat2.jpg') 2x)"> </div>
  <div style="width: 500px; height: 500px; background-image: image-set(url('http://localhost/Wordpress-Site/wp-content/themes/BestThemeEU/images/cat.jpg') 1x, url('http://localhost/Wordpress-Site/wp-content/themes/BestThemeEU/images/cat2.jpg') 2x)"> </div>
  <?php
}
?>
<?php
get_footer();
?>