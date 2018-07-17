<?php
  session_start();
  include('dbconnection.php');
  //checking login and redirecting to index page
  include('checklogin1.php');
  check_login1();
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
?>

<div class="col-sm-8 text-left">


<div class="shopping-cart">
    <div class="text-center">
        <br>
        <strong>
<h2>Shopping Gifts</h2></strong></div>

<?php include('./dbconnection.php');

$ret=mysqli_query($DB,"select * from gift ORDER BY gift_id desc");
							  while($row=mysqli_fetch_array($ret))
							  {?>
  <div class="product">
    <div class="product-image">
    <div class="featured_img col-md-4" >
<img class="img-responsive img-thumbnail" style="" src="./giftimage/<?php echo $row['image']; ?>">
</div>
    </div>
    <div class="product-details">
      <div class="product-title text-success text-capitalize text-center"><?php echo $row['giftname']; ?></div>
      <p class="product-description text-capitalize fa-file-text-o text-center"><?php echo $row['description']; ?></p>
    </div>
    <div class="product-price"><?php echo $row['pointvalue']; ?></div>

    <div class="product-removal">
      <button class="remove-product btn-primary">
                            Buy
      </button>
    </div>
  </div>
<div class="clearfix"></div>
<br>
  <?php } ?>
</div>



</div>
<?php 
    include('./rightpan.php');      
    include('./footer.php');
    ?>

        
</body>

</html>