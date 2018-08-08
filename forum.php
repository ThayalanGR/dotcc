<?php
  session_start();
  require_once('dbconnection.php');

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
  //code for comments
  // include('comments.php');


  //firstblock from forum module
  include('forummodule.php');
?>

<div id="wrapper" style="margin-top:45px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col " >
                <?php include('forumlayout.php'); ?>
            </div>  
        </div>
    </div>
</div>

<?php include('footer.php') ?>
