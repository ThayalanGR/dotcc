<?php

  session_start();
  require_once('dbconnection.php');

  //see for previous login and auto matically log in user
  include('checklogin2.php');
  check_login2();

  //register code
  include('register.php');
  //login code
  include('login.php');

  include('forgetpasswordcode.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>DotCodeCommunity</title>
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/landing.css">
</head>
<body>
<?php include('loginlogoutmodel.php'); ?>

<header class="header-wrapper container">
        <div class="video-bg">
            <video src="https://d2ezlykacdqcnj.cloudfront.net/programming-ide/programming-ide.mp4" autoplay="true" loop="true"></video>
        </div>
                            <?php if ($msg <> "") { ?>
                                <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
                                    <button data-dismiss="alert" class="close" type="button">x</button>
                                    <p><?php echo $msg; ?></p>
                                </div>
                            <?php } ?>
        <div class="video-overlay"></div>
        <div class="header-content">
            <div class="content-header">

                    <h1>D<img class="dot-logo" src="assets/img/dccLogo.png"></img>tCodeCommunity</h1>
            </div>
            <div class="content-body">
                    <p>
                            We at DCC are a team of passionate Coders, determined to build a technological edifice with the mixture of skills and knowledge. We are geared towards building solutions to problems unsolved and creating opportunities for people who have just started their journey in Coding!
                    </p>
            </div>
            <div class="content-body-button">
                <a onClick="modalOpen();" class="btn shadow btn-outline-primary pl-5 pr-5 mr-3 text-white"> Register</a>
                <a onClick="modalOpen();" class="btn shadow btn-outline-success pl-5 pr-5 text-white"> Login</a>
            </div>

            <div class="content-footer-right">
                <div class="footer-para-right">
                    <ul>
                        <li><a href="https://www.facebook.com/dotcodecommunity/" target="_blank"><i class="fab fa-facebook text-white" alt="facebook"></i></a></li>
                        <li><a href="https://github.com/dotcodecommunity" target="_blank"><i class="fab fa-github text-white" alt="Git"></i></a></li>
                        <li><a href="https://www.instagram.com/dotcodecommunity/" target="_blank"><i class="fab fa-instagram text-white" alt="Instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCpz3ZDxmYLnLAbt6ptf5W9Q" target="_blank"><i class="fab fa-youtube text-white" alt="Youtube"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="content-footer-left">
                <div class="footer-para-left" center>
                    Released under the MIT License Copyright © 2018-2020 Team Dcc
                </div>
            </div>


        </div>
    </header>
    
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        function modalOpen(){
            $('#myModal').modal();
        }

        function about() {
            window.scrollTo(0,document.body.scrollHeight);
        }
    </script>


</body>
</html>