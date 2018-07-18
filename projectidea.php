<?php
  session_start();
  include('dbconnection.php');
  //checking login and redirecting to index page
  //below 2 lines are hidden because public users can also view this page without restriction for user login
  //include('checklogin1.php');
  //check_login1();
  //register code
//   include('register.php');
  //login code
//   include('login.php');
  //deciding whether div in login or loggedin
  include('decidelogin.php');
  //including header
  include('header.php');
  //including login register popup module as modal
//   include('loginlogoutmodel.php');
  //forget password code
//   include('forgetpasswordcode.php');
  //including leftpan
//   include('leftpan.php');
include('comments.php');
?>
<div class="col text-center">

          <div class="colfooter-navigation" >
                    <h3 style="color:#244272;"><strong>Suggest Ideas / creative start up project ideas</strong></h3>
                    <?php if ($msg <> "") { ?>
                                <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <p><?php echo $msg; ?></p>
                                </div>
                    <?php } ?>
                    <?php 
                                if(strlen($_SESSION['userlogin'])>0){?>
                                   <form class="form-signin" action="" method="post" name="comment" enctype="multipart/form-data">
                    <input type="text" id="name" required="" name="subject" placeholder="Enter Subject..">
                    <textarea id="subject" name="content" required="" placeholder="Write something.." style="height:150px"></textarea><br>
                    <label for="attachment">Attachment:-</label>
                    <input type="file" id="attachment" class="btn-primary" name="attachment" style="margin-left:0px; display:inline-block;"><br>
                    
                    <input type="submit" class="btn btn-primary text-white" value="comment" name="comment">
                </form><br>
               <?php } else{ ?>

                <h4>Sorry You must Be Logged in to comment :-)</h4>

            <?php } ?>
            </div>

</div>
<?php 
    // include('./rightpan.php');      
    include('./footer.php');
    ?>
</body>

</html>