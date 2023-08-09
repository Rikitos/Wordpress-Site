<?php
get_header();

?>

<section class="blog">
<?php
$paged = (get_query_var('paged', 1) ? get_query_var('paged') : 1);
$homepagePosts = new WP_Query(array(
  'paged' => get_query_var('paged', 1),
  'post_type' => 'post',
  // 'posts_per_page' => 2,
  'orderby' => 'date',
  'order' => 'DESC',
));

if($homepagePosts->have_posts()) :
  while ($homepagePosts->have_posts()) : $homepagePosts->the_post(); 

  get_template_part('template-parts/content-blog');

endwhile;
wp_reset_postdata();
else : 
  echo 'No Posts found';
endif;
?> <div class="blog__pagination"><?php


echo paginate_links();

?>
</div>
</section>
<?php
get_footer();
?>