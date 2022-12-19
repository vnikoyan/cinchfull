<section class="relative hs1_container pt-32 lg:pb-24">
  <img class=" absolute top-0 transition-opacity opacity-100 w-full hidden md:block" src="/wp-content/uploads/hero.svg" alt="">
  <div  class = "md:flex items-center xl:items-center justify-between">
    <div class="z-20 w-full">
      <div class="max-w-max-content mx-auto w-full">
        <div class="mx-auto max-w-[650px] mr-0 flex flex-col items-center xl:items-start px-6 xl:px-4">
          <?php if(get_field('hero_title',$post->ID)) { ?>
            <h1 class="text-3xl lg:text-[2.875rem] leading-none mt-2 font-bold text-primary text-center xl:text-start">
              <?php echo get_field('hero_title',$post->ID); ?>
            </h1>
          <?php } ?>
          <div class="text-base lg:text-base mt-4 text-center xl:text-left xl:pr-16">
            <?php if(get_field('hero_content',$post->ID)) { ?>
                <p><?php echo get_field('hero_content',$post->ID); ?></p>
            <?php } ?>
          </div>
          <?php 
            if( have_rows('hero_button') ):
              while( have_rows('hero_button') ): the_row();
          ?>
            <a href = "<?php echo get_sub_field('hero_button_link',$post->ID); ?>" type="button" class="btns_filled_primary text-center false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-9 min-w-[160px]"><?php echo get_sub_field('hero_button_text',$post->ID); ?></a>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php if(get_field('hero_text',$post->ID)) { ?>
                <p class="text-sm mt-8"><?php echo get_field('hero_text',$post->ID); ?></p>
          <?php } ?>
        </div>
      </div>
    </div>  
    <div class="flex w-full flex-row justify-end items-center">
      <?php if(get_field('hero_image',$post->ID)) { ?>
        <img class="w-full transition-opacity opacity-100 z-10 " src="<?php echo get_field('hero_image',$post->ID); ?>" alt="">
      <?php } ?>
    </div>
  </div>
</section>