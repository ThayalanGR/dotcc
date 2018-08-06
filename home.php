<?php
  session_start();
  require_once('dbconnection.php');

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


  //firstblock from forum module

  require 'date.php';
  $_SESSION['r_count'];
  $_SESSION['my_count'];
  // $_SESSION['batch_no'] = 191000;
  $session_batch_no = $_SESSION['batch_no'];
  
  if(isset($_POST['submitForm'])){
      $tags = mysqli_real_escape_string($DB, $_POST['group1']);
      $question = mysqli_real_escape_string($DB, $_POST['question']);
      if($question != "")
      {
      $sql = "INSERT INTO tbl_forum_question (batch_no, question, tags) VALUES ('$session_batch_no', '$question', '$tags')";
      if ($DB->query($sql) === TRUE) {
          echo '<script>window.location.href="index.php"</script>';
      }
  }
  }

  //secondblock from forum moduke
  if(isset($_POST['answerForm'])){
    $answer = mysqli_real_escape_string($DB, $_POST['answer_post']);
    $ques_id = $_POST['quid'];
    if($answer != ""){
        $sql = "INSERT INTO tbl_forum_answer (batch_no, question_id, answer) VALUES ('$session_batch_no', '$ques_id', '$answer')";
        if ($DB->query($sql) === TRUE) {
            echo '<script>window.location.href="index.php"</script>';
        }
    }
}
?>
<style>
  #paneluserimage {
    width:200px;
  }

  @media screen and (max-width:500px) {
    #paneluserimage {
      width:100px;
    }
    .panelusertext {
      font-size: 10px;

    }
  }
  
