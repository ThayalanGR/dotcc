<?php
  session_start();
  require_once('dbconnection.php');
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
  //code for comments
  include('comments.php');
?>

<div class="col-sm-8 text-left">  
<?php if ($msg <> "") { ?>
<div class="alert alert-dismissable alert-<?php echo $msgType; ?>">/div>
<button data-dismiss="alert" class="close" type="button">x</button>
<p><?php echo $msg; ?></p><
<?php } 
?>

<div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="http://localhost/testt<?php echo $_GET['id']; ?>"></iframe>
</div>


</div>

    <?php 
    include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>
</html>