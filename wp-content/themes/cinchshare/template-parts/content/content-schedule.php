<section class="py-10  relative s_schedule_post">
  <div class="w-full flex items-center  justify-center" style = "box-shadow: 1px 10px 168px -47px rgba(0,0,0,0.12); -webkit-box-shadow: 1px 10px 168px -47px rgba(0,0,0,0.12);-moz-box-shadow: 1px 10px 168px -47px rgba(0,0,0,0.12);">
    <div class="w-full bg-white z-10 top-0 px-6 md:px-12 pb-12 pt-8">
      <div class="z-20 flex flex-col items-center">
        <div class="flex flex-col items-center">
          <?php if(get_field('schedule_post_title',$post->ID)) { ?>
            <h2 class="text-2xl xl:text-3xl font-semibold text-center pb-10"><?php echo get_field('schedule_post_title',$post->ID); ?></h2>
          <?php } ?>
        </div>
        <?php if(get_field('schedule_post_content',$post->ID)) { ?>
            <p class = "max-w-2xl m-auto pb-6 text-center" ><?php echo get_field('schedule_post_content',$post->ID); ?></p>
        <?php } ?>
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
    </div>
    <div class="shared-dark-borders max-w-3xl mx-auto w-full bg-gray-600 absolute left-0 right-0 -top-4"></div>
  </div>
</section>