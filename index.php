<?php include('header.php'); ?>
<section class="overflow slider">
	<div id="demo" class="carousel slide" data-ride="carousel">
		<!--Indicators-->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
		</ul>
		<!--Slideshow-->
		<div class="carousel-inner">
		<div class="carousel-item active">
				<img src="<?php echo asset_url ?>images/banner1.jpg" alt="<?php echo site_name;?>">
			</div>
			<div class="carousel-item">
				<img src="<?php echo asset_url ?>images/banner2.jpg" alt="<?php echo site_name;?>">
			</div>
			<div class="carousel-item">
				<img src="<?php echo asset_url ?>images/banner3.jpg" alt="<?php echo site_name;?>">
			</div>
            <div class="carousel-item">
				<img src="<?php echo asset_url ?>images/banner4.jpg" alt="<?php echo site_name;?>">
			</div>
			
			<div class="col-xl-7 z-index-999 text-shadow caro-text mx-auto">
				<h1 class="text-white letter-spacing text-center sp-heading text-uppercase">We make your stay once in a lifetime moment</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">

		</div>
	</div>
</section>

<section class="overflow descriptions py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pb-5">
				<h3 class="ft-24 text-orange letter-spacing-15 my-3"> Studio 16</h3>
				<h2 class="sp-heading text-uppercase ft-32 letter-spacing-1 paragraph mb-3">nurture the culture of care</h2>
				<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>images/title-bg.png">
				<p class="pb-md-0 line-height-30"><strong>Studio 16</strong> is a popular restaurant with hotel and lodging facilities located at thamel, Kathmandu, Nepal. It is an ideal place for travelers who want to enjoy good food and comfortable accommodation at reasonable prices.</p>
				<a href="#" class="btn btn-orange-2 ft-14 px-3 border-radius-0 ">Read More</a>
			</div>
            <div class="col-md-6 pb-5">
            <section class="overflow booking-sec bg-light py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="d-block">
					<div class="book-head">
						<h4 class="sp-heading">Book Your <span class="text-orange ft-30 text-uppercase">Room</span></h4>
					</div>
					<div class="booking-form-container">
						<form action="#" method="get" id="bookform">
							<div class="no-gutters d-block">
								<!-- <input type="hidden" name="hotel_id" value="<?php echo  HOTELID ?>"> -->
								<div class="check-inn new-check-in mb-3 px-lg-0 px-md-3">
									<div class="checkin-box form-control line-height-26 ft-14">
										<i class="fa fa-calendar float-left mt-1"></i>
										<input type="hidden" name="checkin" id="ArrivalDate2" value="<?php echo  (isset($_GET['checkin'])) ? date("F d, Y", strtotime($_GET['checkin'])) : date("F d, Y"); ?>">
										<span id="ci-month"><?php echo  (isset($_GET['checkin'])) ? date("F", strtotime($_GET['checkin'])) : date("F"); ?></span>
										<span id="ci-date"><?php echo  (isset($_GET['checkin'])) ? date("d", strtotime($_GET['checkin'])) : date("d"); ?></span>
										<span id="ci-day"><?php echo  (isset($_GET['checkin'])) ? date("Y", strtotime($_GET['checkin'])) : date("Y"); ?></span>

									</div>
								</div>
								<div class="check-out new-check-out px-lg-0 px-md-3  mb-3">
									<div class="checkout-box form-control line-height-26 ft-14">
										<input type="hidden" name="checkout" id="DepartureDate2" value="<?php echo  (isset($_GET['checkout'])) ? date("F d, Y", strtotime($_GET['checkout'])) : date("F d, Y", strtotime("+1 day")); ?>">
										<i class="fa fa-calendar float-left mt-1"></i>
										<span id="co-month"><?php echo   (isset($_GET['checkout'])) ? date("F", strtotime($_GET['checkout'])) : date("F", strtotime("+1 day")); ?></span>
										<span id="co-date"><?php echo   (isset($_GET['checkout'])) ? date("d", strtotime($_GET['checkout'])) : date("d", strtotime("+1 day")); ?></span>
										<span id="co-day"><?php echo   (isset($_GET['checkout'])) ? date("Y", strtotime($_GET['checkout'])) : date("Y", strtotime("+1 day")); ?></span>

									</div>
								</div>
								<div class="room-type px-lg-0 px-md-3 mb-3">
									<select id="room-selection" name="room_preference" class="form-control ft-14 mx-md-0 mx-auto">
										<option value="">Choose a Room</option>
										<option value="Deluxe-room">Deluxe Room</option>
										<option value="Traditional-room">Traditional Room</option>
									</select>
								</div>
								<div class="book-btn col-lg-12 mt-md-0 mt-2">
									<button type="submit" class="btn btn-orange-2 ft-14 w-100 border-radius-0 line-height-26">Book Room</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
            </div>
		</div>
	</div>
