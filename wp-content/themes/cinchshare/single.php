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

<main id="primary" class="single-post-div">
	<div class = "w-40 h-[248px]"></div>
	<?php
	while ( have_posts() ) :
	the_post();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
	?>
	<div class="breadcrumbs">
		Learning Center / <?php $category = get_the_category();
		$firstCategory = $category[0]->cat_name; 
		echo $firstCategory; ?> / <span class="titleBreadCrumb"><?php the_title(); ?></span>
	</div>
	<div class="flex flex-row image-title-box">
		<div class="featuredImage">
			<?php if($featured_img_url) { ?> <img src="<?php echo $featured_img_url; ?>" style="width: 100%;"> <?php } else { ?> <img src="/wp-content/uploads/cinchshare-default-scaled.jpeg" style="width: 100%;"> <?php } ?>
			
		</div>
		<div class="postDetails">
			<div class="categorName">
				<?php $category = get_the_category();
				$firstCategory = $category[0]->cat_name; 
				echo $firstCategory; ?>
			</div>
			<div class="titleBox">
				<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
			</div>
			<div class="authorBoxReadTime">
				<div class="authorBox">
					<?php
					$user = wp_get_current_user();

					if ( $user ) :
					?>
					<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
					<?php echo get_the_author_meta('display_name', $user->ID); ?>
					<?php endif; ?>
					
				</div>
				<div class="readingTime">
					<?php echo estimate_reading_time_in_minutes( get_the_content(), 200, true ); ?> min read
				</div>
			</div>
			<div class="excerptBox">
				<?php the_excerpt(); ?>
			</div>
			<div class="publishedDate">
				Published: <?php echo get_the_date('M d, Y'); ?>
			</div>
			<div class="socialLinksShare">
				<div class="shareText">
					Share: 
				</div>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>/">
					<img src="https://cinchshare1.wpengine.com/wp-content/uploads/Facebook.svg">
				</a>
				<a target="_blank" href="https://www.instagram.com">
					<img src="https://cinchshare1.wpengine.com/wp-content/uploads/Instagram.svg">
				</a>
				<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>/&text=<?php echo get_the_title(); ?>">
					<img src="https://cinchshare1.wpengine.com/wp-content/uploads/Twitter.svg">
				</a>
				<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>">
					<img src="https://cinchshare1.wpengine.com/wp-content/uploads/LinkedIn.svg">
				</a>
			</div>
		</div>
	</div>
	<div class="theContent">
		<?php the_content(); ?>
	</div>
	<?php
	$prev_post = get_previous_post(); 
	$id = $prev_post->ID ;
	$prevpermalink = get_permalink( $id );
	?>
	<?php 
	$next_post = get_next_post();
	$nid = $next_post->ID ;
	$nextpermalink = get_permalink($nid);
	?>
	<div class="nexPreviousPosts">
		<div class="previousPosts">
			<img src="/wp-content/uploads/Group-10504-1.svg"><span class="pntitle">Previous Article&nbsp;&nbsp;&nbsp;</span><a href="<?php echo $prevpermalink; ?>"><?php echo $prev_post->post_title; ?></a>
		</div>
		<div class="nextPosts">
			<span class="pntitle">Next Article&nbsp;&nbsp;&nbsp;</span><a href="<?php echo $nextpermalink; ?>"><?php echo $next_post->post_title; ?></a> <img src="/wp-content/uploads/Group-10504.svg">
		</div>
	</div>
	<h1 class="youAlsoLikeTitle">
		You may also like
	</h1>
	<div class="relatedPosts">
		<?php
		// WP_Query arguments
		$args = array(
			'post_type' 		=> 		'post',
			'category__in' 		=> 		wp_get_post_categories(get_the_ID()),
			'post__not_in' 		=> 		array(get_the_ID()),
			'posts_per_page' 	=> 		3,
			'orderby' 			=> 		'rand',
			'order'             => 		'ASC',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		?>
		<div class="relatedPostsInnerDiv">
			<div class="featuredImageRP">
				<?php if($featured_img_url) {
				?>
				<img src="<?php echo $featured_img_url; ?>" style="width: 100%;">
				<?php
				}
				else {
				?>
				<img src="/wp-content/uploads/cinchshare-default-scaled.jpeg" style="width: 100%;">
				<?php
				}
				?>
				
			</div>
			<div class="relatedPostBox">
				<div>

					<div class="categorName">
						<?php $category = get_the_category();
				$firstCategory = $category[0]->cat_name; 
				echo $firstCategory; ?>
					</div>
					<div class="titleBox">
						<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="post-title">', '</h2>' ); ?></a>
					</div>

				</div>
				<div class="authorBoxReadTime">
					<div class="authorBox">
						<?php
				$user = wp_get_current_user();

				if ( $user ) :
						?>
						<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
						<?php endif; ?>
						<?php echo get_the_author_meta('display_name', $user->ID); ?>
					</div>
					<div class="readingTime">
						<?php echo estimate_reading_time_in_minutes( get_the_content(), 200, true ); ?> min read
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>

	</div>
	<?php
	// 			the_post_navigation(
	// 				array(
	// 					'prev_text' => '<span>' . esc_html__( 'Previous:', 'cinchshare' ) . '</span> <span>%title</span>',
	// 					'next_text' => '<span>' . esc_html__( 'Next:', 'cinchshare' ) . '</span> <span>%title</span>',
	// 				)
	// 			);

	// If comments are open or we have at least one comment, load up the comment template.
	// 			if ( comments_open() || get_comments_number() ) :
	// 				comments_template();
	// 			endif;

	endwhile; // End of the loop.
	?>
	<div class = "w-40 h-40"></div>
	<?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
</main><!-- #main -->

<?php
get_footer();
