jQuery(document).ready(function($) {

  //slickColumnSlider();
  //appendPosts();
  //popupPosts();

  // new code - remove this comment later
  reviews();
  //slimbannerSlick();
  mobileMenuDrop();
  servicePop();
  slimBannerClose();
  //mobileSlider();
  //mobileSearchOpen();
  //tabs();
  //popup();
  //shortenTextList();
  //mobileCategorySearch();
  //fullSliderSlick();
  //welcomePop();


  // basic
  mobileMenu();
  accordian();
  //apartmentsToggle();
  smoothScroll();
  //relocateDiv();
  //slickBannerSlider();
  //accordianInside();

  // gutembergs
  //slickSlider();
  
  //lightBox();


});

jQuery(window).resize(function() {
    setTimeout(relocateDiv, 200);
});

jQuery(window).scroll(function($){
   //navOnScroll();
});

function slimBannerClose() {
  var svg = `
  <div class="close-slimbanner">
  <svg xmlns="http://www.w3.org/2000/svg" width="13.499" height="13.499" viewBox="0 0 13.499 13.499">
      <g id="Group_311" data-name="Group 311" transform="translate(-835.786 -1137.704) rotate(45)">
          <path id="Path_136" data-name="Path 136" d="M-4414.032,605.883h18.091" transform="translate(5810 -392.395)" fill="none" stroke="#fff" stroke-width="1"/>
          <path id="Path_137" data-name="Path 137" d="M0,0H18.09" transform="translate(1405.013 204.443) rotate(90)" fill="none" stroke="#fff" stroke-width="1"/>
      </g>
  </svg>
  </div>
`;

  jQuery('.slim-banner').append(svg);

  jQuery('.close-slimbanner').on('click', function() {
    jQuery('.slim-banner').fadeOut();
  });
}

function servicePop() {
  var svg = `
        <div class="close-popup">
        <svg xmlns="http://www.w3.org/2000/svg" width="13.499" height="13.499" viewBox="0 0 13.499 13.499">
            <g id="Group_311" data-name="Group 311" transform="translate(-835.786 -1137.704) rotate(45)">
                <path id="Path_136" data-name="Path 136" d="M-4414.032,605.883h18.091" transform="translate(5810 -392.395)" fill="none" stroke="#fff" stroke-width="1"/>
                <path id="Path_137" data-name="Path 137" d="M0,0H18.09" transform="translate(1405.013 204.443) rotate(90)" fill="none" stroke="#fff" stroke-width="1"/>
            </g>
        </svg>
        </div>
    `;

    jQuery('.popup-content').append(svg);

    jQuery('.close-popup, .popup-contact').on('click', function() {
      jQuery('.popup-content, .pop-up-back').fadeOut();
    });

    for (let i = 1; i <= 6; i++) {
      jQuery('.read-more-' + i).on('click', function() {
          jQuery('#pop' + i + ', .pop-up-back').fadeIn();
      });
  }
}


function navOnScroll() {
  var headerWrapper = jQuery('.header-wrapper');

  if (headerWrapper.offset().top > 50){
    headerWrapper.addClass('header-wrapper-scrolled');
  } else {
    headerWrapper.removeClass('header-wrapper-scrolled');
  }
}


// slick sliders
function slickBannerSlider() {
  jQuery('.slick-banner').slick({
      autoplay: true,
      speed: 800,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button class="slick-prev slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></button>',
      nextArrow: '<button class="slick-next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></button>',
  });

  jQuery('.slick-banner').fadeIn();
}


// navigation
function mobileMenu() {
    jQuery('.menu-icon').on('click', function() {
      var $this = jQuery(this);


      jQuery('.nav-toggle').toggleClass('nav-toggle-active');
      $this.toggleClass('menu-icon--close-x');
    });

    /*
    jQuery('#primary-menu li a').on('click', function() {
      jQuery('.nav-toggle').removeClass('nav-toggle-active');
      jQuery('.menu-icon').removeClass('menu-icon--close-x');
    });*/
}

function smoothScroll() {
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 700, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
}

// slick sliders
function slickSlider() {
    const slideNum = jQuery('.slick-slider').data('slide-num');

    jQuery('.slick-slider').slick({
        infinite: true,
        dots: true,
        slidesToShow: slideNum,
        slidesToScroll: 1
    });
}

