<?php
   /**
    * Template Name: Affiliate Application
    * Template Post Type: post, page
    *
    * @package WordPress
    * @since 1.0
    */
   ?>
<?php 
  get_header();
  if(have_posts()) { 
   the_post();
  }
?>
  <main id="site-content" role="main">
    <div class="relative z-10 max-w-6xl w-full mx-auto pt-28 lg:pt-36 2xl:pt-60 pb-28 px-3">
      <img alt="" class="w-full mb-5" src="<?php echo get_field('affiliate_application_image', $post->ID); ?>">
      <h1 class="text-3xl md:text-4xl font-bold text-center"><?php echo get_field('affiliate_application_title', $post->ID); ?></h1>

      <div class="aff_form px-6 md:px-12 py-14 drop-shadow-xl rounded-lg bg-white mt-10 lg:mb-28">
        <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
      </div>
    </div>
  </main>
<?php get_footer();?>