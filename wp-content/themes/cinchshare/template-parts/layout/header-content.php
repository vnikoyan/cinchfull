<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cinchshare
 */

?>

<header id="masthead" class = "absolute w-full z-50">
	<div class="c_header">
	<div class = "mobile_nav_bg fixed hidden top-0 bg-black right-0 h-screen opacity-30	w-full"></div>
		<?php 
			if(is_page_template('templates/template-login.php') || is_page_template('templates/template-signup.php') || is_page_template('templates/template-30dayfree.php') ||  is_page_template('templates/template-forgot-password.php') ) { ?>
				<nav class = "signup_nav flex justify-between items-center  max-w-max-content mx-auto px-6 xl:px-0">
					<div class = "py-4">
						<?php the_custom_logo(); ?>
					</div>
					
					<?php 
						if(is_page_template('templates/template-login.php')) { ?>
							<div class="hidden xl:flex -mx-2 items-center">
								<a class="mx-2" href="/signup">
									<button class="text-secondary font-bold">Don't have an account?</button>
								</a>
								<a class="mx-2" href="/signup">
									<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold flex items-center justify-center text-sm"><img src="/wp-content/uploads/user.png" alt="" class="mr-1">Sign Up</button>
								</a>
							</div>
							<div class = "mobile_drawer h-full w-[300px] bg-white fixed top-0 right-0 z-50 pt-20">
								<span class="absolute top-16 right-5 cursor-pointer mobile_nab_close">
									<img class="w-5" src="/wp-content/uploads/close.png">
								</span>
								<div class="flex flex-col mt-16 px-4">
									<a class="mb-4" href="/signup">
										<button class="text-secondary font-bold">Don't have an account?</button>
									</a>
									<a class="mb-4" href="/signup">
									<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full">Sign Up</button>
									</a>
								</div>
							</div>
					 <?php } else if(is_page_template('templates/template-signup.php') || is_page_template('templates/template-forgot-password.php')) { ?>
							<div class="hidden xl:flex -mx-2 items-center">
								<a class="mx-2" href="/login">
									<button class="text-secondary font-bold">Already have an account?</button>
								</a>
								<a class="mx-2" href="/login">
									<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold flex items-center justify-center text-sm"><img src="/wp-content/uploads/user.png" alt="" class="mr-1">Login</button>
								</a>
							</div>
							<div class = "mobile_drawer h-full w-[300px] bg-white fixed top-0 right-0 z-50 pt-20">
								<span class="absolute top-16 right-5 cursor-pointer mobile_nab_close">
									<img class="w-5" src="/wp-content/uploads/close.png">
								</span>
								<div class="flex flex-col mt-16 px-4">
									<a class="mb-4" href="/login">
										<button class="text-secondary font-bold">Already have an account?</button>
									</a>
									<a class="mb-4" href="/login">
										<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full">Login</button>
									</a>
								</div>
							</div>
					 <?php } else if (is_page_template('templates/template-30dayfree.php')){ ?>
							<div class="hidden xl:flex -mx-2 items-center">
								<a class="mx-2" href="/login">
									<button class="text-secondary font-bold">Already have an account?</button>
								</a>
								<a class="mx-2" href="/login">
									<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold flex items-center justify-center text-sm"><img src="/wp-content/uploads/user.png" alt="" class="mr-1">Login</button>
								</a>
							</div>
							<div class = "mobile_drawer h-full w-[300px] bg-white fixed top-0 right-0 z-50 pt-20">
								<span class="absolute top-16 right-5 cursor-pointer mobile_nab_close">
									<img class="w-5" src="/wp-content/uploads/close.png">
								</span>
								<div class="flex flex-col mt-16 px-4">
									<a class="mb-4" href="/login">
										<button class="text-secondary font-bold">Already have an account?</button>
									</a>
									<a class="mb-4" href="/login">
										<button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full">Login</button>
									</a>
								</div>
							</div>
							
					<?php	}
					?>
					<div class="xl:hidden">
						<button class="w-fit text-primary sign_up_mobile_toggle">
							<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px"><path d="M 3 8 A 2.0002 2.0002 0 1 0 3 12 L 47 12 A 2.0002 2.0002 0 1 0 47 8 L 3 8 z M 3 23 A 2.0002 2.0002 0 1 0 3 27 L 47 27 A 2.0002 2.0002 0 1 0 47 23 L 3 23 z M 3 38 A 2.0002 2.0002 0 1 0 3 42 L 47 42 A 2.0002 2.0002 0 1 0 47 38 L 3 38 z"></path></svg>
						</button>
					</div>
				</nav>
			<?php } else { ?>
				<nav class = "flex justify-between items-center  max-w-max-content mx-auto px-6 xl:px-0">
					<div class = "py-4">
						<?php 
							if(is_page_template('templates/template-learningcenter.php') || 
							is_page_template('templates/template-downloads.php') ||
							is_page_template('templates/template-facebook.php') ||
							is_page_template('templates/template-video.php') ||
							is_page_template('templates/template-download-post.php') ||
							is_archive('archive-gettingstarted') ||
							is_archive('archive-video') ||
							is_tax('video') ||
							is_single()){ ?>
								<a href="/learning-center" class="custom-logo-link" rel="home" aria-current="page">
									<img width="180" height="74" src="/wp-content/uploads/learning-center_logo.svg" class="custom-logo" alt="Cinchshare">
								</a>
							<?php } else {
								the_custom_logo();
							}
						?>
					</div>

					<?php
						if(is_page_template('templates/template-learningcenter.php') || 
						is_page_template('templates/template-downloads.php') ||
						is_page_template('templates/template-facebook.php') ||
						is_page_template('templates/template-download-post.php') ||
						is_page_template('templates/template-video.php') ||
						is_archive('archive-gettingstarted') ||
						is_archive('archive-video') ||
						is_tax('video') ||
						is_single()
						) {
							wp_nav_menu(
								array(
									'menu_class' => 'items-center mx-7 hidden xl:flex site-menu',        
									'menu'        => 'Learning Center',
								)
							);
						} else {
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class' => 'nav nav-tabs items-center mx-7 hidden xl:flex site-menu',        
									'menu_id'        => 'primary-menu',
								)
							);
						}
					?>
					<div class="hidden xl:flex -mr-4  -mb-1.5">
						<a class="mx-2 btn_filled_primary !py-2 !px-9" href = "/login">
							Login
						</a>
						<div class="flex flex-col items-center justify-center mx-2">
							<a class = "mx-2 btn_filled_secondary !py-2 !px-7" href = "/signup">
									Sign Up
							</a>
							<a class="text-secondary text-xs mt-1 " href = "/signup">
								14-day free trial
							</a>
						</div>
					</div>
					<div class="xl:hidden">
						<button class="w-fit text-primary sign_up_mobile_toggle">
							<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px"><path d="M 3 8 A 2.0002 2.0002 0 1 0 3 12 L 47 12 A 2.0002 2.0002 0 1 0 47 8 L 3 8 z M 3 23 A 2.0002 2.0002 0 1 0 3 27 L 47 27 A 2.0002 2.0002 0 1 0 47 23 L 3 23 z M 3 38 A 2.0002 2.0002 0 1 0 3 42 L 47 42 A 2.0002 2.0002 0 1 0 47 38 L 3 38 z"></path></svg>
						</button>
					</div>
				</nav>
				<div class = "mobile_drawer overflow-y-scroll h-full w-[300px] bg-white fixed top-0 right-0 z-50 pt-20">
					<span class="absolute top-16 right-5 cursor-pointer mobile_nab_close">
						<img class="w-5" src="/wp-content/uploads/close.png">
					</span>
					<div class = "mobile_nav h-fit w-full flex flex-col mt-2 px-4">
						<?php
							if(is_page_template('templates/template-learningcenter.php') || 
							is_page_template('templates/template-downloads.php') ||
							is_page_template('templates/template-facebook.php') ||
							   is_page_template('templates/template-download-post.php') ||
							is_page_template('templates/template-video.php') ||
							is_archive('archive-gettingstarted') ||
							is_archive('archive-video') ||
							is_tax('video') ||
							is_single()
							) {
								wp_nav_menu(
									array(
										'menu_class' => 'items-center mx-7 hidden xl:flex site-menu',        
										'menu'        => 'Learning Center',
									)
								);
							} else {
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_class' => 'nav nav-tabs items-center mx-7 hidden xl:flex site-menu',        
										'menu_id'        => 'primary-menu',
									)
								);
							}
						?>
					</div>
					<div class="flex flex-col my-8 px-4">
						<a class="px-[15px] py-[1rem]" href="/login"><button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full">Login</button></a>
						<a class="px-[15px] py-[1rem]" href="/signup"><button type="button" class="false bg-secondary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full bg-secondary">Sign Up</button></a>
					</div>
				</div>
			<?php }
		?>
	</div>
	<div class = "c_header_sticky">
	</div>
</header><!-- #masthead -->
