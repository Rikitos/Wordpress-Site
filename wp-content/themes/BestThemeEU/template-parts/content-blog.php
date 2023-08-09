  
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
</div> 