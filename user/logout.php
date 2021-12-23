<?php
session_start();
if(isset($_SESSION['c_mail'])){
      unset($_SESSION['c_mail']);
      unset($_SESSION['c_password']);
      // session_destroy($_SESSION['c_mail']);
      // session_destroy($_SESSION['c_password']);

      header("location: ../loginPage.php");
}
?>