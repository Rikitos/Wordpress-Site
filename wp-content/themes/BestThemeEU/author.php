<?php get_header(); ?> 

<section class="blog">
  <p class="blog-author">Blog Posts written by <strong><?php the_author_posts_link(); ?></strong></p>
<?php if ( have_posts() ) : ?>
<?php


while ( have_posts() ) : the_post(); 

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

<?php get_footer(); ?>

