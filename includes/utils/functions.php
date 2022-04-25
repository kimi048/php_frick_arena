<?php

function handleAdminUser($DATA, $ACTION){
  global $db;
  $user_id = $user_firstname = $user_lastname = $user_email = $user_role = $user_password = "";
  $errors = [];
  $success = false;

  //FIRSTNAME LASTNAME
  if(empty($DATA["user_firstname"]) || empty($DATA["user_lastname"])){
    array_push($errors,'Sorry firstname/lastname are missing');
  }else{
   $user_firstname = escape($DATA["user_firstname"]);
   $user_lastname =  escape($DATA["user_lastname"]);
  }
  //Email
  if(empty($DATA["user_email"])){
    array_push($errors,'Sorry the email is required');
  }else if(!filter_var($DATA["user_email"], FILTER_VALIDATE_EMAIL)){
    array_push($errors,"Sorry the email is INVALID");
  }else{
    $user_email =  escape($DATA["user_email"]);
  }

  if(count($errors)===0){

  }
  return [$errors, $success];
}

function showErrors($postForm){
  if(count($postForm[0]) !== 0){
    echo '<div class="alert alert-warning mt-4">',
    'You\'ve got errors',
    '</div>';
    foreach($postForm[0] as $error){
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
  }
}


function escape($data){
  global $db;
  $data =trim($data);
  $data = mysqli_real_escape_string($db, $data);
  return $data;
}


?>