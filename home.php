<!-- calling the header section -->
<?php include'header.php'?>

<div class="container">
<!-- hero section started -->
<div class="hero">
  <div class="hero_layer">
    <!-- calling nav menu -->  
    <?php include'nav.php'?>
    <?php include'side_nav.php'?>
    <!-- hero section text -->
    <div class="col-xl-12 col-lg-12 col-md-12 font-weight-bold hero_text text-center">turtle</div>
    <!-- div to display the partical effect -->
    <div id="particles-js" class="mx-auto"></div>

    <!-- blinking text effect section -->
    <div class="flex">
      <p id="word" class="font-weight-bold typed_text"></p><p class="blink typed_text">|</p>
    </div>
  </div>
</div>
</div>
<!-- hero section ended -->

<!-- importing custom js file -->
<script src="javascript/custom.js"></script>
<!-- calling js files for the particles -->
<script src="javascript/particles.js"></script>
<script src="javascript/app.js"></script>
</body>