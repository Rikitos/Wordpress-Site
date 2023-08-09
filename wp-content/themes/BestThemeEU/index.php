<?php
get_header();
?> dsadsa <?php

if (have_posts()) {
  while(have_posts()) {
    the_post();
    the_title();
    the_content();
  }
}



get_footer();
?>