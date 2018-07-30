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
?>
<div id="wrapper">
<!-- all main contents over here -->
<div class="container-fluid pt-4">
  <div class="row">
    <div class="col-md-8 col-sm-12 col-md-offset-2 text-center">
      <h2 class="" style="color:#039be5;">Courses</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-sm-12 col-md-offset-2">
      <div class="row">
        <!-- <div class="col-3 shadow">

        </div> -->
      </div>
    </div>
</div>
</div>

</div>

<?php include('./footer.php'); ?>
