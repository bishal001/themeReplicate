<!-- creating a navigation manu for the large screen -->
<div class="d-lg-block d-none">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid" alt="">Turtle</a>
    <ul class="navbar-nav ml-auto">
      <!-- creating nav menu items -->
      <li class="nav-item">
        <a href="#home" class="nav-link underline">Home</a>
      </li>
      <li class="nav-item">
        <a href="#our-work" class="nav-link underline">Our Work</a>
      </li>
      <li class="nav-item">
        <a href="#about-us" class="nav-link underline">About Us</a>
      </li>
      <li class="nav-item">
        <a href="#services" class="nav-link underline">Services</a>
      </li>
      <li class="nav-item">
        <a href="#our_skill" class="nav-link underline">Our Skills</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link underline">Contact Us</a>
      </li>
    </ul>
  </nav>
</div>

<!-- creating a navigation manu for the small screen -->
<div class="d-lg-none d-block">

  <div class="sticky-top side-nav">
    <div class="container text-center" style="width: 100%;">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid" alt="">Turtle</a>
    </div>
    <!-- Collapse button -->
    <button class="navbar-toggler ml-auto side_menu button" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false"
      aria-label="Toggle navigation">
      <div class="animated-icon3 "><span></span><span></span><span></span></div>
    </button>
    <!-- contains the body section of the nav bar for the small device -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent22">
      <ul class="navbar-nav menu_items ml-4">
        <li class="nav-item">
          <a href="#home" class="nav-link underline">Home</a>
        </li>
        <li class="nav-item">
          <a href="#our-work" class="nav-link underline">Our Work</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">About Us</a>
        </li>
        <li class="nav-item">
          <a href="#services" class="nav-link underline">Services</a>
        </li>
        <li class="nav-item">
          <a href="#our_skill" class="nav-link underline">Our Skills</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- js code for the side menu toogle -->
  <script>
  $(document).ready(function() {

    $('.button').on('click', function() {

      $('.animated-icon3').toggleClass('open');
    });
  });
  </script>
</div>