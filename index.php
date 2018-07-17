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

<div class="col-sm text-left">  
<?php if ($msg <> "") { ?>
<div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
<button data-dismiss="alert" class="close" type="button">x</button>
<p><?php echo $msg; ?></p>
</div>
<?php } 
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
<!-- <a class="btn btn-link btn-block" style="color:rgb(10, 10, 9)" role="button" href="./gamecategories.php"><strong>More Games</strong></a> -->
</div>

</container>

<!-- <container>
<div class="jumbotron">
<h1 style="text-align:center;">ADDs</h1>
</div>
</container> -->




<container>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img src="./assets/img/a.jpg" alt="Chania">
<div class="carousel-caption">
<h1>offer slide</h1>
</div>
</div>

<div class="item">
<img src="./assets/img/b.jpg" alt="Chicago">
<div class="carousel-caption">

<h1>offer slide</h1>
</div>
</div>

<div class="item">
<img src="./assets/img/c.jpg" alt="New York">
<div class="carousel-caption">

<h1>offer slide</h1>
</div>
</div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>        
</container>

<!-- <container>
<div class="jumbotron">
<h1 style="text-align:center;">ADDs</h1>
</div>
</container>
<container>
<div class="jumbotron">
<h1 style="text-align:center;">ADDs</h1>
</div>
</container> -->
</div>

    <?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>
</html>