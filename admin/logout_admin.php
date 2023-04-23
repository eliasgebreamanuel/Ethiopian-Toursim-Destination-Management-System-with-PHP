<?php
session_start();
unset($_SESSION['admin_user']);
header('location: /admin/login_new.php');
?>