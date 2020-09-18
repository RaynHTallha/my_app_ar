<?php
//check if the user got here from the signup page
if (isset($_POST['signup-submit'])){
//connection  permission file
  require 'dbh.inc.php';
  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  //error handlers
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../pages/signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../pages/signup.php?error=invalidmailuid");
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../pages/signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../pages/signup.php?error=invaliduid&mail=".$email);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location: ../pages/signup.php?error=pwdcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {
// make connection to database
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
    $stmt = mysqli_stmt_init($conn);
//check if connection is failed and send massage
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../pages/signup.php?error=sqlerror");
      exit();
    }
//check for match users in the database
    else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultcheck = mysqli_stmt_num_rows($stmt);
    if ($resultcheck > 0) {
      header("Location: ../pages/signup.php?error=usertaken&mail=".$email);
      exit();
      }
  //insert data to database and hashing the passwords
      else {
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../pages/signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../pages/signup.php?signup=success");
          exit();
        }
      }
    }
  }
//close all connections
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
//send to sign up page incase the first (if) statment failed
else {
  header("Location: ../pages/signup.php");
  exit();
}
