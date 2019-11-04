<style>
/* Icon 1 */

.animated-icon3 {
  width: 30px;
  height: 20px;
  position: relative;
  margin: 0px;
}

.animated-icon3 span {
  display: block;
  position: absolute;
  height: 3px;
  width: 100%;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}


.animated-icon3 span {
  background: #f3e5f5;
}


/* Icon 4 */

.animated-icon3 span:nth-child(1) {
  top: 0px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3 span:nth-child(2) {
  top: 10px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3 span:nth-child(3) {
  top: 20px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

.animated-icon3.open span:nth-child(1) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  top: 0px;
  left: 8px;
}

.animated-icon3.open span:nth-child(2) {
  width: 0%;
  opacity: 0;
}

.animated-icon3.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  top: 21px;
  left: 8px;
}

.side_menu {
  position: fixed;
  bottom: 0;
  right: 0;
  margin-bottom: 30;
  margin-right: 30;
}

.menu_items{
  width: 25%;
  position: fixed;
  bottom: 0;
  right: 0;
  transform: translate(0%,-20%);
  margin-right: 90;
}
</style>

<?php include'header.php'?>
<!--Navbar-->
<div >
  <!--Navbar-->
  <nav class="navbar navbar-dark  indigo darken-2">

    <!-- Navbar brand -->


    <!-- Collapse button -->
    <button class="navbar-toggler ml-auto side_menu button" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false"
      aria-label="Toggle navigation">
      <div class="animated-icon3 "><span></span><span></span><span></span></div>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent22">

      <!-- Links -->
      <ul class="navbar-nav menu_items ml-4" style="background-color:black">
        <li class="nav-item">
          <a href="#" class="nav-link underline">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">Our Work</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">About Us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">Services</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">Our Skills</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">Contact Us</a>
        </li>
      </ul>
      <!-- Links -->

    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->
</div>

<script>
$(document).ready(function() {

  $('.button').on('click', function() {

    $('.animated-icon3').toggleClass('open');
  });
});
</script>