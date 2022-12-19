<?php
  /**
  * Template Name: Login
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
    <div class="flex w-full">
      <div class="w-full lg:w-1/2 flex items-center justify-center lg:justify-end py-16">
        <div class="flex flex-col w-full max-w-2xl p-10 login_form">
          <form class="login_form w-full">
            <p class="text-4xl font-bold mb-4">
              <span class="text-4xl font-bold text-primary mr-2">Let's get back</span>to business
            </p>
            <p class="text-base lg:text-lg mb-5">Not a member yet? Click
              <a class="text-secondary mx-1" href="/signup">here</a>to try CinchShare free!
            </p>
            <input type="text" placeholder="Enter your username or email" label="Email" id="Email" values="" class="border py-3 px-4 rounded-lg w-full outline-none undefined" value="">
            <p class="email_note mt-2 text-sm" style="color: rgb(255, 0, 0);"></p>
            <input type="password" placeholder="Password" id="password" label="Password" values="" class="border py-3 px-4 rounded-lg w-full outline-none  mt-4" value="">
            <p class="pass_note mt-2 text-sm" style="color: rgb(255, 0, 0);"></p>
            <div class="flex justify-between flex-col lg:flex-row mt-4">
              <div class="flex items-center mb-3">
                <input class="w-6 h-6" type="checkbox" id="rememberMe" name="rememberMe" value="remember me">
                <p to="/" class="font-semibold text-black-400 ml-2">Remember Me</p>
              </div>
              <a class="font-semibold text-black-100" href="/forgot-password">Forgot Password?</a>
            </div>
            <button type="button" class="loginsubmit false bg-primary shadow-button-primary hover:shadow-button-primary-hover hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-full mt-4">Let’s do this</button>
			<p class="error_msg mt-2 text-base" style="color: rgb(255, 0, 0);"></p>
            <div class="flex my-8 items-center mb-4">
              <hr class="flex-1">
              <p class="font-bold text-gray-400">or</p>
              <hr class="flex-1">
            </div>
          </form>
          <a href ="https://app.cinchshare.com/login">
				<button class="w-full border-primary text-primary hover:scale-[1.03] active:scale-[0.97] border px-4 py-2.5 rounded-lg font-bold flex items-center justify-center mb-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
						<path d="M21.0779 0H1.92209C1.13669 0 0.5 0.636689 0.5 1.42209V20.5779C0.5 21.3633 1.13669 22 1.92209 22H21.0779C21.8633 22 22.5 21.3633 22.5 20.5779V1.42209C22.5 0.636689 21.8633 0 21.0779 0Z" fill="#3D6AD6"/>
						<path d="M16.3151 6.25176H18.5V3.08684C17.7101 3.01047 16.6429 2.9935 15.4328 3.00199C14.3822 3.01094 13.3777 3.43862 12.6379 4.19191C11.8982 4.9452 11.4832 5.96307 11.4832 7.0239V10.1209H8.5V13.515H11.4832V22H14.9874V13.515H17.9538L18.3739 10.0785H15.0126V7.57542C15.0169 7.22718 15.1553 6.89429 15.3984 6.64723C15.6415 6.40018 15.9703 6.25834 16.3151 6.25176V6.25176Z" fill="white"/>
					</svg>
					Continue with Facebook
				</button>
			</a>
        </div>
      </div>
      <div class="hidden lg:flex w-1/2 h-screen bg-gradient-to-b from-primary to-secondary rounded-bl-[10rem] items-center justify-center px-4">
        <img class="" src="/wp-content/uploads/login.png" alt="">
      </div>
    </div>
  </main>
<?php get_footer();?>