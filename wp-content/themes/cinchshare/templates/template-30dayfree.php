<?php
  /**
  * Template Name: 30 Day Free
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
    <div class="flex w-full">
      <div class="w-full lg:w-1/2 flex items-center justify-center lg:justify-end min-h-screen py-16">
        <div class="flex flex-col w-full max-w-2xl px-10 pt-10">
          <p class="text-4xl font-bold">Let’s get your</p>
          <p class="text-4xl font-bold text-primary">30-day free trial started</p>
          <div class = "signup_form">
            <?php echo do_shortcode('[gravityform id="7" title="false"]'); ?>
          </div>
        </div>
      </div>
      <div class="hidden lg:flex w-1/2 h-screen bg-gradient-to-b from-primary to-secondary rounded-bl-[10rem] items-center justify-center px-4">
        <img class="" src="/wp-content/uploads/signup.png" alt="">
      </div>
    </div>
  </main>
<?php get_footer();?>