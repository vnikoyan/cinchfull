<?php
   /**
    * Template Name: About
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
  <section class="bg-top bg-no-repeat bg-contain pt-32 pb-12" style="background-image: url('/wp-content/uploads/about-hero-bg.svg');">
    <div class="pt-10 lg:pt-30 text-center px-3 max-w-5xl mx-auto">
      <?php if(get_field('about_section1_title',$post->ID)) { ?>
        <h1 class="text-3xl lg:text-5xl font-bold pb-5">
          <!-- <span class="text-primary mr-2">Pleased</span>to meet you -->
          <?php echo get_field('about_section1_title',$post->ID); ?>
        </h1>
      <?php } else { ?>
        <h1 class="text-3xl lg:text-5xl font-bold pb-5">
          <span class="text-primary mr-2">Pleased</span>to meet you
        </h1>
      <?php } ?>
      <div class="p-6 md:p-12 relative">
        <img alt="" class="w-full object-cover absolute -z-10 left-0 top-0" src="/wp-content/uploads/about-video.svg">
        <div class="aspect-[16/9] player-wrapper rounded-[2rem] overflow-hidden bg-black">
          <div class="" style="width: 100%; height: 100%;">
            <?php if(get_field('about_section1_video',$post->ID)) { ?>
              <iframe class = "video_cont hidden w-full h-full z-[99999]" src="<?php echo get_field('about_section1_video',$post->ID); ?>"  title="YouTube video player" frameborder="0" allow="autoplay" allowfullscreen></iframe>
            <?php } ?>
            <div class="video_thumb" tabindex="0" style="width: 100%; height: 100%; background-size: cover; background-position: center center; cursor: pointer; display: flex; align-items: center; justify-content: center; background-image: url('/wp-content/uploads/video-thumbs.jpg');">
              <span class="playIcon relative">
                <img alt="" class="w-16 w-16" src="/wp-content/uploads/video-play.png">
              </span>
            </div>
          </div>
          
        </div>
      </div>
      <div class="mt-8 font-semibold text-center leading-6 content">
        <p class = "max-w-[730px] m-auto">
          <?php if(get_field('about_section1_title',$post->ID)) { ?>
              <?php echo get_field('about_section1_content',$post->ID); ?>
          <?php } ?>
        </p>
      </div>
    </div>
  </section>
  <section class="max-w-6xl w-full mx-auto px-3 lg:mt-12">
    <div class="grid items-center md:grid-cols-2 w-full gap-12">
      <div class=" relative z-10">
        <?php if(get_field('about_section2_image',$post->ID)) { ?>
        <img class="w-full" alt="" src="<?php echo get_field('about_section2_image',$post->ID); ?>">
        <?php } ?>
      </div>
      <div class=" relative ">
        <div class="lg:p-6 lg:pr-28 mt-4 lg:mt-0 ">
          <?php if(get_field('about_section2_title',$post->ID)) { ?>
            <h2 class="text-3xl font-bold"><?php echo get_field('about_section2_title',$post->ID); ?></h2>
          <?php } ?>
          <ul class="pt-6">
            <?php 
              if(get_field('about_section2_content',$post->ID)){
                while(the_repeater_field('about_section2_content', $post->ID) ) { ?>
                <li class="relative pl-10 pb-5"> 
                  <img class="absolute top-0 left-0 w-6 h-6" alt="" src="/wp-content/uploads/list-mark.svg"> <?php echo get_sub_field('about_section2_text',$post->ID); ?>
                </li>
                <?php }
              } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="bgCurve w-full px-3 py-16 md:pb-28 lg:pb-48 mt-12 bg-secondary bg-opacity-[0.25] ">
    <div class=" max-w-6xl mx-auto grid md:grid-cols-2 items-center w-full gap-12 ">
      <div>
        <?php if(get_field('about_section3_title',$post->ID)) { ?>
            <h2 class="text-3xl font-bold"><?php echo get_field('about_section3_title',$post->ID); ?></h2>
          <?php } ?>
        <div class="prose lg:prose-sm xl:prose pt-6">
          <p>
            <?php if(get_field('about_section3_content',$post->ID)) { ?>
                <?php echo get_field('about_section3_content',$post->ID); ?>
            <?php } ?>
          </p>
        </div>
      </div>
      <div>
        <?php if(get_field('about_section3_image',$post->ID)) { ?>
          <img class="w-full" alt="" src="<?php echo get_field('about_section3_image',$post->ID); ?>">
        <?php } ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>