function slickColumnSlider() {
    jQuery('.slick-column-slider').slick({
        infinite: true,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
}

// light box
function lightBox() {
    var lightbox = GLightbox({
        selector: '.wp-block-gallery figure img'
    });
}

function accordian() {
  if (self.innerWidth) {
    x = self.innerWidth;
  } else if (document.body) {
      x = 600;
  }

  jQuery('.accordian .accordian-q').on('click', function() {
    var answer = jQuery(this).next();
    var parentRow = jQuery(this).closest('.accordian-row');

    if (x > 601) { jQuery('.accordian-a').not(answer).slideUp(); }

    answer.slideToggle();

    if (x > 601) { jQuery('.accordian-row').not(parentRow).removeClass('accordian-row-arrow-active'); }
    parentRow.toggleClass('accordian-row-arrow-active');


  });
}

function accordianInside() {
  if (self.innerWidth) {
    x = self.innerWidth;
  } else if (document.body) {
      x = 600;
  }

  jQuery('.accordian-inside .accordian-inside-q').on('click', function() {
    var answer = jQuery(this).next();
    var parentRow = jQuery(this).closest('.accordian-inside-row');

    if (x > 601) { jQuery('.accordian-inside-a').not(answer).slideUp(); }
    answer.slideToggle();

    if (x > 601) { jQuery('.accordian-inside-row').not(parentRow).removeClass('accordian-inside-row-arrow-active'); }
    parentRow.toggleClass('accordian-inside-row-arrow-active');

    /*
    jQuery('html, body').animate({
      scrollTop: jQuery(this).offset().top - 90
    }, 1000);
    */
  });
}

function apartmentsToggle() {
  jQuery('.apartment-col-1').on('click', function() {
    jQuery(this).addClass('apartment-col-active');
    jQuery('.apartment-col-2').removeClass('apartment-col-active');

    jQuery('.apartment-desc-2').removeClass('apartment-desc-active');
    jQuery('.apartment-desc-1').addClass('apartment-desc-active');
  });

  jQuery('.apartment-col-2').on('click', function() {
    jQuery(this).addClass('apartment-col-active');
    jQuery('.apartment-col-1').removeClass('apartment-col-active');

    jQuery('.apartment-desc-1').removeClass('apartment-desc-active');
    jQuery('.apartment-desc-2').addClass('apartment-desc-active');
  });
}

function relocateDiv() {
  if (self.innerWidth) {
    x = self.innerWidth;
  } else if (document.body) {
      x = 600;
  }

  if (x < 601) {
    jQuery('.apartment-mobile-book-1').append(jQuery('#firstBooker'));
    jQuery('.apartment-mobile-book-2').append(jQuery('#secondBooker'));
  } else {
    jQuery('.apartment-desc-1 .apartment-desc-right').append(jQuery('#firstBooker'));
    jQuery('.apartment-desc-2 .apartment-desc-right').append(jQuery('#secondBooker'));
  }

}

function onScrollEffects() {
  var wScroll = jQuery(this).scrollTop();
  
  

  if(jQuery('.scroll-section').length > 0) {
    var about = jQuery('.scroll-section').offset().top - 600;
    if(wScroll>about) {
      jQuery('.scroll-section .scroll-effect').each(function(i){
           setTimeout(function(){
             jQuery('.scroll-section .scroll-effect').eq(i).addClass('scroll-effect-active');
           }, 300 * (i+1));
       });
    }
  }

}

jQuery(window).scroll(function($){
    onScrollEffects();
});


// new code that I'm using
function slimbannerSlick() {
  jQuery('.slim-slick').slick({
      autoplay: true,
      speed: 800,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button class="slick-prev slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></button>',
      nextArrow: '<button class="slick-next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></button>',
  });

  jQuery('.slim-slick').css('opacity', 1);
}

function mobileMenuDrop() {
  
  jQuery('.main-navigation .menu a').on('click', function() {
    const thisMenu = jQuery(this).next();
    jQuery('.main-navigation .sub-menu').not(thisMenu).removeClass('sub-menu-open');
    thisMenu.toggleClass('sub-menu-open');
  });
}

function mobileSlider() {

    jQuery('.reviews-list').slick({
      slidesToShow: 1,
      infinite: true,
      arrows: true,
      dots: true
    
    });

}

function mobileSearchOpen() {
  jQuery('.header-search-mobile').on('click', function() {
    jQuery('.main-search').fadeToggle();
  });
}

function tabs() {
  const navItem = jQuery('.tabNav a');
  
  navItem.on('click', function() {
    const $this = jQuery(this);
    const tabId = $this.data('id');
    
    navItem.not(this).removeClass('active');
    $this.addClass('active');

    jQuery('.tabs .tab').hide();
    jQuery(`#${tabId}`).fadeIn();

  });
}

function popup() {
  jQuery('.popup-open').on('click', function() {
    jQuery('.popup, .popup-back').fadeIn();
  });

  jQuery('.popup-back, .popup-close').on('click', function() {
    jQuery('.popup, .popup-back').fadeOut();
  });

  document.addEventListener( 'wpcf7mailsent', function( event ) {
    setTimeout(function() {
      jQuery('.popup, .popup-back').fadeOut();
    }, 2000);
  }, false );
}

function shortenTextList() {

  function shortenText(text, maxLength) {
    if (text.length <= maxLength) {
      return text;
    }
  
    var shortenedText = text.substr(0, maxLength - 3) + "...";
    return shortenedText;
  }
  
  var elements = jQuery('.post-type-item .post-type-item-desc p');
  var maxLength = 120;
  
  elements.each(function() {
    var originalText = jQuery(this).text();
    var shortenedText = shortenText(originalText, maxLength);
    jQuery(this).text(shortenedText);
  });

  var elements2 = jQuery('.drug-item .drug-item-desc p');
  var maxLength = 100;

  elements2.each(function() {
    var originalText = jQuery(this).text();
    var shortenedText = shortenText(originalText, maxLength);
    jQuery(this).text(shortenedText);
  });
  

}

function mobileCategorySearch() {
  jQuery('.mobile-search-icon').on('click', function() {
    jQuery('.page-header-filter-search').slideToggle();
  });
}

function reviews() {
  jQuery('.reviews-list').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
  })
}

