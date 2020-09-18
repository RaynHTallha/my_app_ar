<?php
//check if the user got to here by login button
if (isset($_POST['login-submit'])) {
// initialize connection to database file
  require 'dbh.inc.php';
//make variables
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];
// check for empty inputs
  if (empty($mailuid) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  //check if connection to datat base failed
  else {
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    //check if password match
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        //if password correct
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['uidUsers'];
          header("Location: ../pages/dashboard.php");
          exit();
          //if password not match for unknown reason
        }
        else {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      }
      // if no user match
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
//sent to login page if the first (if) statment failed
else{
  header("Location: ../index.php");
  exit();
}
