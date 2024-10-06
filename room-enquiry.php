<?php include('header.php'); ?>

<section class="contact-us inner_page_banner py-5">

  <div class="container">

    <div class="row">

      <div class="col-md-12 breadcrumb-wrapper fancyheading text-center">

        <h3 class="ft-30 text-shadow sp-heading text-center letter-spacing">Room Enquiry</h3>

        <span class="breadcrumb d-block mt-4 ft-15">

          <a class="text-d-none" href="./">Home</a> / Room Enquiry</span>

      </div>

    </div>

  </div>

</section>

<section class="form py-5">

  <div class="container">

    <div class="row">

      <div class="col-md-12 text-center">

        <h3 style="padding:0!important" class="fancy text-orange ft-16 text-uppercase font-weight-normal">Room Enquiry Form</h3>

        <h2 class="sp-heading letter-spacing font-weight-normal my-5 ft-32">Send Us An Email</h2>

      </div>

      <div class="col-md-10 mx-auto">

        <div class="row">
          
                <div class="col-12">

                  <div class="d-block">


                      <form action="index.php" id="bookform" method='post'>

                        <div class="no-gutters d-block">
                          <div class="d-flex room-flex">
                            <div class="room-type px-lg-0 px-md-3">

                              <input type="text" name="booking_name" id="booking_name" class="form-control ft-14 py-4 mx-md-0 mx-auto" placeholder="Name">
                              <div id='name_error' class='error'><img src='assets/images/error.png'> I don't talk to strangers.</div>

                            </div>
                            <div class="room-type px-lg-0 px-md-3 ">

                              <input type="text" name="booking_email" id="booking_email" class="form-control ft-14 py-4 mx-md-0 mx-auto" placeholder="Email">
                              <div id='email_error' class='error'><img src='assets/images/error.png'> You don't want me to answer?</div>

                            </div>
                          </div>

                          <div class="d-flex room-flex">
                            <div class="room-type px-lg-0 px-md-3">


                              <input type="text" placeholder="Checkin Date" onfocus="(this.type='date')" onblur="(this.type='text')" clas="form-control ft-14 py-4 mx-md-0 mx-auto" name="booking_checkin" id="booking_checkin">
                              <div id='checkin_error' class='error'><img src='assets/images/error.png'> When you want to go?</div>


                            </div>
                            <div class="room-type px-lg-0 px-md-3">

                              <input type="text" placeholder="Checkout Date" onfocus="(this.type='date')" onblur="(this.type='text')" clas="form-control ft-14 py-4 mx-md-0 mx-auto" name="booking_checkout" id="booking_checkout">
                              <div id='checkout_error' class='error'><img src='assets/images/error.png'> When you want to return?</div>

                            </div>
                          </div>


                          <div class="d-flex room-flex">
                            <div class="room-type px-lg-0 px-md-3">


                              <select name="booking_room" id="booking_room" class="form-control ft-14 mx-md-0 mx-auto">

                                <option value="">Choose a Room</option>

                                <option value="Standard Double or Twin Room">Standard Double or Twin Room</option>

                                <option value="eluxe Queen Room">Deluxe Queen Room</option>

                                <option value="Deluxe King Room">Deluxe King Room</option>

                              </select>
                              <div id='room_error' class='error'><img src='assets/images/error.png'> What type of room you want?</div>


                            </div>
                            <div class="room-type px-lg-0 px-md-3">
                              <input type="text" name="booking_phone" id="booking_phone" class="form-control ft-14 py-4 mx-md-0 mx-auto" placeholder="Phone">
                              <div id='phone_error' class='error'><img src='assets/images/error.png'> How should we contact you?</div>
                            </div>
                          </div>


                          <div class="d-flex room-flex">
                            <div class="room-type px-lg-0 px-md-3">


                              <input type="text" name="booking_adult" id="booking_adult" class="form-control ft-14 py-4 mx-md-0 mx-auto" placeholder="Adult">
                              <div id='adult_error' class='error'><img src='assets/images/error.png'> How many adults?</div>


                            </div>
                            <div class="room-type px-lg-0 px-md-3">


                              <input type="text" name="booking_child" id="booking_child" class="form-control ft-14 py-4 mx-md-0 mx-auto" placeholder="child">

                            </div>
                          </div>





                          <div class="book-btn col-lg-12 mt-md-0 mt-2">
                            <div id='mail_success' class='success'><img src='assets/images/success.png'> Thank you. The mailman is on his way.</div>
                            <div id='mail_fail' class='error'><img src='assets/images/error.png'> Sorry, don't know what happened. Try later.</div>
                            <input type="submit" class="btn px-5 py-3 my-2 btn-orange-2 text-uppercase ft-12 letter-spacing-2 hover:btn-orange-2" id="booking_btn" value="Enquiry Room">

                          </div>

                        </div>

                      </form>

        </div>

      </div>

    </div>

  </div>

  </div>

  </div>

</section>

<?php include('footer.php'); ?>