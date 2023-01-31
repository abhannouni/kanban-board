<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="<?php echo ASSETS?>/img/favicon.png" rel="icon">
    <link href="<?php echo ASSETS?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo ASSETS?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo ASSETS?>css/styletest.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>css/test.css" rel="stylesheet">
    <title>home</title>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo ASSETS?>/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br>
    <br>
 <!-- ======= Hero Section ======= -->
 <div class="container mt-5 ">
        <br>
        <br>
        <h1 class="d-flex align-items-center justify-content-center">
            thank you for choosing us
        </h1>
    </div>
    <div id="" class="container-fluid row mt-5 ">

        <div class="col-md-6 d-flex align-items-center">
            <h3 class="d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. In non quibusdam
                assumenda amet sint vero error nobis voluptates, corporis illo perferendis dicta hic, cum, ullam tenetur
                ab pariatur fugit ipsam.</h3>
        </div>
        <div class="col-12 col-md-6 mt-5">


            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link signin-btn active" onclick="signin()">Login</button>
                </li>
                <li class="nav-item" role="presentation">

                <li class="nav-item" role="presentation">
                    <button class="nav-link signup-btn" onclick="signup()">Register</button>
                </li>
            </ul>
            <div>
                <form method="post" class="sign-in">


                    <h3 class="text-center">signIN</h3>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="loginName" class="form-control" />
                        <label class="form-label" for="loginName">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="loginPassword" class="form-control" />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in" name="submitSignin">

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                    </div>
                </form>
            </div>
            <div>
                <form method="post" action="register" class="sign-up">
                    <h3 class="text-center">Register</h3>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" name="name" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" name="username" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" name="email" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" name="password" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" name="passwordconf" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                            aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign up" name="submitSignup">
                    <!-- <input type="submit" class="btn btn-primary btn-block mb-3" name="submitSignup" value="Sign up"> -->
                </form>
            </div>
        </div>
    </div><!-- End Hero -->

    <!-- Vendor JS Files -->
    <script src="<?php echo ASSETS?>vendor/aos/aos.js"></script>
    <script src="<?php echo ASSETS?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETS?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo ASSETS?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo ASSETS?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo ASSETS?>vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?php echo ASSETS?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo ASSETS?>js/main.js"></script>
    <script src="<?php echo ASSETS?>js/main1.js"></script>
    <script src="<?php echo ASSETS?>js/registre.js"></script>
    
    
    
</body>

</html>