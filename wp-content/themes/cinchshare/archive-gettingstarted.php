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
		<section class = "w-40 h-[150px]"></section>

		<section class = "hidden md:flex pr-4 xl:pr-0  max-w-max-content m-auto flex justify-end post_search_wrap">
			<div class = "relative flex border rounded-md w-fit items-center py-2 px-4 post_search custompost_center_search min-w-[400px]" >
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
					<svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.2214 47.505C14.422 47.3977 14.646 47.3448 14.872 47.3511C15.098 47.3575 15.3188 47.423 15.5134 47.5415C19.2657 49.7859 23.5285 50.966 27.8675 50.9617C32.091 50.9529 36.242 49.8342 39.9285 47.7113C43.6149 45.5885 46.7148 42.5318 48.9341 38.8305C48.9774 38.7565 49.0055 38.6743 49.0176 38.5888C49.0297 38.5033 49.0254 38.4162 49.0044 38.3325C48.9833 38.2489 48.9463 38.1703 48.8954 38.1016C48.8446 38.0329 48.7808 37.9753 48.7081 37.9322L45.3402 35.9193C44.067 35.1451 42.5923 34.7959 41.1187 34.9195C39.645 35.0432 38.2447 35.6336 37.1099 36.6098C34.8715 38.5861 32.0919 39.7966 29.156 40.0736C26.2201 40.3506 23.2733 39.6805 20.7235 38.1559C18.1738 36.6314 16.1474 34.328 14.9249 31.5646C13.7025 28.8012 13.3447 25.7147 13.9007 22.7325C14.372 20.205 15.4819 17.8501 17.1184 15.9053C18.7549 13.9605 20.86 12.4944 23.2219 11.6549C25.5839 10.8153 28.1189 10.632 30.5716 11.1234C33.0243 11.6147 35.3081 12.7634 37.1923 14.4537C38.2897 15.4105 39.6493 15.9912 41.082 16.1151C42.5147 16.2389 43.9492 15.8997 45.186 15.1447L48.7005 13.0399C48.7729 12.9964 48.8362 12.9385 48.8868 12.8696C48.9373 12.8007 48.9739 12.7221 48.9947 12.6384C49.0155 12.5548 49.0201 12.4677 49.0079 12.3822C48.9958 12.2967 48.9671 12.2146 48.9239 12.1406C47.2196 9.28102 44.9835 6.79664 42.3439 4.83027C39.7043 2.8639 36.7132 1.45433 33.543 0.682591C30.3727 -0.0891474 27.0859 -0.207829 23.871 0.333365C20.656 0.874559 17.5767 2.06496 14.8099 3.83613C12.0431 5.60729 9.64335 7.92429 7.74883 10.6539C5.85432 13.3835 4.50242 16.472 3.7706 19.7416C3.03878 23.0113 2.94145 26.3977 3.48451 29.7062C4.02758 33.0146 5.20017 36.1799 6.93486 39.02C7.0556 39.2212 7.12278 39.4516 7.12983 39.688C7.13687 39.9245 7.08361 40.1587 6.97508 40.3671L0.0743817 53.8203C0.010222 53.9454 -0.0132785 54.0884 0.00718702 54.2283C0.0276525 54.3682 0.0908014 54.4977 0.1879 54.5977C0.284999 54.6978 0.410967 54.7632 0.546781 54.7844C0.682595 54.8055 0.82133 54.7813 0.942823 54.7153L14.2214 47.505Z" fill="#2BD4D9"/>
						<path d="M33.2754 28.4801C30.5261 30.5404 28.7557 33.7687 28.7557 37.3978C28.7557 43.6196 33.9591 48.6633 40.3778 48.6633C46.7966 48.6633 52 43.6196 52 37.3978C52 33.7687 50.2296 30.5404 47.4803 28.4801M40.3778 37.2588V22.2383" stroke="#5433ED" stroke-width="5"/>
					</svg>
					<h1 class = "pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">
						Getting Started
					</h1>
				</div>
				<p class ="text-center font-bold text-xl pt-8 md:text-2xl lg:text-3xl" >
				</p>
			</div>
		</section>
		
		<section class = "max-w-max-content m-auto pt-10 px-6 ">
			<div class ="s_getting_start_body w-full">
				<?php 
					$i =1; 
					$args = array(
						'post_type' => 'gettingstarted',
						"posts_per_page" => 8,
						"orderby"        => "date",
						"order"          => "DESC",
						'post_status'      => 'publish',
						'paged' => 1,
					);

					$wp_query = new WP_Query( $args );
					$totalPost = $wp_query->found_posts; 
					echo '<div totalPosts="'.$totalPost.'" class = "" postName = "gettingstarted" currentPage = "1">';
					if ( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) : $wp_query->the_post();
						?>
							<div class="w-full py-10">
								<div class = "grid grid-cols-1 md:grid-cols-2 rounded-[20px] md:rounded-[30px] hover:shadow-custom-2">
									<div class="relative md:max-w-[650px]">
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img class="max-h-[250px] md:max-h-[300px] lg:max-h-[400px] w-full rounded-[20px] md:rounded-[30px] object-cover" alt="" src="<?php echo $image[0]; ?>">
										<?php endif; ?>
									</div>
									<div class = "px-1 py-6 md:py-0 md:pl-[30px] lg:pl-[60px] md:pr-10 flex flex-col	justify-center">
										<div class="flex items-center pb-2">
											<p class="text-secondary font-bold text-sm">
												<?php 
													if(get_the_terms( $post->ID, 'getting-started' )) {
														$category = get_the_terms( $post->ID, 'getting-started' );     
														echo $category[0]->name;
													} else  {
														echo "Getting Started";
													}
												?>
											</p>
										</div>
										<a href="<?php the_permalink();?>" class="mt-3">
											<p class="font-bold text-xl md:text-2xl lg:text-3xl break-words md:min-h-[50px] lg:min-h-[70px] line-clamp-2 "><?php echo get_the_title($post->ID); ?></p>
										</a>
										<p class = "max-w-[565px] md:min-h-[100px] line-clamp-4 ">
											<?php 
												if(get_the_excerpt($post->ID)) {
													echo get_the_excerpt($post->ID);
												} else {
													echo wp_trim_words( strip_tags(get_the_content()), 30, '...' );
												}
											?>
										</p>
										<div class ="flex flex-wrap items-center justify-between pt-6">
											<div class="flex flex-wrap items-center">
												<?php $author_id=$post->post_author; ?>
												<img src="<?php echo get_avatar_url( $author_id ); ?> " class="h-6 w-6 rounded-full" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
												<p class = "font-bold text-sm md:text-base ml-2">
													<?php 
														$first = get_the_author_meta( 'user_firstname' , $author_id );
														if(!empty($first)) {
															the_author_meta( 'user_firstname' , $author_id );
															echo " ";
															the_author_meta( 'user_lastname' , $author_id );
														} else {
															the_author_meta( 'user_nicename' , $author_id );
														}
													?> 
												</p>
											</div>
											<div class="flex text-secondary font-bold text-sm md:text-base"><?php echo do_shortcode('[post-views]'); ?> &nbsp;  min read</div>
										</div>

									</div>
								</div>
							</div>
						<?php $i++;  endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php 
				if($totalPost > 8) {
					?>
					<div class="flex justify-center py-10">
						<button type="button" class="gettingstarted_road_more hover:bg-primary hover:text-white text-primary border border-primary px-3 py-2 rounded-lg w-32 lg:w-44">Read More</button>
						<div class ="loader hidden"></div>
					</div>
				<?php }
			?>
		</section>
		
		<section class = "w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
