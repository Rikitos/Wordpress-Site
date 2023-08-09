<?php if(is_page('cat-generator')) { ?>
  <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header__container">
      <h1><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo() ?></a></h1>
      <div class="site-header__container-menu-group">
        <nav class="main-navigation">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'headerMainMenu',
            )
          );
          ?>
        </nav>

      </div>
      <div class="site-header__hamburger"> 
        <div class="hamburger site-header__hamburger-one"></div>
        <div class="hamburger site-header__hamburger-two"></div>
        <div class="hamburger site-header__hamburger-three"></div>
      </div>

    </div>

  </header>
  <div class="main">
<?php
} else get_header();
?>
<?php




if(is_page('cat-generator')) {
  get_template_part('template-parts/content-cat');
  ?> 
  <?php
} else {
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      ?> <h3><?php the_title(); ?> </h3> 
      <div><?php the_content(); ?> </div> <?php
    }
  }
}
?>
<?php
get_footer();
?>