<?php
   /**
    * Template Name: Features
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
    <section class="bg-top bg-no-repeat bg-cover md:mb-20 relative">
      <img class="absolute hidden md:block h-full object-cover" src="/wp-content/uploads/features_bg-2.svg" style="z-index: -1; width: 100%;">
      <div class="pt-32 max-w-screen-2xl mx-auto flex flex-col items-center px-3">
        <?php if(get_field('features_section1_title',$post->ID)) { ?>
          <h1 class="text-3xl lg:text-5xl font-bold text-center xl:text-left"><?php echo get_field('features_section1_title',$post->ID); ?></h1>
        <?php } ?>

        <?php if(get_field('features_section1_content',$post->ID)) { ?>
          <p class="text-base lg:text-lg mt-8 font-semibold text-center xl:text-left"><?php echo get_field('features_section1_content',$post->ID); ?></p>
        <?php } ?>
        <?php if(get_field('features_section1_button',$post->ID)) { ?>
          <a href = "<?php echo get_field('features_section1_button_link',$post->ID); ?>" type="button" class="btns_filled_primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 px-8"><?php echo get_field('features_section1_button',$post->ID); ?></a>
        <?php } ?>
        <?php if(get_field('features_section1_image',$post->ID)) { ?>
          <img class="mt-12 lg:mt-24" src="<?php echo get_field('features_section1_image',$post->ID); ?>" style="max-width: 1172px; width: 100%; margin-bottom:-16px;">
        <?php } ?>
      </div>
    </section>

    <?php get_template_part( 'template-parts/content/content', 'schedule' ); ?>

    <?php get_template_part( 'template-parts/content/content', 'robust' ); ?>

    <section class="max-w-max-content w-full mx-auto flex flex-col items-center px-3 mt-32">
      <div class="flex flex-col items-center pb-10 lg:pb-24 ">
        <?php if(get_field('features_section4_title',$post->ID)) { ?>
          <h2 class="text-3xl xl:text-[2.875rem] font-bold text-center"><?php echo get_field('features_section4_title',$post->ID); ?></h2>
        <?php } ?> 
      </div>
      <div class="flex items-center flex-col lg:items-start lg:flex-row w-full ">
        <div class="f_unbeatable_button w-full md:w-[700px]">
          <?php if(get_field('features_section4_item',$post->ID)){
            $i =1 ; 
            while(the_repeater_field('features_section4_item', $post->ID) ) { ?>
              <div class="flex <?php if($i != 1 ) { echo 'opacity-60'; } ?>" style="cursor: pointer;" index = "<?php echo $i; ?>">
                <div class="bg-primary" style="min-width: 2px; max-width: 2px; margin-left: 1px; margin-right: 1px;"></div>
                <div class="ml-6 py-2">
                  <?php if(get_sub_field('features_section4_heading',$post->ID)) { ?>
                    <p class="text-2xl font-semibold"><?php echo get_sub_field('features_section4_heading',$post->ID); ?></p>
                  <?php } ?> 
                  <?php if(get_sub_field('features_section4_content',$post->ID)) { ?>
                    <p class="mt-2"><?php echo get_sub_field('features_section4_content',$post->ID); ?></p>
                  <?php } ?> 
                </div>
              </div>
            <?php $i++; }} 
          ?>
        </div>
        <div class = "w-full f_unbeatable_content ">
          <?php if(get_field('features_section4_item',$post->ID)){
            $j =1; 
            while(the_repeater_field('features_section4_item', $post->ID) ) { ?>
              <div class="w-full mt-8 lg:pl-12 <?php if($j != 1 ) { echo 'hidden'; } ?>" style="opacity: 1; transform: none;" index = "<?php echo $j; ?>">
                <div>
                  <?php
                    $value = get_sub_field('features_section4_media', $post->ID);
                    if($value && $value['type'] =='video') { ?>
                      <div class="animatedVideo" style="width: 100%; height: 100%;">
                        <video src="<?php echo $value['url'];?>" muted preload="auto" autoplay="" playsinline="" style="width: 100%; height: 100%;"></video>
                      </div>
                  <?php } else { ?>
                      <img class="transition-opacity duration-[0.7s] opacity-100 w-full md:w-2/3 xl:w-full shadow-custom h-[426px]" src="<?php echo $value['url'];?>" alt="">
                  <?php }?>
                </div>

                <?php if(get_sub_field('features_section4_description',$post->ID)) { ?>
                  <p class="font-semibold w-full lg:max-w-xl lg:mx-12 mt-6"><?php echo get_sub_field('features_section4_description',$post->ID); ?></p>
                <?php } ?> 
              </div>
            <?php $j++; }} 
          ?>
        </div>
      </div>
    </section>

    <section class="max-w-max-content w-full mx-auto mt-20 lg:mt-32 px-3 lg:px-0">
      <?php if(get_field('features_section5_title',$post->ID)) { ?>
        <h2 class="mt-8 text-3xl xl:text-[2.875rem] pb-5 font-bold text-center"><?php echo get_field('features_section5_title',$post->ID); ?></h2>
      <?php } ?>     
      <div class="w-full flex flex-col-reverse lg:flex-row mt-8">
        <?php 
          if( have_rows('features_section5_group_1') ):
            while( have_rows('features_section5_group_1') ): the_row(); ?>
            <div class="relative lg:w-1/2 lg:pl-4 ">
              <img class="w-[97%] hidden lg:block" src="/wp-content/uploads/features_bg.svg" alt="">
              <div class="lg:absolute top-0 z-20 py-6 xl:py-16 px-6 lg:px-0 lg:pl-16 h-full flex flex-flex-col items-center lg:max-w-[80%] bg-secondary lg:bg-transparent bg-opacity-5 rounded-xl">
                <div>
                  <?php if(get_sub_field('features_section5_heading_1',$post->ID)) { ?>
                    <p class="text-2xl font-bold mt-4"><?php echo get_sub_field('features_section5_heading_1',$post->ID); ?></p>
                  <?php } ?>  
                  <?php if(get_sub_field('features_section5_content_1',$post->ID)) { ?>
                    <p class="font-semibold mt-4"><?php echo get_sub_field('features_section5_content_1',$post->ID); ?></p>
                  <?php } ?>  
                </div>
              </div>
            </div>
            <div class="relative lg:w-1/2 self-stretch mb-4 lg:mb-0">
              <div class="lg:absolute lg:-left-[7%] w-full lg:w-[107%] aspect-[16/10.7] rounded-[1.5rem] overflow-hidden shadow-custom">
                <?php if(get_sub_field('features_section5_image_1',$post->ID)) { ?>
                  <img class="w-full h-full bg-white" alt="" src="<?php echo get_sub_field('features_section5_image_1',$post->ID); ?>">
                <?php } ?>  
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="w-full flex flex-col lg:flex-row mt-12 lg:mt-36">
        <?php 
          if( have_rows('features_section5_group_2') ):
            while( have_rows('features_section5_group_2') ): the_row(); ?>
              <div class="relative lg:w-1/2 self-stretch mb-4 lg:mb-0 z-[10] ">
                <div class="lg:absolute w-full lg:w-[107%] aspect-[16/10.7] rounded-[1.5rem] overflow-hidden shadow-custom">
                  <?php if(get_sub_field('features_section5_image_2',$post->ID)) { ?>
                    <img class="w-full h-full bg-white" alt="" src="<?php echo get_sub_field('features_section5_image_2',$post->ID); ?>">
                  <?php } ?> 
                </div>
              </div>
              <div class="relative lg:w-1/2 lg:pl-4">
                <img class="w-full hidden lg:block" src="/wp-content/uploads/Features_Section5_bg.svg" alt="">
                <div class="lg:absolute top-0 z-20 py-6 xl:py-16 px-6 lg:px-0 lg:pl-16 h-full flex flex-flex-col items-center justify-center lg:max-w-[80%] bg-secondary lg:bg-transparent bg-opacity-5 rounded-xl">
                  <div>
                    <?php if(get_sub_field('features_section5_heading_2',$post->ID)) { ?>
                      <p class="text-2xl font-bold mt-4"><?php echo get_sub_field('features_section5_heading_2',$post->ID); ?></p>
                    <?php } ?>  
                    <?php if(get_sub_field('features_section5_content_2',$post->ID)) { ?>
                      <p class="font-semibold mt-4"><?php echo get_sub_field('features_section5_content_2',$post->ID); ?></p>
                    <?php } ?> 
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="w-full flex flex-col-reverse lg:flex-row mt-12 lg:mt-36">
        <?php 
          if( have_rows('features_section5_group_3') ):
            while( have_rows('features_section5_group_3') ): the_row(); ?>
              <div class="relative lg:w-1/2 lg:pl-4">
                <img class="w-[97%] hidden lg:block" src="/wp-content/uploads/features_bg.svg" alt="">
                <div class="lg:absolute top-0 z-20 py-6 xl:py-16 px-6 lg:px-0 lg:pl-16 h-full flex flex-flex-col items-center lg:max-w-[80%] bg-secondary lg:bg-transparent bg-opacity-5 rounded-xl">
                  <div>
                    <?php if(get_sub_field('features_section5_title_3',$post->ID)) { ?>
                      <p class="text-2xl font-bold mt-4">
                        <?php echo get_sub_field('features_section5_title_3',$post->ID); ?></p>
                    <?php } ?>  
                    <?php if(get_sub_field('features_section5_content_3',$post->ID)) { ?>
                        <p class="font-semibold mt-4"><?php echo get_sub_field('features_section5_content_3',$post->ID); ?></p>
                    <?php } ?> 
                  </div>
                </div>
              </div>
              <div class="relative lg:w-1/2 self-stretch mb-4 lg:mb-0">
                <div class="lg:absolute lg:-left-[7%] w-full lg:w-[107%] aspect-[16/10.7] rounded-[1.5rem] overflow-hidden shadow-custom">
                  <?php if(get_sub_field('features_section5_image_3',$post->ID)) { ?>
                    <img class="w-full h-full bg-white" alt="" src="<?php echo get_sub_field('features_section5_image_3',$post->ID); ?>">
                  <?php } ?> 
                </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
                    
    <section class="here-cin max-w-max-content mx-auto flex flex-col items-center px-3 mt-20 lg:mt-44">
      <div class="max-w-screen flex flex-col items-center pb-10">
        <?php if(get_field('features_section6_title',$post->ID)) { ?>
          <h2 class="lg:mt-8 text-3xl xl:text-[2.875rem] pb-5 font-bold"><?php echo get_field('features_section6_title',$post->ID); ?></h2>
        <?php } ?>  
        <div class="mt-6 font-semibold max-w-2xl text-center">
          <div>
            <?php if(get_field('features_section6_content',$post->ID)) { ?>
              <?php echo get_field('features_section6_content',$post->ID); ?>
            <?php } ?> 
          </div>
        </div>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 justify-center gap-8 md:gap-16 mb-24">
        <?php if(get_field('features_section6_item',$post->ID)){
          while(the_repeater_field('features_section6_item', $post->ID) ) { ?>
            <div class="flex flex-col items-center lg:mx-6">
              <img alt="" class="w-20 p-4 rounded-lg mb-4" src="<?php echo get_sub_field('features_section6_icon',$post->ID); ?>" style="background-color: rgb(243, 252, 252);">
              <p class="text-center font-semibold text-md md:text-2xl"><?php echo get_sub_field('features_section6_text',$post->ID); ?></p>
            </div>
          <?php }} 
        ?>
      </div>
      <a href = "<?php echo get_field('features_section6_button_link',$post->ID); ?>" type="button" class="btns_filled_primary  shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mb-24 px-8"><?php echo get_field('features_section6_button',$post->ID); ?></a>
    </section>

    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>