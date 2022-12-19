<?php
   /**
    * Template Name: Home
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
  <?php get_template_part( 'template-parts/content/content', 'hero' ); ?>
  <?php get_template_part( 'template-parts/content/content', 'schedule' ); ?>
  
  <section class="w-full relative flex flex-col items-center justify-center px-6 xp:px-0">
    <div class="max-w-max-content bg-gradient-to-b px-3 from-primary to-secondary w-full rounded-3xl flex flex-col items-center pt-12 pb-44">
      <?php if(get_field('home_section3_title',$post->ID)) { ?>
        <h2 class="text-3xl xl:text-5xl text-center font-bold"><?php echo get_field('home_section3_title',$post->ID); ?></h2>
      <?php } ?>
      <?php if(get_field('home_section3_content',$post->ID)) { ?>
        <p class="text-base max-w-3xl text-center text-white mt-4 xl:mt-8"><?php echo get_field('home_section3_content',$post->ID); ?></p>
      <?php } ?>
      <?php 
          if( have_rows('home_section3_button') ):
          while( have_rows('home_section3_button') ): the_row();
      ?>
        <a href = "<?php echo get_sub_field('home_section3_button_link',$post->ID); ?>" type="button" class="btns_filled_secondary text-center  bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-56 mt-6 lg:mt-12"><?php echo get_sub_field('home_section3_button_text',$post->ID); ?></a>
        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
    <div class="max-w-max-content w-full relative flex justify-center -top-28">
      <img alt="" class="hide_on_mobile relative w-full object-contain md:hidden" src="/wp-content/uploads/Home_Section3-bg.svg">
      <?php if(get_field('home_section3_image',$post->ID)) { 

        $value = get_field('home_section3_image',$post->ID);

        if($value && $value['type'] =='video') { ?>
            <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" class="home_on_mobile z-10 absolute w-9/12 shadow-sm" style="width: 100%; height: 100%;"></video>
          <?php } else { ?>
            <img alt="" class="home_on_mobile z-10 absolute w-9/12 shadow-sm" src="<?php echo $value['url']; ?>">
          <?php }?>
      <?php } ?>
    </div>
  </section>

  <section class="mt-12 max-w-max-content w-full mx-auto flex flex-col items-center px-6 xl:px-0">
    <?php if(get_field('home_section4_title',$post->ID)) { ?>
      <h2 class="text-3xl xl:text-[2.875rem] font-bold text-center mb-6 xl:mb-16"><?php echo get_field('home_section4_title',$post->ID); ?></h2>
    <?php } ?>
    
    <div class="flex flex-wrap -mx-2 mb-4 xl:hidden button_content justify-center">
      <button class="border border-secondary  rounded-full  py-1 px-2 text-sm md:taxt-base md:px-5 m-2 bg-secondary  text-white" data = "batch_posting">Batch Posting</button>
      <button class="border border-secondary  rounded-full  py-1 px-2 text-sm md:taxt-base md:px-5 m-2 text-secondary bg-white" data = "cloud_drive">Cloud Drive</button>
      <button class="border border-secondary  rounded-full  py-1 px-2 text-sm md:taxt-base md:px-5 m-2  text-secondary bg-white" data = "textclips">TextClips</button>
    </div>
    <div class="w-full flex flex-col-reverse xl:flex-row justify-between max-w-max-content mx-auto">
      <div class ="flex flex-col max-w-3xl xl:w-[45%] mx-auto xl:pr-16">
        <div class="button_content flex flex-wrap -mx-2 hidden xl:block ">
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2 bg-secondary  text-white" data = "batch_posting">Batch Posting</button>
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2 text-secondary bg-white" data = "cloud_drive">Cloud Drive</button>
          <button class="border border-secondary  rounded-full  py-1 px-5 m-2  text-secondary bg-white" data = "textclips">TextClips</button>
        </div>
        <div class="text_content">
          <div style="opacity: 1;" class ="hidden active" data = "batch_posting">
            <?php 
              if( have_rows('best_posting') ):
                while( have_rows('best_posting') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('best_posting_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7 mb-8"><?php echo get_sub_field('best_posting_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('best_posting_link',$post->ID); ?>" type="button" class="btns_filled_primary text-center bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('best_posting_button',$post->ID); ?></a>
              
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div style="opacity: 1; " class ="hidden" data ="cloud_drive">
            <?php 
              if( have_rows('cloud_drive') ):
                while( have_rows('cloud_drive') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('cloud_drive_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7 mb-8"><?php echo get_sub_field('cloud_drive_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('cloud_drive_link',$post->ID); ?>" type="button" class="btns_filled_primary text-center bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('cloud_drive_button',$post->ID); ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div style="opacity: 1;" class = "hidden" data ="textclips">
            <?php 
              if( have_rows('textclips') ):
                while( have_rows('textclips') ): the_row();
            ?>
                <p class="mt-8 lg:mt-12 text-2xl lg:text-3xl font-bold"><?php echo get_sub_field('textclips_title',$post->ID); ?></p>
                <p class="mt-6 lg:mt-8 font-semibold leading-7 mb-8"><?php echo get_sub_field('textclips_content',$post->ID); ?></p>
                <a href = "<?php echo get_sub_field('textclips_link',$post->ID); ?>" type="button" class="btns_filled_primary text-center bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 w-40"><?php echo get_sub_field('textclips_button',$post->ID); ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="w-full max-w-3xl mx-auto xl:w-3/5  media_content">
        <div class="w-full hidden active" data = "batch_posting">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('best_posting') ):
                while( have_rows('best_posting') ): the_row();
                
                $value = get_sub_field('best_posting_media', $post->ID);

                if($value && $value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url'];?>" muted  preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url'];?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="w-full hidden" data = "cloud_drive">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('cloud_drive') ):
                while( have_rows('cloud_drive') ): the_row();
                
                $value = get_sub_field('cloud_drive_media', $post->ID);
                if($value && $value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url']; ?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="w-full hidden" data = "textclips">
          <div class="flex items-center justify-center w-full" style="opacity: 1; transform: none;">
            <?php 
              if( have_rows('textclips') ):
                while( have_rows('textclips') ): the_row();
                
                $value = get_sub_field('textclips_media', $post->ID);
                if($value && $value['type'] =='video') { ?>
                  <div class="animatedVideo" style="width: 100%; height: 100%;">
                    <video src="<?php echo $value['url']; ?>" muted preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                  </div>
               <?php } else { ?>
                  <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url']; ?>" alt="">
                <?php }?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php get_template_part( 'template-parts/content/content', 'robust' ); ?>

  <section class="max-w-max-content mx-auto flex flex-col xl:flex-row items-center xl:items-start px-6 xl:px-0 mt-0 xl:mt-48">
    <div class="max-w-md mt-8 flex flex-col items-center xl:items-start mb-8 xl:mr-16">
      <?php if(get_field('home_section5_title',$post->ID)) { ?>
        <h2 class="mt-8 text-3xl xl:text-[2.875rem] font-bold"><?php echo get_field('home_section5_title',$post->ID); ?></h2>
      <?php } ?>
      
      <?php if(get_field('home_section5_content',$post->ID)) { ?>
        <p class="mt-6 font-semibold text-center xl:text-left"><?php echo get_field('home_section5_content',$post->ID); ?></p>
      <?php } ?>
      
      <?php if(get_field('home_section5_button',$post->ID)) { ?>
        <a href ="<?php echo get_field('home_section5_link',$post->ID); ?>" type="button" class="btns_filled_primary   hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-10 px-8"><?php echo get_field('home_section5_button',$post->ID); ?></a>
      <?php } ?>
      
    </div>
    <div class="s_here_foryou grid grid-cols-2 w-full sm:grid-cols-3 justify-center gap-y-8 md:gap-x-6  mt-12 xl:mt-0">
      <?php if(get_field('home_section5_item',$post->ID)){
        while(the_repeater_field('home_section5_item', $post->ID) ) { ?>
          <div class="flex flex-col items-center">
            <img alt="" class="w-20 p-4 rounded-lg mb-4" src="<?php echo get_sub_field('home_section5_image',$post->ID); ?>" style="background-color: rgb(243, 252, 252);">
            <p class="w-36 text-center font-semibold text-[18px] sm:text-xl"><?php echo get_sub_field('home_section5_text',$post->ID); ?></p>
          </div>
        <?php ; }} 
      ?>
    </div>
  </section>

  <section class="w-full mt-10 lg:mt-40 relative home-sec6" style="background: url('/wp-content/uploads/blue-bg.png') center center / cover no-repeat;">
    <?php if(get_field('home_section7_image',$post->ID)) { ?>
      <img alt="" class="w-full absolute bottom-0 object-contain mx-auto" src="<?php echo get_field('home_section7_image',$post->ID); ?>" style="max-width: 1130px; left: 50%; transform: translateX(-50%);">
    <?php } ?>
    <div class="cin-section6 flex flex-col text-center max-w-3xl mx-auto px-3 relative z-10">
      <?php if(get_field('home_section7_title',$post->ID)) { ?>
        <h2 class="text-3xl xl:text-5xl font-bold text-secondary text-center"><?php echo get_field('home_section7_title',$post->ID); ?></h2>
      <?php } ?>

      <?php if(get_field('home_section7_content',$post->ID)) { ?>
        <p class="text-center text-white mt-6"><?php echo get_field('home_section7_content',$post->ID); ?></p>
      <?php } ?>

      
      <div class="flex justify-center mt-8">
        <?php if(get_field('home_section7_icon1',$post->ID)) { ?>
          <a href="https://apps.apple.com/us/app/cinchshare/id1229700586" rel="noreferrer" target="_blank">
            <div class="mx-4">
              <button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold undefined">
                <img src="<?php echo get_field('home_section7_icon1',$post->ID); ?>">
              </button>
            </div>
          </a>
        <?php } ?>

        <a href="https://play.google.com/store/apps/details?id=com.cinchshare" rel="noreferrer" target="_blank">
          <?php if(get_field('home_section7_icon2',$post->ID)) { ?>
            <div class="mx-4">
              <button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold undefined">
              <img src="<?php echo get_field('home_section7_icon2',$post->ID); ?>">
              </button>
            </div>
          <?php } ?>
        </a>
      </div>
    </div>
  </section>

  <section class="w-full mt-[200px] relative max-w-max-content mx-auto grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 justify-center 2xl:justify-between items-center flex-wrap gap-x-8 gap-y-20 px-6 xl:px-0">
    <?php if(get_field('home_section8_counter',$post->ID)){
      while(the_repeater_field('home_section8_counter', $post->ID) ) { ?>
        <div class=" flex flex-col items-center bg-white rounded-xl relative drop-shadow-[0_35px_20px_#0D10250F] pb-8 px-3">
          <?php if(get_sub_field('home_section8_image',$post->ID)) { ?>
            <img alt="" class="-top-10 relative" src="<?php echo get_sub_field('home_section8_image',$post->ID); ?>">
          <?php } ?>
          <div class="text-3xl lg:text-5xl font-bold flex" style = "font-family:Nunito, sans-serif">
            <?php if(get_sub_field('home_section8_number',$post->ID)) { ?>
              <span>
                <?php 
                  echo do_shortcode('[countup start="0" more options here]'.get_sub_field('home_section8_number',$post->ID).'[/countup]');
                ?>
              </span><?php echo get_sub_field('home_section8_units',$post->ID); ?>
            <?php } ?>
            </div>
          <?php if(get_sub_field('home_section8_text',$post->ID)) { ?>
            <p class="text-lg mt-2"><?php echo get_sub_field('home_section8_text',$post->ID); ?></p>
          <?php } ?>
        </div>
      <?php ; }} 
    ?>
  </section>

  <?php get_template_part( 'template-parts/content/content', 'reviews' ); ?>
  <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
</main>
<?php get_footer();?>