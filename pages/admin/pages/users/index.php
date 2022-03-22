<?php
    include  "../../../../includes/utils/config.php";
    include  ADMIN_HEAD;

?>
    
    <!-- NAVIGATION -->
<?php include ADMIN_NAV ?> 


    <div class="container-fluid">
        <div class="row">

            <!--  START SIDEBAR -->
            <?php include ADMIN_SIDEBAR; ?>
            <!-- END SIDEBAR -->

            <!--  START CONTENT -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
              <?php 
                if(isset($_GET['source'])){
                  $source = $_GET['source'];
                }else{
                  $source = '';
                }
                switch($source){
                  case 'add':
                    include "add_user.php";
                    break;
                  case 'edit':
                    include "edit_user.php";
                    break;
                  default:
                    // include "edit_user.php";
                }
              ?>
            </main>
            <!--  END CONTENT -->
        </div>
    </div>

<?php include  ADMIN_FOOTER; ?>



