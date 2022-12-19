<?php
   /**
    * Template Name: Shared Folder
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
	  <div class="relative s_share_landing" >
		  <img class="transition-opacity duration-[0.7s] absolute opacity-100 w-full  block" src="/wp-content/uploads/hh_bg.svg" alt="">
		  <div class =" flex items-end xl:items-center justify-between">
			  <div class="top-0 z-20 w-full r_text ">
				  <div class="max-w-max-content mx-auto w-full">
					  <div class="md:max-w-[51%] mx-auto xl:mx-0 mt-28 xl:mt-52 2xl:mt-80 flex flex-col items-center xl:items-start px-6 xl:px-0">
						  <h1 class="text-3xl lg:text-[2.875rem] leading-none mt-2 font-bold text-secondary text-center xl:text-start">
							  <a href="/login">
								  <span class="text-primary underline">Login</span>
							  </a> or 
							  <a href="/signup"><span class="text-primary underline">join now</span>
							  </a>
						  </h1>
						  <h1 class="text-3xl lg:text-[2.875rem] leading-none mt-2 font-bold text-secondary text-center xl:text-start">to get access to this folder</h1>
						  <div class="text-base lg:text-base mt-4 text-center xl:text-left xl:pr-16" style="line-height: 28px; letter-spacing: -0.02em;">
							  plus you’ll get the easiest and fastest social media scheduler that comes
							  with unlimited free trainings, free theme bundles and loads of free
							  pre-made content!
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="flex w-full justify-end items-center l_image">
				  <img class="transition-opacity w-full duration-[0.7s] opacity-100 z-10 mt-16 mobile_image"  style="display:none"  src="/wp-content/uploads/Folder_Access-a-free-content-library-of-over-3000-graphics-copy-1.svg" alt="">
				  <img class="transition-opacity hidden md:block w-full duration-[0.7s] opacity-100 z-10 mt-16"   src="/wp-content/uploads/folder-landing.svg" alt="">
			  </div>
		  </div>
	  </div>
	  <div class="w-40 h-40 show_large">
		  
	  </div>
	  
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
  </main>
<?php get_footer();?>