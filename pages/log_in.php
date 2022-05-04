
<?php
    include "../includes/utils/config.php";
    include HEAD;
?>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $postform = handleUserLogin($GLOBALS['_POST']);
    }

?>

<div class="text-center body-sign-in" >

    <form class="form-signin" method="POST">
        <h1 class="h3 mb-3 font-weight-normal logo-sign-in">Flick Arena</h1>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email address">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password">
        
        <button class="btn btn-lg btn-outline-info btn-block" type="submit">Sign in</button>
        <?php 
            if($_SERVER['REQUEST_METHOD']=="POST"){
                showErrors($postform);
            }
        
        ?>
        <p class="mt-5 mb-3 text-muted">
            <a href="<?php echo getRoute('home') ?>" class="text-secondary">Back home</a>
        </p>
    </form>


</div>

   
<?php include FOOTER;?>


