<div class="container-fluid" >
            <div class="row">
                <div class="col">
                    <div class="row">
                        <button class="tablink col black-text shadow rounded btn-sm btn" onclick="openTab('recentQA', this, '#039be5')" id="defaultOpen"><b> Recent Questions</b> &nbsp;
                            <span class="badge badge-danger rounded-circle p-1"  style="font-size:10px;" id="rcount">
                                <?php //echo $_SESSION['r_count'];?>
                            </span>
                        </button>
                        <button class="tablink col shadow black-text rounded btn-sm btn" onclick="openTab('myQA', this, '#039be5')"><b>My Questions</b> &nbsp;
                            <span class="badge badge-danger rounded-circle p-1"  style="font-size:10px;" id="mycount">
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
                                    if($result->num_rows >= 0) {
                                        echo '<script>
                                                const rcountid = document.getElementById("rcount")  ;
                                                rcountid.innerHTML = '.$result->num_rows.';
                                            </script>';
                                    }
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $qid = $row['question_id'];
                                        $user_id = $row['user_id'];
                                ?>

                                <div class="row">
                                    <div class="col-2">
                                        <div class="small ">
                                            <b style="font-size:12px;">
                                                <?php echo $row['user_name'];
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
                                            $user_id = $row1['user_id'];
                                    ?>
                                    <div class="row p-2">
                                        <div class="col-2">
                                            <div class="small" style="font-size:12px;">
                                                <b>
                                                    <?php echo $row1['user_name'];?>
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
                                    $sql = "SELECT * FROM tbl_forum_question WHERE user_id = $session_user_id ORDER BY question_id DESC";
                                    $result = $DB->query($sql);
                                    $_SESSION['my_count'] = $result->num_rows;
                                    if($result->num_rows >= 0) {
                                        echo '<script>
                                                const mycountid = document.getElementById("mycount")  ;
                                                mycountid.innerHTML = '.$result->num_rows.';
                                            </script>';
                                    }
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $qid = $row['question_id'];
                                            $user_id = $row['user_id'];
                                ?>
                                <div class="row p-2">
                                    <div class="col-2">
                                        <div class="small" style="font-size:12px;">
                                            <b>
                                                <?php echo $row['user_name'] ;?>
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
                                            $user_id = $row1['user_id'];
                                    ?>
                                    <div class="row p-2">
                                        <div class="col-2">
                                            <div class="small" style="font-size:12px;">
                                                <b>
                                                    <?php echo $row1['user_name'];?>
                                                </b>
                                            </div>
                                            <div class="small" style="font-size:10px;">
                                                <?php timeCalc($row1['timestamp']);?>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="row" style="font-size:15px; font-weight:300;">
                                                <textarea name="" id="">
                                                    <?php echo $row1['answer'];?>
                                                </textarea>
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
