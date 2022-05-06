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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Update Profile</h1>
                </div>

                <?php include "form.php" ?>
            </main>
            <!--  END CONTENT -->
        </div>
    </div>

<?php include  ADMIN_FOOTER; ?>



