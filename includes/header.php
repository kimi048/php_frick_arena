<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
        <a class="text-muted" href="<?php echo getRoute('admin') ?>">
          <?php
            if(isLoggedIn()){
              echo 'Welcome back '.$_SESSION['user_firstname'].'.';
            }
          ?>
        </a>
    </div>
    <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="<?php echo getRoute('home') ?>">Flick Arena</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
          <?php
            if(isLoggedIn()){
          ?>
        <a class="btn btn-sm btn-outline-secondary mr-1" href="<?php echo getRoute('admin') ?>">Admin</a>
        <?php
            }else{
          ?>
        <a class="btn btn-sm btn-outline-info" href="<?php echo getRoute('login') ?>">Log in</a>
        <?php
            }
          ?>
    </div>
  </div>
</header>