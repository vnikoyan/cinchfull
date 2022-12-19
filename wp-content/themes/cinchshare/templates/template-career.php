<?php
/**
    * Template Name: Career
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
	<section class="max-w-max-content mx-auto grid md:grid-cols-2 items-center gap-4 lg:gap-32 px-3 pt-32 lg:pt-44">
		<div>
			<?php if(get_field('career_section1_title',$post->ID)) { ?>
			<h1 class="text-3xl lg:text-5xl mb-6 font-bold"><?php echo get_field('career_section1_title',$post->ID); ?></h1>
			<?php } ?>
		</div>
		<div>
			<?php if(get_field('career_section1_image',$post->ID)) { ?>
			<img class="w-full" src="<?php echo get_field('career_section1_image',$post->ID); ?>" alt="">
			<?php } ?>
		</div>
	</section>

	

	<section class="max-w-max-content mx-auto px-3 pt-16 lg:pt-24">
		<div class="w-full text-center pb-8">
			<?php if(get_field('career_section3_title',$post->ID)) { ?>
			<h2 class="text-xl lg:text-3xl pb-3 font-bold text-primary "><?php echo get_field('career_section3_title',$post->ID); ?></h2>
			<?php } ?>
			<?php if(get_field('career_section3_content',$post->ID)) { ?>
			<p style="font-family: 'Nunito';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 25px;
letter-spacing: 0.01em;
color: #000000;
opacity: 0.7;
flex: none;
order: 1;
flex-grow: 0;"><?php echo get_field('career_section3_content',$post->ID); ?></p>
			<?php } ?>
		</div>
		<div class="">
			<?php
			$taxonomy = 'departments';
			$terms = get_terms([
				'taxonomy' => $taxonomy,
				'hide_empty' => false,
			]);
			foreach ($terms as $term){
			?>
			<div class = "pb-4">
				<p class = "text-white font-bold bg-primary rounded-md w-fit px-4 py-2 md:py-3"><?php echo $term->name; ?></p>
			</div>
			<?php
				$the_query = new WP_Query( array(
					'post_type' => 'careers',
					'tax_query' => array(
						array (
							'taxonomy' => 'departments',
							'field' => 'slug',
							'terms' => $term->slug,
						)
					),
				) );
				if($the_query->have_posts()):
				while ( $the_query->have_posts() ) :
				$the_query->the_post();
			?>
			<div class = "border border-[#3333335e] rounded-md px-4 py-2 my-6">
			<a href="<?php the_permalink() ?>"></a>
				<?php 
				
								
				$my_posts = get_posts( array(
					'numberposts' => 2,
					'post_type'   => 'careers',
					'suppress_filters' => true, 
				) );
				
				global $post;
				?>


					<h5><a href="<?php the_permalink() ?>"><?php the_title() ?> - <?php the_field("is_remote_"); ?></a></h5>

				<?php 
				foreach( $my_posts as $post ){
					setup_postdata( $post );

				}

				wp_reset_postdata(); 

				?>
			</div>
			
			<?php
				endwhile;
			/*	else:
				echo  'No positions are open at this time.'; */
				endif;
				wp_reset_postdata();
			?>
			<?php
			}
			?>
		</div>
	</section>
	<section class ="w-40 h-20"></section>
	<?php get_template_part( 'template-parts/content/content', 'footerform' ); ?>
</main>
<?php get_footer();?>