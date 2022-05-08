
 <?php
  include_once'header.php';
 ?> 

    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience the best trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span></span> Flight</a>
                <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span></span> Hotel</a>
                <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span></span> Car Rent</a>
                <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span></span> Cruises</a>
              </div>
            </div>
              
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  <form action="includes/bookflights.inc.php" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">

                      <div class="textfield-search one-third"><input type="text" name="location" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in one-third"><input type="text" id="checkin_date" name="checkin" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out one-third"><input type="text" id="checkout_date" name="checkout" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
					<?php
					$Name = ( isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '' );
                     if ( empty( $Name ) ){
                        echo '<button button type="submit" name="submit" onclick="popUpnotregistered()">Book Flights</buttton>';
					 }
					 else {
					    echo '  <button button type="submit" name="submit" onclick="popUp()">Book Flights</buttton>';
					 }
					?>
					<script>
					 function popUpnotregistered() {
                           window.location.href="sign1.php";
                         }      
                    </script>
                    <script>
					  function popUp(){
	                     Swal.fire({
							 
                                icon: 'success',
                                title: 'Flight Booked Successfully',
                                text: 'Ticket details have been sent your in box',
                                footer: ''
                                    }
							    );
						  }
                    </script>					
   			     </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="block-17">
                  <form action="includes/bookhotel.inc.php" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" name="hotel" class="form-control" placeholder="Search Hotel"></div>

                      <div class="check-in one-third"><input type="text" id="checkin_date" name="checkin" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out one-third"><input type="text" id="checkout_date" name="checkout"class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
					<?php
					$Name = ( isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '' );
                     if ( empty( $Name ) ){
                        echo '<button button type="submit" name="submit" onclick="popUpnotregistered()">Book Hotel</buttton>';
					 }
					 else {
					    echo '  <button button type="submit" name="submit" onclick="popUp1()">Book Hotel</buttton>';
					 }
					?>
					<script>
					 function popUpnotregistered() {
                           window.location.href="sign1.php";
                         }      
                    </script>
                    <script>
					  function popUp1(){
	                     Swal.fire({
							 
                                icon: 'success',
                                title: 'Hotel Booked Successfully',
                                text: 'Hotel details have been sent your in box',
                                footer: ''
                                    }
							    );
						  }
                    </script>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="block-17">
                  <form action="includes/bookcar.inc.php" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" name="location" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in one-third"><input type="text" id="start_date" name="checkin" class="form-control" placeholder="Start date"></div>

                      <div class="check-out one-third"><input type="text" id="return_date" name="checkout" class="form-control" placeholder="Return date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <?php
					$Name = ( isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '' );
                     if ( empty( $Name ) ){
                        echo '<button button type="submit" name="submit" onclick="popUpnotregistered()">Book Car</buttton>';
					 }
					 else {
					    echo '  <button button type="submit" name="submit" onclick="popUp2()">Book Car</buttton>';
					 }
					?>
					<script>
					 function popUpnotregistered() {
                           window.location.href="sign1.php";
                         }      
                    </script>
                    <script>
					  function popUp2(){
	                     Swal.fire({
							 
                                icon: 'success',
                                title: 'Car Booked Successfully',
                                text: 'Car details have been sent your in box',
                                footer: ''
                                    }
							    );
						  }
                    </script>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="block-17">
                  <form action="includes/bookcruise.inc.php" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third one-third-1"><input type="text" name="location" class="form-control" placeholder="Search Location"></div>


                      <div class="check-out one-third one-third-1"><input type="text" name="checkin" id="start_date" class="form-control" placeholder="Check-In date"></div>

                      <div class="select-wrap one-third one-third-1">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Categories</option>
                          <option value="">Suite</option>
                          <option value="">Super Deluxe</option>
                          <option value="">Balcony</option>
                          <option value="">Economy</option>
                          <option value="">Luxury</option>
                        </select>
                      </div>
                    </div>
                    <?php
					$Name = ( isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '' );
                     if ( empty( $Name ) ){
                        echo '<button button type="submit" name="submit" onclick="popUpnotregistered()">Book Cruise</buttton>';
					 }
					 else {
					    echo '  <button button type="submit" name="submit" onclick="popUp3()">Book Cruise</buttton>';
					 }
					?>
					<script>
					 function popUpnotregistered() {
                           window.location.href="sign1.php";
                         }      
                    </script>
                    <script>
					  function popUp3(){
	                     Swal.fire({
							 
                                icon: 'success',
                                title: 'Cruise Booked Successfully',
                                text: 'Cruise details have been sent your in box',
                                footer: ''
                                    }
							    );
						  }
                    </script> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            <a href="" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
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

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
            <div class="text text-center">
              <h2>Group Cruises</h2>
              <h3 class="price"><span>from</span> ₹29.9k</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-2.jpg);"></a>
            <div class="text text-center">
              <h2>Beach Tours</h2>
              <h3 class="price"><span>from</span> ₹19.9k</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-3.jpg);"></a>
            <div class="text text-center">
              <h2>Mountain Tours</h2>
              <h3 class="price"><span>from</span>₹17.9k</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-4.jpg);"></a>
            <div class="text text-center">
              <h2>Family Tours</h2>
              <h3 class="price"><span>from</span>₹59.9k</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-sailboat"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Special Activities</h3>
                <p> We will make sure you get the chance to participate in local events.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-around"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Travel Arrangements</h3>
                <p>With booking the flights, we will book your hotels so you can enjoy your vacation.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-compass"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Private Guide</h3>
                <p>To know more about the place your visiting , we will provide you a guide.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-map-of-roads"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Location Manager</h3>
                <p>With our local travel office we'll guide you to the your destination. </p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Most Popular Destination</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
              <div class="text">
                <span class="price">₹31.4k</span>
                <h3 class="heading"> Tour in Maldives</h3>
                <div class="post-meta">
                  <span>Ameeru Ahmed Magu Male’, Maldives</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span> <span>269 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-2.jpg');">
              <div class="text">
                <span class="price">₹72.8k</span>
                <h3 class="heading"> Tour in Paris</h3>
                <div class="post-meta">
                  <span>Landmark 324m-high 19th-century tower,Paris</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>420 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-3.jpg');">
              <div class="text">
                <span class="price">₹46.1k</span>
                <h3 class="heading"> Tour in Italy</h3>
                <div class="post-meta">
                  <span>Iconic ancient Roman gladiatorial arena,Italy</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span> <span>169 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-4.jpg');">
              <div class="text">
                <span class="price">₹52.9k</span>
                <h3 class="heading">Tour in U.S.A</h3>
                <div class="post-meta">
                  <span>Yellowstone National Park,Wyoming</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>943 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-5.jpg');">
              <div class="text">
                <span class="price">₹68.2k</span>
                <h3 class="heading"> Tour in U.K</h3>
                <div class="post-meta">
                  <span>London River Cruises,London</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>598 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-6.jpg');">
              <div class="text">
                <span class="price">₹51.6k</span>
                <h3 class="heading"> Tour in New Zealand</h3>
                <div class="post-meta">
                  <span>Mount Cook,South Island</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span> <span>621 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-7.jpg');">
              <div class="text">
                <span class="price">₹76.9k</span>
                <h3 class="heading"> Tour in Dubai</h3>
                <div class="post-meta">
                  <span>The Dubai Fountain,Dubai</span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span>692 reviews</span></p>
              </div> 
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-8.jpg');">
              <div class="text">
                <span class="price">₹21.4k</span>
                <h3 class="heading"> Tour in Andaman and Nicobar </h3>
                <div class="post-meta">
                  <span>Port Blair,Andaman and Nicobar Islands </span>
                </div>
                <p class="star-rate"><span class="icon-star"></span><span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>535 reviews</span></p>
              </div>
            </a>
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
                <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)" style="border: 1px solid red;"></div>
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
                <div class="user-img mb-4" style="background-image: url(images/person_5.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">My sister and I absolutely loved our trip to Italy that this travel designer with this travel company planned for us. We enjoyed seeing and doing the touristy things (museums, sights, etc.).</p>
                  <p class="name">Charlotte Smith</p>
                  <span class="position">Guests from Canada </span>
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
                    <span class="price">₹3.1k/night</span>
                    <h3 class="heading">Hotel Amparo</h3>
                    <div class="post-meta">
                      <span> San Miguel de Allende, Mexico</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span> <span>469 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-2.jpg');">
                  <div class="text">
                    <span class="price">₹1.1k/night</span>
                    <h3 class="heading">Capella Ubud</h3>
                    <div class="post-meta">
                      <span>Bali, Indonesia</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span> <span>783 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-3.jpg');">
                  <div class="text">
                    <span class="price">₹1.4k/night</span>
                    <h3 class="heading">Whitepod Hotel</h3>
                    <div class="post-meta">
                      <span>Switzerland</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>349 reviews</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	 <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            
            var Emails = ("$Emails");
            

            if ( isNotEmpty(email)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                    
                       Emails: Emails.val(),
                       
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
<?php
  include_once'footer.php';
 ?> 