</section>
<section class="section-padding section-whyus py-5">
    <div class="container">
        <div class="section-title text-center">
				<h3 class="ft-24 text-orange letter-spacing-15 my-3"> Why Choose us</h3>
				<h2 class="sp-heading text-uppercase ft-32 letter-spacing-1 paragraph mb-3">Prepare for first-class service</h2>
				<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>images/title-bg.png">
        </div>
        <div class="cards-wrap fl-wrap pt-md-5">
            <div class="row">
                <!--card item --> 
                <div class="col-md-4">
                    <div class="content-inner fl-wrap">
                        <div class="content-front">
                            <div class="cf-inner">
                                <div class="bg" style="background-image: url(assets/images/whyus1.jpg);"></div>
                                <div class="overlay1"></div>
                                <div class="inner">
                                    <h2>Daily New Fresh Menus</h2>
                                    <h4>Start eating better</h4>
                                </div>
                                <div class="serv-num">01.</div>
                            </div>
                        </div>
                        <div class="content-back">
                            <div class="cf-inner">
                                <div class="inner">
                                    <div class="dec-icon">
                                        <i class="fa fa-fish"></i>
                                    </div>
                                    <p>Getting bored with same menus accross the restaurant? Now don't be. We provide daily special menus just for you. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card item end -->
                <!--card item --> 
                <div class="col-md-4">
                    <div class="content-inner fl-wrap">
                        <div class="content-front">
                            <div class="cf-inner">
                                <div class="bg" style="background-image: url(assets/images/whyus2.jpg);"></div>
                                <div class="overlay1"></div>
                                <div class="inner">
                                    <h2>Fresh Ingredient, Tasty Meals</h2>
                                    <h4>Quality is the heart</h4>
                                </div>
                                <div class="serv-num">02.</div>
                            </div>
                        </div>
                        <div class="content-back">
                            <div class="cf-inner">
                                <div class="inner">
                                    <div class="dec-icon">
                                        <i class="fa fa-carrot"></i>
                                    </div>
                                    <p>Eat healthy food today and stay healthy forever. We assure you that we have best and fresh ingredient for the menus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card item end -->
                <!--card item --> 
                <div class="col-md-4">
                    <div class="content-inner fl-wrap">
                        <div class="content-front">
                            <div class="cf-inner">
                                <div class="bg" style="background-image: url(assets/images/whyus3.jpg);"></div>
                                <div class="overlay1"></div>
                                <div class="inner">
                                    <h2>Creative &amp; Talented Chefs</h2>
                                    <h4>Hot &amp; ready to serve</h4>
                                </div>
                                <div class="serv-num">03.</div>
                            </div>
                        </div>
                        <div class="content-back">
                            <div class="cf-inner">
                                <div class="inner">
                                    <div class="dec-icon">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <p>We won't conpromise with the quality that you eat and the service that you get. We have professionals in all aspects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card item end -->                                                 
            </div>
            <div class="section-dec sec-dec_top"></div>
            <div class="section-dec sec-dec_bottom"></div>
        </div>
        <div class="images-collage-item col_par" style="width: 120px; top: 87%; z-index: 1; left: 83%; transform: translateZ(0px) translateY(20.0641px);" data-position-left="83" data-position-top="87" data-zindex="1" data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png" alt=""></div>
    </div>
</section>

