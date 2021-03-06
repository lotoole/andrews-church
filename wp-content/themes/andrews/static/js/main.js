/* global window, console, jQuery, Waypoint, bodymovin, twttr, google */

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

var andrews = andrews || {},
    $ = $ || jQuery;

    andrews.mq = {
        'sm': '(min-width: 576px)',
        'md': '(min-width: 768px)',
        'lg': '(min-width: 992px)',
        'xl': '(min-width: 1200px)'
    };

andrews.init_mobile_nav = function () {
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


andrews.init_matchHeight = function () {
  $(function() {
  	$('.newsletter-post').matchHeight();
  });

  $(function() {
    $('.meeting').matchHeight();
  });
};

andrews.init_cotact_form = function () {
  $('.popup-with-form').magnificPopup({
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


andrews.mq = {
    'sm': '(min-width: 576px)',
    'md': '(min-width: 768px)',
    'lg': '(min-width: 992px)',
    'xl': '(min-width: 1200px)'
};

$(document).ready(function () {
  andrews.init_mobile_nav();
  andrews.init_matchHeight();
  andrews.init_cotact_form();
});
