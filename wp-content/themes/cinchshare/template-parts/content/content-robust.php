<section class = "s_robust max-w-max-content w-full mx-auto flex flex-col items-center px-6 xl:px-0 mt-20 lg:mt-32 xl:mt-52">
  <div class = "flex flex-col items-center w-full">
    <?php if(get_field('section_robust_tool_title',$post->ID)) { ?>
      <h2 class = "mt-8 text-3xl xl:text-[2.875rem] font-bold text-center"><?php echo get_field('section_robust_tool_title',$post->ID); ?></h2>
    <?php } ?>

    <div class = "robust_carousel owl-carousel owl-theme w-full relative">
      <?php if(get_field('section_robust_tool_item',$post->ID)){
        while(the_repeater_field('section_robust_tool_item', $post->ID) ) { ?>
          <div class="mySlides flex items-center lg:flex-row-reverse flex-col-reverse w-full mt-8 ">
            <div class="relative lg:aspect-[16/10.7] lg:w-1/2 lg:pl-4">
              <img class="w-full hidden lg:block" src="/wp-content/uploads/ft_bg.svg" alt="">
              <div class="block lg:absolute top-0 z-20 py-6 lg:py-10 xl:py-16 lg:ml-20 lg:w-3/4 h-full flex-flex-col bg-primary lg:bg-transparent bg-opacity-5 rounded-3xl lg:rounded-none px-6 xp:px-0 lg:px-2">
                <div style="min-height: 15rem;">
                <?php if(get_sub_field('section_robust_tool_heading',$post->ID)) { ?>
                  <p class="text-xl lg:text-2xl font-bold"><?php echo get_sub_field('section_robust_tool_heading',$post->ID); ?></p>
                <?php } ?>
                <?php if(get_sub_field('section_robust_tool_content',$post->ID)) { ?>
                  <p class="text-sm lg:text-base font-semibold mt-4"><?php echo get_sub_field('section_robust_tool_content',$post->ID); ?></p>
                <?php } ?>
                </div>

              </div>
            </div>
            <div class="relative lg:aspect-[16/11.5] lg:w-3/5 self-stretch mb-6 lg:mb-0">
              <div class="lg:absolute lg:-right-[8%] w-full lg:w-[100%] aspect-[16/11.5] rounded-[1.5rem] overflow-hidden shadow-custom" style="max-height: 453px;">
                <div class="w-full h-full min-h-full bg-white">
                  <?php if(get_sub_field('section_robust_tool_image',$post->ID)) { ?>
                    <img class="transition-opacity duration-[0.7s] opacity-100 w-full h-full" src="<?php echo get_sub_field('section_robust_tool_image',$post->ID); ?>" alt="">
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>  
        <?php ;  }} 
      ?>
    </div>
  </div>
</section>