function fullSliderSlick() {

  jQuery('.full-slider-slick').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    //variableWidth: true,
    //adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
  ]
  })


}


function appendPosts() {
   jQuery('.append-experiences').append(jQuery('.experiences'));
   jQuery('.append-destinations').append(jQuery('.destinations'));

   jQuery('.experiences, .destinations').show();
}


function popupPosts() {
  $(".read-more").click(function(e) {
    e.preventDefault();
    var postId = $(this).data("id");
    $("#" + postId).fadeIn();
    $('body, html').addClass('overflow-hidden');
  });

  $(".close-popup, .btn-close, .post-popup").click(function(e) {
      e.preventDefault();
      var postId = $(this).closest(".post-popup").attr("id");
      console.log(postId);
      $("#" + postId).fadeOut();
      setTimeout(function() {
        $('body, html').removeClass('overflow-hidden');
      }, 400);
  });

  $('.post-open').on('click', function(e) {
      e.preventDefault();
      $(this).closest('.post').find('.read-more').trigger('click');
  });

  $('.popup-content').on('click', function(e) {
    e.stopPropagation();
  });
}

function welcomePop() {
  // Check if a flag is set in local storage
  if (localStorage.getItem('popupShown') === null) {
    // If not shown before, show the popup
    setTimeout(function() {
      jQuery('.popup-welcome, .popup-welcome-back').fadeIn();
    }, 10000);
   

    // Close button click event
    jQuery('.popup-welcome-close, .popup-welcome-back').on('click', function() {
      jQuery('.popup-welcome, .popup-welcome-back').hide();
      
      // Set a flag in local storage to prevent showing the popup again
      //localStorage.setItem('popupShown', 'true');

       // Set a timeout to reset the flag after 2 weeks (14 days)
       //setTimeout(function() {
       // localStorage.removeItem('popupShown');
      //}, 14 * 24 * 60 * 60 * 1000); // 14 days in milliseconds
    });

  } else {
    // If the flag is set, hide the popup immediately
    jQuery('.popup-welcome, .popup-welcome-back').hide();
  }
}

// Call the function to display the popup
welcomePop();