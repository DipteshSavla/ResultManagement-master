<?php
session_start();
$_SESSION['user']=null;
$_SESSION['type']=null;
header('Location: login.php');
?>
