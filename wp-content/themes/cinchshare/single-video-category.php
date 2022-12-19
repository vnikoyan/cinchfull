<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cinchshare
 */

get_header();
?>

	<main id="primary">
		<div class = "w-40 h-[150px]"></div>

		<section class = "hidden md:flex pr-4 xl:pr-0  max-w-max-content m-auto flex justify-end post_search_wrap">
      <div class = "relative flex border rounded-md w-fit items-center py-2 px-4 post_search video_search min-w-[400px]" >
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

		<section class = "s_video_body">
			<div totalPosts="" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" postName = "video-category" catName = "" currentPage = "1">
			</div>
		</section>

		<?php
			while ( have_posts() ) :
				the_post();
			?>
			<section class = "pt-6">
				<p class = "flex items-center justify-center flex-wrap">
					<a href="/video">Video </a> &nbsp; / &nbsp; 
					<?php 
						$categories = get_the_category( 1121 );//$post->ID
						$terms = get_the_terms( $post->ID , 'video' );
						if($terms)  { ?>
							<a href="/video/<?php echo $terms[0]-> slug; ?>"> <?php echo $terms[0] -> name;?> </a>
							&nbsp; / &nbsp; 
						<?php }
						?> 
						<span class = "text-secondary"><?php the_title(); ?></span>
				</p>
			</section>

			<section class ="mt-8 mb-12 mx-4">
				<div class ="flex flex-wrap items-center justify-center">
					<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_4825_54889)">
						<path d="M19.9924 46.1528C20.1513 46.0679 20.3287 46.0261 20.5077 46.0311C20.6867 46.0362 20.8616 46.088 21.0157 46.1816C23.9878 47.9557 27.3643 48.8885 30.8011 48.8852C34.1464 48.8782 37.4343 47.9939 40.3543 46.3159C43.2742 44.6378 45.7295 42.2216 47.4874 39.2958C47.5216 39.2373 47.5439 39.1724 47.5535 39.1048C47.563 39.0372 47.5596 38.9683 47.543 38.9022C47.5263 38.8361 47.497 38.774 47.4567 38.7197C47.4164 38.6653 47.3659 38.6198 47.3083 38.5858L44.6407 36.9946C43.6322 36.3827 42.4642 36.1066 41.2969 36.2043C40.1297 36.3021 39.0206 36.7688 38.1217 37.5404C36.3487 39.1026 34.1471 40.0595 31.8216 40.2785C29.4962 40.4974 27.1621 39.9677 25.1425 38.7626C23.123 37.5575 21.5179 35.7367 20.5496 33.5524C19.5814 31.368 19.298 28.9282 19.7384 26.5709C20.1117 24.573 20.9908 22.7115 22.287 21.1742C23.5833 19.6369 25.2506 18.478 27.1215 17.8144C28.9923 17.1508 31.0002 17.0058 32.9429 17.3942C34.8856 17.7826 36.6945 18.6907 38.187 20.0267C39.0562 20.7831 40.1331 21.2421 41.2679 21.34C42.4027 21.4379 43.5389 21.1698 44.5186 20.5729L47.3023 18.9092C47.3597 18.8748 47.4098 18.8291 47.4499 18.7746C47.4899 18.7201 47.5189 18.658 47.5353 18.5918C47.5518 18.5257 47.5554 18.4568 47.5458 18.3893C47.5362 18.3217 47.5135 18.2568 47.4793 18.1983C46.1294 15.9379 44.3582 13.9741 42.2675 12.4197C40.1767 10.8654 37.8075 9.75116 35.2965 9.14113C32.7854 8.53109 30.182 8.43728 27.6356 8.86508C25.0891 9.29287 22.65 10.2338 20.4585 11.6339C18.267 13.0339 16.3663 14.8655 14.8657 17.0231C13.3651 19.1808 12.2943 21.6221 11.7146 24.2067C11.135 26.7912 11.0579 29.4681 11.488 32.0833C11.9182 34.6986 12.8469 37.2006 14.2209 39.4456C14.3166 39.6047 14.3698 39.7868 14.3754 39.9737C14.3809 40.1606 14.3388 40.3457 14.2528 40.5105L8.78694 51.1448C8.73612 51.2437 8.71751 51.3567 8.73372 51.4673C8.74993 51.5779 8.79995 51.6802 8.87686 51.7593C8.95377 51.8384 9.05354 51.8901 9.16112 51.9069C9.26869 51.9236 9.37858 51.9045 9.47481 51.8523L19.9924 46.1528Z" fill="#2BD4D9"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M38.1041 29.5156H52.5326V43.4492H38.1041V36.9937L38.1042 36.9844L38.1041 36.975V29.5156ZM36.1041 29.5156V35.9844H29.6367V32.9342C29.6367 31.0462 31.1673 29.5156 33.0553 29.5156H36.1041ZM36.1041 37.9844H29.6367V43.4492H36.1041V37.9844ZM29.6367 45.4492H36.1041V52.4102H29.6367L29.6367 45.4492ZM29.6367 54.4102L29.6367 57.4603C29.6367 59.3484 31.1673 60.8789 33.0553 60.8789H36.1041V54.4102H29.6367ZM38.1041 53.4195V60.8789H52.5326V45.4492H38.1041V53.4008L38.1042 53.4102L38.1041 53.4195ZM54.5326 45.4492V52.4102H61L61 45.4492H54.5326ZM54.5326 60.8789V54.4102H61L61 57.4603C61 59.3484 59.4695 60.8789 57.5814 60.8789H54.5326ZM61 35.9844L61 32.9342C61 31.0462 59.4695 29.5156 57.5814 29.5156H54.5326V35.9844H61ZM61 37.9844H54.5326V43.4492H61L61 37.9844Z" fill="#5433ED"/>
						</g>
						<defs>
						<clipPath id="clip0_4825_54889">
						<rect width="72" height="72" fill="white"/>
						</clipPath>
						</defs>
					</svg>
          <h1 class = "pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">
						Videos
          </h1>
        </div>
			</section>

			<section class = "max-w-5xl m-auto px-4">
				<div class="s_featured_video aspect-[16/9] relative rounded-md overflow-hidden">
					<?php 
						if(get_field('post_video_link', $post->ID)) { 
							?>
							<iframe class="h-full w-full"  src="<?php echo get_field('post_video_link', $post->ID); ?>" frameborder="0" allow="autoplay"></iframe>
						<?php }
					?>
					<div class = "featured_video_image absolute top-0 h-full w-full">
						<?php 
							$url = get_field('post_video_link', $post->ID); 
							$embed = explode("/embed/",$url);
						
						?>
						<img class="h-full w-full object-cover" alt="" src="https://img.youtube.com/vi/<?php echo $embed[1]; ?>/sddefault.jpg">
						<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" style = "cursor:pointer; top: 50%;left: 50%;transform: translate(-50%, -50%); position:absolute">
							<path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="#5433ED"/>
							<path d="M24 21.737C24 20.1396 25.7803 19.1869 27.1094 20.0729L39.5038 28.3359C40.6913 29.1275 40.6913 30.8724 39.5038 31.6641L27.1094 39.927C25.7803 40.8131 24 39.8603 24 38.2629V21.737Z" fill="white"/>
						</svg>
					</div>
				</div>
				<?php 
					if($terms) { ?>
						<p class="text-secondary font-bold text-sm md:text-base uppercase pt-10">
							<?php	echo $terms[0] -> name; ?>
						</p>
					<?php }
				?> 
				<p class="pt-10 text-xl md:text-2xl lg:text-3xl font-bold"><?php echo get_the_title($post->ID); ?></p>
				<p class = "py-4">
				<?php echo the_content($post->ID); ?>
				</p>
			</section>

			<?php	endwhile; // End of the loop.
		?>
		<section class = "mt-32">
			<?php $postId = $post->ID; ?>
			<?php 
					$args = array(
						'post_type' => 'video-category',
						"posts_per_page" => 3,
						"orderby"        => "date",
						"order"          => "DESC",
						'post_status'      => 'publish',
						'paged' => 1,
					);

				$wp_query = new WP_Query( $args );
				$totalPost = $wp_query->found_posts; 

				if($totalPost > 1) { 
					if ( $wp_query->have_posts() ) : ?>
						<div class = "max-w-max-content m-auto px-2">
							<p class="font-bold text-xl md:text-2xl lg:text-3xl pl-4">Recent Videos</p>
							<div class ="pb-6 mt-8">
								<div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
									<?php
										while ( $wp_query->have_posts() ) : $wp_query->the_post();
										if($postId != $post->ID) {
										?>
											<div class="w-full p-4">
												<div class="rounded-3xl overflow-hidden hover:shadow-custom-2">
													<div class="aspect-[4/3] relative ">
														<?php if (has_post_thumbnail( $post->ID ) ): ?>
															<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
															<img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
														<?php else: ?>
															<img class="h-full w-full object-cover" alt="" src="/wp-content/uploads/cinchshare-default.jpg">
														<?php endif; ?>
														<a href="<?php the_permalink();?>" class = "absolute" style = "top: 50%;left: 50%;transform: translate(-50%, -50%);">
															<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="#5433ED"/>
																<path d="M24 21.737C24 20.1396 25.7803 19.1869 27.1094 20.0729L39.5038 28.3359C40.6913 29.1275 40.6913 30.8724 39.5038 31.6641L27.1094 39.927C25.7803 40.8131 24 39.8603 24 38.2629V21.737Z" fill="white"/>
															</svg>
														</a>
													</div>
													<div class="flex flex-col py-6 px-3 lg:p-4 ">
														<div class="flex items-center pb-2">
															<p class="text-secondary font-bold text-sm">
																<?php 
																	if(get_the_terms( $post->ID, 'video' )) {
																		$category = get_the_terms( $post->ID, 'video' );     
																		echo $category[0]->name;
																	}
																?>
															</p>
														</div>
														<a href="<?php the_permalink();?>" class="mt-3">
															<p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
														</a>
													</div>
												</div>
											</div>
									<?php } endwhile; ?>
								</div>
							</div>
						</div>
					<?php endif; 
				} ?>
    </section>
	<?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
