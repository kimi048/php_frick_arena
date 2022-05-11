<?php

function kickOutNonAdminsUsers(){
  if(!isLoggedInAndAdmin()){
    redirect(getRoute('admin'));
  }
}

function isLoggedInAndAdmin(){
  if(isLoggedIn() && $_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 3 ){
    return true;
  }else{
    return false;
  }
}

function isLoggedIn(){
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    return true;
  }else{
    return false;
  }
}

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
  if($ACTION != 'UPD'){
    if(empty($DATA["user_role"])){
      array_push($errors,"Sorry the role is required");
    }else{
      $user_role = escape($DATA["user_role"]);
    }
  }
  //Password
  if($ACTION != "UPD"){
    if(!empty($DATA["user_password"])){
      $user_password = escape($DATA["user_password"]);
      $user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
    }
  }else{
    if(empty($DATA["user_password"])){
      if($ACTION=='ADD'){
        array_push($errors,"Sorry the password is required");
      }
    }else{
      $user_password = escape($DATA["user_password"]);
      $user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
    }
  }
  

  if($ACTION == "EDIT" || $ACTION == "UPD"){
    if(empty($DATA["user_id"])){
      array_push($errors,"Sorry we need a user id");
    }else{
      $user_id = escape($DATA["user_id"]);
    }
  }

  if(count($errors)===0 && isLoggedInAndAdmin()){
    if($ACTION === 'ADD'){
      $query = "INSERT INTO users(user_firstname,user_lastname,user_role,user_email,user_password) ";
      $query .= "VALUES('$user_firstname','$user_lastname','$user_role','$user_email','$user_password')";
    }
    if($ACTION === 'EDIT' || $ACTION === "UPD"){
      $query  = "UPDATE users SET ";
      $query .= "user_firstname = '$user_firstname', ";
      $query .= "user_lastname = '$user_lastname', ";
      if($ACTION != "UPD"){
        $query .= "user_role = $user_role, ";
      }
      $query .= "user_email = '$user_email' ";
      if(!empty($user_password)){
        $query .= ", user_password = '$user_password' ";
      }
      $query .= "WHERE user_id = $user_id";
    }
    $add_user_q = mysqli_query($db,$query);
    if(!$add_user_q){
      array_push($errors, mysqli_error($db));
    }else{
      if($ACTION === 'UPD'){
        $query = "SELECT * FROM users WHERE user_id = $user_id";
        $result = mysqli_query($db,$query);
        $row = mysqli_fetch_assoc($result);
        updateSession($row);
      }
      $success = true;
    }

  }
  return [$errors, $success];
}

function handleUserLogin($DATA){
  global $db;
  $user_email = $user_password = '';
  $errors = [];
  $success = false;
  //Email
  if(empty($DATA["user_email"])){
    array_push($errors,'Sorry the email is required');
  }else if(!filter_var($DATA["user_email"], FILTER_VALIDATE_EMAIL)){
    array_push($errors,"Sorry the email is INVALID");
  }else{
    $user_email =  escape($DATA["user_email"]);
  }
  //Password
  if(empty($DATA["user_password"])){
     array_push($errors,"Sorry the password is required");
  }else{
    $user_password = escape($DATA["user_password"]);
  }

  //do the checking
  if(count($errors) === 0){
    //USER EXISTS
    $query = "SELECT * FROM users WHERE user_email='$user_email' ";
    $result = mysqli_query($db,$query);
    if(!$result){
      die("QUERY FAILED".mysqli_error($db));
    }
    if(mysqli_num_rows($result) == 1){
      //email good
      $row = mysqli_fetch_assoc($result);
      $verifyPassword = password_verify($user_password, $row['user_password']);
      if($verifyPassword){
        //good passeord set the session
        updateSession($row);
        redirect(getRoute('admin'));
      }else{
        array_push($errors,"Sorry,the password is wrong");
      }
    }else{
      array_push($errors, 'Sorry we dont have a user with that email');
    }
    //CHECK PASSWORD
    //SET A SESSION
  }
  return [$errors,$success];

}

function updateSession($row){
  $_SESSION['logged_in'] = true;
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['user_email'] = $row['user_email'];
  $_SESSION['user_firstname'] = $row['user_firstname'];
  $_SESSION['user_lastname'] = $row['user_lastname'];
  $_SESSION['user_role'] = $row['user_role'];
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

function redirect($location){
  header("Location:".$location);
  exit;
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