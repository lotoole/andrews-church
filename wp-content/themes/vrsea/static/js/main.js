/* global window, console, $, Waypoint, bodymovin, twttr, google, Modernizr, jquery-ui */

function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  };
}

function throttle(fn, threshhold, scope) {
  threshhold = ('undefined' !== typeof threshhold) ? threshhold :  250;
  var last,
      deferTimer;
  return function () {
    var context = scope || this;

    var now = +new Date(),
        args = arguments;
    if (last && now < last + threshhold) {
      // hold on to it
      clearTimeout(deferTimer);
      deferTimer = setTimeout(function () {
        last = now;
        fn.apply(context, args);
      }, threshhold);
    } else {
      last = now;
      fn.apply(context, args);
    }
  };
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function popupwindow(url, title, w, h) {
    var x = window.outerWidth / 2 + window.screenX - (w / 2),
        y = window.outerHeight / 2 + window.screenY - (h / 2);
    return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + y + ', left=' + x);
}

function calculateDistance(lat1, lon1, lat2, lon2, unit) {
    var radlat1 = Math.PI * lat1/180,
        radlat2 = Math.PI * lat2/180,
        theta = lon1 - lon2,
        radtheta = Math.PI * theta/180,
        dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);

    dist = Math.acos(dist);
    dist = dist * 180/Math.PI;
    dist = dist * 60 * 1.1515;

    if (unit === 'K') { dist = dist * 1.609344; }
    if (unit === 'N') { dist = dist * 0.8684; }

    return dist;
}

var VRSEA = VRSEA || {};

VRSEA.init_speaker_carousel = function () {
  var slider = $('.testimonials .slider');
  slider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      swipeToSlide: true,
      prevArrow: '<a class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>'
  });
};

VRSEA.init_sliders = function () {
    var slider = $('.slider');

    slider.on('init', function (event, slick) {
        slider.addClass('loaded');
    });

    slider.slick({
        // autoplay: true,
        // autoplaySpeed: 6000,
        adaptiveHeight: true,
        prevArrow: '<a class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>',
        nextArrow: '<a class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>'
    });
};

VRSEA.init_mobile_nav = function () {
    var toggle = $('.mobile-nav-toggle'),
        track = $('.mobile-track').data('level', 0),
        menu = track.find('.menu'),
        submenus = track.find('.sub-menu'),
        forward = menu.find('.menu-item-has-children > a'),
        back;

    toggle.click(function (e) {
        e.preventDefault();
        $('html').toggleClass('mobile-nav-active');
    });

    // Copy landing page links to submenu
    forward.parent().append('<a class="show-submenu"><i class="fa fa-caret-right" aria-hidden="true"></i></a>');

    $('.show-submenu').click(function(){
      track.data('level', track.data('level') + 1);
      track.css({'left' : track.data('level') * -100 + '%'});

      $(this).closest('ul').find('ul').removeClass('active');
      $(this).parent().find('ul').addClass('active');
    });

    submenus.prepend('<li class="go-back"><a href="">Go Back</a></li>');
    back = $('.go-back');

    back.click(function (e) {
        e.preventDefault();
        track.data('level', track.data('level') - 1);
        track.css({'left' : track.data('level') * -100 + '%'});

        menu.addClass('active');
        $(this).closest('ul').removeClass('active');
    });
};

VRSEA.init_faq_toggle = function () {
  var toggle = $('.toggle'),
      answer = $('.answer');

  toggle.click(function (e) {
    e.preventDefault();
    $(this).siblings().toggleClass('active');
  });
};

VRSEA.init_smooth_scroll = function () {
  $(document).ready(function(){
  // Add smooth scrolling to all links
  $('a').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== '') {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
};

VRSEA.init_searchbar = function () {
  var searchbar = $('nav.search'),
      togglesearch = $('.search-toggle');

  togglesearch.click(function (e) {
      e.preventDefault();
      $('html').toggleClass('search-active');
  });

  searchbar.keyup(function(e) {
     if (e.keyCode === 27) {
        $('html').toggleClass('search-active');
    }
  });

  //  $('html').not('nav.search').click(function(event) {
  //   if(!$(event.target).closest('nav.secondary').length) {
  //       if($('html').hasClass('search-active')) {
  //           $('html').toggleClass('search-active');
  //       }
  //   }
  // });

};

VRSEA.init_board_cotact_form = function () {
  $('.board-member-contact').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
};

VRSEA.init_button = function () {
  var location = $('section.offerings .HelpfulInformation');
  location.append('<a href="/membership.php?page_id=11" class="btn btn-primary">Apply For Membership</a>');
};

// VRSEA.init_date_picker = function () {
//   $( '#datepicker' ).datepicker();
// };

VRSEA.init_matchHeight = function () {
  $(function() {
  	$('.newsletter-post').matchHeight();
  });

  $(function() {
    $('.meeting').matchHeight();
  });
};

VRSEA.init_account_dropdown = function () {
  $('#menu-secondary > li > a').click(function (e) {
    // $('#menu-secondary > li:nth-child(1) > a').click(function (e) {
    if($('#menu-secondary > li > a').text() !== 'Login') {
      e.preventDefault();
      $('html').toggleClass('secondary-sub');
    } else {

    }
  });
};

VRSEA.init_bio_overflow = function () {
  // var para = $('.member-intro');
  if($('.member-intro').text().length > 80) {
    // add a read more button and shorten it
    $('.member-intro').append('...');
  }
};

VRSEA.mq = {
    'sm': '(min-width: 576px)',
    'md': '(min-width: 768px)',
    'lg': '(min-width: 992px)',
    'xl': '(min-width: 1200px)'
};

$(document).ready(function () {
  VRSEA.init_speaker_carousel();
  VRSEA.init_sliders();
  VRSEA.init_mobile_nav();
  VRSEA.init_faq_toggle();
  VRSEA.init_smooth_scroll();
  VRSEA.init_searchbar();
  VRSEA.init_board_cotact_form();
  VRSEA.init_button();
  // VRSEA.init_date_picker();
  VRSEA.init_matchHeight();
  VRSEA.init_account_dropdown();
  VRSEA.init_bio_overflow();
});
