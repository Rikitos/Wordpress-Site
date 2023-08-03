<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Document</title>
  <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?> . /build/style.css"> -->
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header__container">
      <h1><a href="<?php echo site_url(); ?>">WordPress-site</a></h1>
      <div class="container__menu-group">
        <nav class="main-navigation">
          <ul>
            <li>
              <a href="<?php echo site_url(); ?>">Strona Główna</a>
            </li>
            <li>
              <a href="<?php echo get_theme_file_uri('/cat-generator') ?>">Generator</a>
            </li>
            <li>
              <a href="<?php echo get_theme_file_uri('/blog') ?>">Blog</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="main">