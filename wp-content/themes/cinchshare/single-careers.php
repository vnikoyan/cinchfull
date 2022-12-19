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
	
	<div class="flex flex-row image-title-box">
		
		<div class="postDetails">
			<div class="categorName">
				<?php $category = get_the_category();
				$firstCategory = $category[0]->cat_name; 
				echo $firstCategory; ?>
			</div>
			<div class="titleBox">
				<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
			</div>
		
            <div class="isremote">
				<?php the_field("is_remote_"); ?>
            </div>  

            <div class="describtion">
				<?php the_field("describtion"); ?>
            </div>   
           
		
		</div>
	</div>
	<div class="theContent">
		<?php the_content(); ?>
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
