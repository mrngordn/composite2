<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Groomba </title>
    <!--Bootstrap CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!--Portfolio CSS-->
    <link type="text/css" href="css/portfolio.css" rel="stylesheet">

</head>

<body id="page-top">

    <!--PHP SESSION START-->
    <div class="errorContainer">


        <?php
            
              session_start();
               
             
            
            ?>
    </div>

    <!-- LOG IN MODAL -->
    <div class="modal fade" id="LogInModal" tabindex="-1" role="dialog" aria-labelledby="LogInModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#9587;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div> 
                   <?php if(isset($_SESSION['error']))
                  {
                 echo $_SESSION['error'];
                 unset($_SESSION['error']);
    
                echo "<script> 
            
                
                document.querySelector(\".modal\").classList=\"show fade modal\";
                document.querySelector(\".modal\").style.display=\"block\";
                document.querySelector(\"#page-top\").className=\"modal-open\";
                </script>";
               }
                ?>
                   </div>
                    <h5 class="modal-title  text-center my-auto" id="WelcomeTitle">Welcome to Groomba</h5>


                    <!--LOG IN FORM test bootstrap-->
                    <form method="POST" action="php/authenticate.php" name="loginForm" onsubmit="return(validateForm());">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" name="userN" id="lUserName" aria-describedby="enterUsername" placeholder="Enter Username">
                        </div>
                        <div id="form-control-feedback"></div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="lPassW" id="lPassW" aria-describedby="enterPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-square btn-secondary" name="log-in-Btn">Log in</button>
                    </form>
                    <!--LOG IN MODAL FOOTER-->
                </div>
                <div class="modal-footer  text-center my-auto">
                    Don't have an account? <a href="#SignUpModal" data-toggle="modal" data-target="#SignUpModal" data-dismiss="modal">&nbsp;Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <!-- REGISTER MODAL -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SignUpModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&#9587;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="WelcomeTitle">Sign Up Form</h5>

                    <!--REGISTER FORM test bootstrap-->
                    <form method="POST" action="php/process.php">
                        <div class="form-group">
                            <label for="Username">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" aria-describedby="enterFirstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="Username">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="enterLastName" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" name="userN" id="userName" aria-describedby="enterUsername" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="passW" id="passWrd" aria-describedby="enterPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassW" id="cpassWrd" aria-describedby="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-square btn-secondary" name="sign-up-Btn">Sign Up</button>
                    </form>

                    <!--REGISTER MODAL FOOTER-->
                </div>
                <div class="modal-footer">
                    Already have an account? <a href="#LogInModal" data-toggle="modal" data-target="#LogInModal" data-dismiss="modal">&nbsp;Log In</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Groomba.</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">

                        <a href="#LogInModal" class="nav-link" data-toggle="modal" data-target="#LogInModal">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="#SignUpModal" class="nav-link" data-toggle="modal" data-target="#SignUpModal">Sign Up</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- Header -->

    <header class="masthead d-flex">
        <div class="container text-left my-auto">
            <h1 class="mb-1">Looking for a place to stay?</h1>
            <h4 class="mb-5">
                We specialize in finding you a home away from home.
            </h4>
            <form>
                <div class="form-group">
                    <select class="custom-select">
                        <option selected>Choose your destination</option>
                        <option value="1">Toronto</option>
                        <option value="2">Montreal</option>
                        <option value="3">New York</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-square btn-xl btn-primary">Search &#8594;</button>
            

            </form>
        </div>
                
                <div class="overlay"></div>
    </header>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!--My JavaScript-->
    <script src="js/script.js"></script>


</body>

</html>
