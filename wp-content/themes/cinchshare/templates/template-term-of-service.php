<?php
  /**
  * Template Name: Term of Service
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
    <section class="relative w-full pt-28 lg:pt-36 2xl:pt-60">
      <img alt="" class="absolute w-full top-32 md:top-14 lg:top-0 left-0" src="/wp-content/uploads/support-page-hero-bg.svg">
      <div class="pb-12 lg:pb-48 flex flex-col items-center px-3 max-w-3xl mx-auto relative z-10">
        
        <?php if(get_field('term_of_service_title',$post->ID)) { ?>
          <h1 class="text-3xl lg:text-5xl font-bold text-primary text-center"><?php echo get_field('term_of_service_title',$post->ID); ?></h1>
        <?php } ?>
        <div class="mt-8 font-semibold text-center">
        <?php if(get_field('term_of_service_content',$post->ID)) { ?>
          <p><?php echo get_field('term_of_service_content',$post->ID); ?></p>
        <?php } ?>
        </div>
      </div>
    </section>
    <section class="max-w-max-content w-full mx-auto flex flex-col lg:flex-row p-3 faq">
      <div class="max-w-3xl lg:w-1/4 bg-white py-8 h-fit px-6 rounded-lg shadow-custom z-10 privacy_sidebar">
        <div class="w-full mb-5">
          <div class="flex justify-between items-center mb-3 ">
            <p class="text-xl font-semibold text-secondary">Policy Terms</p>
            <span><img alt="" class="" src="/wp-content/uploads/Vector.png"></span>
          </div>
          <ul class = "sub-item">
            <?php 
                if( have_rows('term_policy_terms') ):
                  while( have_rows('term_policy_terms') ): the_row();
              ?>
              <?php if(get_sub_field('term_policy_terms_item',$post->ID)){
                $i = 1;
                while(the_repeater_field('term_policy_terms_item', $post->ID) ) { ?>
                  <ul>
                    <li class="px-5 py-2 hover:bg-secondary hover:bg-opacity-5 hover:text-secondary rounded-xl cursor-pointer" index = "twitter<?php echo $i; ?>"><?php echo get_sub_field('term_policy_terms_item_title',$post->ID); ?></li>
                  </ul>
                <?php $i++; }} 
              ?>
             <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="w-full lg:w-3/4 pt-8 lg:pt-0 lg:pl-8 privacy_right_content">
        <?php 
          if( have_rows('term_policy_terms') ):
            while( have_rows('term_policy_terms') ): the_row();
          ?>
          <?php if(get_sub_field('term_policy_terms_item',$post->ID)){
            $i = 1;
            while(the_repeater_field('term_policy_terms_item', $post->ID) ) { ?>
              <div class="w-full <?php if($i !=1) {echo 'hidden'; } ?>" index = "twitter<?php echo $i; ?>">
                <p class="font-bold text-2xl mb-4"><?php echo get_sub_field('term_policy_terms_item_title',$post->ID); ?></p>
                <p class="mb-4 font-bold text-lg opacity-50"><?php echo get_sub_field('term_policy_terms_item_date',$post->ID); ?></p>
                <div class="mb-5 privacy-content">
                  <?php echo get_sub_field('term_policy_terms_item_content',$post->ID); ?>
                </div>
              </div>
            <?php $i++; }} 
          ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>