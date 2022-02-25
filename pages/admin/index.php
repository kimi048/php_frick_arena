<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flick Arena</title>

    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../../resources/css/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../resources/css/admin_global.css" rel="stylesheet">
     <!-- jQuery -->
     <script src="../../resources/js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="css/bootstrap-4.4.1/js/bootstrap.min.js"></script> -->
</head>

<body>
    
    <header>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Flick Arena</a>
        
            <div class="navbar navbar-dark flex-md-nowrap p-0">
                <a class="btn btn-outline-info btn-sm mr-4" href="#">Sign out </a>
            </div>
        </nav>
    </header>


    <div class="container-fluid">
        <div class="row">

            <!--  START SIDEBAR -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item nav-item-main">
                            <a class="nav-link active" href="#">
                                <i class="fa fa-home"></i>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-main ">
                            <a class="nav-link" href="#">
                                <i class="fa fa-sticky-note"></i>
                                Posts
                            </a>
                            <ul class="nav flex-column ml-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Add post </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Edit post </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-main ">
                            <a class="nav-link" href="#">
                                <i class="fa fa-users"></i>
                                Users
                            </a>
                            <ul class="nav flex-column ml-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Add user </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Edit user </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-main">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-inbox"></i>
                                Messages
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
            <!-- END SIDEBAR -->

            <!--  START CONTENT -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div>
                    CONTENT SECTION
                </div>
            </main>
            <!--  END CONTENT -->
        </div>
    </div>


</body>

</html>


