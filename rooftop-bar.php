<?php include('header.php'); ?>

<section class="about-us inner_page_banner py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-12 breadcrumb-wrapper fancyheading text-center">

				<h3 class="ft-30 text-shadow sp-heading text-center letter-spacing">Rooftop Bar</h3>

				<span class="breadcrumb d-block mt-4 ft-15">

					<a class="text-d-none" href="./">Home</a> / <a class="text-d-none" href="restaurants.php"> Restaurants </a> / Rooftop Bar</span>

			</div>

		</div>

	</div>

</section>

<section class="membership">

	<div class="container">

		<div class="row py-5">

			<div class="row">
				<div class="col-12 col-md-5 col-xs-12 col-lg-5">
				
								<figure class="note note-secondary p-4">
          <blockquote class="blockquote">
					<h3 class="sp-heading ft-32 letter-spacing-1 paragraph mb-3"> Rooftop Bar</h3>

<h2 class="ft-24 text-orange letter-spacing-15">The view from our terrace is majestic and you can feel and understand once you step in.</h2>
          </blockquote>
         
        </figure>
				</div>
				
				
				<div class="col-12 col-md-7 col-xs-12 col-lg-7">
					
				<p class="sp-heading ft-32 letter-spacing-1 paragraph mb-3">Studio 16 Hotel offers a roof top restro and bar with diverse flavors, impeccable service, and a vibrant atmosphere for all guests.</p>
				<h2 class="text-orange sp-heading ft-32 letter-spacing-1 paragraph mb-3 font-weight-bold ">Opening Hours</h2>
				<ul class="list-group">
					<li class="list-group-item bg-dark">Breakfast: 7:00 AM – 11:00 AM</li>
					<li class="list-group-item bg-dark">Lunch: 12:00 PM – 4:00 PM</li>
				</ul>
				<div class="menu-items my-5">
					<ul class="d-flex flex-wrap list-unstyled">
						<li class="text-d-none ft-15 py-2 mr-3"><a href="#" class="btn btn-orange-2" data-toggle="modal" data-target="#Barmenu">Bar Menu</a></li>
						<li class="text-d-none ft-15 py-2"><a href="#" class="btn btn-orange-2" data-toggle="modal" data-target="#Cafemenu">Cafe Menu</a></li>
					</ul>
				</div>
				</div>
				

			</div>

		</div>

	</div>

</section>

<section class="callouts-wrapper">

    <div class="container pb-md-5">

        <div class="row">
            <div class="text-center mx-auto col-12">

						<h3 class="sp-heading ft-32 letter-spacing-1 paragraph mb-3"> Gallery </h3>

            </div>

        </div>

        <div class="row py-5">

            <div class="owl-carousel owl-facilities owl-theme">

                

                <div class="item">

								<img src="<?=asset_url?>images/gallery/g1.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g2.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g3.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g4.jpg" class="img-fluid" alt="...">

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Modal Menu 1 -->
<div class="modal fade" id="Barmenu" tabindex="-1" role="dialog" aria-labelledby="BarmenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="BarmenuLabel">Bar Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/Barmenu.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Menu 1 -->
<div class="modal fade" id="Cafemenu" tabindex="-1" role="dialog" aria-labelledby="CafemenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="CafemenuLabel">Cafe Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/Cafemenu1.jpg">
			<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/Cafemenu.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>