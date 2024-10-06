<?php include('header.php'); ?>

<section class="contact-us inner_page_banner py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-12 breadcrumb-wrapper fancyheading text-center">

				<h3 class="ft-30 text-shadow sp-heading text-center letter-spacing">Contact Us</h3>

				<span class="breadcrumb d-block mt-4 ft-15">

					<a class="text-d-none" href="./">Home</a> / Contact Us</span>

			</div>

		</div>

	</div>

</section>

<section class="form py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-12 text-center">

				<h3 style="padding:0!important" class="fancy text-orange ft-16 text-uppercase font-weight-normal">Contact Form</h3>

				<h2 class="sp-heading letter-spacing font-weight-normal my-5 ft-32">Send Us An Email</h2>

			</div>

			<div class="col-md-10 mx-auto">

				<div class="row">
					<form action='contact-us.php' method='post' id='contact_form'>
						<div class="col-md-6 pull-left">

							<div class="form-group">

								<input type="text" placeholder="Full Name" class="form-control ft-14 py-4" name="name" id="name">
								<div id='name_error' class='error'><img src='assets/images/error.png'> I don't talk to strangers.</div>
							</div>

							<div class="form-group">

								<input type="text" placeholder="Contact Number" class="form-control ft-14 py-4" name="phone" id="phone">
								<div id='phone_error' class='error'><img src='assets/images/error.png'> How should we reach you?</div>

							</div>

						</div>

						<div class="col-md-6 pull-left ">

							<div class="form-group">

								<input type="email" placeholder="Email" class="form-control ft-14 py-4" name="email" id="email">
								<div id='email_error' class='error'><img src='assets/images/error.png'> You don't want me to answer?</div>

							</div>

							<div class="form-group">

								<input type="text" placeholder="Subject" class="form-control ft-14 py-4" name="subject" id="subject">
								<div id='subject_error' class='error'><img src='assets/images/error.png'> What is the purpose of the contact?</div>

							</div>

						</div>

						<div class="form-group px-3 w-100">

							<textarea class="form-control ft-14 py-3" placeholder="Message" style="height:200px!important;" rows="4" name="message" id="message"></textarea>
							<div id='message_error' class='error'><img src='assets/images/error.png'> Forgot why you came here?</div>

						</div>
					</form>
				</div>

				<div class="p-3 text-center">
					<div id='mail_success' class='success'><img src='assets/images/success.png'> Thank you. The mailman is on his way.</div>
					<div id='mail_fail' class='error'><img src='assets/images/error.png'> Sorry, don't know what happened. Try later.</div>
					<p id='cf_submit_p'>
						<input type='submit' id='send_message' class="btn px-5 py-3 my-2 btn-orange-2 text-uppercase ft-12 letter-spacing-2 hover:btn-orange-2" value='Send'>
					</p>

				</div>

			</div>

		</div>

	</div>

	</div>

	</div>

</section>

<section class="map py-5">

	<div class="">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1646892503877!2d85.30861907546755!3d27.712200976179755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19af77badfb5%3A0x621f04881b5c139b!2sStudio16!5e0!3m2!1sen!2snp!4v1695548518145!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</div>

</section>
<?php include('footer.php'); ?>