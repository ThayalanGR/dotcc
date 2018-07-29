<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>DotCodeCommunity</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">  
    <link href="./assets/css/site.css" rel="stylesheet" type="text/css" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <style>

        .modal-header{
            font-size:20px;

        }

        #header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            z-index: 10;
            background: #eeeeee;
            -webkit-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
            box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
        }



        #myBtn12 {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
        }
        #myBtn12:hover {
        background-color: #555;
        }
        #wrapper{
            width:100%;
            min-height:600px;
            margin-top:55px;

        }
    </style>
</head>
<body style="background-color:#f3f3f3; width:100%; overflow-x:hidden;">
    <button onclick="topFunction()" id="myBtn12" style="background-color: transparent; color: lightblue;" title="Go to top"><i class="fa fa-arrow-circle-o-up fa-3x"></i></button>
    <div id="header">
        <nav class="navbar navbar-inverse custom-header">
          <img src="assets/img/dccLogo.svg" id="mainLogo" style=""alt="Dot">
          <div class="container-fluid">      
              <div class="navbar-header" style="margin-right: -45px;"><a class="navbar-brand navbar-link" href="home.php"><strong style="padding-left:12px;">CodeCommunity</strong></a>
                  <button class="navbar-toggle collapsed" data-toggle="collapse" style="width:25px; border-color: #fff; padding: 5px 5px 5px 1px;" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span></span><span class="icon-bar"></span></button>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
                      <ul class="nav navbar-nav links">
                              <li role="presentation"><a href="home.php">Home </a></li>
                              <li role="presentation"><a href="courses.php">Courses</a></li>
                              <li role="presentation"><a href="news&events.php">News and Events</a></li>
                              <li role="presentation"><a href="projectidea.php">suggest-projects</a></li>                      
                              <?php 
                              if(strlen($_SESSION['userlogin'])>0){?>
                              <li role="presentation"><a href="./myprojects.php" class="custom-navbar"> My Projects <span class="badge">new</span></a></li>
                              <?php } ?>
                              <li role="presentation"><a href="about.php">About dCC</a></li>
                      </ul>    
                          <?php maindiv();?>
              </div>
          </div>
        </nav>
    </div>
