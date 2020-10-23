<?php
if (isset($_POST['brnd-submit'])){

 include "dbh.inc.php" ;

$brnd_name = $_POST['brnd_name'];

if (empty($brnd_name)) {
  header("Location: ../pages/dashboard.php?error=emptyfields");
  exit();
}
else {
// make connection to database
  $sql = "SELECT brnd FROM brands WHERE brnd=?;";
  $stmt = mysqli_stmt_init($conn);
//check if connection is failed and send massage
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../pages/dashboard.php?error=sqlerror");
    exit();
  }
//check for match users in the database
  else {
  mysqli_stmt_bind_param($stmt, "s", $brnd_name);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultcheck = mysqli_stmt_num_rows($stmt);
  if ($resultcheck > 0) {
    header("Location: ../pages/dashboard.php?error=nametaken");
    exit();
    }
//insert data to database and hashing the passwords
    else {
      $sql = "INSERT INTO brands (brnd) VALUES (?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../pages/dashboard.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $brnd_name);
        mysqli_stmt_execute($stmt);
        header("Location: ../pages/dashboard.php?makebrand=success");
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
header("Location: ../pages/dashboard?error=unknown");
exit();
}
