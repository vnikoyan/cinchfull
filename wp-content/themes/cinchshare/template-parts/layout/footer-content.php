<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<footer id="colophon">
	<div class = " w-full relative z-20 xl:z-0 flex flex-col">
		<img class="w-full absolute bottom-full footer-bg" src="/wp-content/uploads/footer_bg.svg" alt="">
		
		<div class = "footer-logo relative max-w-max-content w-full z-20 flex flex-col xl:flex-row items-center xl:items-start justify-between mx-auto mainFooter px-10 xl:px-0">
			<div class="pb-0 xl:pb-0">
				<a href="/">
					<?php the_custom_logo(); ?>
				</a>
				<div class="flex py-6 -mx-2 footer-icons">
					<a class="p-2 mx-2 rounded-md " href="https://www.facebook.com/CinchShare" rel="noreferrer" target="_blank" style="background-color: rgb(244, 253, 253);">
						<img class="w-5 h-5 " src="/wp-content/uploads/facebook.svg" alt="Facebook">
					</a>
					<a class="p-2 mx-2 rounded-md " href="https://www.instagram.com/cinchshare" rel="noreferrer" target="_blank" style="background-color: rgb(244, 253, 253);">
						<img class="w-5 h-5 " src="/wp-content/uploads/instagram.svg" alt="Instagram">
					</a>
					<a class="p-2 mx-2 rounded-md " href="https://twitter.com/cinchshare" rel="noreferrer" target="_blank" style="background-color: rgb(244, 253, 253);">
						<img class="w-5 h-5 " src="/wp-content/uploads/twitter.svg" alt="Twitter">
					</a>
					<a class="p-2 mx-2 rounded-md " href="https://www.linkedin.com/company/cinchshare1/" rel="noreferrer" target="_blank" style="background-color: rgb(244, 253, 253);">
						<img class="w-5 h-5 " src="/wp-content/uploads/linkedin.svg" alt="Linkdin">
					</a>
					<a class="p-2 mx-2 rounded-md " href="https://vm.tiktok.com/ZTds6tQER/" rel="noreferrer" target="_blank" style="background-color: rgb(244, 253, 253);">
						<img class="w-5 h-5 " src="/wp-content/uploads/tiktok.svg" alt="Tik Tok">
					</a>
				</div>
			</div>
			<?php 
				wp_nav_menu(
					array(
						'menu_class' => 'footer-nav 	flex justify-between flex-wrap menuCol lg:-mx-2',    
						'menu'              => "Footer Menu", 
					));
			?>
		</div>
		<div class = "relative z-10">
			<div class="w-full h-0.5 bg-gray-200 lg:mt-16 "></div>
			<div class="max-w-screen-xl w-full mx-auto flex flex-col lg:flex-row justify-between items-center py-6 px-6 lg:px-12">
				<p class="font-bold text-xs pb-8 lg:pb-0" style="color: rgb(150, 150, 150);">© 2022 CinchShare LLC</p>
				<div class="grid grid-cols-2 gap-12">
					<a class="text-secondary font-bold" href="/privacy-terms">Terms of Service</a>
					<a class="text-secondary font-bold" href="/privacy-policy">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
