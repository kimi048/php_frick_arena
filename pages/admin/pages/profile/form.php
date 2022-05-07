<?php

$postForm = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $postForm = handleAdminUser($GLOBALS['_POST'],'UPD');

  if($postForm[1]){
    ?>
    <div class="alert alert-success alert-dismissible fade show">
      <h4 class="alert-heading">Well done!</h4>
      <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
      </button>
    </div>
    <?
  }

}
?>

<form action="" method="POST">
  
   <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="user_id">

  <div class="form-group">
    <label for="user_firstname">Name</label>

    <input type="text" class="form-control" id="user_firstname" name="user_firstname" value="<?= $_SESSION['user_firstname'] ?>">
  </div>

  <div class="form-group">
    <label for="user_lastname">Lastname</label>
    <input type="text" class="form-control" id="user_lastname" name="user_lastname" value="<?= $_SESSION['user_lastname'] ?>">
  </div>

  <div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" class="form-control" id="user_email" name="user_email" value="<?= $_SESSION['user_email'] ?>">
  </div>

  <div class="form-group">
    <label for="user_password">Change Password</label>
    <input type="password" class="form-control" id="user_password" name="user_password">
  </div>

  <button type="submit" class="btn btn-primary" name="add_user" value="add_user">Submit</button>
</form>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    showErrors($postForm);
  }
?>