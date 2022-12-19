<?php
   /**
    * Template Name: Support
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
    <section class="relative w-full pt-32 2xl:pt-60">
      <img alt="" class="absolute w-full top-32 md:top-14 lg:top-0 left-0" src="/wp-content/uploads/support-page-hero-bg.svg">
      <div class="relative z-10 max-w-max-content mx-auto flex flex-col items-center px-3">
        <?php if(get_field('support_section1_title',$post->ID)) { ?>
          <h1 class="text-3xl font-bold"><?php echo get_field('support_section1_title',$post->ID); ?></h1>
        <?php } ?>
        <div class="w-20 h-1 rounded-full bg-secondary mt-4"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-12">
          <?php if(get_field('support_section1_item',$post->ID)){
            while(the_repeater_field('support_section1_item', $post->ID) ) { ?>
              <div class="w-full bg-white shadow-custom p-4 lg:p-8 rounded-xl">
                <?php if(get_sub_field('support_section1_icon',$post->ID)) { ?>
                  <img class="w-20 p-4 rounded-lg" src="<?php echo get_sub_field('support_section1_icon',$post->ID); ?>" alt="<?php echo get_sub_field('support_section1_heading',$post->ID); ?>" style="background-color: rgb(243, 252, 252);">
                <?php } ?>
                <?php if(get_sub_field('support_section1_heading',$post->ID)) { ?>
                  <p class="text-text-black text-lg font-semibold mt-6"><?php echo get_sub_field('support_section1_heading',$post->ID); ?></p>
                <?php } ?>
                <a href="<?php echo get_sub_field('support_section1_link',$post->ID); ?>" target="_blank" class="text-text-light mt-4 underline block " rel="noreferrer"><?php echo get_sub_field('support_section1_heading',$post->ID); ?></a>
              </div>
            <?php }} 
          ?>
        </div>
      </div>
    </section>

    <section class="px-3 pb-20">
      <div class="relative max-w-max-content pt-28 pb-32 md:pb-60 mx-auto flex flex-col items-center px-3 sm:mt-20" style="background-image: url('/wp-content/uploads/community-map.png'); background-size: cover;">
        <?php if(get_field('support_section2_title',$post->ID)) { ?>
          <h2 class="text-3xl md:text-4xl font-bold text-center relative z-10 "><?php echo get_field('support_section2_title',$post->ID); ?></h2>
        <?php } ?>
        <?php if(get_field('support_section2_content',$post->ID)) { ?>
          <p class="font-semibold text-center max-w-2xl mt-5 lg:mt-10 relative z-10"><?php echo get_field('support_section2_content',$post->ID); ?></p>
        <?php } ?>
        <a href="<?php echo get_field('support_section2_button_link',$post->ID); ?>">
          <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-6 w-40 relative z-10"><?php echo get_field('support_section2_button',$post->ID); ?></button>
        </a>
        <?php if(get_field('support_section2_image',$post->ID)) { ?>
          <img class="w-full md:max-w-3xl px-3 inset-x-1/2 z-0 bottom-0 absolute" alt="" src="<?php echo get_field('support_section2_image',$post->ID); ?>" style="transform: translateX(-50%);">
        <?php } ?>
      </div>
    </section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>