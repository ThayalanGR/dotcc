<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>DotCodeCommunity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">  
    <link href="./assets/css/site.css" rel="stylesheet" type="text/css" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/jquery.min.js"></script> -->
    <!-- <script src="./assets/bootstrap/js/bootstrap.min.js"></script> -->

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
        <nav class="navbar custom-header navbar-expand-md shadow-lg">
                
                <a class="navbar-brand navbar-link" href="home.php"><img src="assets/img/dccLogo.svg" id="mainLogo" alt="Dot"><strong style="padding-left:12px;">CodeCommunity</strong></a>
                    <button
                class="navbar-toggler collapsed" data-toggle="collapse" style="width:25px; border-color: #fff; padding: 5px 5px 5px 1px;"
                data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span>&#x2630;</button>
                <div class="collapse navbar-collapse"
                id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation" class="nav-item"><a href="home.php" class="nav-link">Home </a>
                    </li>
                    <li role="presentation" class="nav-item"><a href="courses.php" class="nav-link">Courses</a>
                    </li>
                    <li role="presentation" class="nav-item"><a href="news&amp;events.php" class="nav-link">News and Events</a>
                    </li>
                    <li role="presentation" class="nav-item"><a href="projectidea.php" class="nav-link">suggest-projects</a>
                    </li>
                    <?php if(strlen($_SESSION[ 'userlogin'])>0){?>
                    <li role="presentation" class="nav-item"><a href="./myprojects.php" class="custom-navbar nav-link"> My Projects <span class="badge">new</span></a>
                    </li>
                    <?php } ?>
                    <!-- <li role="presentation" class="nav-item"><a href="about.php" class="nav-link">About dCC</a>
                    </li> -->
                </ul>
                <?php maindiv();?>
            </div>
        </nav>
    </div>
