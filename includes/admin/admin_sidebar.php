<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item nav-item-main">
          <a class="nav-link active" href="<?php echo getRoute('admin') ?>">
              <i class="fa fa-home"></i>
              Dashboard <span class="sr-only">(current)</span>
          </a>
      </li>
      <?php 
        if(isLoggedInAndAdmin()){
      ?>
      <li class="nav-item nav-item-main ">
          <a class="nav-link" href="<?php echo getRoute('admin_posts') ?>">
              <i class="fa fa-sticky-note"></i>
              Posts
          </a>
          <ul class="nav flex-column ml-4">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo getRoute('admin_posts') ?>?source=add"> Add post </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo getRoute('admin_posts') ?>?source=edit"> Edit post </a>
              </li>
          </ul>
      </li>
      <li class="nav-item nav-item-main ">
          <a class="nav-link" href="<?php echo getRoute('admin_users') ?>">
              <i class="fa fa-users"></i>
              Users
          </a>
          <ul class="nav flex-column ml-4">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo getRoute('admin_users') ?>?source=add"> Add user </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo getRoute('admin_users') ?>?source=edit"> Edit user </a>
              </li>
          </ul>
      </li>
      <li class="nav-item nav-item-main">
          <a class="nav-link" href="<?php echo getRoute('admin_profile') ?>">
              <i class="fa fa-user"></i>
              Profile
          </a>
      </li>
      <?php
        }
      ?>
      <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo getRoute('admin_messages') ?>">
              <i class="fa fa-inbox"></i>
              Messages
          </a>
      </li> -->
    </ul>

  </div>
</nav>