<section class="callouts-wrapper section-padding-bottom">
    <div class="container">
        <div class="row">
				<div class="text-center mx-auto py-5 col-12">
				<h3 class="ft-24 text-orange letter-spacing-15 my-3"> Our Features</h3>
				<h2 class="sp-heading text-uppercase ft-32 letter-spacing-1 paragraph mb-3">Some of our awesome features that stands out.</h2>
				<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>images/title-bg.png">
        </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-facilities owl-theme">
                <div class="item">
                    <div class="callouts">
                        <div class="callouts-box text-center">
                            <div class="icon-box"><i class="fa fa-shopping-cart"></i></div>
                            <div class="box-header">
                                <h3><a href="#">Souvenir Shop</a></h3>
                            </div>
                            <div class="divider bg-green"></div>
                            <div class="box-body">
                                <p>Discover unique treasures and mementos at our Souvenir Shop, offering a wide range of exquisite items that capture the essence of your visit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="callouts">
                        <div class="callouts-box text-center">
                            <div class="icon-box"><i class="fa fa-building"></i></div>
                            <div class="box-header">
                                <h3>Multi Cuisine Restaurant</h3>
                            </div>
                            <div class="divider bg-green"></div>
                            <div class="box-body">
                                <p>Studio 16 Restaurant offers a multicuisine experience with diverse flavors, impeccable service, and a vibrant atmosphere for all guests.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="callouts">
                        <div class="callouts-box text-center">
                            <div class="icon-box"><i class="fa fa-heart"></i></div>
                            <div class="box-header">
                                <h3>Health Club</h3>
                            </div>
                            <div class="divider bg-green"></div>
                            <div class="box-body">
                                <p>Indulge in a healthy lifestyle at our state-of-the-art Health Club, equipped with modern facilities and professional trainers to help you achieve your fitness goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="callouts">
                        <div class="callouts-box text-center">
                            <div class="icon-box"><i class="fa fa-chalkboard"></i></div>
                            <div class="box-header">
                                <h3>Conference Hall</h3>
                            </div>
                            <div class="divider bg-green"></div>
                            <div class="box-body">
                                <p>Our Conference Hall provides a sophisticated venue for your business meetings and events, featuring advanced technology, for a successful gathering.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="overflow py-5 bg-light our-rooms">
	<div class="container">
		<div class="row">
			<div class="text-center mx-auto py-5 col-12">
				<h2 class="sp-heading text-uppercase ft-32 letter-spacing-1 paragraph mb-3">our rooms</h2>
				<img class="img-fluid" src="<?php echo  asset_url ?>images/title-bg.png">
			</div>
			<div class="col-md-12 pb-md-5">
				<div class="row">
					<div class="col-lg-4 col-md-6 mx-auto">
						<figure data-aos="flip-right" data-aos-duration="2000" class="shadow border-light border-radius-8 aos-init aos-animate">
							<div class="figimg position-relative">
								<img class="img-fluid" src="<?php echo  asset_url ?>images/standard-double-room.jpg" alt="Standard-Double Room">
							</div>
							<figcaption class="py-2 px-3 my-2">
								<h4 class="mb-3 sp-heading">Standard Double Room</h4>
								<ul class="list-unstyled">
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/wifi.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/tv.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid w-65 h-auto" src="<?php echo  asset_url ?>images/shower.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/airconditioner.png"></li>
								</ul>
								<a href="standard-double-room.php" class="details-wrap text-dark ft-14 text-d-none">Check Details <span><i class="fa fa-long-arrow-right text-dark" aria-hidden="true"></i></span></a>
								</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<figure data-aos="flip-right" data-aos-duration="2000" class="shadow border-light border-radius-8 aos-init aos-animate">
							<div class="figimg position-relative">
								<img class="img-fluid" src="<?php echo  asset_url ?>images/deluxe-queen-room.jpg" alt="Deluxe Queen Room">
							</div>
							<figcaption class="py-2 px-3 my-2">
								<h4 class="mb-3 sp-heading">Deluxe Queen Room</h4>
								<ul class="list-unstyled">
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/wifi.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/tv.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid w-65 h-auto" src="<?php echo  asset_url ?>images/shower.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/airconditioner.png"></li>
								</ul>
								<a href="deluxe-queen-room.php" class="details-wrap text-dark ft-14 text-d-none">Check Details <span><i class="fa fa-long-arrow-right text-dark" aria-hidden="true"></i></span></a>
								</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<figure data-aos="flip-right" data-aos-duration="2000" class="shadow border-light aos-init aos-animate">
							<div class="figimg position-relative">
								<img class="img-fluid" src="<?php echo  asset_url ?>images/deluxe-king-room.jpg" alt="Deluxe King Room">
							</div>
							<figcaption class="py-2 px-3 my-2">
								<h4 class="mb-3 sp-heading">Deluxe King Room</h4>
								<ul class="list-unstyled">
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/wifi.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/tv.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid w-65 h-auto" src="<?php echo  asset_url ?>images/shower.png"></li>
									<li class="d-inline-block pr-2"><img class="img-fluid pr-2" src="<?php echo  asset_url ?>images/airconditioner.png"></li>
								</ul>
								<a href="deluxe-king-room.php" class="details-wrap text-dark ft-14">Check Details <span><i class="fa fa-long-arrow-right text-dark" aria-hidden="true"></i></span></a>
								</p>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonaial-section">
    <div class="section-padding testimonail  py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="color-white">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 offset-lg-2">
                    <div class="testimonail-block text-center">
                        <div class="owl-carousel owl-testimonial owl-theme">
                            <div class="item">
                                <p>The team is just fantastic. Honest and friendly with straight forward pricing. Excellent craftsmanship with no cutting corners.</p>
                                <span class="designation">- Bipin</span>
                            </div>
                            <div class="item">
                                <p>Did everything that was expected plus took the initiative to improve existing work that was not expected. It much appreciated.</p>
                                <span class="designation">- Darren C</span>
                            </div>
                            <div class="item">
                                <p>Don't know how to thank these amazing guys who did their best for making my Birthday party so epecial. Thank you for everything !!!</p>
                                <span class="designation">- Eric </span>
                            </div>
                            <div class="item">
                                <p>Really appriciated. What a hospitality..</p>
                                <span class="designation">- Jay</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overflow maps">
	<div class="">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1646633442897!2d85.30859397534671!3d27.71220177617978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19af77badfb5%3A0x621f04881b5c139b!2sStudio%2016!5e0!3m2!1sen!2snp!4v1685809671563!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</section>
<?php include('footer.php'); ?>