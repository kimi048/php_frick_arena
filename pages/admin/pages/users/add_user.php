<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_email = $_POST['user_email'];
  $user_role = $_POST['user_role'];
  $user_password = $_POST['user_password'];

  $user_password = password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
  $query = "INSERT INTO users(user_firstname,user_lastname,user_role,user_email,user_password) ";
  $query .= "VALUES('$user_firstname','$user_lastname','$user_role','$user_email','$user_password')";
  
  $add_user_q = mysqli_query($db,$query);
  if(!$add_user_q){
    die("QUERY FAILED".mysqli_error($db));
  }
  echo "User Created";

}


?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add user</h1>
</div>
<form action="" method="POST">
  <div class="form-group">
    <label for="user_firstname">Name</label>
    <input type="text" class="form-control" id="user_firstname" name="user_firstname">
  </div>

  <div class="form-group">
    <label for="user_lastname">Lastname</label>
    <input type="text" class="form-control" id="user_lastname" name="user_lastname">
  </div>

  <div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" class="form-control" id="user_email" name="user_email">
  </div>

  <div class="form-group">
    <label for="user_role">Example select</label>
    <select class="form-control" id="user_role" name="user_role">
        <option selected disabled>Select a role</option>
        <option value="1">Admin</option>
        <option value="2">Guest</option>
        <option value="3">Super</option>
    </select>
  </div>

  <div class="form-group">
    <label for="user_password">Set Password</label>
    <input type="password" class="form-control" id="user_password" name="user_password">
  </div>

  <button type="submit" class="btn btn-primary" name="add_user" value="add_user">Submit</button>
</form>