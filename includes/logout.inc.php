<?php
if (isset($_POST['logout-submit'])){
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
header("Location: ../index.php?logout=success");
exit();
}
else{
  header("Location: ../index.php?logout=failed");
  exit();
}