</style>
<div id="wrapper" style="margin-top:45px;">
<!-- all main contents over here -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="row justify-content-center mb-2 rounded" style="border-radius:40px;">
          <div class="col "  width="100%" >
            <div class="view zoom shadow "  width="100%">
                <img src="assets/img/panel1img.jpg" width="100%" style="border-radius:40px;" class="img-fluid shadow-lg rounded" alt="bgimage">
                <div class="mask rgba-blue-slight text-center pt-5" >
                  <div class="container-fluid ">
                      <div class="row  ">
                        <div class="col">
                        <img src="upload/img/<?php if($_SESSION['uimage'] != "") { echo $_SESSION['uimage']; } else { echo "avatar_2x.png"; }  ?>"   class="img-fluid shadow-lg rounded-circle mx-auto" id="paneluserimage" alt="Responsive image">
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col">
                            <h3 class="animated bounceInDown h3-responsive pt-3 white-text panelusertext"><strong>Hello <span class="yellow-text"><?php echo $_SESSION['name']; ?></span> !</strong></h3>                     
                            <h3 class="text-center h3-responsive pt-3 white-text panelusertext animated fadeInUpBig "><strong> Welcome to DotCodeCommunity! </strong></h3>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col">
              <div class="card mb-3 hoverable view zoom">
                  <img class="card-img-top" src="assets/img/panel2img.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title yellow-text h3-responsive">DotCodeCommunity</h5>
                    <p class="card-text">We at DCC are a team of passionate Coders, determined to build a technological edifice with the mixture of skills and knowledge. We are geared towards building solutions to problems unsolved and creating opportunities for people who have just started their journey in Coding!</p>
                    <p class="card-text"><small class="text-muted">Last updated today</small></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                  <div class="card view zoom hoverable">
                    <img class="card-img-top" src="assets/img/android.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title yellow-text h4-responsive ">Android Development</h5>
                      <!-- <p class="card-text h5-responsive">Sit on your saddle...Ride on Gradle.</p>     -->
                      <blockquote class="blockquote text-left">
                          <p class="mb-0">Sit on your saddle...<br>Ride on Gradle.</p>
                          <!-- <footer class="blockquote-footer bg-white"><cite title="Source Title">Linus Torvalds</cite></footer> -->
                        </blockquote>            
                      <div class="card-text text-center">
                        <a href="android.php" class="btn btn-warning shadow-lg rounded" center style="border-radius:30px;">view courses</a>
                      </div>
                      
                    </div>
                  </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">

                  <div class="card view zoom hoverable">
                    <img class="card-img-top" src="assets/img/webdev.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title red-text">Web Development</h5>
                     
                      <p class="card-text">
                        <blockquote class="blockquote text-right">
                          <p class="mb-0">Talk is Cheap <br> Show me the Code</p>
                          <footer class="blockquote-footer bg-white"><cite title="Source Title">Linus Torvalds</cite></footer>
                        </blockquote>
                      </p>
                      <div class="card-text text-center">
                        <a href="web.php" class="btn btn-info shadow-lg rounded " center style="border-radius:50px;">view courses</a>
                      </div>
                      
                    </div>
                  </div>
 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                  <div class="card view zoom hoverable">
                    <img class="card-img-top" src="assets/img/upcoming.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title blue-text">Upcoming Courses</h5>
                      <p class="card-text">
                        <style>
                          #ulli > li {
                            padding-bottom: 5px;
                            font-size:15px;
                          }
                        </style>
                       
                      </p>
                      <blockquote class="blockquote text-left">
                        <ul style="list-style:none;" id="ulli" >
                            <li><i class="fab fa-python text-warning"></i> &nbsp;Python Development</li>
                            <li><i class="fas fa-user-secret blue-text"></i> &nbsp;Ethical Hacking</li>
                            <li><i class="fas fa-robot red-text"></i> &nbsp;Machine Learning</li>
                            <li><i class="fas fa-headset text-success"></i>&nbsp;ChatBot with Ruby</li>                          
                          </ul>
                        <footer class="blockquote-footer bg-white text-center"><cite title="Source Title">Stay Update</cite></footer>
                      </blockquote>  
                      <!-- <p class="card-text text-center"><small class="text-muted">***Stay Update***</small></p> -->
                    </div>
                  </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5 view zoom " >
          <div class="container">
            <div class="row" style="z-index:10; position:relative;">
              <div class="col text-center">
                <h4 class="h4-responsive">DotCC for teams</h4>
                <h3 class="h3-responsive "><b>A better way to work together</b></h3>
                <h5 class="h5-responsive">DotCodeCommunity brings teams together <br> to work through problems, move ideas forward, and learn from each other along the way.</h5>
              </div>
            </div>
            <div class="row" style="z-index:-1; position:relative;">
              <div class="col">
                <img src="assets/img/collabrative.svg" width="100%" class="img-fluid" alt="bgimage">   
              </div>
            </div>
            <div class="row" style="z-index: 5; position:relative;">
              <div class="col">
                <blockquote class="blockquote text-center">
                  <p class="mb-0">Alone we can do so little; together we can do so much.</p>
                  <footer class="blockquote-footer text-center" style="background-color:transparent;"><cite title="Source Title">Helen Keller</cite></footer>
                </blockquote>
              </div>
            </div>
            <div class="row" style="z-index: 5; position:relative;">
              <div class="col">
                <blockquote class="blockquote text-center">
                  <p class="mb-0">Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results.</p>
                  <footer class="blockquote-footer text-center" style="background-color:transparent;"><cite title="Source Title">Andrew Carnegie</cite></footer>
                </blockquote>
              </div>
            </div>
            <div class="row" style="z-index: 5; position:relative;">
              <div class="col">
                <blockquote class="blockquote text-center">
                  <p class="mb-0">Great things in business are never done by one person; they're done by a team of people.</p>
                  <footer class="blockquote-footer text-center" style="background-color:transparent;"><cite title="Source Title">Steve Jobs </cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row justify-content-center" style="z-index: -1; position:relative; ">
            <div class="col ">
          
            </div>
        </div>  -->
      </div>
      <div class="col-md-6 col-sm-0 mt-0 pt-0" id="stackforum"  >
        <!-- stackforum contents over here -->
        <div class="container-fluid"  >
            <div class="row">
                <div class="col">
                    <div class="row">
                        <button class="tablink col black-text shadow rounded btn-sm btn" onclick="openTab('recentQA', this, '#039be5')" id="defaultOpen"><b> Recent Questions</b> &nbsp;
                            <span class="badge badge-danger rounded-circle p-1"  style="font-size:10px;">
                                <?php echo $_SESSION['r_count'];?>
                            </span>
                        </button>
                        <button class="tablink col shadow black-text rounded btn-sm btn" onclick="openTab('myQA', this, '#039be5')"><b>My Questions</b> &nbsp;
                            <span class="badge badge-danger rounded-circle p-1"  style="font-size:10px;" >
                                <?php echo $_SESSION['my_count'];?>
                            </span>
                        </button>
                        <button type="button col" class="btn btn-sm rounded  btn-success" data-toggle="modal" data-target="#modalQuestion">
                            <i class="fa fa-plus"></i> Ask Question</button>
                    </div>
                    <div class="row ">
                        <div id="recentQA" class="tabcontent">
                            <div class="container-fluid">
                                
                                <?php
                                    $sql = "SELECT * FROM tbl_forum_question ORDER BY question_id DESC";
                                    $result = $DB->query($sql);
                                    $_SESSION['r_count'] = $result->num_rows;
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $qid = $row['question_id'];
                                        $batch_no = $row['batch_no'];
                                        $usr_sql = "SELECT * FROM user WHERE batch_no = $batch_no ";
                                        $usr_result = $DB->query($usr_sql);
                                        if ($usr_result->num_rows > 0) {
                                            // output data of each row
                                            $usr_row = $usr_result->fetch_assoc();
                                            $usr_name = $usr_row['name'];
                                        }
                                ?>

                                <div class="row">
                                    <div class="col-2">
                                        <div class="small ">
                                            <b style="font-size:12px;">
                                                <?php echo $usr_row['name'];
                                                      // echo "ThayalanGR";
                                                ?>
                                            </b>
                                        </div>
                                        <div class="small" style="font-size:10px;">
                                            <?php timeCalc($row['timestamp']);?>
                                        </div>
                                        <div>
                                          <?php if($row['tags'] == "Web") {
                                             echo '<i class="fab fa-html5 shadow text-danger "></i> ';
                                            }else {
                                              echo '<i class="fab fa-android shadow text-primary fa-1x "></i>';
                                            }
                                          
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-8" data-toggle="collapse" data-target="#ques<?php echo $row['question_id'];?>">
                                        <div class="row" style="font-size:15px; font-weight:400;">
                                            <?php echo $row['question'];?>
                                        </div>
                                    </div>
                                    <?php
                                        $sql1 = "SELECT * FROM tbl_forum_answer WHERE question_id = $qid ";
                                        $result1 = $DB->query($sql1);
                                        $count = $result1->num_rows; 
                                    ?>
                                    <div class="col-2" data-toggle="collapse" data-target="#ques<?php echo $row['question_id'];?>">
                                      <div class="row">
                                        <div class="col text-center p-1">

                                          <a class="blue-text"  style="font-size:12px;"><span class="black-text bg-light p-1"><?php echo $count ;?></span> <br>answers</a>  
                                          
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>


                                <div id="ques<?php echo $row['question_id'];?>" class="collapse" style="background-color: #fff; padding: 10px;">
                                    <?php  if ($result1->num_rows > 0) {
                                        while($row1 = $result1->fetch_assoc()) {
                                            $batch_no = $row1['batch_no'];
                                            $usr_sql1 = "SELECT * FROM user WHERE batch_no = $batch_no ";
                                            $usr_result1 = $DB->query($usr_sql1);
                                            if ($usr_result1->num_rows > 0) {
                                                // output data of each row
                                                $usr_row1 = $usr_result1->fetch_assoc();
                                                $usr_name = $usr_row1['name'];
                                            }
                                    ?>
                                    <div class="row p-2">
                                        <div class="col-2">
                                            <div class="small" style="font-size:12px;">
                                                <b>
                                                    <?php echo $usr_name;?>
                                                </b>
                                            </div>
                                            <div class="small" style="font-size:10px;">
                                                <?php timeCalc($row1['timestamp']);?>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="row" style="font-size:15px; font-weight:300;">
                                                <?php echo $row1['answer'];?>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <?php }
                                        } else {
                                            echo '<div class="row"><div class="col-5 offset-3 p-2 text-center text-danger " style="background-color: #ffff;">No answers yet !!!</div></div>'; 
                                        }
                                        $quid = $row['question_id'];
                                    ?>
                                    <form id="answerForm" action="" role="form" method="post">
                                        <div class="row pt-2 form-group shadow-textarea">
                                            <div class="col-8 offset-1">
                                                <textarea class="form-control" name="answer_post" id="answerFormControlTextarea" rows="5" placeholder="Share your solution"
                                                    style="width:100%; background-color: #f3f3f3;"></textarea>
                                            </div>
                                            <input type="text" name="quid" value="<?php echo $quid; ?>" style="display: none;">
                                            <div class="col-2">
                                                <button type="submit" name="answerForm" id="answerForm" class="btn btn-sm btn-primary" value="Post">
                                                    <i class="fa fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php }
                                    } else {
                                        echo '<div class="row"><div class="col-5 offset-3 p-2 card text-center text-danger border-dark" style="background-color: #455A64;">No questions yet !!!</div></div>';  
                                    }
                                ?>
                            </div>
                        </div>
                        <div id="myQA" class="tabcontent">
                            <div class="container-fluid">
                                <?php
                                    $sql = "SELECT * FROM tbl_forum_question WHERE batch_no = $session_batch_no ORDER BY question_id DESC";
                                    $result = $DB->query($sql);
                                    $_SESSION['my_count'] = $result->num_rows;
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $qid = $row['question_id'];
                                            $batch_no = $row['batch_no'];
                                                $usr_sql = "SELECT * FROM user WHERE batch_no = $batch_no ";
                                                $usr_result = $DB->query($usr_sql);
                                                if ($usr_result->num_rows > 0) {
                                                    // output data of each row
                                                    $usr_row = $usr_result->fetch_assoc();
                                                    $usr_name = $usr_row['name'];
                                                }
                                ?>
                                <div class="row p-2">
                                    <div class="col-2">
                                        <div class="small" style="font-size:12px;">
                                            <b>
                                                <?php echo $usr_name ;?>
                                            </b>
                                        </div>
                                        <div class="small" style="font-size:10px;">
                                            <?php timeCalc($row['timestamp']);?>
                                        </div>
                                        <div>
                                          <?php if($row['tags'] == "Web") {
                                             echo '<i class="fab fa-html5 shadow text-danger "></i> ';
                                            }else {
                                              echo '<i class="fab fa-android shadow text-primary fa-1x "></i>';
                                            }
                                          
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-8" data-toggle="collapse" data-target="#myques<?php echo $row['question_id'];?>">
                                        <div class="row" style="font-size:15px; font-weight:400;">
                                            <?php echo $row['question'];?>
                                        </div>
                                    </div>
                                    <?php
                                        $sql1 = "SELECT * FROM tbl_forum_answer WHERE question_id = $qid ";
                                        $result1 = $DB->query($sql1);
                                        $count = $result1->num_rows; 
                                    ?>
                                    <div class="col-2 text-center" data-toggle="collapse" data-target="#myques<?php echo $row['question_id'];?>">
                                      <a class="blue-text"  style="font-size:12px;"><span class="black-text p-1 bg-light"><?php echo $count ;?></span> <br>answer</a>  
                                    </div>
                                    </div>
                                    <hr>
                                    <div id="myques<?php echo $row['question_id'];?>" class="collapse" style="background-color: #ffff; padding: 10px;">
                                    <?php  if ($result1->num_rows > 0) {
                                        while($row1 = $result1->fetch_assoc()) {
                                            $batch_no = $row1['batch_no'];
                                                $usr_sql1 = "SELECT * FROM user WHERE batch_no = $batch_no ";
                                                $usr_result1 = $DB->query($usr_sql1);
                                                if ($usr_result1->num_rows > 0) {
                                                    // output data of each row
                                                    $usr_row1 = $usr_result1->fetch_assoc();
                                                    $usr_name = $usr_row1['name'];
                                                }
                                    ?>
                                    <div class="row p-2">
                                        <div class="col-2">
                                            <div class="small" style="font-size:12px;">
                                                <b>
                                                    <?php echo $usr_name;?>
                                                </b>
                                            </div>
                                            <div class="small" style="font-size:10px;">
                                                <?php timeCalc($row1['timestamp']);?>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="row" style="font-size:15px; font-weight:300;">
                                                <?php echo $row1['answer'];?>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <?php }
                                        } else {
                                            echo '<div class="row"><div class="col-5 offset-3 p-2  text-center text-danger" style="background-color: #ffff;">No answers yet !!!</div></div>'; 
                                        }
                                        $quid = $row['question_id'];
                                    ?>
                                    <form id="answerForm" action="" role="form" method="post">
                                        <div class="row pt-2 form-group shadow-textarea">
                                            <div class="col-8 offset-1">
                                                <textarea class="form-control" name="answer_post" id="answerFormControlTextarea" rows="5" placeholder="Share your solution"
                                                    style="width:100%; background-color: #f3f3f3;"></textarea>
                                            </div>
                                            <input type="text" name="quid" value="<?php echo $quid; ?>" style="display: none;">
                                            <div class="col-2">
                                                <button type="submit" name="answerForm" id="answerForm" class="btn btn-sm btn-primary" value="Post">
                                                    <i class="fa fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <?php }
                                        } else {
                                            echo '<div class="row"><div class="col-5 offset-3 p-2 text-center text-danger" style="">No questions yet !!!</div></div>'; 
                                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- stackforum contents over here -->
      </div>
    </div>  
  </div>
</div>

<div class="modal fade right" id="modalQuestion" tabindex="-1" role="dialog"     aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-right modal-notify modal-info" role="document">
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="padding :0px">
              <p class="heading lead">
                  Post your Question
              </p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text"> &times; &nbsp; </span>
              </button>
          </div>
          <!--Body-->
          <div class="modal-body">
              <form id="questionForm" action="" role="form" method="post">
                  <div class="text-center">
                      <i class="fa fa-file-text-o fa-4x mb-3 animated rotateIn"></i>
                      <p>
                          <strong>SOME QUESTIONS ARE MORE IMPORTANT THAN ANSWERS</strong>
                      </p>
                      <p>
                          So, Feel free to ask questions
                      </p>
                  </div>

                  <!-- Radio -->
                  <p class="text-center">
                      <strong>Domain</strong>
                  </p>
                  <div class="form-check mb-4">
                      <input class="form-check-input" name="group1" type="radio" id="radio-179" value="Android" checked>
                      <label class="form-check-label" for="radio-179">
                      <i class="fab fa-android shadow text-primary fa-1x "></i> &nbsp;Android</label>
                  </div>
                  <div class="form-check mb-4">
                      <input class="form-check-input" name="group1" type="radio" id="radio-279" value="Web">
                      <label class="form-check-label" for="radio-279">
                      <i class="fab fa-html5 shadow text-danger "></i> &nbsp;Web</label>
                  </div>
                  <p class="text-center">
                      <strong>Have some doubts on software?</strong>
                  </p>
                  <!--Basic textarea-->
                  <div class="md-form" style="padding :0px">
                      <textarea type="text" class="md-textarea form-control" name="question" rows="6" placeholder="Post your Queries and problems here"></textarea>
                  </div>
                  <!--Footer-->
                  <div class="modal-footer justify-content-center">
                      <button type="submit" name="submitForm" id="submitForm" class="btn btn-primary waves-effect waves-light" value="Post">POST
                          <i class="fa fa-paper-plane ml-1"></i>
                      </button>
                      <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                  </div>
              </form>
          </div>

      </div>
  </div>
</div>

<script src="assets/js/forum.js" type="text/javascript"></script>

<?php include('./footer.php'); ?>




