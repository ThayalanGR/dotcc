<?php
  session_start();
  require_once('dbconnection.php');
  //register code
  include('register.php');
  //login code
  include('login.php');
  //deciding whether div in login or loggedin
//   include('decidelogin.php');
  //including header
//   include('header.php');
  //including login register popup module as modal
  
  //forget password code
  include('forgetpasswordcode.php');
  //including leftpan
//   include('leftpan.php');
  //code for comments
//   include('comments.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>DotCodeCommunity</title>

     <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie"> -->
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/Pretty-Header.css"> -->
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <!-- <link rel="stylesheet" href="assets/css/Pretty-Footer.css"> -->
    <!-- <link rel="stylesheet" href="assets/fonts/font-awesome.min.css"> -->
    

    <!-- <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-theme.min.css" type="text/css"> -->
    <!-- <link href="./assets/css/site.css" rel="stylesheet" type="text/css" /> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/landing.css">
    
</head>
<body>

    <div id="fullpage">
        <div class="section">
        <div class="text-center" style="display:hidden;">  
                    <?php if ($msg <> "") { ?>
                        <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
                        <button data-dismiss="alert" class="close" type="button">x</button>
                        <p><?php echo $msg; ?></p>
                    </div>
                    <?php } 
                    ?>
                    </div>
            <div class="container1">
                <div class="logoContainer">
                    <img class="mainLogo" src="assets/img/dccLogo.svg" alt="Dot">
                    <h1 class="headLogo">CODE COMMUNITY</h1>
                    <p>Saranathan College of Engineering</p>
                </div>
                <ul class="mainMenu">
                
                    <li><a href="#" onClick="modalOpen();" class="btn shadow-lg btn-light text-primary" style="font-size:14px;"><i class="fas fa-dollar-sign fa-1x" style="font-size:14px;"></i> Register</a></li>
                    <li><a href="#" onClick="modalOpen();" class="btn shadow-lg btn-light text-primary" style="font-size:14px;"><i class="fas fa-dollar-sign fa-1x" style="font-size:14px;"></i> Login</a></li>
                    <li><a href="#" class="btn shadow-lg btn-light text-primary" style="font-size:14px;"><i class="fas fa-dollar-sign fa-1x" style="font-size:14px;"></i> About</a></li>
                </ul>
 
                <div class="container1Content">
                    
          
                    <h1 class="one"> STEP UP YOUR CODING GAME </h1>
                    <p class="two">
                        The new way to improve your programming Skills <br>   
                        while having fun and getting noticed              
                    </p>
                    <button class="buttonOne "  onClick="modalOpen();">GET-STARTED</button>
                    <button class="buttonTwo"  onClick="modalOpen();">LOGIN</button>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container2">
                <h1 class="containerHeading">We're smarter together</h1>
                <ul class="containercontent">
                    <li>
                        <h2>Belong</h2>
                        <article>
                            We're developers just like you.<br>
                            Join the community and feel at home.
                        </article>
                    </li>
                    <li>
                        <h2>Get insights</h2>
                        <article>
                            Meet like-minded enthusiasts, ask for help and have<br>
                            your code reviewed. We're here for each other.
                        </article>
                    </li>
                    <li>
                        <h2>Be inspired</h2>
                        <article>
                            Compare solutions and learn tips from the best programmers.
                        </article>
                    </li>
                </ul>
                <button class="joinButton"  onClick="modalOpen();">JOIN THE COMMUNITY</button>
            </div>
        </div>
        <div class="section">
            <div class="container3">
                <div class="block1"> 
                    <img class="mainLogo" src="assets/img/Group 1.png" alt="Dot">
                    <h1 class="headLogo">CODE COMMUNITY</h1>
                    <p>Saranathan College of Engineering</p>
                    <blockquote>© 2018 dotCodeCommunity</blockquote>
                </div>
                <div class="block3">
                    <h5>Dot Code Community</h5>
                    <ul>
                        <li><a href="http://"><i class="fab fa-facebook fa-2x" alt="facebook"></i></a></li>
                        <li><a href="http://"><i class="fab fa-github fa-2x" alt="Git"></i></a></li>
                        <li><a href="http://"><i class="fab fa-instagram fa-2x" alt="Instagram"></i></a></li>
                        <li><a href="http://"><i class="fab fa-youtube fa-2x" alt="Youtube"></i></a></li>
                    </ul>
                </div>
                <div class="block2">
                    <h5>About</h5>
                    <ul>
                        <li><a href="#">About dCC</a></li>
                        <li><a href="#">Support Us</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>
                </div>
                <div class="block4">
                    <h5>Developed by :-</h5>
                    <p>
                        Thayalan G R <br>
                        (C.S.E Dept - SCE)
                    </p>
                    <ul>
                        <li><a href="http://"><i class="fab fa-facebook" alt="facebook"></i></a></li>
                        <li><a href="http://"><i class="fab fa-github" alt="Git"></i></a></li>
                        <li><a href="http://"><i class="fab fa-instagram" alt="Instagram"></i></a></li>
                        <li><a href="http://"><i class="fab fa-youtube" alt="Youtube"></i></a></li>
                    </ul>
                    <p>
                        Thayalan G R <br>
                        (C.S.E Dept - SCE)
                    </p>
                    <ul>
                        <li><a href="http://"><i class="fab fa-facebook" alt="facebook"></i></a></li>
                        <li><a href="http://"><i class="fab fa-github" alt="Git"></i></a></li>
                        <li><a href="http://"><i class="fab fa-instagram" alt="Instagram"></i></a></li>
                        <li><a href="http://"><i class="fab fa-youtube" alt="Youtube"></i></a></li>
                    </ul>
                    <p>
                        Thayalan G R <br>
                        (C.S.E Dept - SCE)
                    </p>
                    <ul>
                        <li><a href="http://"><i class="fab fa-facebook" alt="facebook"></i></a></li>
                        <li><a href="http://"><i class="fab fa-github" alt="Git"></i></a></li>
                        <li><a href="http://"><i class="fab fa-instagram" alt="Instagram"></i></a></li>
                        <li><a href="http://"><i class="fab fa-youtube" alt="Youtube"></i></a></li>
                    </ul>
                    <p>
                        Thayalan G R <br>
                        (C.S.E Dept - SCE)
                    </p>
                    <ul>
                        <li><a href="http://"><i class="fab fa-facebook" alt="facebook"></i></a></li>
                        <li><a href="http://"><i class="fab fa-github" alt="Git"></i></a></li>
                        <li><a href="http://"><i class="fab fa-instagram" alt="Instagram"></i></a></li>
                        <li><a href="http://"><i class="fab fa-youtube" alt="Youtube"></i></a></li>
                    </ul>
                    

                </div>
                <div class="block5">
                    <blockquote>
                        Released under the MIT License<br>
                        Copyright © 2018-2020 ThayalanGR
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <?php include('loginlogoutmodel.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/vendors/easings.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/vendors/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.min.js"></script>
    <script>
        new fullpage('#fullpage', {
            //options here
            autoScrolling:true,
            scrollHorizontally: true
        });
        //methods
        // fullpage_api.setAllowScrolling(false);
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script>
        function modalOpen(){
            $('#myModal').modal();
        }
    </script>
</body>
</html>