<?php session_start();?>
<?php include "../modules/header.php" ?>
<?php include "../modules/navbar.php" ?>
<?php include "../modules/modals.php" ?>
<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css" >

    <title>المركز الهندسي التقني</title>
  </head>
  <body class="rtl">
<!-------------------------------------------------content------------------------------------------------------------->

<div class="card-deck">
  <div class="card border-secondary  container-sm w-75">
  <div class="card-header text-light text-center bg-dark col"> ادخال البيانات</div>
  <div class="card-body mx-auto rtl">


  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#make-jobcard">إضافة كرت عمل</a>
  <h6 class="form-group">اضافه كرت عمل تحتاج لبيانات مسجله مسبقا(مثال :بيانات العميل او الشركة)اذا اردت انشاء كرت عمل بدون الحاجه لبيانات مسبقا اذهب الى الروابط السريعه .</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#make-customer">تسجيل عميل</a>
  <h6 class="form-group">لاضافه بيانات عميل لاستخدامها  لاحقا دون الحاجه الى ادخالها في كل مره.</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#make-brand">اضافة براند</a>
  <h6 class="form-group">لاضافه بيانات علامه تجارية لاستخدامها  لاحقا دون الحاجه الى ادخالها في كل مره.</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#make-model">تعديل كرت عمل</a>
  <h6 class="form-group">لتعديل بيانات كرت مسجل.</h6>
  </div>


  </div>

<!---------------------------->
  <div class="card border-secondary  container-sm w-75">
  <div class="card-header text-light text-center bg-dark col"> طباعه التقارير</div>
  <div class="card-body mx-auto rtl">


  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#print-price">طباعه تسعيرة</a>
  <h6 class="form-group">لطباعه تسعيرة مع امكانيه طباعه صور للاعطال ان وجدت.<br><br><br></h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#print-invoice">طباعه فاتورة</a>
  <h6 class="form-group">لطباعه فاتورة اصلاح بدون صور للاعطال.<br><br></h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#print-Minvoice">طباعه مطالبة ماليه</a>
  <h6 class="form-group">لطباعه خطاب مطالبه ماليه مع بيان السيارات المشموله في المده المحدده.</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#view-jobcards">عرض كروت العمل </a>
  <h6 class="form-group">لعرض جميع كروت الإصلاح وفلترتها حسب الرغبه.</h6>




  </div>
  </div>

<!------------------------>
  <div class="card border-secondary  container-sm w-75">
  <div class="card-header text-light text-center bg-dark col"> روابط سريعه </div>
  <div class="card-body rtl">


  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#QjobCard">انشاء كرت سريع</a>
  <h6 class="form-group">لانشاء كرت عمل بدون الحاجه لبيانات مسبقه.<br><br><br></h6>
  <a class="btn btn-outline-dark form-group col" href="signup.php">انشاء مستخدم</a>
  <h6 class="form-group">لاضافة مستخدم جديد للبرنامج فقط ولا يمكن حذف او تغييرمستخدم من هنا.</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#simp-calc">حاسبة بسيطه</a>
  <h6 class="form-group">لحساب الضريبة و القيام ببعض العمليات الحسابية البسيطه.</h6>
  <a class="btn btn-outline-dark form-group col" type="Button" data-toggle="modal" href="#task-man">جدول المهام و المواعيد</a>
  <h6 class="form-group">اداه بسيطه للمساعده على ترتيب المهام اليوميه.</h6>



  </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
