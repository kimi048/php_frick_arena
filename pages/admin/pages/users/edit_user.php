<?php

$postForm = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $postForm = handleAdminUser($GLOBALS['_POST'],'EDIT');

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

<?php 
  if(isset($_GET['user']) && !empty($_GET['user'])){
    $userResult = getAdminUser($_GET['user']);
    while($row =mysqli_fetch_assoc($userResult)){
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit user</h1>
</div>
<form action="" method="POST">
  
   <input type="hidden" value="<?= $row['user_id'] ?>" name="user_id">

  <div class="form-group">
    <label for="user_firstname">Name</label>

    <input type="text" class="form-control" id="user_firstname" name="user_firstname" value="<?= $row['user_firstname'] ?>">
  </div>

  <div class="form-group">
    <label for="user_lastname">Lastname</label>
    <input type="text" class="form-control" id="user_lastname" name="user_lastname" value="<?= $row['user_lastname'] ?>">
  </div>

  <div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" class="form-control" id="user_email" name="user_email" value="<?= $row['user_email'] ?>">
  </div>

  <div class="form-group">
    <label for="user_role">Example select</label>
    <select class="form-control" id="user_role" name="user_role">
    <option selected disabled>Select a role</option>
      <?php 
        $roles = getRoles();
        while($role =mysqli_fetch_assoc($roles)){

        
      ?>
        <option 
        value="<?= $role['role_id']; ?>" 
        <?php $selected = $role['role_id'] === $row['user_role'] ? 'selected' : ''; 
          echo $selected;
        ?>
        ><?= $role['role_name']; ?></option>
      <?php 
        }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="user_password">Change Password</label>
    <input type="password" class="form-control" id="user_password" name="user_password">
  </div>

  <button type="submit" class="btn btn-primary" name="add_user" value="add_user">Submit</button>
</form>
<?php 
    }//end while
  }else{
    ?>
    <div class="alert alert-warning mt-4">
      You need to select a user first
    </div>
    <?
    include "view_all_users.php";
  }
?>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    showErrors($postForm);
  }
?>