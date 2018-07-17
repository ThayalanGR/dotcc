<?php
  session_start();
  include('dbconnection.php');
  //checking login and redirecting to index page
  //below 2 lines are hidden because public users can also view this page without restriction for user login
  //include('checklogin1.php');
  //check_login1();
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
<div class="panel-heading btn btn-link"><h1>Top Projects</h1></div><br>
<div class="panel-body">
  
<?php include('./dbconnection.php');
$ret=mysqli_query($DB,"select * from games ORDER BY game_id desc");
							  while($row=mysqli_fetch_array($ret))
							  {?>
<div class="col-md-4">
<div class="img-rounded img-responsive">
<a href="./playgames.php?id=<?php echo $row['ftppath']; ?>">
<img class="img-responsive img-circle" src="./games/images/<?php echo $row['image']; ?>" alt="Fjords" style="width:100%">
<div class="caption">
<p><?php echo $row['gamename'] ?></p>
</div>
</a>
</div>
</div>
<?php } ?>
</div>

</div>
<?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>

</html>