<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" >

    <title>تسجيل الدخول - المركز الهندسي التقني</title>
  </head>
  <body>
    <?php include "modules/header.php" ?>
    <?php include "includes/alerts.inc.php" ?>
    <div class="card border-secondary  container-sm w-75">
  <div class="card-header text-light text-center bg-dark col">
    تسجيل الدخول
  </div>
    <form class="card-body mx-auto rtl" action="includes/login.inc.php" method="post">
  <div class="form-group">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-light border-dark" id="inputGroup-sizing-default">اسم المستخدم</span>
  </div>
  <input type="text" name="mailuid" class="form-control border-dark">
</div>
  </div>
  <div class="form-group">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text bg-dark text-light border-dark" id="inputGroup-sizing-pwd">كلمة المرور</span>
    </div>
    <input type="password" name="pwd" class="form-control border-dark">
  </div>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember-me-check">
    <label class="form-check-label" for="exampleCheck1">تذكرني</label>
    <input type="checkbox" class="form-check-input" id="showpwd-check">
    <label class="form-check-label" for="exampleCheck1">اظهار كلمة المرور</label>
  </div>
  <button type="submit" name="login-submit"class="btn btn-dark col">تسجيل الدخول</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
