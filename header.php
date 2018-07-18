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
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    

<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-theme.min.css" type="text/css">
<link href="./assets/css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/bootstrap/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
 <script src="assets/js/jquery.scrollTo.min.js" type="text/javascript"></script>
<script>
$(function() {  
    $("body").niceScroll();
});    
</script>

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
  .news {
color: #ecf1f5;
border: none;
font-family: 'Cairo', sans-serif;
}


#ticker1 li, #ticker2 li { 
list-style-type:none; 
float:left; 
padding-right:30px;
position:absolute;
left:0px;
}

#ticker1, #ticker2 { 
position:relative;
display:block;
width:4000px; 
margin:0; 
content=""; 
display:table;
height:0px; 

}

#news_ticker{
height:37px;
overflow:hidden;
background-color: inherit;
color: #f7f8f8 !important;
border: none;
font-family: 'Cairo', sans-serif;
}
@import "compass/css3";

/*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/

/* Global settings */
$color-border: #eee;
$color-label: #aaa;
$font-default: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
$font-bold: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';


/* Global "table" column settings */
.product-image { float: left; width: 20%; }
.product-details { float: left; width: 37%; }
.product-price { float: left; width: 12%; }
.product-quantity { float: left; width: 10%; }
.product-removal { float: left; width: 9%; }
.product-line-price { float: left; width: 12%; text-align: right; }


/* This is used as the traditional .clearfix class */
.group:before,
.group:after {
    content: '';
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}


/* Apply clearfix in a few places */
.shopping-cart, .column-labels, .product, .totals-item {
  @extend .group;
}


/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: 'POINT VALUE:';
}


/* Body/Header stuff */
body {
  padding: 0;
  font-family: $font-default;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: $color-label;
}

.shopping-cart {
  margin-top: -45px;
}


/* Column headers */
.column-labels {
  label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid $color-border;
  }
  
  .product-image, .product-details, .product-removal {
    text-indent: -9999px;
  }
}


/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid $color-border;
  
  .product-image {
    text-align: center;
    img {
      width: 100px;
    }
  }
  
  .product-details {
    .product-title {
      margin-right: 20px;
      font-family: $font-bold;
    }
    .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }
  }
  
  .product-quantity {
    input {
      width: 40px;
      
    }
  }
  
  .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: #a44;
  }
}


/* Totals section */
.totals {
  .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
    
    label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }
    
    .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }
  }
  
  .totals-item-total {
    font-family: $font-bold;
  }
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid $color-border;
  }
  
  .column-labels {
    display: none;
  }
  
  .product-image {
    float: right;
    width: auto;
    img {
      margin: 0 0 10px 10px;
    }
  }
  
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  
  .product-price {
    clear: both;
    width: 70px;
  }
  
  .product-quantity {
    width: 100px;
    input {
      margin-left: 20px;
    }
  }
  
  .product-quantity:before {
    content: 'x';
  }
  
  .product-removal {
    width: auto;
  }
  
  .product-line-price {
    float: right;
    width: 70px;
  }
  
}


/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  
  .product-removal {
    float: right;
  }
  
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  
  .totals {
    .totals-item {
      label {
        width: 60%;
      }
      
      .totals-value {
        width: 40%;
      }
    }
  }
}

input[type=text], select, textarea {
width: 50%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
color:black;
margin-top: 0px;
margin-bottom: 0px;
resize: vertical;
}

input[type=submit] {
background-color: #244272;
color: black;
padding: 10px 10px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: white;
}

.container {
border-radius: 5px;
background-color: inherit;
padding: 0px;

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
    width:auto;
    height:auto;
    margin-top:100px;
}
</style>
</head>
<div id="header"><link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<body style="background-color:#f3f3f3;">
    <div >
        <nav class="navbar navbar-inverse custom-header">
        <img src="assets/img/dccLogo.svg" id="mainLogo" style=""alt="Dot">
            <div class="container-fluid">
            
                <div class="navbar-header" style="margin-left:20px;"><a class="navbar-brand navbar-link" href="home.php"><strong>CodeCommunity</strong></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" style="width:25px;" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav links">
                                <li role="presentation"><a href="home.php">Home </a></li>
                                <li role="presentation"><a href="gamecategories.php">Project categories</a></li>
                                <li role="presentation"><a href="news&events.php">News and Events</a></li>
                                <li role="presentation"><a href="projectidea.php">suggest-projects</a></li>                      
                                <?php 
                                if(strlen($_SESSION['userlogin'])>0){?>
                                <li role="presentation"><a href="./shoppiggifts.php" class="custom-navbar"> My Projects <span class="badge">new</span></a></li>
                                <?php } ?>
                                <li role="presentation"><a href="about.php">About dCC</a></li>
                        </ul>    
                            <?php maindiv();?>
                </div>
            </div>
        </nav>
    </div>
</div>
    <button onclick="topFunction()" id="myBtn12" style="background-color: transparent; color: lightblue;" title="Go to top"><i class="fa fa-arrow-circle-o-up fa-3x"></i></button>
    <div id="wrapper">