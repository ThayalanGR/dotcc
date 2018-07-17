<?php

if (isset($_POST["sub"])) {
    require_once "dbregister.php";
    require_once "phpmailer/class.phpmailer.php";
    $target_dir = "./upload/img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $path=$_FILES["image"]["name"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "bmp" ) {
      echo "Sorry, only JPG, JPEG, PNG, GIF & BMP files are allowed.";
    }else{

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    }

    $roleid= 2;      //***1-admin***2-user ***   
    $name = trim($_POST["uname"]);
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $gender = $_POST["gender"];
    $password = trim($_POST["pass1"]);
    $email = trim($_POST["email"]);
    $yearOfBirth = $_POST['yearOfBirth'];
    $monthOfBirth = $_POST['monthOfBirth'];
    $dateOfBirth = $_POST['dateOfBirth'];
    // Validate
    if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '') {
      // Generate date of birth in format of YYYY-mm-dd
      $dob = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
      // Then insert to database as normal
    }
    $sql = "SELECT COUNT(*) AS count from user where email = :email_id";
    try {
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":email_id", $email);
      $stmt->execute();
      $result = $stmt->fetchAll();
  
      if ($result[0]["count"] > 0) {
        $msg = "Email already exist , Please Try another one ";
        $msgType = "warning";
      } else {
        $activationcode=md5(uniqid(rand()));
        $sql = "INSERT INTO `user` (`role_id`,`name`, `birthdate`,`gender`,`password`,`activationcode`,`forgetpasswordcode`,`first_name`,`last_name`,`upload_image`,`email`) VALUES " . "(:role_id ,:name,:dob,:gender,:password,:activationcode,:forgetpasswordcode,:first_name,:last_name,:upload_image,:email)";
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":role_id", $roleid);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":dob", $dob); 
        $stmt->bindValue(":gender", $gender);
        $stmt->bindValue(":password", md5($password));
        $stmt->bindValue(":activationcode",$activationcode);
        $stmt->bindValue(":forgetpasswordcode",md5(uniqid(rand())));
        $stmt->bindValue(":first_name",$fname);
        $stmt->bindValue(":last_name", $lname);
        $stmt->bindValue(":upload_image", $path);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $result = $stmt->rowCount();
        if ($result > 0) {
            $lastID = $DB->lastInsertId();
            $id = base64_encode($lastID);
          $message = "     
          Hello $name,
          <br /><br />
          Welcome to TechnKryon!<br/>
          To complete your registration  please , just click following link<br/>
          <br /><br />
          <a href=".SITE_URL."activate.php?id=$id&code=$activationcode>Click HERE to Activate :)</a>
          <br /><br />
          Thanks,";
          // php mailer code starts
          date_default_timezone_set('Etc/UTC');
          $mail = new PHPMailer(true);
          $mail->IsSMTP(); // telling the class to use SMTP
          $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
          $mail->SMTPAuth = true;                  // enable SMTP authentication
          $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
          $mail->Host = gethostbyname('ssl://smtp.gmail.com');      // sets GMAIL as the SMTP server
          $mail->Port = 465;                   // set the SMTP port for the GMAIL server
          $mail->Username = 'grthayalan18@gmail.com';
          $mail->Password = '1018@thayalan';
          $mail->SetFrom('grthayalan18@gmail.com', 'Thaya');
          $mail->AddAddress($email);
          $mail->Subject = trim("Email Verifcation - TechnoKryon");
          $mail->MsgHTML($message);
          try {
            $mail->send();
            $msg = "An email has been sent for verfication.";
            $msgType = "success";
          } catch (Exception $ex) {
            $msg = $ex->getMessage();
            $msgType = "warning";
          }
        } else {
          $msg = "Failed to create User";
          $msgType = "warning";
        }
      }
    } catch (Exception $ex) {
      $msg= $ex->getMessage();
      $msgtype="warning";
    }
  }
?>