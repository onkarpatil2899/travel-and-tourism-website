<?php
include_once 'header.php';
?>

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center">
        <div class="col-md-7 col-sm-12 ftco-animate">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3">Contact</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END slider -->

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 mb-4">
      <div class="col-md-6 pr-md-5 flex-column">
        <div class="row d-block flex-row">
          <h2 class="h4 mb-4">Contact Information</h2>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Address:</span> Chembur,Mumbai-400071</p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Phone:</span> <a href="tel://9137470180">+91 9137470180</a></p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Email:</span> <a href="mailto:info@TEproject.com">onkarpatil2899@gmaiil.com</a></p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Website</span> <a href="#">TEproject.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="includes/contact.inc.php" method="post">
          <h2 class="h4 mb-4">Write to us </h2>
          <div class="form-group">
            <input type="text" class="form-control" name="yourname" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="youremail" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">

            <?php
            $Name = (isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '');
            if (empty($Name)) {
              echo '<button button type="submit" name="submit" onclick="popUpnotregistered()" class="btn btn-primary py-3 px-5">Send Message</buttton>';
            } else {
              echo '  <button button type="submit" name="submit" onclick="popUp()" class="btn btn-primary py-3 px-5">Send Message</buttton>';
            }
            ?>
            <script>
              function popUpnotregistered() {
                window.location.href = "sign1.php";
              }
            </script>
            <script>
              function popUp() {
                Swal.fire({

                  icon: 'success',
                  title: 'Flight Booked Successfully',
                  text: 'Ticket details have been sent your in box',
                  footer: ''
                });
              }
            </script>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12" id="map"></div>
    </div>
  </div>
</section>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>


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