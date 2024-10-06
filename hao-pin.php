<?php include('header.php'); ?>

<section class="about-us inner_page_banner py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-12 breadcrumb-wrapper fancyheading text-center">

				<h3 class="ft-30 text-shadow sp-heading text-center letter-spacing">Hao Pin Chinese hot pot</h3>

				<span class="breadcrumb d-block mt-4 ft-15">

					<a class="text-d-none" href="./">Home</a> / <a class="text-d-none" href="restaurants.php"> Restaurants </a> / Hao Pin Chinese hot pot</span>

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
					<h3 class="sp-heading ft-32 letter-spacing-1 paragraph mb-3"> Hao Pin Chinese hot pot</h3>

<h2 class="ft-24 text-orange letter-spacing-15">Have this cool winter with the chinese HOT POT to warm your body.</h2>
          </blockquote>
         
        </figure>
				</div>
				
				
				<div class="col-12 col-md-7 col-xs-12 col-lg-7">
					
				<p class="paragraph mb-3">Hao Pin Chinese Restaurant is a hidden gem for Chinese cuisine lovers! Their menu offers a wide variety of flavorful dishes, from traditional favorites like General Tso's chicken to unique specialties like Szechuan spicy fish. The hot pot experience at Hao Pin is fantastic, with a customizable selection of fresh ingredients and savory broths. And don't forget to try their refreshing cocktails and specialty drinks to complement your meal! It's definitely a must-visit spot for a delicious Chinese feast! 🍜🥢🍹</p>
				<h2 class="text-orange sp-heading ft-32 letter-spacing-1 paragraph mb-3 font-weight-bold ">Opening Hours</h2>
				<ul class="list-group">
					<li class="list-group-item bg-dark">Breakfast: 7:00 AM – 11:00 AM</li>
					<li class="list-group-item bg-dark">Lunch: 12:00 PM – 4:00 PM</li>
				</ul>
				<div class="menu-items my-5">
					<ul class="d-flex flex-wrap list-unstyled">
						<li class="text-d-none ft-15 py-2 mr-3"><a href="#" class="btn btn-orange-2" data-toggle="modal" data-target="#HotPotModal">Hot pot</a></li>
						<li class="text-d-none ft-15 py-2"><a href="#" class="btn btn-orange-2" data-toggle="modal" data-target="#SichuanCuisine1">Sichuan Cuisine</a></li>
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

								<img src="<?=asset_url?>images/gallery/g5.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g6.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g7.jpg" class="img-fluid" alt="...">

                </div>
								<div class="item">

								<img src="<?=asset_url?>images/gallery/g8.jpg" class="img-fluid" alt="...">

                </div>
								
            </div>

        </div>

    </div>

</section>
<!-- Modal Menu 1 -->
<div class="modal fade" id="HotPotModal" tabindex="-1" role="dialog" aria-labelledby="HotPotModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="HotPotModalLabel">Hot pot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Hot pot is a popular Chinese cooking method where a simmering pot of flavorful broth is placed in the center of the table. You get to choose from a variety of fresh ingredients, such as thinly sliced meats, vegetables, tofu, and noodles, which you then cook in the hot pot right at your table. It's a fun and interactive dining experience where you can customize your own combinations and adjust the cooking time to your liking. The broth infuses all the ingredients with its delicious flavors, resulting in a tasty and satisfying meal. It's perfect for gathering with friends or family and enjoying a warm and comforting feast! 🍲🔥🥩🥦</p>
			<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/setmenu.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Menu 2 -->
<div class="modal fade" id="SichuanCuisine1" tabindex="-1" role="dialog" aria-labelledby="SichuanCuisine1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="SichuanCuisine1Label">Sichuan Cuisine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/sichuan-cuisine1.jpg">
      <img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/sichuan-cuisine2.jpg">
      <img class="img-fluid" class="img-fluid" src="<?php echo  asset_url ?>/images/menu/sichuan-cuisine3.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>