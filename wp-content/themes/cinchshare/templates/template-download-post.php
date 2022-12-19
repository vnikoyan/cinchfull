<?php
   /**
    * Template Name: Download Post
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
    <?php
      $url= $_SERVER['REQUEST_URI'];   
      if (str_contains($url, 'postid=') && !empty(explode('postid=', $url)[1])) {
        $postId = explode('postid=', $url)[1]; ?>
        <section class="relative z-10 max-w-6xl w-full mx-auto pt-28 lg:pt-36 2xl:pt-36 pb-28 lg:pb-60 px-3 items-center md:grid grid-cols-2 gap-8 ">
          <div>
            <?php if (has_post_thumbnail( $postId ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $postId ), 'single-post-thumbnail' ); ?>
              <img class="" alt="" src="<?php echo $image[0]; ?>">
            <?php endif; ?>
          </div>
          <div class="py-14 px-3 lg:px-10 text-center rounded-lg drop-shadow-xl" style="background: linear-gradient(rgb(84, 51, 237), rgb(43, 212, 217));">
            <h3 class="text-secondary text-3xl md:text-4xl font-bold">Free</h3>
            <h3 class="text-white text-3xl md:text-4xl font-bold"><?php echo get_the_title($postId); ?></h3>
            <p class="text-white pt-12"><?php echo get_field('post_download_description', $postId); ?> </p>
            <div class="pt-16 download_form">
              <?php echo do_shortcode('[gravityform id="6" title="false"]'); ?>
            </div>
          </div>
        </section>
      <?php } else { ?>
        <div class="w-40 h-[50vh]"></div>
      <?php }
    ?>

    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>