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
<div class="col-sm-8 text-center">
<div class="text-center"><h4><strong>NEWS AND EVENTS</strong><h4></div>
<?php include('./dbconnection.php');

$ret=mysqli_query($DB,"select * from news ORDER BY news_id desc");
							  while($row=mysqli_fetch_array($ret))
							  {?>
<div class="panel-body" style="
background: inherit;
filter:alpha(opacity=80); /* IE */
-moz-opacity:0.9; /* Mozilla */
opacity: 0.9;
width:100%; ">

<div class="panel-heading text-left text-capitalize">
<h3 class="text-left">
<?php echo $row['title']; ?>
</h3></div>
<?php if($row['videofilepath']){ ?>
  <video class="img-rounded" width="400" controls>
    <source src="./newsandevents/newsvideos/<?php echo $row['videofilepath']; ?>" type="video/mp4">
    <source src="mov_bbb.ogg" type="video/ogg">
  </video>
<?php } ?>
<?php if($row['imagefilepath']){ ?>
<div class="featured_img col-md-4" >
<img class="img-responsive img-rounded" style="width:300px; height:auto;" src="./newsandevents/newsimages/<?php echo $row['imagefilepath']; ?>">
</div>
<?php } ?>
<div style="" class="col-md-4 text-justify">
<?php echo $row['content']; ?>
</div>
</div>
<br>
<?php } ?>
</div>
<?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>

</html>