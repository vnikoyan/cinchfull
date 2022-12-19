<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title text-center leading-none mb-0">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div>
	<?php if(get_field('apply_button_text',$post->ID)) { ?>
		<a href="<?php echo get_field('apply_button_link',$post->ID); ?>" rel="noopener" target="_blank" class = "hover:scale-105 w-fit flex justify-center m-auto py-2 px-10 rounded-md bg-secondary text-white"><?php echo get_field('apply_button_text',$post->ID); ?></a>
	<?php } ?>
		<div class ="w-40 h-[40px]"></div>
	<?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
