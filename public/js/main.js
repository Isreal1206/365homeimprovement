(function ($) {
  "use strict";
  
  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(20).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });
  
	var nav = $('nav');
	var navHeight = nav.outerHeight();

	/*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
	window.sr = ScrollReveal();
	sr.reveal('.foo', { duration: 1000, delay: 15 });

	/*--/ Carousel owl /--*/
	$('#carousel').owlCarousel({
		loop: true,
		margin: -1,
		items: 1,
		nav: true,
		navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true
	});

	/*--/ Animate Carousel /--*/
	$('.intro-carousel').on('translate.owl.carousel', function () {
		$('.intro-content .intro-title').removeClass('zoomIn animated').hide();
		$('.intro-content .intro-price').removeClass('fadeInUp animated').hide();
		$('.intro-content .intro-title-top, .intro-content .spacial').removeClass('fadeIn animated').hide();
	});

	$('.intro-carousel').on('translated.owl.carousel', function () {
		$('.intro-content .intro-title').addClass('zoomIn animated').show();
		$('.intro-content .intro-price').addClass('fadeInUp animated').show();
		$('.intro-content .intro-title-top, .intro-content .spacial').addClass('fadeIn animated').show();
	});

	/*--/ Navbar Collapse /--*/
	$('.navbar-toggle-box-collapse').on('click', function () {
		$('body').removeClass('box-collapse-closed').addClass('box-collapse-open');
	});
	$('.close-box-collapse, .click-closed').on('click', function () {
		$('body').removeClass('box-collapse-open').addClass('box-collapse-closed');
		$('.menu-list ul').slideUp(700);
	});

	/*--/ Navbar Menu Reduce /--*/
	$(window).trigger('scroll');
	$(window).bind('scroll', function () {
		var pixels = 50;
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-default').addClass('navbar-reduce');
			$('.navbar-default').removeClass('navbar-trans');
		} else {
			$('.navbar-default').addClass('navbar-trans');
			$('.navbar-default').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	/*--/ Property owl /--*/
	$('#property-carousel').owlCarousel({
		loop: true,
		margin: 30,
		responsive: {
			0: {
				items: 1,
			},
			769: {
				items: 2,
			},
			992: {
				items: 3,
			}
		}
	});

	/*--/ Property owl owl /--*/
	$('#property-single-carousel').owlCarousel({
		loop: true,
		margin: 0,  
		nav: true,
		navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
		responsive: {
			0: {
				items: 1,
			}
		}
	});

	/*--/ News owl /--*/
	$('#new-carousel').owlCarousel({
		loop: true,
		margin: 30,
		responsive: {
			0: {  
				items: 1,
			},
			769: {
				items: 2,
			},
			992: {
				items: 3,
			}
		}
	});

	/*--/ Case Study owl /--*/
	$('#case-study-carousel').owlCarousel({
		margin: 0,
		loop: true,
		autoplay: true,
		nav: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeInLeft',
		navText: ['<span><i class="ion-ios-arrow-back backward-arrow" aria-hidden="true"></i></span>', '<span><i class="ion-ios-arrow-forward forward-arrow" aria-hidden="true"></i></span>'],
		autoplayTimeout: 12000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}
		}
	});

	/*--/ Testimonials owl /--*/
	$('#testimonial-carousel').owlCarousel({
		margin: 0,
		loop: true,
		autoplay: true,
		nav: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeInUp',
		navText: ['<span><i class="ion-ios-arrow-back backward-arrow" aria-hidden="true"></i></span>', '<span><i class="ion-ios-arrow-forward forward-arrow" aria-hidden="true"></i></span>'],
		autoplayTimeout: 20000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}
		}
	});

	/*--/ Market owl /--*/
	$('#market-carousel').owlCarousel({
		margin: 0,
		loop: true,
		autoplay: false,
		nav: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeInRight',
		navText: ['<i class="ion-ios-arrow-back" style=" position: absolute; top: 180px; left: -1140px" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" style=" position: absolute; top: 180px; right: -40px" aria-hidden="true"></i>'],
		autoplayTimeout: 12000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}

		}
	});


})(jQuery);

/*--/ Active Class /--*/
$(function(){
		$('.navbar-nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.navbar-nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})

/*--/ Expandable List /--*/
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


/*--/ Sidebar Dropdown List /--*/
var dropdown = document.getElementsByClassName("dropdown-side-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

/*--/ Disabling the Submit Button Until a Checkbox is Checked /--*/

/*$(function(){
	var button = $('#send');
	button.attr('disabled', 'disabled');
	$('#terms').change(function(e){
		if (this.checked){
			button.removeAttr('disabled');
		} else {
			button.attr('disabled', 'disabled');
		}
	});
});	 */


function run(){
  var category = document.getElementById('category').value;
  var state = document.getElementById('state').value;
  var lga = document.getElementById('lga').value;
  localStorage.setItem("catQuote", category);
  localStorage.setItem("stateQuote", state);
  localStorage.setItem("lgaQuote", lga);
  return false;
}
