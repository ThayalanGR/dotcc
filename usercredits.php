<?php
  session_start();
  $_SESSION['choosecolor'] = 5;
  require_once('dbconnection.php');
//   include('./dbconnection.php');
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
<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="assets/css/form-credits.css">


<div id="wrapper">

    <ul id="profileul">
        <!-- <li><a href="home.php">Home</a></li> -->
        <li><a href="profile.php" class="<?php if($_SESSION['choosecolor'] == 1) {  echo "active";} ?>">My Profile</a></li>
        <li><a href="userupdate.php" class="<?php if($_SESSION['choosecolor'] == 2) {  echo "active";} ?>">Update Profile</a></li>
        <li><a href="userpasschange.php " class="<?php if($_SESSION['choosecolor'] == 3) {  echo "active";} ?>">Change Password</a></li>
        <li><a href="useractivity.php" class="<?php if($_SESSION['choosecolor'] == 4) {  echo "active";} ?>">My Activity</a></li>
        <li><a href="usercredits.php" class="<?php if($_SESSION['choosecolor'] == 5) {  echo "active";} ?>">Credits</a></li>
        <li><a href="userreputation.php" class="<?php if($_SESSION['choosecolor'] == 6) {  echo "active";} ?>">Reputation</a></li>
    </ul>
    <div class="main-content">
        <!-- Display the User Credits -->

        <div class="form-credits" >

            <div class="form-title-row">
                <label for="file-input">
                   <h1>My Credits</h1>
                </label>
            </div> 
            
            <section class="wrapper">
				<div class="row">
                    <div class="col-md-12 shadow hoverable">
                        <div class="row">
                            <div class="col">
                                Total Credits
                            </div>
                        </div>
                        <div class="row blue-text">
                            <div class="col" id="totalCredits">
                                
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><h6 style="color:blue;">Sno.</h6></th>
                                  <th><h6 style="color:blue;"> Credits</h6></th>
                                  <th><h6 style="color:blue;"> Reason</h6></th>
                                  <th><h6 style="color:blue;"> Date & Time</h6></th>
                              </tr>
                              </thead>
                              <tbody>
                               <!-- Fetching Credits  -->
                               <form name="form1" class="form-profile mt-0 pt-0 text-center" method="post" action="">
                               <?php
                               //selecting info about user and display in form
                            //    $ret = mysqli_query($DB,"select * from user where user_id='".$_SESSION['userid']."'");
                            //    $row=mysqli_fetch_array($ret);
                               $uid = $_SESSION['userid'];
                               $ret5=mysqli_query($DB,"SELECT * FROM credits where userid='$uid' order by credits_id desc");
                               $cnt=1;
                               $temp = 0;
                               while($row5=mysqli_fetch_array($ret5))
                                { $temp += $row5['credits'];  ?>
                                    <tr>
                                    <td style="font-size:12px;"><?php echo $cnt;?></td> 
                                    <td style="font-size:12px;"><?php echo $row5['credits'];?></td>
                                    <td style="font-size:12px;"><?php echo $row5['reason'];?></td>
                                    <td style="font-size:12px;"><?php echo $row5['date1'];?></>
                                    </tr>
                                <?php $cnt=$cnt+1; }
                                    echo "<script> const totalCredits = document.getElementById('totalCredits');
                                                    totalCredits.innerHTML = ".$temp."
                                        </script>";
                                ?>
                                </form>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
        </div>
    </div>
</form>
</div>

<?php include('./footer.php'); ?>

