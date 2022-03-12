<?php
ob_start();

$host = "localhost";
$user = "root";
$password = "";
$db_name = "flickarenadb";

$db = mysqli_connect($host, $user, $password, $db_name);
if($db){
  echo "we are connected!!";
}

function config($key = ''){
  $config = [
    'site_name' => 'Flickarena',
    'site_domain' => 'http://'.$_SERVER['HTTP_HOST']
  ];
  return isset($config[$key]) ? $config[$key] : null ;
}

?>