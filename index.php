
<?
    include "includes/utils/config.php";
    include "includes/head.php";
?>

    <div class="container">

        <!-- NAVIGATION -->
        <? include "includes/header.php"; ?>

        <!-- FEATURED -->
        <? include "includes/widgets/featured.php"; ?>        

        <!-- BLOCKS -->
        <? include "includes/widgets/blocks.php"; ?>

        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-4 mb-4 font-italic border-bottom">
                        Other posts
                    </h3>

                    <div class="blog-post">
                        <h2 class="blog-post-title">Awesome post title</h2>
                        <p class="blog-post-meta">December 23, 2013 by <a href="#">Ronals</a></p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <a href="#" class="stretched-link">Read more...</a>
                    </div><!-- /.blog-post -->

                </div><!-- /.blog-main -->
                
                <!-- SIDEBAR -->
                <?php include "includes/widgets/sidebar.php"; ?>

            </div>

        </main>

    </div>

<?php  include "includes/footer.php";?>
