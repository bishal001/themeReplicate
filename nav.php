<!-- creating a navigation manu -->
<p style="color: #eaeaea;font-size: 40px;font-weight: bold;" class="text-center logo"><img src="images/logo.png" class="img-fluid" alt="">Turtle</p>
<nav class="navbar navbar-expand-lg" id="mySidenav">

  <a href="javascript:void(0)" class="closebtn d-block d-lg-none" onclick="closeNav()">&times;</a>
  <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid" alt="">Turtle</a>
  <ul class="navbar-nav ml-auto ">
    <!-- creating nav menu items -->
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
  <span style="font-size:30px;cursor:pointer;" class="float-right mr-5 nav_open" onclick="openNav()">&#9776;
  </span>
</nav>


<!-- js code for the side menu toogle -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>