<?php include'header.php'?>
<!-- css code for the side nav bar -->
<style>
  /* body part of the side nav bar */
.sidenav {
  height: 65%;
  width: 30%;
  position: fixed;
  top: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 70px;
  
}

/* css code for the links */
.sidenav a {
  text-decoration: none;
  font-size: 14px;
  
}

/* css for the close button of the nav bar */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.side-nav {
  color: white; 
}

/* styleing the side menu */
.sideNav {
  margin-top: 200px;
  right:0; 
}
</style>
<!-- creating the side nav menu -->

<body>
  <div class="d-block d-lg-none sticky-top side-nav">
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
     
    </div>
    
      <span style="font-size:30px;cursor:pointer; margin-top:530px;" class="float-right mr-5" onclick="openNav()">&#9776; </span>
    
    

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
  </div>