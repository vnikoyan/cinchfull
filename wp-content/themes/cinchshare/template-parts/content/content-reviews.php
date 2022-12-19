<div class="overflow-hidden max-w-max-content mx-auto mt-28 mb-12 relative flex items-center flex-col lg:flex-row-reverse px-6 xl:px-0">
  <div class="w-full lg:w-[55%] mt-0 pr-6 relative s_reviews_img">
    <img src="/wp-content/uploads/Map.svg" class="" style="">
  </div>
  <div class="lg:w-[45%] w-full">
    <div class="max-w-xl lg:max-w-max-content mx-auto reviewSlides owl-carousel" style="margin-top: 3%;">
      <?php if(get_field('section_reviews',$post->ID)){
        while(the_repeater_field('section_reviews', $post->ID) ) { ?>
          <div style="opacity: 1;" class = " ">
            <?php if(get_sub_field('section_reviews_title',$post->ID)) { ?>
              <p class="text-2xl lg:text-[2.875rem] leading-none font-bold max-w-lg"><?php echo get_sub_field('section_reviews_title',$post->ID); ?></p>
            <?php } ?>
            <div class="flex mt-8 -mx-2">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
              <img class="mx-2" src="/wp-content/uploads/Star.svg" alt="">
            </div>
            <div class="mt-8 max-w-lg font-semibold">
            <?php if(get_sub_field('section_reviews_content',$post->ID)) { ?>
              <p><?php echo get_sub_field('section_reviews_content',$post->ID); ?></p>
            <?php } ?>
            </div>
            <div class="flex mt-6">
              <?php if(get_sub_field('section_reviews_icon',$post->ID)) { ?>
                <img class="w-24 h-24 shadow-2xl rounded-full border-2 border-white object-cover mr-4" src="<?php echo get_sub_field('section_reviews_icon',$post->ID); ?>" alt="">
              <?php } ?>
              <div class="mt-4">
                <?php if(get_sub_field('section_reviews_name',$post->ID)) { ?>
                  <p class="font-bold text-lg"><?php echo get_sub_field('section_reviews_name',$post->ID); ?></p>
                <?php } ?>
                <?php if(get_sub_field('section_reviews_date',$post->ID)) { ?>
                  <p class="font-bold text-xs text-text-light mt-2"><?php echo get_sub_field('section_reviews_date',$post->ID); ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php ;  }} 
      ?>
    </div>
  </div>
</div>