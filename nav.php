
  <!-- creating a navigation manu -->
  <div class="">
    <nav class="navbar navbar-expand-lg sidenav" id="mySidenav">
      
      <a href="javascript:void(0)" class="closebtn d-block d-lg-none" onclick="closeNav()">&times;</a>
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="">Turtle</a>
      <ul class="navbar-nav ml-auto ">
        <!-- creating nav menu items -->
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">Our Work</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">About Us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">Services</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">Our Skills</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link underline" style="float: right;">Contact Us</a>
        </li>
      </ul>
      <span style="font-size:30px;cursor:pointer; margin-top:530px;" class="float-right mr-5 nav_open" onclick="openNav()">&#9776;
    </span>
    </nav>
  </div>  

<!-- js code for the side menu toogle -->
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  
