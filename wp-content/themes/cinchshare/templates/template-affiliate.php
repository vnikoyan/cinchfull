<?php
   /**
    * Template Name: Affiliate
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
    <section class="relative w-full pt-28 lg:pt-36 2xl:pt-60 pb-16">
      <img alt="" class="absolute w-full top-32 md:top-14 lg:top-0 left-0" src="/wp-content/uploads/ambassdor-hero-section.svg">
      <div class="relative z-10 max-w-screen-2xl w-full mx-auto flex flex-col items-center px-3">
        <?php if(get_field('affiliate_section1_title',$post->ID)) { ?>
          <h1 class="text-3xl md:text-4xl font-bold"><?php echo get_field('affiliate_section1_title',$post->ID); ?></h1>
        <?php } ?>
        <?php if(get_field('affiliate_section1_text',$post->ID)) { ?>
          <p class="mt-3 text-sm font-semibold"><?php echo get_field('affiliate_section1_text',$post->ID); ?></p>
        <?php } ?>
        <p class="mt-5 lg:mt-10 text-primary font-semibold">Affiliate | Collaborators | Events</p>
        <a href="/affiliate-application">
          <button type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-56 mt-5"><?php echo get_field('affiliate_section1_button',$post->ID); ?></button>
        </a>
      </div>
    </section>

    <section class="flex flex-col lg:flex-row items-start w-full mx-auto lg:mt-32 px-4">
      <div class="relative w-full lg:w-7/12 md:pr-16">
        <img class="w-full" alt="" src="/wp-content/uploads/Ambasador_Section2_bg.svg">
        <?php if(get_field('affiliate_section2_image',$post->ID)) { ?>
          <img class="absolute top-0 bottom-0 left-0 right-0 m-auto w-9/12" alt="" src="<?php echo get_field('affiliate_section2_image',$post->ID); ?>">
        <?php } ?>
      </div>
      <div class="w-full lg:w-4/12 2xl:lg:w-3/12">
        
        <?php if(get_field('affiliate_section2_title',$post->ID)) { ?>
          <h2 class="mt-8 text-xl lg:text-3xl font-bold"><?php echo get_field('affiliate_section2_title',$post->ID); ?></h2>
        <?php } ?>
        <div class="w-20 h-1 rounded-full bg-secondary mt-4"></div>
        <?php if(get_field('affiliate_section2_content',$post->ID)) { ?>
          <p class="mt-6"><?php echo get_field('affiliate_section2_content',$post->ID); ?></p>
        <?php } ?>
        <a href = "/affiliate-application">
          <button  class="border-primary text-primary hover:scale-[1.03] active:scale-[0.97] border px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_field('affiliate_section2_button',$post->ID); ?></button>
        </a>
      </div>
    </section>

    <section class="flex flex-col-reverse lg:flex-row items-start justify-end w-full mx-auto mt-16 lg:mt-32 px-4" style="margin-bottom: 230px;">
      <div class="w-full lg:w-4/12">
        <?php if(get_field('affiliate_section3_title',$post->ID)) { ?>
          <h2 class="mt-8 text-xl lg:text-3xl font-bold"><?php echo get_field('affiliate_section3_title',$post->ID); ?></h2>
        <?php } ?>
        <div class="w-20 h-1 rounded-full bg-secondary mt-4"></div>
        <div class="mt-6">
        <?php if(get_field('affiliate_section3_content',$post->ID)) { ?>
          <p><?php echo get_field('affiliate_section3_content',$post->ID); ?></p>
        <?php } ?>
        </div>
        <a href="<?php echo get_field('affiliate_section3_button_link',$post->ID); ?>">
          <button class="border-primary text-primary hover:scale-[1.03] active:scale-[0.97] border px-4 py-2.5 rounded-lg font-bold mt-10 w-40"><?php echo get_field('affiliate_section3_button',$post->ID); ?></button>
        </a>
      </div>
      <div class="relative w-full lg:w-7/12 md:pl-16">
        <img class="w-full" alt="" src="/wp-content/uploads/Ambasador_Section3_bg.svg">
        <?php if(get_field('affiliate_section3_image',$post->ID)) { ?>
          <img class="absolute top-0 bottom-0 left-0 right-0 m-auto w-9/12" alt="" src="<?php echo get_field('affiliate_section3_image',$post->ID); ?>">
        <?php } ?>
      </div>
    </section>
  </main>
<?php get_footer();?>