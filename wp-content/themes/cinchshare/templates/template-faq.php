<?php
   /**
    * Template Name: FAQ
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
  <section class="relative z-10 max-w-max-content w-full mx-auto flex flex-col items-center px-3 pt-36 pb-20 lg:pb-38">
    
      <?php if(get_field('faq_page_title',$post->ID)) { ?>
        <h1 class="text-center text-3xl md:text-5xl font-bold"><?php echo get_field('faq_page_title',$post->ID); ?></h1>
      <?php } else { ?>
        <h1 class="text-center text-3xl md:text-5xl font-bold">Frequently asked questions</h1>
      <?php } ?>
      <?php if(get_field('faq_page_description',$post->ID)) { ?>
        <p class="text-center mt-6 text-xl md:text-2xl "><?php echo get_field('faq_page_description',$post->ID); ?></p>
      <?php } ?>
  </section>
  <section class ="max-w-max-content w-full mx-auto flex flex-col lg:flex-row p-3 faq">
    <div class="lg:w-4/12 m-auto lg:m-0">
      <?php if(get_field('faq_page_image',$post->ID)) { ?>
        <img src="<?php echo get_field('faq_page_image',$post->ID); ?>" alt="faq">
      <?php } else { ?>
        <img src="/wp-content/uploads/faq-vector.png" alt="faq">
      <?php } ?>
    </div>
    <div class = "lg:w-8/12 pt-10 lg:pt-0 lg:pl-10">
      <ul class ="faq-accordion">
        <?php if(get_field('faq',$post->ID)){
          $i = 1;
          while(the_repeater_field('faq', $post->ID) ) { ?>
            <li class="cursor-pointer px-4 lg:px-8 py-4 bg-white rounded-2xl border border-[#EDEEFE] mb-4" index = "<?php echo $i;?>">
              <div class="w-full mt-3 text-left">
                <div class="flex justify-between">
                  <h3 class="text-xl font-bold"> <?php echo get_sub_field('faq_item_heading'); ?></h3>
                  <button class="ml-4 w-6 h-6 bg-[#F4F4F4] rounded-xl flex justify-center items-center cin-faq-accordion">
                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 1.15625L5.29289 5.44914C5.68342 5.83967 6.31658 5.83967 6.70711 5.44914L11 1.15625" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                  </buttton>
                </div>
                <div class="mt-6 border-l-2 border-gray-50 hidden faq_body">
                  <p class="text-xl">
                    <?php echo get_sub_field('faq_item_content'); ?>
                  </p>
                </div>
              </div>
            </li>
        <?php $i++; }
        } ?>
      </ul>
    </div>
  </section>
  <section class = "mt-20">
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </section>
</main>
<?php get_footer();?>