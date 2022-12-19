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

		<?php if ( have_posts() ) : ?>
			<?php
					$taxonomy = get_queried_object()->taxonomy;
					$term_id = get_queried_object()->term_id;
					$post_id = $taxonomy.'_'.$term_id;
					$category_name = get_cat_name($term_id);
				?>
			<section class = "hidden md:flex pr-4 xl:pr-0  max-w-max-content m-auto flex justify-end post_search_wrap">
				<div class = "relative flex border rounded-md w-fit items-center py-2 px-4 post_search learning_center_search min-w-[400px]" >
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

			<?php 
				if($term_id != 1) { ?>
				<section class = "pt-6">
					<p class = "flex items-center justify-center">
						<a href="/learning-center">Learning Center </a> &nbsp; / &nbsp; <span class = "text-secondary"><?php echo $category_name; ?></span>
					</p>
				</section>
				<?php }
			?>

			<section class ="pt-10">
				<div class = "max-w-max-content m-auto px-4">
					<div class ="flex flex-wrap items-center justify-center">
						<img src="<?php echo get_field('post_icon_image', $post_id);?>" class = "max-w-[45px] md:max-w-[60px]" alt="">
						<?php 
							the_archive_title('<h1 class="pl-4 text-3xl md:text-4xl lg:text-5xl font-bold">', '</h1>');
						?>
					</div>
					<?php the_archive_description('<div class ="archive_description text-center font-bold text-xl pt-8 md:text-2xl lg:text-3xl">', '</div>'); ?>
				</div>
			</section>

						<section class = "my-12 md:my-28">
				<?php
				$featuredId = get_field('blog_featured_post', $post_id);

				if($featuredId) { 
					$post = get_post($featuredId);
					?>
					<div class="max-w-[1300px] flex flex-col lg:flex-row items-center w-full mx-auto px-4">
						<div class="relative w-full lg:w-7/12 lg:pr-10 mb-10 lg:mb-0">
							<img class="w-full" alt="" src="/wp-content/uploads/learning-center_bg_Vector.svg">
							<div class = "py-4 absolute top-0 bottom-0 left-0 right-0 m-auto w-11/12 h-full md:w-10/12">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<img class="h-full w-full object-cover rounded-2xl" alt="" src="<?php echo $image[0]; ?>">
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
										}
									?>
								</p>
							</div>
							<a href="<?php the_permalink();?>" class="mt-3">
								<p class="mt-4 lg:mt-6 text-xl md:text-2xl lg:text-3xl font-bold line-clamp-2 min-h-[70px]"><?php echo get_the_title($post->ID); ?></p>
							</a>
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
				<?php } else {
					$args = array(
						"posts_per_page" => 1,
						"orderby"        => "date",
						"order"          => "DESC",
						'post_status'      => 'publish',
						'category_name'  => $category_name
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
											<img class="h-full w-full object-cover rounded-2xl" alt="" src="<?php echo $image[0]; ?>">
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
												}
											?>
										</p>
									</div>
									<a href="<?php the_permalink();?>" class="mt-3">
										<p class="mt-4 lg:mt-6 text-xl md:text-2xl lg:text-3xl font-bold line-clamp-2 min-h-[70px]"><?php echo get_the_title($post->ID); ?></p>
									</a>
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
						<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
					<?php endif; } ?>
			</section>

			<section>
				<div class = "max-w-max-content m-auto px-2">
					<p class="font-bold text-xl md:text-2xl lg:text-3xl pl-4">Recent Posts</p>
					<div class ="s_post_body pb-6 mt-8">
						<?php 
							$i =1; 
							$args = array(
							"posts_per_page" => 6,
							"orderby"        => "date",
							"order"          => "DESC",
							'post_status'      => 'publish',
							'category_name'  => $category_name,
							'paged' => 1,
							);

							$wp_query = new WP_Query( $args );
							$totalPost = $wp_query->found_posts; 
							echo '<div totalPosts="'.$totalPost.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" catName = "'.$category_name.'" currentPage = "1">';
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
													<p class="text-secondary font-bold text-sm">
														<?php 
															$category_detail=get_the_category($post->ID);
															echo $category_detail[0]->cat_name;
														?>
													</p>
												</div>
												<a href="<?php the_permalink();?>" class="mt-3">
													<p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
												</a>
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
						if($totalPost > 6) {
							?>
							<div class="flex justify-center py-10">
								<button type="button" class="post_road_more hover:bg-primary hover:text-white text-primary border border-primary px-3 py-2 rounded-lg w-32 lg:w-44">Read More</button>
								<div class ="loader hidden"></div>
							</div>
						<?php }
					?>
				</div>
			</section>
		<?php	endif;
		?>
		<section class = "w-40 h-20"></section>
    <?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
	</main><!-- #main -->

<?php
get_footer();
