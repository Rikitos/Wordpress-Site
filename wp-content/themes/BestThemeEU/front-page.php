<?php
get_header();
?>

<?php
if(have_posts()) {
  while(have_posts()) {
    the_post();
    ?> <h3><?php the_title(); ?> </h3> 
    <div><?php the_content(); ?> </div> <?php
  }
}
?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper('.swiper', {

  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 5,
  spaceBetween: 50,
  loop: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loopedSlides: 1,

  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',

  // },
});

});
</script>

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <?php $slides = get_field('slider'); ?>
    <!-- <div class="swiper-slide"> -->

      
      <?php 
        if ( have_rows('slider')): 
          while( have_rows('slider') ) : the_row(); ?>
            <div class="swiper-slide">
              <?php 
              // echo print_r(get_sub_field('slider_img')); 
              ?>
              <img src="<?php echo get_sub_field('slider_img')['sizes']['medium']; ?>" alt="">
          </div> 
          <?php
        endwhile;
      endif;

      ?>


    <!-- </div> -->
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

</div>
<?php
get_footer();
?>