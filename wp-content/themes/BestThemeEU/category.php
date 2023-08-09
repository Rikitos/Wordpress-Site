<?php get_header(); ?> 

<section class="blog">
<?php if ( have_posts() ) : ?>
  <p class="blog-author">Blog Posts written in category of: <strong><?php single_term_title(); ?></strong></p>
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