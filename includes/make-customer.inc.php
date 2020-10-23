<?php
if (isset($_POST['cust-submit'])){

 include "dbh.inc.php" ;

$cust_name = $_POST['cust_name'];
$cust_phone = $_POST['cust_phone'];
$cust_email = $_POST['cust_email'];
$cust_vatnum = $_POST['cust_vatnum'];

if (empty($cust_name)) {
  header("Location: ../pages/dashboard.php?error=emptyfields");
  exit();
}
else {
// make connection to database
  $sql = "SELECT custName FROM customers WHERE custName=?;";
  $stmt = mysqli_stmt_init($conn);
//check if connection is failed and send massage
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../pages/dashboard.php?error=sqlerror");
    exit();
  }
//check for match users in the database
  else {
  mysqli_stmt_bind_param($stmt, "s", $cust_name);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultcheck = mysqli_stmt_num_rows($stmt);
  if ($resultcheck > 0) {
    header("Location: ../pages/dashboard.php?error=nametaken");
    exit();
    }
//insert data to database and hashing the passwords
    else {
      $sql = "INSERT INTO customers (custName, CustPhoneNum, custEmail, CustVATNum) VALUES (?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../pages/dashboard.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ssss", $cust_name, $cust_phone, $cust_email, $cust_vatnum);
        mysqli_stmt_execute($stmt);
        header("Location: ../pages/dashboard.php?makecust=success");
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
