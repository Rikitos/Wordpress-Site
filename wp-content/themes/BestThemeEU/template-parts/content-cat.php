<?php 
?>
<section class="Image-Generator">
  <h1 class="Image-Generator__title">Cat Generator</h1>
  <div class="Image-Generator__description">Generate random cat meme now</div>
  <div class="Image-Generator__button">
    <button class="Image-Generator__button-btn">Click</button>
  </div>
  <div>
    <img class ="Image-Generator__img" src="<?php echo get_theme_file_uri('/images/cat1.jpg'); ?>" alt="" data-url="<?php echo get_theme_file_uri() . '/images';?>">
  </div>
</section>
