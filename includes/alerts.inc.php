<?php
if(isset($_GET['error'])){
  if ($_GET['error'] == "emptyfields") {
    echo '<div class="alert alert-danger" role="alert">
  *يوجد حقل الزامي فارغ
</div>';
  }
  else if ($_GET['error'] == "sqlerror") {
      echo '<div class="alert alert-danger" role="alert">
  حدث خطأغير متوقع الرجاء الإتصال بمسؤول النظام
</div>';
    }
    else if ($_GET['error'] == "nouser") {
        echo '<div class="alert alert-danger" role="alert">
* المستخدم غير موجود
  </div>';
      }
      else if ($_GET['error'] == "wrongpwd") {
          echo '<div class="alert alert-danger" role="alert">
    *اسم المستخدم أو كلمة المرور خاطئة
    </div>';
        }
}
