<?php
   /**
    * Template Name: Thank You
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
    <div class="relative">
      <div class="max-w-max-content mx-auto flex flex-col	justify-center items-center px-3 pt-32 lg:pt-48 mb-60 ">
        <div class=" pb-10 lg:pb-0 m-auto">
          <img src="/wp-content/uploads/amb-thankyou.svg" alt="">
        </div>
        <div class = "m-auto text-center">
          <p class="text-3xl xl:text-5xl font-bold">Thanks for applying!</p>
          <p class = "pt-4">Now go check your inbox because we just sent you an email.</p>
          <div class="mt-10 flex justify-center">
            <button type="button" class="flex items-center justify-between false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-8 py-2.5 rounded-lg mt-6 relative z-10 ">Return To The Home Page
            <svg width="20" height="12" class = "mt-1 ml-4" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.2071 8.70711C19.5976 8.31658 19.5976 7.68342 19.2071 7.29289L12.8431 0.928932C12.4526 0.538408 11.8195 0.538408 11.4289 0.928932C11.0384 1.31946 11.0384 1.95262 11.4289 2.34315L17.0858 8L11.4289 13.6569C11.0384 14.0474 11.0384 14.6805 11.4289 15.0711C11.8195 15.4616 12.4526 15.4616 12.8431 15.0711L19.2071 8.70711ZM0.5 9H18.5V7H0.5V9Z" fill="white"/>
            </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>