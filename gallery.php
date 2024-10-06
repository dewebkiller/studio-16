<?php include('header.php');?>

<section class="gallery inner_page_banner py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-12 breadcrumb-wrapper fancyheading text-center">

				<h3 class="ft-30 text-shadow sp-heading text-center letter-spacing">Gallery</h3>

				<span class="breadcrumb d-block mt-4 ft-15">

					<a class="text-d-none" href="./">Home</a> / Gallery</span>

				</div>

			</div>

		</div>

	</section>

	<section class="gallery py-5 overflow">

		<div class="container">

		<div class="row">
<div class="col-12">
							<!-- Carousel -->
							<div id="carousel" class="carousel slide gallery" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" data-slide-number="0" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g1.jpg">
										<img src="<?=asset_url?>images/gallery/g1.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g2.jpg">
										<img src="<?=asset_url?>images/gallery/g2.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g3.jpg">
										<img src="<?=asset_url?>images/gallery/g3.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g4.jpg">
										<img src="<?=asset_url?>images/gallery/g4.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="4" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g5.jpg">
										<img src="<?=asset_url?>images/gallery/g5.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g6.jpg">
										<img src="<?=asset_url?>images/gallery/g6.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g7.jpg">
										<img src="<?=asset_url?>images/gallery/g7.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery" data-remote="<?=asset_url?>images/gallery/g8.jpg">
										<img src="<?=asset_url?>images/gallery/g8.jpg" class="d-block w-100" alt="...">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
									<i class="fas fa-angle-left fa-3x" aria-hidden="true"></i>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
									<i class="fas fa-angle-right fa-3x" aria-hidden="true"></i>
									<span class="sr-only">Next</span>
								</a>
								<a class="carousel-fullscreen" href="#carousel" role="button">
									<span class="carousel-fullscreen-icon" aria-hidden="true"></span>
									<span class="sr-only">Fullscreen</span>
								</a>
							</div>
							<!-- Carousel Navigatiom -->
							<div id="carousel-thumbs" class="carousel slide bg-dark" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active" data-slide-number="0">
										<div class="row mx-0">
											<div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected" data-target="#carousel" data-slide-to="0">
												<img src="<?=asset_url?>images/gallery/g1.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-1" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="1">
												<img src="<?=asset_url?>images/gallery/g2.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-2" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="2">
												<img src="<?=asset_url?>images/gallery/g3.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-3" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="3">
												<img src="<?=asset_url?>images/gallery/g4.jpg" class="img-fluid" alt="...">
											</div>
										</div>
									</div>
									<div class="carousel-item" data-slide-number="1">
										<div class="row mx-0">
											<div id="carousel-selector-4" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="4">
												<img src="<?=asset_url?>images/gallery/g5.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="5">
												<img src="<?=asset_url?>images/gallery/g6.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="5">
												<img src="<?=asset_url?>images/gallery/g7.jpg" class="img-fluid" alt="...">
											</div>
											<div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="5">
												<img src="<?=asset_url?>images/gallery/g8.jpg" class="img-fluid" alt="...">
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev text-white" href="#carousel-thumbs" role="button" data-slide="prev">
									<i class="fas fa-angle-left fa-2x text-white" aria-hidden="true"></i>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next text-white" href="#carousel-thumbs" role="button" data-slide="next">
									<i class="fas fa-angle-right fa-2x text-white" aria-hidden="true"></i>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>

		</div>

	</div>

	</section>

	<?php include('footer.php');?>