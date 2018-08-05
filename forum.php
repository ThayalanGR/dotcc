<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="assets/mdb/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/forum.css">

</head>
<body>

<?php
    include_once 'dbconnection.php';
    require 'date.php';
    session_start();
    $_SESSION['r_count'];
    $_SESSION['my_count'];
    $_SESSION['batch_no'] = 191000;
    $session_batch_no = $_SESSION['batch_no'];
    if(isset($_POST['submitForm'])){
        $tags = mysqli_real_escape_string($DB, $_POST['group1']);
        $question = mysqli_real_escape_string($DB, $_POST['question']);
        if($question != "")
        {
        $sql = "INSERT INTO tbl_forum_question (batch_no, question, tags) VALUES ('$session_batch_no', '$question', '$tags')";
        if ($DB->query($sql) === TRUE) {
            echo '<script>window.location.href="forum.php"</script>';
        }
    }
    }
?>

    <?php
if(isset($_POST['answerForm'])){
    $answer = mysqli_real_escape_string($DB, $_POST['answer_post']);
    $ques_id = $_POST['quid'];
    if($answer != "")
    {
    $sql = "INSERT INTO tbl_forum_answer (batch_no, question_id, answer) VALUES ('$session_batch_no', '$ques_id', '$answer')";
    if ($DB->query($sql) === TRUE) {
        echo '<script>window.location.href="forum.php"</script>';
    }
}
}
?>


        <div class="container-fluid">
            <div class="row">
                <div class="col-6 offset-6 mt-5">
                    <div class="row">
                        <button class="tablink col" onclick="openTab('recentQA', this, '#E4EF50')" id="defaultOpen">Recent Questions &nbsp;
                            <span class="badge badge-danger">
                                <?php echo $_SESSION['r_count'];?>
                            </span>
                        </button>
                        <button class="tablink col" onclick="openTab('myQA', this, '#4FC3F7')">My Questions &nbsp;
                            <span class="badge badge-danger">
                                <?php echo $_SESSION['my_count'];?>
                            </span>
                        </button>
                        <button type="button col" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalQuestion">
                            <i class="fa fa-plus"></i> Ask Question</button>
                    </div>
                    <div class="row shadow">
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
                                    <div class="row p-2">
                                        <div class="col-2">
                                            <div class="small">
                                                <b>
                                                    <?php echo $usr_row['name'];?>
                                                </b>
                                            </div>
                                            <div class="small">
                                                <?php timeCalc($row['timestamp']);?>
                                            </div>
                                            <kbd>
                                                <?php echo $row['tags'];?>
                                            </kbd>
                                        </div>
                                        <div class="col-9" data-toggle="collapse" data-target="#ques<?php echo $row['question_id'];?>">
                                            <div class="row">
                                                <?php echo $row['question'];?>
                                            </div>
                                        </div>
                                        <?php
                        $sql1 = "SELECT * FROM tbl_forum_answer WHERE question_id = $qid ";
                        $result1 = $DB->query($sql1);
                        $count = $result1->num_rows; ?>
                                            <div class="col-1 text-center" data-toggle="collapse" data-target="#ques<?php echo $row['question_id'];?>">
                                                <div class="card border-dark shadow" style="width:3rem; background-color: #CFD8DC;">
                                                    <div class="text-center">
                                                        </b>
                                                        <?php echo $count ;?>
                                                        </b>
                                                    </div>
                                                    <div class="small">answer</div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div id="ques<?php echo $row['question_id'];?>" class="collapse" style="background-color: #90A4AE; padding: 10px;">
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
                                                <div class="small">
                                                    <b>
                                                        <?php echo $usr_name;?>
                                                    </b>
                                                </div>
                                                <div class="small">
                                                    <?php timeCalc($row1['timestamp']);?>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="row">
                                                    <?php echo $row1['answer'];?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php }
                                } else {
                                    echo '<div class="row"><div class="col-5 offset-3 p-2 card text-center text-danger border-dark" style="background-color: #455A64;">No answers yet !!!</div></div>'; 
                                }
                                $quid = $row['question_id'];?>
                                        <form id="answerForm" action="" role="form" method="post">
                                            <div class="row pt-2 form-group shadow-textarea">
                                                <div class="col-8 offset-1">
                                                    <textarea class="form-control" name="answer_post" id="answerFormControlTextarea" rows="5" placeholder="Share your solution"
                                                        style="width:100%; background-color: #CFD8DC;"></textarea>
                                                </div>
                                                <input type="text" name="quid" value="<?php echo $quid; ?>" style="display: none;">
                                                <div class="col-2">
                                                    <button type="submit" name="answerForm" id="answerForm" class="btn btn-sm btn-primary" value="Post">Post
                                                        <i class="fa fa-paper-plane ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <?php }
                            } else {
                                echo '<div class="row"><div class="col-5 offset-3 p-2 card text-center text-danger border-dark" style="background-color: #455A64;">No questions yet !!!</div></div>';  
                            }?>
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
                                            <div class="small">
                                                <b>
                                                    <?php echo $usr_name ;?>
                                                </b>
                                            </div>
                                            <div class="small">
                                                <?php timeCalc($row['timestamp']);?>
                                            </div>
                                            <kbd>
                                                <?php echo $row['tags'];?>
                                            </kbd>
                                        </div>
                                        <div class="col-9" data-toggle="collapse" data-target="#myques<?php echo $row['question_id'];?>">
                                            <div class="row">
                                                <?php echo $row['question'];?>
                                            </div>
                                        </div>
                                        <?php
                    $sql1 = "SELECT * FROM tbl_forum_answer WHERE question_id = $qid ";
                    $result1 = $DB->query($sql1);
                    $count = $result1->num_rows; ?>
                                            <div class="col-1 text-center" data-toggle="collapse" data-target="#myques<?php echo $row['question_id'];?>">
                                                <div class="card border-dark shadow" style="width:3rem; background-color: #CFD8DC;">
                                                    <div class="text-center">
                                                        </b>
                                                        <?php echo $count ;?>
                                                        </b>
                                                    </div>
                                                    <div class="small">answer</div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div id="myques<?php echo $row['question_id'];?>" class="collapse" style="background-color: #90A4AE; padding: 10px;">
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
                                                <div class="small">
                                                    <b>
                                                        <?php echo $usr_name;?>
                                                    </b>
                                                </div>
                                                <div class="small">
                                                    <?php timeCalc($row1['timestamp']);?>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="row">
                                                    <?php echo $row1['answer'];?>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php }
                        } else {
                            echo '<div class="row"><div class="col-5 offset-3 p-2 card text-center text-danger border-dark" style="background-color: #455A64;">No answers yet !!!</div></div>'; 
                        }
                        $quid = $row['question_id'];?>
                                        <form id="answerForm" action="" role="form" method="post">
                                            <div class="row pt-2 form-group shadow-textarea">
                                                <div class="col-8 offset-1">
                                                    <textarea class="form-control" name="answer_post" id="answerFormControlTextarea" rows="5" placeholder="Share your solution"
                                                        style="width:100%; background-color: #CFD8DC;"></textarea>
                                                </div>
                                                <input type="text" name="quid" value="<?php echo $quid; ?>" style="display: none;">
                                                <div class="col-2">
                                                    <button type="submit" name="answerForm" id="answerForm" class="btn btn-sm btn-primary" value="Post">Post
                                                        <i class="fa fa-paper-plane ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <?php }
            } else {
                echo '<div class="row"><div class="col-5 offset-3 p-2 card text-center text-danger border-dark" style="background-color: #455A64;">No questions yet !!!</div></div>'; 
                        }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal: Question modal -->
            <div class="modal fade right" id="modalQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
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
                                        <i class="fa fa-android"></i> Android</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" name="group1" type="radio" id="radio-279" value="Web">
                                    <label class="form-check-label" for="radio-279">
                                        <i class="fa fa-desktop"></i> Web</label>
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
                        </div>
                        </form>
                    </div>
                </div>

                <script>
                    function openTab(tabName, elmnt, color) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].style.backgroundColor = "";
                        }
                        document.getElementById(tabName).style.display = "block";
                        elmnt.style.backgroundColor = color;

                    }

                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>

                </body>

                </html>