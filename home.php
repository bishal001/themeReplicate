<!-- calling the header section -->
<?php include'header.php'?>

<!-- Section 1 started -->
<section class="row hero no-gutters page-scroll" id="home">
  <div class="hero_layer">
    <!-- calling nav menu -->
    <?php include'nav.php'?>

    <!-- hero section text -->
    <div class="col-xl-12 col-lg-12 col-md-12 font-weight-bold hero_text text-center">turtle</div>
    <!-- div to display the partical effect -->
    <div id="particles-js" class="mx-auto"></div>

    <!-- blinking text effect section -->
    <div class="flex" style="width:100%">
      <p id="word" class="font-weight-bold typed_text"></p>
      <p class="blink typed_text">|</p>
    </div>
  </div>
  <!-- hero section ended -->
</section>
<!-- Section 1 ended -->

<!-- started section 2 -->
<section class="row section-2 no-gutters">
  <div class="text in-left">
    <div class="row">
      <dt class="d-inline">Coolest &nbsp;</dt>
      <p class="d-inline">HTML Theme yet?</p>
    </div>
    <div class="row">
      <p class="second_text">Start with particle today, why not!</p>
    </div>
  </div>
  <div class="row in-left">
    <button class="btn button_1" style="margin-left: -300px">Get it now</button>
  </div>
</section>
<!-- ended section 2 -->

<!-- started section 3 -->
<section class="page-scroll" id="our-work">
  <div class="row no-gutters section_3_text justify-content-center">
    <p class="in-left">See Our Work</p>
  </div>
  <div class="row justify-content-center" style="background-color: #2c363f; color:#808E9E;font-size: 18px;">
    <p class="in-left pt-1">The new Style for 2017 is here. Like it?</p>
    <a href="#" class="in-left pt-1 section_3_link font-weight-bold">BUY THEME NOW!</a>
  </div>
  <!-- stores the images for the section 3 -->
  <div class="row no-gutters">
    <div class="col-xl-3 col-sm-6 col-6 overlay_ justif" style="width:25%;">
      <img src="images/img-1.jpg" class="img-fluid" alt="">
      <!-- overlay part of the image -->
      <div class="d-flex flex-column justify-content-center overlay text-center">
        <div class="">
          <i class="fa fa-eye fa-3x icon"></i>
        </div>
        <div class="">
          <a href="#" class="text_3">Thumb Hover Superb</a>
        </div>
        <div>
          <p style="color: #848484; font-size: 16px;">Pure CSS Instant Hover</p>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 col-6 overlay_" style="width:25%;">
      <img src="images/img-2.jpg" class="img-fluid" alt="">
      <!-- overlay part of the image -->
      <div class="d-flex flex-column justify-content-center overlay text-center">
        <div class="">
          <i class="fa fa-eye fa-3x icon"></i>
        </div>
        <div class="">
          <a href="#" class="text_3">Thumb Hover Superb</a>
        </div>
        <div>
          <p style="color: #848484; font-size: 16px;">Pure CSS Instant Hover</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-6 overlay_" style="width:25%;">
      <img src="images/img-3.jpg" class="img-fluid" alt="">
      <!-- overlay part of the image -->
      <div class="d-flex flex-column justify-content-center overlay text-center">
        <div class="">
          <i class="fa fa-eye fa-3x icon"></i>
        </div>
        <div class="">
          <a href="#" class="text_3">Thumb Hover Superb</a>
        </div>
        <div>
          <p style="color: #848484; font-size: 16px;">Pure CSS Instant Hover</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-6 overlay_" style="width:25%;">
      <img src="images/img-4.jpg" class="img-fluid" alt="">
      <!-- overlay part of the image -->
      <div class="d-flex flex-column justify-content-center overlay text-center">
        <div class="">
          <i class="fa fa-eye fa-3x icon"></i>
        </div>
        <div class="">
          <a href="#" class="text_3">Thumb Hover Superb</a>
        </div>
        <div>
          <p style="color: #848484; font-size: 16px;">Pure CSS Instant Hover</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ended section 3 -->

<!-- started section 4 -->
<section class="page-scroll section_4" id="about-us">
  <div>
    <p><b>About </b>Particle Company</p>
  </div>
</section>
<!-- ended section 4 -->

<!-- importing custom js file -->
<script src="javascript/custom.js"></script>
<!-- calling js files for the particles -->
<script src="javascript/particles.js"></script>
<script src="javascript/app.js"></script>
</body>