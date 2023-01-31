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
    <link href="<?php echo ASSETS?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo ASSETS?>/css/styletest.css" rel="stylesheet">
    <link href="<?php echo ASSETS?>/css/test.css" rel="stylesheet">
    <title>update</title>
</head>
<body>
<header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo ASSETS?>/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="home">Home</a></li>
                    <li><a class="nav-link active" href="kanban">kanban</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
                    </li> -->

                    <li><a class="getstarted " href="<?php echo $data["stat"]?>"><?php echo $data["stat"]?></a></li>
                    
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                
            </nav><!-- .navbar -->
            
        </div>
        
    </header>
    
    <div class="container" style="position:absolut; right:25; left: 25;">
    <br>
    <br>
    <br>
    <br>
        <form method="post" action="update" >
            <input type="hidden" name="ID_TASK" value="<?= $data["ID_TASK"]?>" id="">
            <div class="form-group">
                <label for="exampleFormControlInput1">title</label>
                <input type="text" class="form-control" name="TITLE" value="<?= $data["title"]?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">description</label>
                <input type="text" class="form-control" name="DESCRIPTION" value="<?= $data["DESCRIPTION"]?>" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">date</label>
                <input type="date" class="form-control" name="DEADLINE" value="<?= $data["DEADLINE"]?>" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info mt-3" name="submitTaskUpdate" id="">
            </div>
        </form>
    </div>
</body>
<script>
</script>
</html>