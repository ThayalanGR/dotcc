<?php

require 'date.php';
$_SESSION['r_count'];
$_SESSION['my_count'];
//   $_SESSION['user_id'] = 3;
//   $_SESSION['user_name'] = "efdeffffe";
$session_user_id = $_SESSION['userid'];
$session_user_name = $_SESSION['name'];

if(isset($_POST['submitForm'])){
    $tags = mysqli_real_escape_string($DB, $_POST['group1']);
    $question = mysqli_real_escape_string($DB, $_POST['question']);
    if($question != "")
    {
      $sql = "INSERT INTO tbl_forum_question (`user_id`, `user_name`, question, tags) VALUES ('$session_user_id', '$session_user_name', '$question', '$tags')";
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
      $sql = "INSERT INTO tbl_forum_answer (`user_id`,`user_name`, question_id, answer) VALUES ('$session_user_id', '$session_user_name', '$ques_id', '$answer')";
      if ($DB->query($sql) === TRUE) {
          echo '<script>window.location.href="index.php"</script>';
      }
  }
}


?>