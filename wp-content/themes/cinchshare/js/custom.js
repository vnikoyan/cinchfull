$(document).ready(function () {
  /**
   * Accordion Faq
   */
  $('.faq-accordion li').click(function () {
    let index = $(this).attr('index')
    $.each($('.faq-accordion li'), function () {
      let itemIndex = $(this).attr('index')
      if (itemIndex != index) {
        $(this).find('.faq_body').removeClass('active');
        $(this).find('svg').removeClass('faqIcon');
      }
    })
    $(this).find('.faq_body').toggleClass('active');
    $(this).find('svg').toggleClass('faqIcon');
  })

  /**
   * Video thumbnail
   */
  $('.video_thumb').click(function () {
    $(this).addClass("hidding")
    $('.video_cont').addClass('active')
	  $(".video_cont").attr('src', $(".video_cont").attr('src') + '?autoplay=1&mute=0&controls=1&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1&widgetid=1'); 
  })
  /**
   * Video control
   */
  $('.button_content button').click(function () {
    let btnName = $(this).attr('data')

    if ($(this).hasClass('text-secondary')) {
      $.each($('.button_content button'), function () {
        if ($(this).hasClass('bg-secondary')) {
          $(this).removeClass('bg-secondary text-white').addClass("text-secondary bg-white")
        }
      })

      $.each($('.text_content>div'), function () {
        let contName = $(this).attr('data')

        if (contName == btnName) {
          $(this).addClass('active')
        } else {
          $(this).removeClass('active')
        }
      })

      $.each($('.media_content>div'), function () {
        let mediaName = $(this).attr('data')

        if (mediaName == btnName) {
          $(this).addClass('active')
        } else {
          $(this).removeClass('active')
        }
        $(this).find("video").trigger('play')
      })
    }
    $(this).addClass('bg-secondary text-white').removeClass("text-secondary bg-white")
  })

  /**
   * Features slide
   */

    $('.robust_carousel.owl-carousel').owlCarousel({
		loop: true,
		autoHeight: true,
		dots: true,
		nav: true,
		items: 1,
		autoplay: false,
		responsiveClass: true,
	  });
  /**
   * Review Slides
   */
    $('.reviewSlides.owl-carousel').owlCarousel({
		loop: true,
		autoHeight: true,
		dots: false,
		nav: true,
		items: 1,
		autoplay: false,
		responsiveClass: true,
	  });

  /**
   * Direct Sales Section 7
   */

  $('.s-direct_toggle  .content_button button').click(function () {
    let btnName = $(this).attr('index')

    if ($(this).hasClass('text-secondary')) {
      $.each($('.s-direct_toggle .content_button button'), function () {
        $(this).removeClass('bg-secondary text-white').addClass("text-secondary bg-white")
        if ($(this).attr('index') == btnName) {
          $(this).addClass('bg-secondary text-white').removeClass("text-secondary bg-white")
        }
      })

      $.each($('.s-direct_toggle .content_text'), function () {
        let contName = $(this).attr('index')

        if (contName == btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })
    }


  })

  /**
   * Direct Sales top sellers
   */

  $('.t-seller_buttons button').click(function () {
    let btnName = $(this).attr('index')

    if (!$(this).hasClass('bg-secondary')) {
      $.each($('.t-seller_buttons button'), function () {
        $(this).removeClass('bg-secondary')
      })

      $.each($('.t-seller_contents>div'), function () {
        let contName = $(this).attr('index')

        if (contName == btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })

      $(this).addClass('bg-secondary')
    }
  })

  /**
   * Direct Sales 
   */

  $('.f_unbeatable_button>div').click(function () {
    let btnName = $(this).attr('index')

    if ($(this).hasClass('opacity-60')) {
      $.each($('.f_unbeatable_button>div'), function () {
        if (!$(this).hasClass('opacity-60')) {
          $(this).addClass('opacity-60')
        }
      })

      $.each($('.f_unbeatable_content > div'), function () {
        let contName = $(this).attr('index')

        if (btnName === contName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }

        $(this).find("video").get(0).play()
      })
    }

    $(this).removeClass('opacity-60')
  })

  /**
   * Pricing 
   */

  $('.s_price_btns>div').click(function () {
    $('.s_price_btns button').toggleClass('move')
    if ($('.s_price_btns button').hasClass('move')) {
      $('.s_price_btns button').text('Annually')
    } else {
      $('.s_price_btns button').text('Monthly')
    }

    $('.package_year').toggleClass('hidden')
    $('.package_month').toggleClass('hidden')
    $('.info_month').toggleClass('hidden')
    $('.info_year').toggleClass('hidden')
  })

  /**
   * Pricing Accordion
   */

  $('.cin-accordion li>div').click(function () {
    let btnName = $(this).attr('index')

    $.each($('.cin-accordion li'), function () {
      let contName = $(this).children().attr('index')
      if (contName != btnName) {
        $(this).find('.accordion_body').addClass('hidden');
        $(this).find('.minus').addClass('hidden');
        $(this).find('.plus').removeClass('hidden');
      }
    })

    $(this).find('.accordion_body').toggleClass('hidden');
    $(this).find('.minus').toggleClass('hidden');
    $(this).find('.plus').toggleClass('hidden');
  })

  /**
   * Privacy Side bar
   */

  $('.privacy_sidebar li').click(function () {
    let btnName = $(this).attr('index')

    if (!$(this).hasClass('bg-secondary')) {

      $.each($('.privacy_sidebar li'), function () {
        $(this).removeClass('bg-secondary bg-opacity-5')
      })

      $.each($('.privacy_right_content>div'), function () {
        let contName = $(this).attr('index')

        if (contName === btnName) {
          $(this).removeClass('hidden')
        } else {
          $(this).addClass('hidden')
        }
      })
    }

    $(this).addClass('bg-secondary bg-opacity-5')
  })

  /**
   * Ajax Road More Button
   */

  $('.post_road_more').click(function () {
    let page = $('.s_post_body').children().last().attr('currentPage')
    let cat = $('.s_post_body').children().last().attr('catName')

    $(this).addClass('hidden')
    $('.loader').removeClass('hidden')

    jQuery.ajax({
      type: "post",
      dataType: "html",
      url: my_ajax_object.ajax_url,
      data: {
        action: "get_ajaxLoadMore",
        page: parseInt(page) + 1,
        cat: cat
      },
      success: function (response) {
        $('.s_post_body').append(response)
        $('.loader').addClass('hidden')
        loadMoreAjax();
      }
    });
  })

  function loadMoreAjax() {
    let page = parseInt($('.s_post_body').children().last().attr('currentPage'))
    let totalPosts = parseInt($('.s_post_body').children().last().attr('totalPosts'))

    if ((totalPosts - page * 6) > 0) {
      $('.post_road_more').removeClass('hidden')
    } else {
      $('.post_road_more').addClass('hidden')
    }

  }

  $('.gettingstarted_road_more').click(function () {
    let page = $('.s_getting_start_body').children().last().attr('currentPage')
    let postName = $('.s_getting_start_body').children().last().attr('postName')

    $(this).addClass('hidden')
    $('.loader').removeClass('hidden')

    jQuery.ajax({
      type: "post",
      dataType: "html",
      url: my_ajax_object.ajax_url,
      data: {
        action: "get_ajaxLoadMore_GettingStarted",
        page: parseInt(page) + 1,
        postName: postName,
      },
      success: function (response) {
        $('.s_getting_start_body').append(response)
        $('.loader').addClass('hidden')
        loadMoreAjaxGetting();
      }
    });
  })

  function loadMoreAjaxGetting() {
    let page = parseInt($('.s_getting_start_body').children().last().attr('currentPage'))
    let totalPosts = parseInt($('.s_getting_start_body').children().last().attr('totalPosts'))

    if ((totalPosts - page * 8) > 0) {
      $('.gettingstarted_road_more').removeClass('hidden')
    } else {
      $('.gettingstarted_road_more').addClass('hidden')
    }

  }

  $('.video_road_more').click(function () {
    let page = $('.s_video_body').children().last().attr('currentPage')
    let postName = $('.s_video_body').children().last().attr('postName')
    let cat = $('.s_video_body').children().last().attr('catName')

    $(this).addClass('hidden')
    $('.loader').removeClass('hidden')

    jQuery.ajax({
      type: "post",
      dataType: "html",
      url: my_ajax_object.ajax_url,
      data: {
        action: "get_ajaxLoadMore_Video",
        page: parseInt(page) + 1,
        postName: postName,
        cat: cat,
      },
      success: function (response) {
        $('.s_video_body').append(response)
        $('.loader').addClass('hidden')
        loadMoreAjaxVideo();
      }
    });
  })

  function loadMoreAjaxVideo() {
    let page = parseInt($('.s_video_body').children().last().attr('currentPage'))
    let totalPosts = parseInt($('.s_video_body').children().last().attr('totalPosts'))

    if ((totalPosts - page * 6) > 0) {
      $('.video_road_more').removeClass('hidden')
    } else {
      $('.video_road_more').addClass('hidden')
    }
  }

  $('.download_road_more').click(function () {
    let page = $('.s_download_body').children().last().attr('currentPage')
    let postName = $('.s_download_body').children().last().attr('postName')

    $(this).addClass('hidden')
    $('.loader').removeClass('hidden')

    jQuery.ajax({
      type: "post",
      dataType: "html",
      url: my_ajax_object.ajax_url,
      data: {
        action: "get_ajaxLoadMore_Downloads",
        page: parseInt(page) + 1,
        postName: postName,
      },
      success: function (response) {
        $('.s_download_body').append(response)
        $('.loader').addClass('hidden')
        loadMoreAjaxDownloads();
      }
    });
  })
  function loadMoreAjaxDownloads() {
    let page = parseInt($('.s_download_body').children().last().attr('currentPage'))
    let totalPosts = parseInt($('.s_download_body').children().last().attr('totalPosts'))

    if ((totalPosts - page * 9) > 0) {
      $('.download_road_more').removeClass('hidden')
    } else {
      $('.download_road_more').addClass('hidden')
    }
  }
})

/**
 * Sticky Header
 */

var scrollIng = false;
jQuery(window).scroll(function () {
  if (jQuery(document).scrollTop() > 170) {
    if (!scrollIng) {
      syncContainer(false)
    }
    jQuery('.c_header_sticky').fadeIn('fast');
    scrollIng = true;
  } else {
    if (scrollIng) {
      syncContainer(true)
    }
    jQuery('.c_header_sticky').fadeOut('fast');
    scrollIng = false;
  }
});

// jQuery(function () {
//   syncContainer(false)
// });

function syncContainer(towardParent) {
  var $parent = jQuery(".c_header");
  var $child = jQuery(".c_header_sticky");
  if (towardParent) {
    $parent.html($child.children().clone())
	$child.empty();
  } else {
    $child.html($parent.children().clone())
	$parent.empty();
  }
}


$(document).ready(function () {
  $('.learning_center_search input').on('keyup', function () {
    let inputva = $(this).val()
    let cat = $('.s_post_body').children().last().attr('catName')

    if (inputva.length > 0) {
      $('.learning_center_search svg.icon_search').addClass('hidden')
      $('.learning_center_search .icon_clear').removeClass('hidden')

      if (inputva.length > 2) {
        $('.learning_center_search .icon_clear').addClass('hidden')
        $('.loader_search').removeClass('hidden')

        jQuery.ajax({
          type: "post",
          dataType: "html",
          url: my_ajax_object.ajax_url,
          data: {
            action: "get_ajaxSearch",
            key: inputva,
            cat: cat
          },
          success: function (response) {
            $('.search_results').removeClass('hidden')
            $('.search_results').html(response)
            $('.learning_center_search .icon_clear').removeClass('hidden')
            $('.loader_search').addClass('hidden')
          }
        });
      } else {
        $('.search_results').addClass('hidden')
      }
    } else {
      $('.search_results').addClass('hidden')
      $('.learning_center_search .icon_clear').addClass('hidden')
      $('.learning_center_search svg.icon_search').removeClass('hidden')
    }
  })

  $('.post_search .icon_clear').click(function () {
    $('.post_search input').val('')
    $('.post_search .icon_search').removeClass('hidden')
    $('.post_search .icon_clear').addClass('hidden')
    $('.search_results').addClass('hidden')
    $('.search_results').html('')
  })

  $(document).click(function (event) {
    var $target = $(event.target);
    if (!$target.closest('.post_search').length) {
      $('.post_search .search_results').addClass('hidden');
    }
  });

  $('.custompost_center_search input').on('keyup', function () {
    let inputva = $(this).val()
    let cat = $('.s_getting_start_body').children().last().attr('postName')

    if (inputva.length > 0) {
      $('.custompost_center_search svg.icon_search').addClass('hidden')
      $('.custompost_center_search .icon_clear').removeClass('hidden')

      if (inputva.length > 2) {
        $('.custompost_center_search .icon_clear').addClass('hidden')
        $('.loader_search').removeClass('hidden')

        jQuery.ajax({
          type: "post",
          dataType: "html",
          url: my_ajax_object.ajax_url,
          data: {
            action: "get_ajaxSearch_CustomPost",
            key: inputva,
            cat: cat
          },
          success: function (response) {
            $('.search_results').removeClass('hidden')
            $('.search_results').html(response)
            $('.custompost_center_search .icon_clear').removeClass('hidden')
            $('.loader_search').addClass('hidden')
          }
        });
      } else {
        $('.search_results').addClass('hidden')
      }
    } else {
      $('.search_results').addClass('hidden')
      $('.custompost_center_search .icon_clear').addClass('hidden')
      $('.custompost_center_search svg.icon_search').removeClass('hidden')
    }
  })

  $('.video_search input').on('keyup', function () {
    let inputva = $(this).val()
    let postName = $('.s_video_body').children().last().attr('postName')
    let cat = $('.s_video_body').children().last().attr('catName')

    if (inputva.length > 0) {
      $('.video_search svg.icon_search').addClass('hidden')
      $('.video_search .icon_clear').removeClass('hidden')

      if (inputva.length > 2) {
        $('.video_search .icon_clear').addClass('hidden')
        $('.loader_search').removeClass('hidden')

        jQuery.ajax({
          type: "post",
          dataType: "html",
          url: my_ajax_object.ajax_url,
          data: {
            action: "get_ajaxSearch_Video",
            key: inputva,
            postName: postName,
            cat: cat
          },
          success: function (response) {
            $('.search_results').removeClass('hidden')
            $('.search_results').html(response)
            $('.video_search .icon_clear').removeClass('hidden')
            $('.loader_search').addClass('hidden')
          }
        });
      } else {
        $('.search_results').addClass('hidden')
      }
    } else {
      $('.search_results').addClass('hidden')
      $('.video_search .icon_clear').addClass('hidden')
      $('.video_search svg.icon_search').removeClass('hidden')
    }
  })

  $('.downloads_search input').on('keyup', function () {
    let inputva = $(this).val()
    let postName = $('.s_download_body').children().last().attr('postName')

    if (inputva.length > 0) {
      $('.downloads_search svg.icon_search').addClass('hidden')
      $('.downloads_search .icon_clear').removeClass('hidden')

      if (inputva.length > 2) {
        $('.downloads_search .icon_clear').addClass('hidden')
        $('.loader_search').removeClass('hidden')

        jQuery.ajax({
          type: "post",
          dataType: "html",
          url: my_ajax_object.ajax_url,
          data: {
            action: "get_ajaxSearch_Downloads",
            key: inputva,
            postName: postName,
          },
          success: function (response) {
            $('.search_results').removeClass('hidden')
            $('.search_results').html(response)
            $('.downloads_search .icon_clear').removeClass('hidden')
            $('.loader_search').addClass('hidden')
          }
        });
      } else {
        $('.search_results').addClass('hidden')
      }
    } else {
      $('.search_results').addClass('hidden')
      $('.downloads_search .icon_clear').addClass('hidden')
      $('.downloads_search svg.icon_search').removeClass('hidden')
    }
  })


  /**
   * Featured Video autoplay
   */

  $('.featured_video_image svg').click(function () {
    $('.featured_video_image').hide()
    var symbol = $('.s_featured_video iframe')[0].src.indexOf("?") > -1 ? "&" : "?";
    $('.s_featured_video iframe')[0].src += "?autoplay=1&mute=0&controls=1&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1";
  })

  /**
   * 
   * Sign up mobile Nav
   */

  $(document).on('click', '.sign_up_mobile_toggle', function() {
	$('.mobile_nav_bg').removeClass('hidden')
    $('.mobile_drawer').addClass('open')
  })
  $(document).on('click', '.mobile_nab_close', function() {
	$('.mobile_nav_bg').addClass('hidden')
    $('.mobile_drawer').removeClass('open')
  })
	
	

  /**
   * 
   * Login 
   */

  $('.loginsubmit').click(function () {
    let email = $('.login_form #Email').val()
    let pass = $('.login_form #password').val()

    if (email.length < 1) {
      $('.login_form .email_note').text('Email is Required')
    }

    if (pass.length < 1) {
      $('.login_form .pass_note').text('Password  is Required')
    }

    if (email.length > 0 && pass.length > 0) {
      jQuery.ajax({
        type: "post",
        dataType: "html",
        url: my_ajax_object.ajax_url,
        data: {
          action: "get_ajaxLoginform",
          email: email,
          pass: pass
        },
        success: function (response) {
          const obj = JSON.parse(response);
          if (obj.ErrorMessage == null) {
            window.location.href = `https://app.cinchshare.com/frontend/settoken?token=${obj.Token}&url=${obj.Redirect}`;
          } else {
            $('.error_msg').text(obj.ErrorMessage)
          }
        }
      });
    }
  })

})

