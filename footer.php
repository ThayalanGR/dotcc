
</div>
<footer class="container-fluid text-center" style="margin-bottom:0px;"> 
    <div class="row">
        <div class="col-md-4 col-sm-6 footer-navigation" style="display:grid;">
            <h3><a href="#"><span><img src="assets/img/dccLogo.svg" alt="Dot" style="width:40px; margin-top:-15px; margin-right:5px;">CodeCommunity </span></a></h3>
            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
            <p class="company-name">dotcodecommunity© 2018</p>
        </div>
        <div class="col-md-4 col-sm-6 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p style="font-weight:normal; font-size:12px;"><span class="new-line-span">Saranathan College of Engineering</span> Computer Science Department</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"></p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank">dotcodecommunity@gmail.com</a></p>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 footer-about">
            <h4>About </h4>
            <p style="font-size:20px;"><img src="assets/img/dccLogo.svg" alt="Dot" style="width:25px; margin-top:-5px; margin-right:5px; ">CodeCommunity </p>
            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
        </div>
    </div>
</footer>
                     
<!--all java scripts are downgraded here -->
<script>
$(document).ready(function(){
$("#myBtn").click(function(){
$("#myModal").modal();
});
});
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
document.getElementById("myBtn12").style.display = "block";
} else {
document.getElementById("myBtn12").style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>

<script type="text/javascript">
$(function () {
$(".demo1").bootstrapNews({
newsPerPage: 3,
autoplay: true,
pauseOnHover:true,
direction: 'up',
newsTickerInterval: 2000,
onToDo: function () {
//console.log(this);
}
});
});
</script>

<script type="text/javascript">
$('#ticker2').html($('#ticker1').html());

var temp=0,intervalId=0;
$('#ticker1 li').each(function(){
var offset=$(this).offset();
var offsetLeft=offset.left;
$(this).css({'left':offsetLeft+temp});
temp=$(this).width()+temp+10;
});
$('#ticker1').css({'width':temp+40, 'margin-left':'20px'});
temp=0;


$('#ticker2 li').each(function(){
var offset=$(this).offset();
var offsetLeft=offset.left;
$(this).css({'left':offsetLeft+temp});
temp=$(this).width()+temp+10;
});
$('#ticker2').css({'width':temp+40,'margin-left':temp+40});


function abc(a,b) {  

var marginLefta=(parseInt($("#"+a).css('marginLeft')));
var marginLeftb=(parseInt($("#"+b).css('marginLeft')));
if((-marginLefta<=$("#"+a).width())&&(-marginLefta<=$("#"+a).width())){
$("#"+a).css({'margin-left':(marginLefta-1)+'px'});
} else {
$("#"+a).css({'margin-left':temp});
}
if((-marginLeftb<=$("#"+b).width())){
$("#"+b).css({'margin-left':(marginLeftb-1)+'px'});
} else {
$("#"+b).css({'margin-left':temp});
}
} 

function start() { intervalId = window.setInterval(function() { abc('ticker1','ticker2'); }, 10) }

$(function(){
$('#news_ticker').mouseenter(function() { window.clearInterval(intervalId); });
$('#news_ticker').mouseleave(function() { start(); })
start();
});


</script>

<script type="text/javascript">


function validateForm1(){
var your_email = $.trim($("#email").val());
if (!isValidEmail(your_email)) {
alert("Enter valid email.");
$("#email").focus();
return false;
}
}
function validateForm() {
var your_name = $.trim($("#uname").val());
//var your_email = $.trim($("#email").val());
var pass1 = $.trim($("#pass1").val());
var pass2 = $.trim($("#pass2").val());
// validate name
if (your_name == "") {
alert("Enter your name.");
$("#uname").focus();
return false;
} else if (your_name.length < 3) {
alert("Name must be atleast 3 character.");
$("#uname").focus();
return false;
}

// validate email
if (!isValidEmail(your_email)) {
alert("Enter valid email.");
$("#email").focus();
return false;
}

// validate subject
if (pass1 == "") {
alert("Enter password");
$("#pass1").focus();
return false;
} else if (pass1.length < 6) {
alert("Password must be atleast 6 character.");
$("#pass1").focus();
return false;
}

if (pass1 != pass2) {
alert("Password does not matched.");
$("#pass2").focus();
return false;
}

return true;
}

function isValidEmail(email) {
var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email);
}

$(function() {  
    $("body").niceScroll();
});
</script>
 <script src="assets/js/jquery.nicescroll.js"></script>
 <script src="assets/js/jquery.scrollTo.min.js" type="text/javascript"></script>

