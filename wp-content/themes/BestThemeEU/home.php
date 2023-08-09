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
  while ($homepagePosts->have_posts()) : $homepagePosts->the_post(); ?>
  
  <h3 class="blog__title"><a class="blog__title-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>

  <?php if(has_post_thumbnail()) { ?>

   <?php } ?>

   <div class="blog__image-container"><a href="<?php the_permalink(); ?>"><?php
  the_post_thumbnail('thumbnail');
  // the_content();
  ?></a></div> <div class="blog__content"> 


  <?php 
  if (has_excerpt()) {
    the_excerpt();
  } else {
    echo wp_trim_words(get_the_content(), 18);
  }
  ?> <a class="blog__description-link" href="<?php the_permalink(); ?>">Read more</a>
 </div> <?php
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