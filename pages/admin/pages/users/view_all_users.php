<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">All user</h1>
</div>

<?php
  $query = "SELECT * FROM users LEFT JOIN roles ON users.user_role = roles.role_id";
  $select_user = mysqli_query($db, $query);
?>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row = mysqli_fetch_assoc($select_user)){
      ?>
      <tr>
        <th><?= $row['user_id'] ?></th>
        <td><?= $row['user_firstname'] ?></td>
        <td><?= $row['user_lastname'] ?></td>
        <td><?= $row['user_email'] ?></td>
        <td><?= $row['role_name'] ?></td>
        <td>Delete user</td>
        <td><a href="<?= getRoute('admin_users') ?>?source=edit&user=<?= $row['user_id'] ?>">Edit user</a></td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>