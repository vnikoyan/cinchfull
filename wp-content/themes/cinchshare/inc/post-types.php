<?php

  /**
   * Getting Started 
   */
  function create_cinchshare_getting_started_post_type () {
    register_post_type( 'gettingstarted',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Getting Started' ),
                'singular_name' => __( 'Getting Started' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gettingstarted'),
            'show_in_rest' => true,
            'taxonomies' => array( 'gettingstarted' ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page', 
        )
    );  
  }
  add_action('init', 'create_cinchshare_getting_started_post_type');

  function create_cinchshare_getting_started_categories () {
    register_taxonomy(
      'getting-started',
      'gettingstarted',
      array(
        'label' => __('Categories'),
        'hierarchical' => true
      )
    );
  }
  add_action('init', 'create_cinchshare_getting_started_categories');

  /**
   * Videos 
   */
  function create_cinchshare_videos_post_type () {
    register_post_type( 'video-category',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Video' ),
                'singular_name' => __( 'Video' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'video-category'),
            'taxonomies' => array( 'video-category' ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page', 
        )
    );  
  }
  add_action('init', 'create_cinchshare_videos_post_type');

  function create_cinchshare_videos_categories () {
    register_taxonomy(
      'video',
      'video-category',
      array(
        'label' => __('Categories'),
        'hierarchical' => true
      )
    );
  }
  add_action('init', 'create_cinchshare_videos_categories');
  
  function create_cinchshare_downloads_post_type () {
    register_post_type( 'downloads',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Downloads' ),
                'singular_name' => __( 'Downloads' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'downloads'),
            'show_in_rest' => true,
            'taxonomies' => array( 'downloads' ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page', 
        )
    );  
  }
  add_action('init', 'create_cinchshare_downloads_post_type');

  function create_cinchshare_downloads_categories () {
    register_taxonomy(
      'downloads-category',
      'downloads',
      array(
        'label' => __('Categories'),
        'hierarchical' => true
      )
    );
  }
  add_action('init', 'create_cinchshare_downloads_categories');

  // Ajax started//
  if (is_user_logged_in()) {
    add_action( 'wp_ajax_get_ajaxLoadMore', 'get_ajaxLoadMore' );
    add_action( 'wp_ajax_get_ajaxSearch', 'get_ajaxSearch' );
    add_action( 'wp_ajax_get_ajaxLoadMore_GettingStarted', 'get_ajaxLoadMore_GettingStarted' );
    add_action( 'wp_ajax_get_ajaxSearch_Video', 'get_ajaxSearch_Video' );
    add_action( 'wp_ajax_get_ajaxLoadMore_Video', 'get_ajaxLoadMore_Video' );
    add_action( 'wp_ajax_get_ajaxLoadMore_Downloads', 'get_ajaxLoadMore_Downloads' );
    add_action( 'wp_ajax_get_ajaxSearch_CustomPost', 'get_ajaxSearch_CustomPost' );
    add_action( 'wp_ajax_get_ajaxSearch_Downloads', 'get_ajaxSearch_Downloads' );
  } else {
    add_action( 'wp_ajax_nopriv_get_ajaxLoadMore', 'get_ajaxLoadMore' );
    add_action( 'wp_ajax_nopriv_get_ajaxSearch', 'get_ajaxSearch' );
    add_action( 'wp_ajax_nopriv_get_ajaxLoadMore_GettingStarted', 'get_ajaxLoadMore_GettingStarted' );
    add_action( 'wp_ajax_nopriv_get_ajaxSearch_Video', 'get_ajaxSearch_Video' );
    add_action( 'wp_ajax_nopriv_get_ajaxLoadMore_Video', 'get_ajaxLoadMore_Video' );
    add_action( 'wp_ajax_nopriv_get_ajaxLoadMore_Downloads', 'get_ajaxLoadMore_Downloads' );
    add_action( 'wp_ajax_nopriv_get_ajaxSearch_CustomPost', 'get_ajaxSearch_CustomPost' );
    add_action( 'wp_ajax_nopriv_get_ajaxSearch_Downloads', 'get_ajaxSearch_Downloads' );
  }

  function get_ajaxLoadMore() {
    $page = $_POST['page'];
    $cat = $_POST['cat'];

    
    $args = array(
      "posts_per_page" => 6,
      "orderby"        => "date",
      "order"          => "DESC",
      'post_status'      => 'publish',
      'category_name'  => $cat,
      'paged' => $page,
      );

    $wp_query = new WP_Query( $args );
    $totalPost = $wp_query->found_posts; 

    echo '<div totalPosts="'.$totalPost.'" catName = "'.$cat.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" currentPage = "'.$page.'">';
    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
    <?php
      endwhile;
    endif;
    echo '</div>';
    exit();
  }
  

  function get_ajaxSearch() {
    $key = $_POST['key'];
    $cat = $_POST['cat'];

    $arr = array(
      'post_type' => 'post',
      'post_status' => 'publish', 
      'posts_per_page' => 5,
      'order' => 'ASC',
      'orderby' => 'post_title',
      'category_name'  => $cat,
      'search_prod_title' => $key,
    );

    add_filter( 'posts_search', 'post_search_add', 1, 2 );
    $wp_query = new WP_Query($arr);
    remove_filter( 'posts_search', 'post_search_add', 1, 2 );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class = "w-full px-4 py-4 border-b hover:bg-[#f4f4f4]">
          <a href="<?php the_permalink();?>">
            <div class ="flex  items-center justify-between">
              <div class = "w-16 h-16 rounded-md">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full rounded-md object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
              <div>
                <p class = "line-clamp-2 w-[270px] text-[14px] font-bold"><?php echo get_the_title($post->ID); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; else : ?>
      <p class = "px-2 py-6 text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; 
    die();
  }

  function get_ajaxLoadMore_GettingStarted() {
    $page = $_POST['page'];
    $postName = $_POST['postName'];

    $args = array(
      'post_type' => 'gettingstarted',
      "posts_per_page" => 8,
      "orderby"        => "date",
      "order"          => "DESC",
      'post_status'      => 'publish',
      'paged' => $page,
    );

    $wp_query = new WP_Query( $args );
    $totalPost = $wp_query->found_posts; 
    echo '<div totalPosts="'.$totalPost.'" class = "" postName = "gettingstarted" currentPage = "'.$page.'">';
      if ( $wp_query->have_posts() ) :
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
        ?>
          <div class="w-full py-10">
            <div class = "grid grid-cols-1 md:grid-cols-2 rounded-[20px] md:rounded-[30px] hover:shadow-custom-2">
              <div class="relative md:max-w-[650px]">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="bg-[#ff0000] max-h-[250px] md:max-h-[300px] lg:max-h-[400px] w-full rounded-[20px] md:rounded-[30px] object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
              <div class = "px-1 py-6 md:py-0 md:pl-[30px] lg:pl-[60px] md:pr-10 flex flex-col	justify-center">
                <div class="flex items-center pb-2">
                  <p class="text-secondary font-bold text-sm">
                    <?php 
                      if(get_the_category($post->ID)) {
                        $category_detail=get_the_category($post->ID);
                        echo $category_detail[0]->cat_name;
                      } else  {
                        echo "Getting Started";
                      }
                    ?>
                  </p>
                </div>
                <a href="<?php the_permalink();?>" class="mt-3">
                  <p class="font-bold text-xl md:text-2xl lg:text-3xl break-words md:min-h-[50px] lg:min-h-[70px] line-clamp-2 "><?php echo get_the_title($post->ID); ?></p>
                </a>
                <p class = "max-w-[565px] md:min-h-[100px] line-clamp-4 ">
                  <?php 
                    if(get_the_excerpt($post->ID)) {
                      echo get_the_excerpt($post->ID);
                    } else {
                      echo wp_trim_words( strip_tags(get_the_content()), 30, '...' );
                    }
                  ?>
                </p>
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
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
      <?php endif; ?>
    </div>
    <?php
    die();
  }

  function get_ajaxSearch_CustomPost() {
    $key = $_POST['key'];
    $cat = $_POST['cat'];

    $args = array(
      'post_type' => $cat,
      'posts_per_page' => 5,
      'order' => 'ASC',
      'orderby' => 'post_title',
      'post_status' => 'publish', 
      'search_prod_title' => $key,
    );

    add_filter( 'posts_search', 'post_search_add', 1, 2 );
    $wp_query = new WP_Query($args);
    remove_filter( 'posts_search', 'post_search_add', 1, 2 );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class = "w-full px-4 py-4 border-b hover:bg-[#f4f4f4]">
          <a href="<?php the_permalink();?>">
            <div class ="flex  items-center justify-between">
              <div class = "w-16 h-16 rounded-md">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full rounded-md object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php endif; ?>
              </div>
              <div>
                <p class = "line-clamp-2 w-[270px] text-[14px] font-bold"><?php echo get_the_title($post->ID); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; else : ?>
      <p class = "px-2 py-6 text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; 
    die();
  }

  function get_ajaxLoadMore_Video() {
    $page = $_POST['page'];
    $cat = $_POST['cat'];
    $postName =  $_POST['postName'];

    if($cat) {
      $args = array(
        'post_type' => 'video-category',
        "posts_per_page" => 1,
        "orderby"        => "date",
        "order"          => "DESC",
        'post_status'      => 'publish',
        'paged' => $page,
        'tax_query' => array(
          array(
              'taxonomy' => 'video',
              'field' => 'slug', 
              'terms' => array( $cat ),
              'operator' => 'IN'
          )
        )
      );
    } else {
      $args = array(
        'post_type' => 'video-category',
        "posts_per_page" => 6,
        "orderby"        => "date",
        "order"          => "DESC",
        'post_status'      => 'publish',
        'paged' => $page,
      );
    }

    $wp_query = new WP_Query( $args );
    $totalPost = $wp_query->found_posts; 

    echo '<div totalPosts="'.$totalPost.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" postName = "video-category" catName = "" currentPage = "'.$page.'">';
      if ( $wp_query->have_posts() ) :
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
        ?>
          <div class="w-full p-4">
            <div class="rounded-3xl overflow-hidden hover:shadow-custom-2">
              <div class="aspect-[4/3] relative ">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php else: ?>
                  <img class="h-full w-full object-cover" alt="" src="/wp-content/uploads/cinchshare-default.jpg">
                <?php endif; ?>
                <a href="<?php the_permalink();?>" class = "absolute" style = "top: 50%;left: 50%;transform: translate(-50%, -50%);">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="#5433ED"/>
                    <path d="M24 21.737C24 20.1396 25.7803 19.1869 27.1094 20.0729L39.5038 28.3359C40.6913 29.1275 40.6913 30.8724 39.5038 31.6641L27.1094 39.927C25.7803 40.8131 24 39.8603 24 38.2629V21.737Z" fill="white"/>
                  </svg>
                </a>
              </div>
              <div class="flex flex-col py-6 px-3 lg:p-4 ">
                <div class="flex items-center pb-2">
                  <p class="text-secondary font-bold text-sm">
                    <?php 
                      if(get_the_terms( $post->ID, 'video' )) {
                        $category = get_the_terms( $post->ID, 'video' );     
                        echo $category[0]->name;
                      }
                    ?>
                  </p>
                </div>
                <a href="<?php the_permalink();?>" class="mt-3">
                  <p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
                </a>
              </div>
            </div>
          </div>
        <?php $i++;  endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
      <?php endif; ?>
    </div>
    <?php
    die();
  }

  function get_ajaxSearch_Video() {
    $key = $_POST['key'];
    $postName = $_POST['postName'];
    $cat = $_POST['cat'];
    
    if($cat) {
      $args = array(
        'post_type' => 'video-category',
        "posts_per_page" => 5,
        "orderby"        => "date",
        "order"          => "DESC",
        'post_status'      => 'publish',
        'search_prod_title' => $key,
        'tax_query' => array(
          array(
              'taxonomy' => 'video',
              'field' => 'slug', 
              'terms' => array( $cat ),
              'operator' => 'IN'
          )
        )
      );
    } else  {
      $args = array(
        'post_type' => $postName,
        'posts_per_page' => 5,
        'order' => 'ASC',
        'orderby' => 'post_title',
        'post_status' => 'publish',
        'search_prod_title' => $key,
      );
    }

    add_filter( 'posts_search', 'post_search_add', 1, 2 );
    $wp_query = new WP_Query($args);
    remove_filter( 'posts_search', 'post_search_add', 1, 2 );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class = "w-full px-4 py-4 border-b hover:bg-[#f4f4f4]">
          <a href="<?php the_permalink();?>">
            <div class ="flex  items-center justify-between">
              <div class = "w-16 h-16 rounded-md">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
                <?php else: ?>
                  <img class="h-full w-full object-cover" alt="" src="/wp-content/uploads/cinchshare-default.jpg">
                <?php endif; ?>
              </div>
              <div>
                <p class = "line-clamp-2 w-[270px] text-[14px] font-bold"><?php echo get_the_title($post->ID); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; else : ?>
      <p class = "px-2 py-6 text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; 
    die();
  }

  function get_ajaxLoadMore_Downloads() {
    $page = $_POST['page'];
    $postName =  $_POST['postName'];

    $args = array(
      'post_type' => 'downloads',
      "posts_per_page" => 9,
      "orderby"        => "date",
      "order"          => "DESC",
      'post_status'      => 'publish',
      'paged' => 1,
    ); 

    $wp_query = new WP_Query( $args );
    $totalPost = $wp_query->found_posts; 
    echo '<div totalPosts="'.$totalPost.'" class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" postName = "downloads" currentPage = "1'.$page.'">';
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
                <p class="text-secondary font-bold text-sm uppercase py-2">
                  <?php 
                    if(get_the_category($post->ID)) {
                      $category_detail=get_the_category($post->ID);
                      echo $category_detail[0]->cat_name;
                    } else {
                      echo "downloads";
                    }
                  ?>
                </p>
              </div>
              <p class="font-bold text-md lg:text-xl break-words md:min-h-[48px] lg:min-h-[50px] line-clamp-2"><?php echo get_the_title($post->ID); ?></p>
              <a href="<?php echo get_field('post_download_file', $post->ID); ?> ">
                <button type="button" class="false bg-primary hover:scale-[1.03] active:scale-[0.97] text-white px-4 py-2.5 rounded-lg font-bold w-32 lg:w-44 mb-4 lg:mb-6">Download</button>
              </a>
            </div>
          </div>
        </div>
      <?php $i++;  endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, There is no post on our site.' ); ?></p>
    <?php endif; ?>
    </div>
    <?php
      die();
  }

  function get_ajaxSearch_Downloads() {
    $key = $_POST['key'];
    $postName = $_POST['postName'];

    $args = array(
      'post_type' => 'downloads',
      'posts_per_page' => 5,
      'order' => 'ASC',
      'orderby' => 'post_title',
      'post_status' => 'publish',
      'search_prod_title' => $key,
    );

    
    add_filter( 'posts_search', 'post_search_add', 1, 2 );
    $wp_query = new WP_Query($args);
    remove_filter( 'posts_search', 'post_search_add', 1, 2 );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class = "w-full px-4 py-4 border-b hover:bg-[#f4f4f4]">
          <div class ="flex  items-center justify-between">
            <div class = "w-16 h-16 rounded-md">
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img class="h-full w-full object-cover" alt="" src="<?php echo $image[0]; ?>">
              <?php else: ?>
                <img class="h-full w-full object-cover" alt="" src="/wp-content/uploads/cinchshare-default.jpg">
              <?php endif; ?>
            </div>
            <div>
              <p class = "line-clamp-2 w-[270px] text-[14px] font-bold"><?php echo get_the_title($post->ID); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
      <p class = "px-2 py-6 text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; 
    die();
  }