<?php 
ob_start();
session_start();
?>

<?php

  $_SESSION = [];
  header("Location:".'http://'.$_SERVER['HTTP_HOST']);

?>

