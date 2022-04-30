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
  //Role
  if(empty($DATA["user_role"])){
    array_push($errors,"Sorry the role is required");
  }else{
    $user_role = escape($DATA["user_role"]);
  }
  //Password
  if(empty($DATA["user_password"])){
    if($ACTION=='ADD'){
      array_push($errors,"Sorry the password is required");
    }
  }else{
    $user_password = escape($DATA["user_password"]);
    $user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
  }

  if(count($errors)===0){
    if($ACTION === 'ADD'){
      $query = "INSERT INTO users(user_firstname,user_lastname,user_role,user_email,user_password) ";
      $query .= "VALUES('$user_firstname','$user_lastname','$user_role','$user_email','$user_password')";
    }
    if($ACTION === 'EDIT'){

    }
    $add_user_q = mysqli_query($db,$query);
    if(!$add_user_q){
      array_push($errors, mysqli_error($db));
    }else{
      $success = true;
    }

  }
  return [$errors, $success];
}

function showErrors($postForm){
  if(count($postForm[0])){
    echo '<div class="alert alert-warning mt-4">',
    'You\'ve got errors',
    '</div>';
    foreach($postForm[0] as $error){
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
  }
}

function getAdminUser($USER_ID){
  global $db;
  $user_id = escape($USER_ID);
  $query = "SELECT * FROM users WHERE user_id = $user_id";
  $get_user = mysqli_query($db, $query);
  return $get_user;
}

function getRoles(){
  global $db;
  $roles_query = "SELECT * FROM roles";
  $result = mysqli_query($db,$roles_query);
  return $result;
}

function escape($data){
  global $db;
  $data =trim($data);
  $data = mysqli_real_escape_string($db, $data);
  return $data;
}


?>