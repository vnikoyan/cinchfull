<?php
  /**
  * Template Name: Contact Us
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
    <section class="relative" style="background-image: url('/wp-content/uploads/ContactUs_bg.svg'); background-repeat: no-repeat; background-size: cover;">
      <div class="max-w-max-content mx-auto grid md:grid-cols-2 items-center gap-4 md:gap-32 px-3 pt-32 lg:pt-48">
        <div class=" pb-10 lg:pb-0">
          <?php if(get_field('contact_section1_title',$post->ID)) { ?>
            <h1 class="text-3xl lg:text-5xl font-bold"><?php echo get_field('contact_section1_title',$post->ID); ?></h1>
          <?php } ?>
          <?php if(get_field('contact_section1_content',$post->ID)) { ?>
            <p class="mt-6 font-semibold"><?php echo get_field('contact_section1_content',$post->ID); ?></p>
          <?php } ?>
          <div class="p-8 mt-8" style = "background: #FFFFFF;box-shadow: 0px 0px 69.2868px rgba(0, 0, 0, 0.1);border-radius: 16px;">
            <h5 class="text-secondary font-bold">Support Email</h5>
            <p class="mt-2 font-semibold">support@cinchshare.com </p>
          </div>
        </div>
        <div class = "contact_form">
          <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
        </div>
      </div>
    </section>

    <section class="px-3">
      <div class="relative max-w-max-content pt-28 pb-32 md:pb-60 mt-5 mx-auto flex flex-col items-center px-3 sm:mt-20" style="background-image: url('/wp-content/uploads/Mask-Group-1.svg'); background-size: cover;">
        <?php if(get_field('contact_section2_title',$post->ID)) { ?>
          <h2 class="text-3xl md:text-5xl font-bold text-center relative z-10 "><?php echo get_field('contact_section2_title',$post->ID); ?></h2>
        <?php } ?>
        <?php if(get_field('contact_section2_content',$post->ID)) { ?>
          <p class="font-semibold text-center max-w-2xl mt-5 lg:mt-10 relative z-10 "><?php echo get_field('contact_section2_content',$post->ID); ?></p>
        <?php } ?>
        
        <a target="_blank" rel="noreferrer" href="<?php echo get_field('contact_section2_button_link',$post->ID); ?>">
          <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-6 w-40 relative z-10 "><?php echo get_field('contact_section2_button',$post->ID); ?></button>
        </a>
        <img class="w-full md:max-w-3xl px-3 inset-x-1/2 z-0 bottom-0 absolute" alt="" src="<?php echo get_field('contact_section2_image',$post->ID); ?>" style="transform: translateX(-50%);">
      </div>
    </section>

    <section class="w-full relative flex items-center justify-center mt-20 lg:mt-32 mb-24 lg:mb-60 px-3">
      <div class="z-20 flex flex-col items-center ">
        <div class="flex flex-col items-center pb-10 lg:pb-20">
          <?php if(get_field('contact_section3_title',$post->ID)) { ?>
            <h2 class="text-3xl xl:text-5xl font-bold text-center "><?php echo get_field('contact_section3_title',$post->ID); ?></h2>
          <?php } ?>
          <?php if(get_field('contact_section3_content',$post->ID)) { ?>
            <p class="max-w-2xl text-center mt-6 font-semibold"><?php echo get_field('contact_section3_content',$post->ID); ?></p>
          <?php } ?>
        </div>
        <div class="grid justify-center grid-cols-2 sm:grid-cols-3 md:grid-cols-7 gap-8 xl:gap-20">
          <?php if(get_field('schedule_post_post',$post->ID)){
            while(the_repeater_field('schedule_post_post', $post->ID) ) { ?>
              <div class="flex flex-col flex-wrap items-center">
                <div class="border border-black border-opacity-10 rounded-full w-16 h-16 p-3.5 flex items-center justify-center mb-2">
                <?php if(get_sub_field('schedule_post_icon',$post->ID)) { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 " src="<?php echo get_sub_field('schedule_post_icon',$post->ID); ?>" alt="">
                <?php } ?>
                </div>
                <?php if(get_sub_field('schedule_post_content',$post->ID)) { ?>
                  <p class="text-[#9C90B5]"><?php echo get_sub_field('schedule_post_content',$post->ID); ?></p>
                <?php } ?>
                <?php if(get_sub_field('schedule_post_text',$post->ID)) { ?>
                  <p class="text-xs text-[#5433ED]"><?php echo get_sub_field('schedule_post_text',$post->ID); ?></p>
                <?php } ?>
                
              </div>
            <?php }} 
          ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>
