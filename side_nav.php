<!-- css code for the side nav bar -->
<style>
/* body part of the side nav bar */

</style>
<!-- creating the side nav menu -->
<div class="row d-block d-lg-none">
  <div class="col-12 text-center">
    sds
  </div>
</div>
<div class="d-block d-lg-none sticky-top side-nav justify-content-center">
  <div id="mySidenav" class="sidenav">
    <!-- contains the cart, login and register section -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- contains the body section of the nav bar for the small device -->
    <ul class="navbar-nav ml-4">
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


    <span style="font-size:30px;cursor:pointer; margin-top:530px;" class="float-right mr-5" onclick="openNav()">&#9776;
    </span>
  </div>

</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>