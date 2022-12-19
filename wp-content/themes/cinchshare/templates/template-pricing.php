<?php
   /**
    * Template Name: Pricing
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
    <section class="bg-secondary bg-opacity-5 s_pricing">
      <div class="pt-24 lg:pt-32 flex flex-col xl:flex-row items-center px-3 max-w-max-content mx-auto">
        <div class="w-full flex flex-col items-center xl:items-start xl:w-5/12">
          <?php if(get_field('pricing_section1_title',$post->ID)) { ?>
            <h1 class="text-2xl md:text-4xl mt-1 lg:mt-2 font-bold text-center xl:text-left"><?php echo get_field('pricing_section1_title',$post->ID); ?></h1>
          <?php } ?>
          <?php if(get_field('pricing_section1_content',$post->ID)) { ?>
            <p class="mt-8 font-semibold text-center xl:text-left"><?php echo get_field('pricing_section1_content',$post->ID); ?></p>
          <?php } ?>
          <?php if(get_field('pricing_section1_button',$post->ID)) { ?>
            <a href = "<?php echo get_field('pricing_section1_button_link',$post->ID); ?>" type="button" class="btns_filled_primary bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold mt-8 shadow-button-primary px-8"><?php echo get_field('pricing_section1_button',$post->ID); ?></a>
          <?php } ?>
        </div>
        <div class="bg-[#EFF3F9] flex flex-col w-full xl:w-6/12 p-8 border-8 rounded-2xl border-white drop-shadow-[55px_55px_69px_rgba(0,0,0,0.1)] xl:ml-8 max-w-2xl mt-8 xl:mt-0">
          <div class="flex flex-col flex-col-reverse md:flex-row justify-between pb-6 md:items-center">
            <p class="text-xl font-bold package_month">Monthly Package</p>
            <p class="text-xl font-bold package_year hidden">Annual Package</p>
            <div class="flex items-center bg-white p-1.5 w-fit mx-auto md:mr-0 mb-6 md:mb-0 rounded-xl s_price_btns">
              <div to="" class="absolute text-primary px-3 text-sm font-bold cursor-pointer">Monthly</div>  
              <button type="button" class="z-10 false bg-primary text-white px-4 py-2.5 rounded-lg font-bold pt-1 pb-1 text-sm">Monthly</button>
              <div to="" class="text-primary px-3 text-sm font-bold cursor-pointer">Annually</div>
            </div>
          </div>
          <div class="flex flex-col sm:flex-row items-start justify-between">
            <div>
              <div class ="info_month">
                <p class="text-xl font-bold">
                  <?php echo get_field('pricing_section1_monthly_price',$post->ID); ?>  /mo
                </p>
                <p class="text-xs font-bold">billed monthly</p>
                <p class="mt-8 font-bold text-primary">For business owners ready</p>
                <p class="font-bold">to take it to the next level</p>
                <div class="flex -mx-2 mt-8">
                  <a target="_blank" href="https://www.facebook.com/CinchShare" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/facebook_1.svg">
                  </a>
                  <a target="_blank" href="https://www.instagram.com/cinchshare/" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/instagram.png">
                  </a>
                  <a target="_blank" href="https://twitter.com/cinchshare" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/twitter_1.svg">
                  </a>
                </div>
              </div>
              <div class = "info_year hidden">
                <p class="text-xl font-bold">
                  <?php echo get_field('pricing_section1_annual_price',$post->ID); ?>  /mo
                </p>
                <p class="text-xs font-bold">billed annually</p>
                <p class="mt-8 font-bold text-primary">For business owners ready</p>
                <p class="font-bold">to take it to the next level</p>
                <div class="flex -mx-2 mt-8">
                  <a target="_blank" href="https://www.facebook.com/CinchShare" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/facebook_1.svg">
                  </a>
                  <a target="_blank" href="https://www.instagram.com/cinchshare/" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/instagram.png">
                  </a>
                  <a target="_blank" href="https://twitter.com/cinchshare" rel="noreferrer" class="mx-2">
                    <img class="w-6 h-6" src="/wp-content/uploads/twitter_1.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="sm:self-stretch h-0.5 sm:h-auto w-full sm:w-0.5 bg-[#D1D9E6] my-4 lg:my-0 lg:mx-4"></div>
            <div class="list-none pricing-list">
              <ul>
                <li class="">Unlimited posts</li>
                <li class="">Unlimited accounts</li>
                <li class="">1 user</li>
                <li class="">Unlimited video upload</li>
                <li class="">Unlimited post history</li>
                <li class="">Batch post and bulk photo upload</li>
                <li class="">Pay annually and save</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php get_template_part( 'template-parts/content/content', 'reviews' ); ?>
    <?php get_template_part( 'template-parts/content/content', 'schedule' ); ?>

    <section class="max-w-max-content w-full mx-auto flex flex-col lg:flex-row mt-10 p-3 faq pt-4 lg:pt-20 pb-0 lg:pb-20">
      <div class="lg:w-4/12">
        <?php if(get_field('pricing_section4_title',$post->ID)) { ?>
          <h2 class="text-3xl font-bold"><?php echo get_field('pricing_section4_title',$post->ID); ?></h2>
        <?php } ?>
        <div class="w-20 h-1 bg-secondary rounded-full mt-4"></div>
        <p class="text-lg max-w-3xl mt-4">
        </p>
        <?php if(get_field('pricing_section4_content',$post->ID)) { ?>
          <p class="text-lg max-w-3xl mt-4"><?php echo get_field('pricing_section4_content',$post->ID); ?>
          </p>
        <?php } ?>
      </div>
      <div class="lg:w-8/12 pt-8 lg:pt-0 lg:pl-8">
        <ul class="cin-accordion">
          <?php if(get_field('pricing_section4_item',$post->ID)){
            $i=1;
            while(the_repeater_field('pricing_section4_item', $post->ID) ) { ?>
            <li class="px-4 lg:px-8 py-4 bg-white rounded-2xl border border-[#EDEEFE] mb-4" >
              <div class="flex w-full text-left cursor-pointer items-start" index = "<?php echo $i;?>">
                <div class="w-auto mr-3 lg:mr-8">
                  <span class="flex items-center justify-center w-10 h-10 text-lg font-bold bg-primary text-white rounded-full">?</span>
                </div>
                <div class="w-full">
                  <div class="flex justify-between items-center accordion_icon">
                    <?php if(get_sub_field('pricing_section4_heading',$post->ID)) { ?>
                      <h3 class="text-md lg:text-xl font-bold pr-2"><?php echo get_sub_field('pricing_section4_heading',$post->ID); ?></h3>
                    <?php } ?>
                    <button class=" accordion pt-2 minus hidden">
                      <img src="/wp-content/uploads/minus-icon.png" alt="plus-minus">
                    </button>
                    <button class=" accordion pt-2 plus">
                      <img src="/wp-content/uploads/plus-icon.png" alt="plus-minus">
                    </button>
                  </div>
                  <div class="overflow-hidden hidden accordion_body">
                    <p class="text-sm lg:text-xl mt-6">
                    <?php echo get_sub_field('pricing_section4_text',$post->ID); ?>
                    </p>
                  </div>
                </div>
              </div>
            </li>
          <?php $i++; }} 
          ?>
        </ul>
      </div>
    </section>
    
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>