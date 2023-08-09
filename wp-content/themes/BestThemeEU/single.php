<?php 
  get_header();
  ?> 
   <?php
if (have_posts()) {
  while(have_posts()) {
    the_post(); ?>
<section class="article">

  <div class="article__image-container">
    <?php the_post_thumbnail('full'); ?>
  </div>

  <div class="article__description">
    <h1 class="article__description-title">
      <?php the_title(); ?>
    </h1>
    <div class="article__description-author">
      by
      <?php the_author_posts_link(); ?>
    </div>
    <div class="article__description-time">
      <?php the_time('Y/m/d \a\t g:i A'); ?>
    </div>
    <div class="article__description-category">
      in <?php echo get_the_category_list(', '); ?>
    </div>
    <div class="article__description-tags">
      <?php the_tags(); ?>
    </div>
  </div>

  <div class="article__content">
    <?php the_content(); ?>
  </div>

  <div class="article__links">
    <span class="article__links-previous"><?php previous_post_link();?> </span>
    <span class="article__links-next"><?php next_post_link(); ?> </span>
  </div>
  <?php if ( comments_open() || get_comments_number() ) { ?>
  <div class="article__comments">
    <?php comments_template(); ?>
  </div> <?php
  }
?>
</section>
<?php
  }
}
get_footer();

?>








