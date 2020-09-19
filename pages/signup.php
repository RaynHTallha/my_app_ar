 <?php session_start();?>
 <?php include "../modules/header.php" ?>
 <?php
if (isset($_SESSION['userId'])){
echo '<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css" >

    <title>تسجيل مستخدم - المركز الهندسي التقني</title>
  </head>
  <body class="rtl">


<!-------------------------------------------------content------------------------------------------------------------->
<div class="card border-secondary  container-sm w-75">
<div class="card-header text-light text-center bg-dark col">
انشاء المستخدم
</div>
<form class="card-body mx-auto rtl" action="../includes/signup.inc.php" method="post">
  <div class="form-group">
    <label for="usr">اسم المستخدم:</label>
    <input type="text" class="form-control" name="uid">
  </div>
  <div class="form-group">
  <label for="usr">الايميل:</label>
  <input type="text" class="form-control" name="mail">
</div>
<div class="form-group">
  <label for="pwd">كلمة المرور:</label>
  <input type="password" class="form-control" name="pwd">
</div>
  <div class="form-group">
    <label for="pwd">اعد كلمة المرور:</label>
    <input type="password" class="form-control" name="pwd-repeat">
  </div>
<button type="submit" name="signup-submit"class="btn btn-dark col form-group">التسجيل</button>
<a class="btn btn-dark col " href="dashboard.php">رجوع</a>
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
';
}else {
  header("Location: ../index.php?nicetry!!");
  exit();
}
  ?>
