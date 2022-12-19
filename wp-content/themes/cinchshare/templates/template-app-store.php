<?php
  /**
  * Template Name: App Store
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
	<div style = "width:100%; height:99px">
		
	</div>
    <div class="w-full s_app_store" style = "background:#2BD4D9;">
		<div class = "max-w-max-content mx-auto flex items-center main_cont" style = "justify-content: space-around; padding:0 20px;">
			<div class = "mx-auto">
				<div>
					<img src = "/wp-content/uploads/texts.svg" alt />
				</div>
				<div class = "flex icons">
					<a href = "https://apps.apple.com/us/app/cinchshare/id1229700586">
						<img src = "/wp-content/uploads/App_Store.svg" alt/>
					</a>
					<a href = "https://play.google.com/store/apps/details?id=com.cinchshare">
						<img src = "/wp-content/uploads/Google_Play.svg" alt/>
					</a>
				</div>
			</div>
			<div>
			 <img src = "/wp-content/uploads/illustrations-14-1.svg" alt = ""/>
			</div>
		</div>
		<div style = "width:100%; height:99px">

		</div>
    </div>
  </main>
<?php get_footer();?>