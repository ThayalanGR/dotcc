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

?>


<container>  


<div class="panel-heading btn btn-link"
style="text-align:center;
color:rgb(53, 97, 156);
display:block;
font-weight:bold;text-align:center; 
font-size: 40px;"><h1>News&Events</h1></div>
<div id="news_ticker">
<div id ="ticker1" >
<?php include('./dbconnection.php');
$ret=mysqli_query($DB,"select * from news ORDER BY news_id desc limit 10");
							  while($row=mysqli_fetch_array($ret))
							  {?>
<li><a href="./news&events.php"><?php echo $row['content']; ?></a></li>
<?php }?>
          </div>
                </div>
</container>



<container  style="text-align:center;
color:rgb(53, 97, 156);
display:block;
background-color:transparent;">  
<div class="panel-heading btn btn-link"><h1>Top Projects</h1></div><br>
<div class="panel-body">
  
<?php include('./dbconnection.php');
$ret=mysqli_query($DB,"select * from games ORDER BY game_id desc limit 6");
							  while($row=mysqli_fetch_array($ret))
							  {?>
<div class="col-md-2">
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

</container>

</div>

    <?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>
</html>