<?php
  session_start();
  include('dbconnection.php');
  //checking login and redirecting to index page
  //below 2 lines are hidden because public users can also view this page without restriction for user login
  include('checklogin1.php');
  check_login1();
  //register code
  // include('register.php');
  //login code
  // include('login.php');
  //deciding whether div in login or loggedin
  include('decidelogin.php');
  //including header
  include('header.php');
  //including login register popup module as modal
  // include('loginlogoutmodel.php');
  //forget password code
  // include('forgetpasswordcode.php');
  //including leftpan
  // include('leftpan.php');
  if($_GET['videoId'] != "") {
      $videoId = $_GET['videoId'];
  }
?>
<div id="wrapper" class=" mt-0 pt-5">
  <div class="container-fluid pt-1">
    <div class="row">
      <div class="col-md-12 offset-md-0 col-sm-12 offset-sm-0">
            <div class="col-md-9 col-sm-12" >
                <div class="pl-2"><a href="https://www.youtube.com/channel/UCpz3ZDxmYLnLAbt6ptf5W9Q" target="_blank"><i class="fab fa-youtube red-text" alt="Youtube"></i>&nbsp;<span class="black-text">DotCodeComunity</span></a> </div>
                <div class="embed-responsive embed-responsive-16by9 shadow-lg rounded" id="loadPlayer"></div>
                <div class="h3-responsive pt-2 pl-1 blue-text" > <b id="loadTitle"></b></div>
                <p class="pt-2 pl-4 pr-5 " id="loadDesc"></p>
            </div>
      </div>
    </div>  
  </div>
</div>


<script src="assets/js/loadvideo.js" type="text/javascript"></script>
<?php include('footer.php'); ?>

