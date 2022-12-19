<?php
   /**
    * Template Name: Direct Sales
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

  <section class="max-w-max-content mx-auto flex flex-col xl:flex-row items-center xl:items-start px-6 xl:px-0 mt-0 xl:mt-28">
    <div class="max-w-md mt-8 flex flex-col items-center xl:items-start mb-8 xl:mr-16">
      <?php if(get_field('page_directsales_title',$post->ID)) { ?>
        <h2 class="mt-8 text-3xl xl:text-[2.875rem] font-bold"><?php echo get_field('page_directsales_title',$post->ID); ?></h2>
      <?php } ?>
      
      <?php if(get_field('page_directsales_content',$post->ID)) { ?>
        <p class="mt-6 font-semibold text-center xl:text-left" style = "margin-bottom:2rem;"><?php echo get_field('page_directsales_content',$post->ID); ?></p>
      <?php } ?>
      
      <?php if(get_field('page_directsales_button',$post->ID)) { ?>
        <a href ="<?php echo get_field('page_directsales_button_link',$post->ID); ?>" type="button" class="">
			<button class = "btns_filled_primary shadow-button-primary false hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold px-8">
				<?php echo get_field('page_directsales_button',$post->ID); ?>	
			</button>
		</a>
      <?php } ?>
      
    </div>
    <div class="grid grid-cols-2 w-full sm:grid-cols-3 justify-center gap-y-8 gap-x-4 md:gap-x-6  mt-12 xl:mt-0">
      <?php if(get_field('page_directsales_item',$post->ID)){
        while(the_repeater_field('page_directsales_item', $post->ID) ) { ?>
          <div class="flex flex-col items-center">
            <img alt="" class="w-20 p-4 rounded-lg mb-4" src="<?php echo get_sub_field('page_directsales_image',$post->ID); ?>" style="background-color: rgb(243, 252, 252);">
            <p class="w-36 text-center font-semibold text-[18px] sm:text-xl"><?php echo get_sub_field('page_directsales_text',$post->ID); ?></p>
          </div>
        <?php ; }} 
      ?>
    </div>
  </section>

  <section class="max-w-max-content w-full mx-auto mt-16 lg:mt-28 px-3 lg:px-0">
    <?php if(get_field('directsales_section4_title',$post->ID)) { ?>
      <h2 class="mt-8 text-3xl font-bold text-center"><?php echo get_field('directsales_section4_title',$post->ID); ?></h2>
    <?php } ?>
    
    <div class="w-20 h-1 rounded-full bg-secondary mt-4 mx-auto"></div>
    <div class="w-full flex flex-col-reverse lg:flex-row mt-8 ">
      <div class="relative lg:w-1/2 lg:pl-4">
        <img class="w-full hidden lg:block" src="/wp-content/uploads/Features_Section5_bg.svg" alt="">
        <div class="lg:absolute top-0 z-20 py-6 xl:py-16 px-6 lg:px-0 lg:pl-16 h-full flex-flex-col lg:max-w-[72%] bg-secondary lg:bg-transparent bg-opacity-5 rounded-xl">
          <img src="/wp-content/uploads/Features_People.svg" alt="">
          <div>
            <?php if(get_field('directsales_section4_sub_heading',$post->ID)) { ?>
              <p class="text-2xl font-bold mt-4"><?php echo get_field('directsales_section4_sub_heading',$post->ID); ?></p>
            <?php } ?>
            <div class="font-semibold mt-4"><?php echo get_field('directsales_section4_content',$post->ID); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="relative lg:w-1/2 self-stretch mb-4 lg:mb-0">
        <div class="lg:absolute lg:-left-[14%] w-full lg:w-[113%] aspect-[16/10.7] rounded-[1.5rem] overflow-hidden shadow-custom">
          <?php if(get_field('directsales_section4_image',$post->ID)) { ?>
            <img class="w-full h-full object-cover bg-white" alt="" src="<?php echo get_field('directsales_section4_image',$post->ID); ?>">
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-max-content w-full mx-auto grid md:grid-cols-2 gap-8 mt-16 xl:mt-28 p-3">
    <?php if(get_field('directsales_section5_item',$post->ID)){
        while(the_repeater_field('directsales_section5_item', $post->ID) ) { ?>
          <div class="flex-1 bg-primary bg-opacity-5 rounded-xl p-8 lg:p-16 xl:pr-28">
            <img src="/wp-content/uploads/Features_People.svg" alt="">
            <?php if(get_sub_field('directsales_section5_title',$post->ID)) { ?>
              <p class="mt-6 text-2xl font-bold"><?php echo get_sub_field('directsales_section5_title',$post->ID); ?></p>
            <?php } ?>
            <?php if(get_sub_field('directsales_section5_content',$post->ID)) { ?>
              <p class="text-semibold mt-4"> <?php echo get_sub_field('directsales_section5_content',$post->ID); ?> </p>
            <?php } ?>
          </div>
      <?php ; }} 
    ?>
  </section>
  
  <section class="s-direct_toggle max-w-7xl mx-auto relative w-full mt-12 xl:mt-24">
    <?php if(get_field('directsales_section6_item',$post->ID)){
        $i=1;
        while(the_repeater_field('directsales_section6_item', $post->ID) ) { ?>
        <div class = "content_text w-full  mx-auto flex flex-col-reverse xl:flex-row items-center justify-between <?php if($i !=1) { echo 'hidden'; } ?>" index = "<?php echo $i; ?>">
          <div class="block w-full xl:w-6/12 z-10 px-6 relative aspect-[16/9] object-contain" style="opacity: 1; transform: none;">
            <img alt="" class="absolute z-0 hidden xl:block" src="/wp-content/uploads/Industries_Section6_bg.svg">
            <?php 
              $value = get_sub_field('directsales_section6_file', $post->ID);

              if($value && $value['type'] =='video') { ?>
                <div class="relative" style="width: 100%; height: 100%;">
                  <video class = "w-full relative z-10" src="<?php echo $value['url'];?>" muted  preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                </div>
              <?php } else { ?>
                <img class="transition-opacity duration-[0.7s] opacity-100 w-full relative z-10" src="<?php echo $value['url'];?>" alt="">
              <?php }?>
          </div>
          <div class="w-full flex xl:w-6/12 px-3 relative z-10 xl:mb-0 mb-16">
            <div class="flex flex-col max-w-md lg:pl-6">
              <div class="flex -mx-2 content_button">
                <button class="border border-secondary rounded-full py-1 w-24 mx-2 bg-secondary text-white" index = "1">Share</button>
                <button class="border border-secondary rounded-full  py-1 w-24 mx-2  bg-white text-secondary" index = "2">Create</button>
                <button class="border border-secondary rounded-full py-1 w-24 mx-2  bg-white text-secondary" index = "3">Store</button>
              </div>
              
              <?php if(get_sub_field('directsales_section6_title',$post->ID)) { ?>
                <h2 class="mt-8 text-2xl xl:text-3xl font-bold"><?php echo get_sub_field('directsales_section6_title',$post->ID); ?></h2>
              <?php } ?>
              <div class="w-20 h-1 rounded-full bg-secondary mt-4"></div>
              <?php if(get_sub_field('directsales_section6_content',$post->ID)) { ?>
                <p class="mt-6 font-semibold"><?php echo get_sub_field('directsales_section6_content',$post->ID); ?></p>
              <?php } ?>
              <a class="mt-6 lg:mt-16" href="<?php echo get_sub_field('directsales_section6_link',$post->ID); ?>">
                <button type="button" class="false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-40"><?php echo get_sub_field('directsales_section6_button',$post->ID); ?></button>
              </a>
            </div>
          </div>
        </div>
      <?php $i++;}} 
    ?>
  </section>

  <section class="max-w-max-content w-full mx-auto grid md:grid-cols-2 gap-8 mt-16 xl:mt-28 p-3">
    <?php if(get_field('directsales_section7_item',$post->ID)){
        while(the_repeater_field('directsales_section7_item', $post->ID) ) { ?>
          <div class="flex-1 bg-primary bg-opacity-5 rounded-3xl p-8 lg:p-16 xl:pr-28">
            <img src="/wp-content/uploads/Features_People.svg" alt="">
            <?php if(get_sub_field('directsales_section7_title',$post->ID)) { ?>
              <p class="mt-6 text-2xl font-bold"><?php echo get_sub_field('directsales_section7_title',$post->ID); ?></p>
            <?php } ?>
            <?php if(get_sub_field('directsales_section7_content',$post->ID)) { ?>
              <p class="text-semibold mt-4"> <?php echo get_sub_field('directsales_section7_content',$post->ID); ?> </p>
            <?php } ?>
          </div>
      <?php ; }} 
    ?>
  </section>

  <section class="w-full relative flex flex-col items-center justify-center mt-16 px-2">
    <div class="max-w-max-content bg-gradient-to-b from-primary to-secondary w-full rounded-3xl flex flex-col items-center pt-8 pb-48 px-2">
      <?php if(get_field('directsales_section8_title',$post->ID)) { ?>
        <h2 class="text-2xl font-bold lg:text-4xl mt-2 text-center"><?php echo get_field('directsales_section8_title',$post->ID); ?></h2>
      <?php } ?>
      <div class="flex flex-wrap justify-center mt-10 -mx-2 t-seller_buttons">
        <?php if(get_field('directsales_section8_buttons', $post->ID)){
          $i = 1;
          while(the_repeater_field('directsales_section8_buttons', $post->ID) ) { ?>
            <button class="py-2 px-6 rounded-full border border-white text-white mx-2 my-2 <?php if($i ==1) { echo "bg-secondary"; } ?>" index = "<?php echo $i; ?>"><?php echo get_sub_field('directsales_section8_button_title',$post->ID); ?></button>
          <?php $i++; }} 
        ?> 
      </div>
    </div>
    <div class="max-w-max-content w-full relative flex justify-center -top-36 t-seller_contents">
      <?php if(get_field('directsales_section8_items', $post->ID)){
        $j = 1;
        while(the_repeater_field('directsales_section8_items', $post->ID) ) { ?>
          <div class="z-10 w-full flex flex-col	lg:flex-row justify-center items-start <?php if($j !=1) { echo 'hidden'; } ?>" index = "<?php echo $j; ?>">
            <div class="w-full sm:w-4/5 lg:w-3/5 px-6" style="opacity: 1; transform: none;">
            <?php 
              $value = get_sub_field('directsales_section8_media', $post->ID);

              if($value && $value['type'] =='video') { ?>
                <div class="relative" style="width: 100%; height: 100%;">
                  <video class = "w-full relative z-10" src="<?php echo $value['url'];?>" muted  preload="auto" autoplay playsinline="" style="width: 100%; height: 100%;"></video>
                </div>
              <?php } else { ?>
                <img class="transition-opacity duration-[0.7s] w-full rounded-3xl overflow-hidden" src="<?php echo $value['url'];?>" alt="">
              <?php }?>
            </div>
            <div class="lg:w-2/5 bg-[#EFF3F9] rounded-3xl border-8 border-white p-8 lg:mr-8  lg:block" style="opacity: 1; transform: none;">
              <div class="flex -mx-2">
                <img class="mx-2" src="/images/Star.svg" alt="">
                <img class="mx-2" src="/images/Star.svg" alt="">
                <img class="mx-2" src="/images/Star.svg" alt="">
                <img class="mx-2" src="/images/Star.svg" alt="">
                <img class="mx-2" src="/images/Star.svg" alt="">
              </div>
              <div class="mt-4">
                <?php if(get_sub_field('directsales_section8_content',$post->ID)) { ?>
                  <?php echo get_sub_field('directsales_section8_content',$post->ID); ?>
                <?php } ?>
              </div>
              <div class="flex mt-6 items-center">
                <?php if(get_sub_field('directsales_section8_icon',$post->ID)) { ?>
                  <img class="w-20 h-20 shadow-2xl rounded-full border-2 border-white object-cover mr-4" src="<?php echo get_sub_field('directsales_section8_icon',$post->ID); ?>" alt="">
                <?php } ?>
                <div class="">
                  <?php if(get_sub_field('directsales_section8_name',$post->ID)) { ?>
                    <p class="font-bold text-lg"><?php echo get_sub_field('directsales_section8_name',$post->ID); ?></p>
                  <?php } ?>
                  <?php if(get_sub_field('directsales_section8_country',$post->ID)) { ?>
                    <p class="font-bold text-xs text-text-light mt-2"><?php echo get_sub_field('directsales_section8_country',$post->ID); ?></p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php $j++; }} 
      ?> 
    </div>
  </section>

  <section class="w-full relative flex items-center justify-center px-2">
    <div class="z-20 flex flex-col items-center ">
      <?php if(get_field('directsales_section9_title',$post->ID)) { ?>
        <h2 class="text-3xl lg:text-3xl font-bold mb-4"><?php echo get_field('directsales_section9_title',$post->ID); ?></h2>
      <?php } ?>
      <div class="w-20 h-1 bg-secondary rounded-full"></div>
      <?php if(get_field('directsales_section9_content',$post->ID)) { ?>
        <p class="text-lg max-w-3xl text-center mt-4"><?php echo get_field('directsales_section9_content',$post->ID); ?></p>
      <?php } ?>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-12 lg:gap-28 justify-center mt-12">
        <?php if(get_field('directsales_section9_item', $post->ID)){
          while(the_repeater_field('directsales_section9_item', $post->ID) ) { ?>
            <div class="flex flex-col items-center mx-12">
              <img class="w-16 h-16 lg:w-24 lg:h-24 mb-4" src="<?php echo get_sub_field('directsales_section9_icon',$post->ID); ?>">
              <p class="text-center font-semibold text-xl md:text-2xl"><?php echo get_sub_field('directsales_section9_text',$post->ID); ?></p>
            </div>
          <?php }} 
        ?> 
      </div>
    </div>
  </section>
  
  <?php get_template_part( 'template-parts/content/content', 'reviews' ); ?>
  <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
</main>
<?php get_footer();?>