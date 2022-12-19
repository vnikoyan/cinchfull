<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

get_header();
?>

	<main id="primary">
		<div class = "w-40 h-[150px]"></div>

    <section class = "hidden md:flex pr-4 xl:pr-0  max-w-max-content m-auto flex justify-end post_search_wrap">
			<div class = "relative flex border rounded-md w-fit items-center py-2 px-4 post_search downloads_search min-w-[400px]" >
				<input type="text" placeholder = "Search something" class="w-full focus:outline-none">
				<svg width="16" height="16" class ="icon_search" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_4825_48695)">
					<path d="M10.5691 0C4.74145 0 0 4.74145 0 10.5691C0 16.3971 4.74145 21.1382 10.5691 21.1382C16.3971 21.1382 21.1382 16.3971 21.1382 10.5691C21.1382 4.74145 16.3971 0 10.5691 0ZM10.5691 19.187C5.81723 19.187 1.95122 15.321 1.95122 10.5691C1.95122 5.81728 5.81723 1.95122 10.5691 1.95122C15.321 1.95122 19.187 5.81723 19.187 10.5691C19.187 15.321 15.321 19.187 10.5691 19.187Z" fill="#5433ED"/>
					<path d="M23.7142 22.3325L18.1207 16.739C17.7396 16.3578 17.1223 16.3578 16.7412 16.739C16.36 17.1198 16.36 17.7377 16.7412 18.1185L22.3347 23.712C22.5252 23.9026 22.7747 23.9978 23.0244 23.9978C23.2739 23.9978 23.5236 23.9026 23.7142 23.712C24.0954 23.3312 24.0954 22.7133 23.7142 22.3325Z" fill="#5433ED"/>
					</g>
					<defs>
					<clipPath id="clip0_4825_48695">
					<rect width="24" height="24" fill="white"/>
					</clipPath>
					</defs>
				</svg>
				<svg width="16" class ="icon_clear cursor-pointer rotate-45 hidden" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.5834 6.91602H9.08335V0.416016H6.91669V6.91602H0.416687V9.08268H6.91669V15.5827H9.08335V9.08268H15.5834V6.91602Z" fill="#5433ED"/>
				</svg>
				<div class = "loader_search hidden"></div>
				<div class = "absolute z-50 w-full search_results hidden">

				</div>
			</div>
		</section>

		<section class ="pt-10">
      <div class = "max-w-max-content m-auto px-4">
        <div class ="flex flex-wrap items-center justify-center">
          <svg width="56" height="51" viewBox="0 0 56 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.6009 34.0305C10.7504 33.9536 10.9174 33.9157 11.0858 33.9203C11.2543 33.9249 11.4189 33.9718 11.5639 34.0566C14.361 35.6644 17.5385 36.5098 20.7729 36.5067C23.9212 36.5004 27.0154 35.699 29.7634 34.1783C32.5113 32.6576 34.822 30.4679 36.4763 27.8164C36.5086 27.7634 36.5295 27.7046 36.5385 27.6433C36.5476 27.5821 36.5443 27.5196 36.5287 27.4597C36.513 27.3998 36.4854 27.3436 36.4475 27.2943C36.4096 27.2451 36.362 27.2038 36.3078 27.173L33.7974 25.731C32.8483 25.1764 31.749 24.9263 30.6505 25.0148C29.5521 25.1034 28.5082 25.5263 27.6623 26.2256C25.9938 27.6414 23.9218 28.5085 21.7333 28.707C19.5449 28.9054 17.3483 28.4254 15.4477 27.3332C13.547 26.2411 12.0365 24.591 11.1253 22.6115C10.2141 20.6319 9.94735 18.4209 10.3618 16.2845C10.7131 14.474 11.5405 12.7871 12.7604 11.3939C13.9803 10.0007 15.5494 8.95045 17.31 8.34904C19.0707 7.74764 20.9603 7.61631 22.7886 7.9683C24.6169 8.32029 26.3192 9.14316 27.7238 10.354C28.5418 11.0394 29.5553 11.4554 30.6232 11.5441C31.6912 11.6329 32.7604 11.3899 33.6824 10.849L36.3021 9.34124C36.3561 9.31007 36.4034 9.2686 36.441 9.21922C36.4787 9.16985 36.506 9.11355 36.5215 9.05361C36.537 8.99367 36.5404 8.93128 36.5313 8.87006C36.5223 8.80883 36.5009 8.75 36.4687 8.69698C35.1983 6.64851 33.5315 4.86881 31.5639 3.46019C29.5963 2.05157 27.3667 1.04182 25.0035 0.488978C22.6403 -0.0638613 20.1903 -0.148879 17.7938 0.238808C15.3974 0.626496 13.1019 1.47925 11.0395 2.74803C8.97712 4.01682 7.18831 5.67661 5.77611 7.632C4.36391 9.58738 3.35618 11.7998 2.81067 14.142C2.26516 16.4843 2.19261 18.9101 2.59742 21.2802C3.00222 23.6502 3.87629 25.9177 5.16936 27.9522C5.25937 28.0964 5.30944 28.2614 5.31469 28.4308C5.31995 28.6001 5.28024 28.7679 5.19934 28.9173L0.0554454 38.5545C0.00761967 38.6441 -0.00989799 38.7465 0.00535733 38.8467C0.0206126 38.947 0.0676849 39.0397 0.140064 39.1114C0.212443 39.1831 0.306342 39.23 0.40758 39.2451C0.508818 39.2603 0.612233 39.2429 0.702796 39.1957L10.6009 34.0305Z" fill="#2BD4D9"/>
            <path d="M53 37.3281V44.4392C53 45.3822 52.6254 46.2866 51.9586 46.9534C51.2918 47.6202 50.3874 47.9948 49.4444 47.9948H24.5556C23.6126 47.9948 22.7082 47.6202 22.0414 46.9534C21.3746 46.2866 21 45.3822 21 44.4392V37.3281" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M28.1113 28.4453L37.0002 37.3342L45.8891 28.4453" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M37 37.3333V16" stroke="#5433ED" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <h1 class = "pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">
						Downloads
          </h1>
        </div>
        <p class ="text-center font-bold text-xl pt-8 md:text-2xl lg:text-3xl" >
				</p>
      </div>
    </section>

    <section class = "my-12 md:my-28">
      <?php
        $args = array(
          'post_type' => 'downloads',
          "posts_per_page" => 1,
          "orderby"        => "date",
          "order"          => "DESC",
          'post_status'      => 'publish',
          'paged' => 1,
        );      
        
      $wp_query = new WP_Query( $args );

      if ( $wp_query->have_posts() ) :
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
        ?>
          <div class="max-w-[1300px] flex flex-col lg:flex-row items-center w-full mx-auto px-4">
            <div class="relative w-full lg:w-7/12 lg:pr-10 mb-10 lg:mb-0">
              <img class="w-full" alt="" src="/wp-content/uploads/learning-center_bg_Vector.svg">
              <div class = "py-4 absolute top-0 bottom-0 left-0 right-0 m-auto w-11/12 h-full md:w-10/12">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full object-cover rounded-2xl bg-white" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
            </div>
            <div class="w-full lg:w-5/12 ">
              <div class="flex items-center">
                <p class="text-secondary font-bold text-sm md:text-base uppercase">
                  <?php 
                    if(get_the_category($post->ID)) {
                      $category_detail=get_the_category($post->ID);
                      echo $category_detail[0]->cat_name;
                    } else {
                      echo "downloads";
                    }
                  ?>
                </p>
              </div>
              <p class="mt-4 lg:mt-6 text-xl md:text-2xl lg:text-3xl font-bold line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
              <div class="mt-6">
                <p>
                  <?php if(get_the_excerpt($post->ID)) {
                    echo get_the_excerpt($post->ID);
                  } else {
                    echo wp_trim_words( strip_tags(get_the_content()), 30, '...' );
                  }
                  ?>
                </p>
              </div>  
              <a href="<?php the_permalink();?>">
                <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-32 lg:w-44 mt-4 lg:mt-6">Download</button>
              </a>
            </div>
          </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
      <?php endif; ?>
    </section>

    <section>
      <div class = "max-w-max-content m-auto px-2">
        <p class="font-bold text-xl md:text-2xl lg:text-3xl pl-4">Recent Posts</p>
        <div class ="s_download_body pb-6 mt-8">
          <?php 
            $i =1; 
            $args = array(
              'post_type' => 'downloads',
              "posts_per_page" => 9,
              "orderby"        => "date",
              "order"          => "DESC",
              'post_status'      => 'publish',
              'paged' => 1,
            ); 

            $wp_query = new WP_Query( $args );
            $totalPost = $wp_query->found_posts; 
            echo '<div totalPosts="'.$totalPost.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" postName = "downloads" currentPage = "1">';
            if ( $wp_query->have_posts() ) :
              while ( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
                <div class="w-full p-4">
                  <div class="rounded-3xl overflow-hidden hover:shadow-custom-2">
                    <div class="aspect-[4/3] relative ">
                      <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
                      <?php endif; ?>
                    </div>
                    <div class="flex flex-col py-6 px-3 lg:p-4 ">
                      <div class="flex items-center pb-2">
                        <p class="text-secondary font-bold text-sm uppercase py-2">
                          <?php 
                            if(get_the_category($post->ID)) {
                              $category_detail=get_the_category($post->ID);
                              echo $category_detail[0]->cat_name;
                            } else {
                              echo "downloads";
                            }
                          ?>
                        </p>
                      </div>
                      <p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
                      <a href="<?php the_permalink();?>">
                        <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-32 lg:w-44 mb-4 lg:mb-6">Download</button>
                      </a>
                    </div>
                  </div>
                </div>
              <?php $i++;  endwhile; else : ?>
              <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
            <?php endif; ?>
            </div>
        </div>
        <?php 
          if($totalPost > 9) {
            ?>
            <div class="flex justify-center py-10">
              <button type="button" class="download_road_more hover:bg-primary hover:text-white text-primary border border-primary px-3 py-2 rounded-lg w-32 lg:w-44">Read More</button>
              <div class ="loader hidden"></div>
            </div>
          <?php }
        ?>
      </div>
    </section>
    <section class = "w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
