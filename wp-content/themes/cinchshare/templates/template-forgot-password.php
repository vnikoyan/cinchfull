<?php
  /**
  * Template Name: Forgor password
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
		<div class="flex w-full ">
			<div class="w-full lg:w-1/2 flex items-center justify-center lg:justify-end min-h-screen py-16">
				<div class="flex flex-col w-full max-w-2xl p-10">
					<p class="text-3xl lg:text-4xl font-bold text-primary mb-5">Forgot Password?</p><p class="text-base lg:text-lg mb-5">Not a member yet? Click
					<a class="text-secondary mx-1" href="/signup">here</a>to try CinchShare free!</p>
					<div class="reset_pass  w-full text-center">
						<?php echo do_shortcode('[gravityform id="8" title="false" ajax="true"]'); ?>
					</div>
					<div class="confirmPassword text-center hidden">
						<div class="w-full rounded-lg p-4 border-2 mb-5">
							<p class="text-base lg:text-lg text-primary">Check your inbox for an e-mail to change your password.</p>
						</div>
						<a class="text-base" href="/forgot-password">Re-send Email</a>
					</div>
				</div>
			</div>
			<div class="hidden lg:flex w-1/2 h-screen bg-gradient-to-b from-primary to-secondary rounded-bl-[10rem] items-center justify-center px-4">
				<img class="" src="/wp-content/uploads/forgot-pass.png" alt="">
			</div>
		</div>
	</main>
<?php get_footer();?>