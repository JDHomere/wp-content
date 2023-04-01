<!-- footer section -->
<footer>
	<?php wp_footer() ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Digital Team HTML5 Template | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="<?php echo get_theme_file_uri().'/js/jquery.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/smoothscroll.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/isotope.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/imagesloaded.min.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/nivo-lightbox.min.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/jquery.backstretch.min.js' ?>"></script>
<script src="<?php echo get_theme_file_uri().'/js/wow.min.js' ?>"></script>
<script>

	// ISOTOPE FILTER
	jQuery(document).ready(function($){

	if ( $('.iso-box-wrapper').length > 0 ) { 

		var $container  = $('.iso-box-wrapper'), 
		$imgs     = $('.iso-box img');

		$container.imagesLoaded(function () {

		$container.isotope({
		layoutMode: 'fitRows',
		itemSelector: '.iso-box'
		});

		$imgs.load(function(){
			$container.isotope('reLayout');
		})

		});

		//filter items on button click

		$('.filter-wrapper li a').click(function(){

			var $this = $(this), filterValue = $this.attr('data-filter');

		$container.isotope({ 
		filter: filterValue,
		animationOptions: { 
			duration: 750, 
			easing: 'linear', 
			queue: false, 
		}                
		});             

		// don't proceed if already selected 

		if ( $this.hasClass('selected') ) { 
		return false; 
		}

		var filter_wrapper = $this.closest('.filter-wrapper');
		filter_wrapper.find('.selected').removeClass('selected');
		$this.addClass('selected');

		return false;
		}); 

	}

	});


	// PRELOADER JS
	$(window).load(function(){
	$('.preloader').fadeOut(1000); // set duration in brackets    
	});


	// jQuery to collapse the navbar on scroll //
	$(window).scroll(function() {
	if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
	});


	/* HTML document is loaded. DOM is ready. 
	-------------------------------------------*/
	$(function(){

	// ------- WOW ANIMATED ------ //
	wow = new WOW(
	{
	mobile: false
	});
	wow.init();


	// HIDE MOBILE MENU AFTER CLIKING ON A LINK
	$('.navbar-collapse a').click(function(){
		$(".navbar-collapse").collapse('hide');
	});


	// NIVO LIGHTBOX
	$('.iso-box-section a').nivoLightbox({
		effect: 'fadeScale',
	});


	// HOME BACKGROUND SLIDESHOW
	$(function(){
	jQuery(document).ready(function() {
	$('#home').backstretch([
		"<?php echo get_theme_file_uri().'/images/home-bg-slideshow1.jpg' ?>", 
		"<?php echo get_theme_file_uri().'/images/home-bg-slideshow2.jpg' ?>",
		],  {duration: 2000, fade: 750});
	});
	})
	});
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
	// Get carousel elements

var tLeftButton = $("#testimonials-l");
var tRightButton = $("#testimonials-r");

// Get number of <li> elements in carousel

var tItemCount = document.getElementById('testimonials-ul').querySelectorAll('li').length;

// Set length based on that

var tWidth = tItemCount * 100 + "vw";
$(".testimonials ul").css("width", tWidth);

// Button functionality

var tPosition = 0;
console.log(tPosition);

tRightButton.click(function() {
  if (tPosition < (tItemCount - 1)) {
    tPosition++;
    var m = "-" + (100 * tPosition) + "vw";
    $(".testimonials ul").animate({
      "left": m
    }, 500);
    greyButton();
  }
});

tLeftButton.click(function() {
  if (tPosition > 0) {
    tPosition--;
    var m = "-" + (100 * tPosition) + "vw";
    $(".testimonials ul").animate({
      "left": m
    }, 500);
    greyButton();
  }
});

// Grey out buttons if not useable 

var greyButton = function() {
  if (tPosition == 0) {
    tLeftButton.css("opacity", "0.3");
    tLeftButton.css("cursor", "default");
  } else if (tPosition == (tItemCount - 1)) {
    tRightButton.css("opacity", "0.3");
    tRightButton.css("cursor", "default");
  } else {
    tRightButton.css("opacity", "1");
    tRightButton.css("cursor", "pointer");
    tLeftButton.css("opacity", "1");
    tLeftButton.css("cursor", "pointer");
  }
}

greyButton();

// And finally, if there's only one quote, kill the buttons altogether

if ( tItemCount == 1 ) {
  $('.testimonials-control').css('display','none');
}

</script>
</body>
</html>