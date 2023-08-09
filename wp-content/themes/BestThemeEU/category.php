<?php get_header(); ?> 

<section class="blog">
<?php if ( have_posts() ) : ?>
  <p class="blog-author">Blog Posts written in category of: <strong><?php single_term_title(); ?></strong></p>
<?php


while ( have_posts() ) : the_post(); ?>
  
  <h3 class="blog__title"><a class="blog__title-link" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>

  <?php if(has_post_thumbnail()) { ?>

   <?php } ?>

   <div class="blog__image-container"><a href="<?php the_permalink(); ?>"><?php
  the_post_thumbnail('thumbnail');
  ?></a></div> <div class="blog__content"> 


  <?php
  if (has_excerpt()) {
    echo get_the_excerpt();
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

<?php get_footer(); ?>