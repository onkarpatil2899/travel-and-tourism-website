<?php
  include_once'header.php';
 ?> 

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
              <h1 class="mb-3">About us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Welcome to our website.</h3>
              <p>This is our T.E IP lab project.It is a group project(Group of three). Name of the project is Travel and Tourism website.It is full-fledged live website with facilites like booking a flight,hotels etc,.  </p>

              <p>Pack your bags.This website wil help you find perfect vacation that you need.We will help you to book flights,hotels. Here at website you'll get the best deals.The prices you see are never affected by your searches, no matter how many you make. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Satisfied Guests says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">The trip was amazing, a once in a lifetime opportunity and trip. My sister and I spent 16 days in Italy for her high school graduation trip, and we had an unparalleled experience.</p>
                  <p class="name">Sarah Gupta</p>
                  <span class="position">Guests from India</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></p>
                  <p class="mb-5">This was a trip of a lifetime.  We worked well together, came up with an awesome itinerary for 6 weeks to New Zealand and Australia.  You name it we were going to do it.</p>
                  <p class="name">Kristin B.</p>
                  <span class="position">Guests from New U.S.A</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></p>
                  <p class="mb-5">Our travel planner was so helpful in planning our family's trip to Belize for Spring Break 2020.  And perhaps even more helpful when we decided to cut our vacation short.</p>
                  <p class="name">Caron Martin</p>
                  <span class="position">Guests from France</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span></p>
                  <p class="mb-5">Our travel planner and his staff carefully planned a trip for us and testing out some suggestions to see if they were what we had in mind.We made a few revisions to the plan.</p>
                  <p class="name">Yui Yamamoto</p>
                  <span class="position">Guests from Japan</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)" style="border: 1px solid red;"></div>
               <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">My sister and I absolutely loved our trip to Italy that this travel designer with this travel company planned for us. We enjoyed seeing and doing the touristy things (museums, sights, etc.).</p>
                  <p class="name">Charlotte Smith</p>
                  <span class="position">Guests from Canada</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row mb-5 pb-5 no-gutters">
          <div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
            <div>
              <h2 class="mb-5 pb-3">Want to get our hottest travel deals top tips and advice? Subscribe us now!</h2>
              <form action="includes/newsletter.inc.php" class="subscribe-form" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="Emails" placeholder="Enter your email address">
				  <button type="submit" name="submit" onclick="popUp4()" class="icon icon-paper-plane"></button>
				     
                </div>
				<script>
					  function popUp4(){
	                     Swal.fire({
							 
                                icon: 'success',
                                title: 'Subscribed Successfully',
                                text: 'Keep checking your inbox for latest',
                                footer: ''
                                    }
							    );
						  }
                    </script>
              </form>
            </div>
          </div>
          <div class="col-lg-8 p-2 pl-md-5 heading-section">
            <h2 class="mb-5 p-2 pb-3 ftco-animate">Most Recommended Hotels</h2>
            <div class="row no-gutters d-flex">
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-1.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Luxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-2.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Deluxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-3.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Deluxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>