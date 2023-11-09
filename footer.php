<!--Footer Start-->
<footer id="footer-wrapper" class="py-5">
	<div class="footer-top custom-container ">
		<div class="container">
			<div class="row">
				<div class="col-md-4 foot-wrap px-2">
					<div class="content-wrap ">
						<h4 class="sp-heading text-uppercase letter-spacing"><?php echo site_name;?></h4>
						<p class="line-height-30 ft-14"><strong>Studio 16</strong> is an ideal place for travelers who want to enjoy good food and comfortable accommodation at reasonable prices.</p>
						<p></p>
					</div>
					<div class="social-foot">
						<ul class="list-unstyled">
							<li class="d-inline-block pr-2"><a target="_blank" href="https://www.facebook.com"><i class="text-white fab fa-facebook-f text-center" aria-hidden="true"></i></a></li>
							<li class="d-inline-block pr-2"><a target="_blank" href="https://www.instagram.com"><i class="text-white fab fa-instagram text-center" aria-hidden="true"></i></a></li>
							<li class="d-inline-block"><a target="_blank" href="https://www.youtube.com"><i class="text-white fab fa-youtube text-center" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 offset-md-1 foot-wrap">
					<div class="content-wrap ">
						<h4 class="sp-heading text-uppercase letter-spacing">Contact us</h4>
					</div>
					<div class="certified-img">
						<ul class="list-unstyled d-block">
							<li><a class="text-dark line-height-30 ft-14" href="<?php echo gmap_link;?>" target="_blank"><i class="pr-3 fa fa-map-marker" aria-hidden="true"></i><?php echo address;?></a>
						</li>
						<li><a class="text-dark line-height-30 ft-14" href="tel:<?php echo mobile_number;?>" target="_blank"><i class="pr-3 fa fa-phone" aria-hidden="true"></i><?php echo mobile_number;?></a></li>
						<li><a class="text-dark line-height-30 ft-14" href="mailto:<?php echo email;?>" target="_blank"><i class="pr-2 fa fa-envelope" aria-hidden="true"></i>
						<?php echo email;?></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 foot-wrap">
			<div class="content-wrap ">
				<h4 class="sp-heading text-uppercase letter-spacing">&nbsp;</h4>
				<p class="line-height-30 ft-14"><p>&copy; <?php echo date('Y');?>. <span><?php echo site_name;?>.</span> All rights reserved.</p>
			<img src="<?=asset_url?>images/powered.png"/>
			</div>
		</div>
	</div>
</div>
</div>
</footer>
<!--Footer End-->
<!--Required JavaScript-->
<script src="<?=asset_url?>js/jquery-3.5.1.slim.min.js"></script>
<script src="<?=asset_url?>js/popper.min.js"></script>
<script src="<?=asset_url?>js/bootstrap.min.js"></script>
<script src="<?=asset_url?>js/lightpick.js"></script>
<script src="<?=asset_url?>js/jquery-ui.min.js"></script>
<script src="<?=asset_url?>js/custom-script.js"></script>
<script src="<?=asset_url?>js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script src="<?=asset_url?>js/owl.carousel.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	$(".fancybox").fancybox({
	openEffect: "none",
	closeEffect: "none"
	});
	$(".fancybox").fancybox({
	'width'  : 600,
	'height' : 600,
	'autoSize' : false
	});
	});
	</script>

<script type="text/javascript">
	$("[id^=carousel-thumbs]").carousel({
	interval: 2000
});

/** Fullscreen Buttun **/
$(".carousel-fullscreen").click(function () {
	var id = $(this).attr("href");
	$(id).find(".active").ekkoLightbox({
		type: "image"
	});
});

if ($("[id^=carousel-thumbs] .carousel-item").length < 2) {
	$("#carousel-thumbs [class^=carousel-control-]").remove();
	$("#carousel-thumbs").css("padding", "0 5px");
}

$("#carousel").on("slide.bs.carousel", function (e) {
	var id = parseInt($(e.relatedTarget).attr("data-slide-number"));
	var thumbNum = parseInt(
		$("[id=carousel-selector-" + id + "]")
			.parent()
			.parent()
			.attr("data-slide-number")
	);
	$("[id^=carousel-selector-]").removeClass("selected");
	$("[id=carousel-selector-" + id + "]").addClass("selected");
	$("#carousel-thumbs").carousel(thumbNum);
});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(".fancybox").fancybox({
	openEffect: "none",
	closeEffect: "none"
	});
	$(".fancybox").fancybox({
	'width'  : 600,
	'height' : 600,
	'autoSize' : false
	});
	$('.owl-testimonial').owlCarousel({
	loop: true,
	margin: 0,
	nav: true,
	dots: false,
	autoplay: true,
	lazyLoad: true,
	center: true,
	navText: ["<span class='fa fa fa-arrow-circle-left'></span>", "<span class='fa fa-arrow-circle-right'></span>"],
	responsive: {
			0: {
					items: 1
			},
			600: {
					items: 1
			},
			1000: {
					items: 1
			}
	}
});
$('.owl-facilities').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    lazyLoad: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
	});
	</script>
</body>
</html>