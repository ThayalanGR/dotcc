<?php
session_start();
include('dbconnection.php');
include("checklogin.php");
check_login();
if(isset($_GET['uid']))
{
    $uid = $_GET['uid'];
} 


if(isset($_GET['id']))
{
$id=$_GET['id'];
$msg=mysqli_query($con,"delete from credits where credits_id='$id'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- <title>DotCodeCommunity</title> -->
    <title>dCC | Manage Users</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
  <?php include('./header.php'); ?>
        <?php include('./sidebar.php'); ?>       
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> User History</h3>
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Credits Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th> Credits</th>
                                  <th> Reason</th>
                                  <th> Date & Time</th>
                              </tr>
                              </thead>
                              <tbody>
                               <!-- <td style="font-size:12px;"> -->
                               <?php $ret2=mysqli_query($con,"SELECT * FROM credits where userid='$uid' order by credits_id desc");
                                 $cnt=1;
                                while($row1=mysqli_fetch_array($ret2))
                                {  $cnt=1;?>
                                    <tr>
                                    <td style="font-size:12px;"><?php echo $cnt;?></td> 
                                    <td style="font-size:12px;"><?php echo $row1['credits'];?></t>
                                    <td style="font-size:12px;"><?php echo $row1['reason'];?></td>
                                    <td style="font-size:12px;"><?php echo $row1['date1'];?></td>
                                    <td style="font-size:12px;"><a href="view-history.php?id=<?php echo $row1['credits_id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a></td>
                                    </tr>
                                <?php $cnt=$cnt+1; }?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section>
      </section>
  </body>
</html>