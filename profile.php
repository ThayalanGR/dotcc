<?php
  session_start();
  include('dbconnection.php');
  //checking login and redirecting to index page
  include('checklogin1.php');
  check_login1();
  //register code
  include('register.php');
  //login code
  include('login.php');
  //deciding whether div in login or loggedin
  include('decidelogin.php');
  //including header
  include('header.php');
  //including login register popup module as modal
  include('loginlogoutmodel.php');
  //forget password code
  include('forgetpasswordcode.php');
  //including leftpan
  include('leftpan.php');
?>
<div class="col-sm-8 text-left">

<?php
include('./userprofile.php');
?>
</div>
<?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>

</html>