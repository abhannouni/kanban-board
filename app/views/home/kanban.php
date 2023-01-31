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
    <style>
        #hero1{
            color : black;
        }
    </style>
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
        
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <br>
    <br>
    <br>

    <div class="input-group rounded m-2" style="width : 30vw;">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" onkeyup="searchA(event)"/>
        <button  class="btn btn-info">search</button>
    </div>
    
    <div id="hero1" class="d-flex align-items-center" style="overflow: hidden;">
        

        

        <div class="container " style="overflow: hidden;">
            <h1 class="d-flex justify-content-center mt-2 mb-3" style="color:white;">your work start from here</h1>
            <div class="row">
                <!-- Start lane -->
            <div class="col-12 col-lg-4">
                <div class="card mb-3">
                    <div class="card-header bg-light d-flex justify-content-between">
                        <h3 class="card-title h5 mb-1">
                            to do
                        </h3>
                        <button class="btn btn-info" onclick="sortby_date(event)">sort by date</button>
                    </div>
                    <div class="card-body">
                        <div class="tasks todo" id="backlog" >
                            <?php
                            if(is_array($data['taskToDo'])){
                                 for($i = 0 ;$i < count($data['taskToDo']) ; $i++){ ?>
                            <!-- Start task -->
                            <div class="card mb-3 cursor-grab taskstodo">
                                <div class="card-body">
                                <i class="bi bi-x-circle d-flex justify-content-end " onclick="deleteTask(event)" style="cursor:pointer;"></i>
                                    <div>
                                        <h4 class="mb-0 title"><?= $data['taskToDo'][$i]->TITLE?></h4>
                                        <h5 class="ID_task">ID:<?= $data['taskToDo'][$i]->ID_TASK?></h5>
                                    </div>
                                    <p class="mb-0"><?= $data['taskToDo'][$i]->DESCRIPTION?></p>
                                    
                                    <div class="d-flex justify-content-end gap-2 align-items-center show-hide">
                                        <br>
                                        <a href="update?ID=<?= $data['taskToDo'][$i]->ID_TASK?>&title=<?= $data['taskToDo'][$i]->TITLE?>&DESCRIPTION=<?= $data['taskToDo'][$i]->DESCRIPTION?>&DEADLINE=<?= $data['taskToDo'][$i]->DEADLINE?>"><i class="bi bi-recycle" style="cursor:pointer;"></i></a>
                                        <i class="bi bi-plus-square" onclick="show(event)"></i>
                                        <i class="bi bi-dash-square" onclick="hide(event)"></i>
                                        
                                    </div>
                                    

                                    <div class="text-right row">
                                        <p class="text-muted mb-1 d-inline-block pourcenatge col-6"><?= $data['taskToDo'][$i]->progress?>%</p>
                                        <p class="col-6 d-flex justify-content-end"><?= $data['taskToDo'][$i]->DEADLINE?></p>
                                    </div>
                                    <?php for($j=0;$j< $data['taskToDo'][$i]->NUMBER_CHECKBOXES;$j++){ ?>
                                    <div class="form-check ab">
                                    <?php $dataNb = $data['taskToDo'][$i]->nbcheck?>
                                        <input class="form-check-input allcheckboxes" type="checkbox" value="<?= $dataNb[$j]->ID_S_TASK ?>"
                                            id="flexCheckDefault" onclick="myfunction(event)" <?php  if(strcmp(($dataNb[$j]->STAT),"checked") == 0 ){echo "checked";} ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            task <?= $j+1 ?>
                                        </label>
                                    </div>
                                    <?php }?>
                                    
                                    <div class="progress " style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="arrow d-flex flex-row justify-content-around mb-2">
                                        <i class="bi bi-arrow-bar-left" onclick="move_task_left(event)" style="cursor:pointer;"></i>
                                        <i class="bi bi-arrow-bar-right" onclick="move_task_right(event)" style="cursor:pointer;"></i>
                                </div>
                            </div>
                            
                            <!-- End task -->
                                <?php }}?>

                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add task
                        </button>
                    </div>



                </div>
            </div>
            <!-- End lane -->

                <!-- Start lane -->
            <div class="col-12 col-lg-4 " style="">
                <div class="card mb-3" style="">
                    <div class="card-header bg-light d-flex justify-content-between">
                        <h3 class="card-title h5 mb-1">
                            doing
                        </h3>
                        <button class="btn btn-info" onclick="sortby_date(event)">sort by date</button>
                    </div>
                    <div class="card-body">
                        <div class="tasks todo" id="in-progresse" >
                        <?php
                            if(is_array($data['taskDoing'])){
                                 for($i = 0 ;$i < count($data['taskDoing']) ; $i++){ ?>
                            <!-- Start task -->
                            <div class="card mb-3 cursor-grab taskstodo">
                                <div class="card-body">
                                <i class="bi bi-x-circle d-flex justify-content-end " onclick="deleteTask(event)" style="cursor:pointer;"></i>
                                    <div>
                                        <h4 class="mb-0 title"><?= $data['taskDoing'][$i]->TITLE?></h4>
                                        <h5 class="ID_task">ID:<?= $data['taskDoing'][$i]->ID_TASK?></h5>
                                    </div>
                                    <p class="mb-0"><?= $data['taskDoing'][$i]->DESCRIPTION?></p>
                                    
                                    <div class="d-flex justify-content-end gap-2 align-items-center show-hide">
                                        <br>
                                        <i class="bi bi-recycle" style="cursor:pointer;"></i>
                                        <i class="bi bi-plus-square" onclick="show(event)"></i>
                                        <i class="bi bi-dash-square" onclick="hide(event)"></i>
                                        
                                    </div>
                                    

                                    <div class="text-right row">
                                        <p class="text-muted mb-1 d-inline-block pourcenatge col-6"><?= $data['taskDoing'][$i]->progress?>%</p>
                                        <p class="col-6 d-flex justify-content-end"><?= $data['taskDoing'][$i]->DEADLINE?></p>
                                    </div>
                                    <?php for($j=0;$j< $data['taskDoing'][$i]->NUMBER_CHECKBOXES;$j++){ ?>
                                    <div class="form-check ab">
                                    <?php $dataNb = $data['taskDoing'][$i]->nbcheck?>
                                        <input class="form-check-input allcheckboxes" type="checkbox" value="<?= $dataNb[$j]->ID_S_TASK ?>"
                                            id="flexCheckDefault" onclick="myfunction(event)" <?php  if(strcmp(($dataNb[$j]->STAT),"checked") == 0 ){echo "checked";} ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            task <?= $j+1 ?>
                                            <input type="hidden" value="<?= $dataNb[$j]->ID_S_TASK?>">
                                        </label>
                                    </div>
                                    <?php }?>
                                    
                                    <div class="progress " style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="arrow d-flex flex-row justify-content-around mb-2">
                                        <i class="bi bi-arrow-bar-left" onclick="move_task_left(event)" style="cursor:pointer;"></i>
                                        <i class="bi bi-arrow-bar-right" onclick="move_task_right(event)" style="cursor:pointer;"></i>
                                </div>
                            </div>
                            
                            <!-- End task -->
                                <?php }}?>


                        </div>
                        <!-- Button trigger modal -->
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add task
                        </button>
                    </div>



                </div>
            </div>
            <!-- End lane -->

                <!-- Start lane -->
            <div class="col-12 col-lg-4">
                <div class="card mb-3">
                    <div class="card-header bg-light d-flex justify-content-between">
                        <h3 class="card-title h5 mb-1">
                            done
                        </h3>
                        <button class="btn btn-info" onclick="sortby_date(event)">sort by date</button>
                        
                        <!-- <small class="mb-0 text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </small> -->
                    </div>
                    <div class="card-body">
                        <div class="tasks todo" id="done">
                        <?php
                            if(is_array($data['taskToDone'])){
                                 for($i = 0 ;$i < count($data['taskToDone']) ; $i++){ ?>
                            <!-- Start task -->
                            <div class="card mb-3 cursor-grab taskstodo">
                                <div class="card-body">
                                <i class="bi bi-x-circle d-flex justify-content-end " onclick="deleteTask(event)" style="cursor:pointer;"></i>
                                    <div>
                                        <h4 class="mb-0 title"><?= $data['taskToDone'][$i]->TITLE?></h4>
                                        <h5 class="ID_task">ID:<?= $data['taskToDone'][$i]->ID_TASK?></h5>
                                    </div>
                                    <p class="mb-0"><?= $data['taskToDone'][$i]->DESCRIPTION?></p>
                                    
                                    <div class="d-flex justify-content-end gap-2 align-items-center show-hide">
                                        <br>
                                        <i class="bi bi-recycle" style="cursor:pointer;"></i>
                                        <i class="bi bi-plus-square" onclick="show(event)"></i>
                                        <i class="bi bi-dash-square" onclick="hide(event)"></i>
                                        
                                    </div>
                                    

                                    <div class="text-right row">
                                        <p class="text-muted mb-1 d-inline-block pourcenatge col-6"><?= $data['taskToDone'][$i]->progress?>%</p>
                                        <p class="col-6 d-flex justify-content-end deadline"><?= $data['taskToDone'][$i]->DEADLINE?></p>
                                    </div>
                                    <?php for($j=0;$j< $data['taskToDone'][$i]->NUMBER_CHECKBOXES;$j++){ ?>
                                    <div class="form-check ab">
                                    <?php $dataNb = $data['taskToDone'][$i]->nbcheck?>
                                        <input class="form-check-input allcheckboxes" type="checkbox" value="<?= $dataNb[$j]->ID_S_TASK ?>"
                                            id="flexCheckDefault" onclick="myfunction(event)" <?php  if(strcmp(($dataNb[$j]->STAT),"checked") == 0 ){echo "checked";} ?>>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            task <?= $j+1 ?>
                                            <input type="hidden" value="<?= $dataNb[$j]->ID_S_TASK?>">
                                        </label>
                                    </div>
                                    <?php }?>
                                    
                                    <div class="progress " style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="arrow d-flex flex-row justify-content-around mb-2">
                                        <i class="bi bi-arrow-bar-left" onclick="move_task_left(event)" style="cursor:pointer;"></i>
                                        <i class="bi bi-arrow-bar-right" onclick="move_task_right(event)" style="cursor:pointer;"></i>
                                </div>
                            </div>
                            
                            <!-- End task -->
                                <?php }}?>


                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add task
                        </button>
                    </div>



                </div>
            </div>
            <!-- End lane -->

            </div>
        </div>


</div><!-- End Hero -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" class="modal-content" style="color:black;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">add task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column gap-2"  >
                    <label >TITLE</label>
                    <input type="text" name="TITLE" id="">
                    <label >DESCRIPTION</label>
                    <input type="text" name="DESCRIPTION" id="">
                    <label >DEADLINE</label>
                    <input type="date" name="DEADLINE" id="">
                    <label >NUMBER_CHECKBOXES</label>
                    <input type="number" name="NUMBER_CHECKBOXES" min="1" max="10" id="">
                    <label >STAT</label>
                    <select name="STAT" id="">
                        <option value="to_do">to do</option>
                        <option value="doing">doing</option>
                        <option value="done">done</option>
                    </select>
                    <!-- <input type="text" name="progress" id=""> -->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submitTask" value="add">
                </div>
            </form>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





    <!-- Vendor JS Files -->
    <script src="<?php echo ASSETS?>/vendor/aos/aos.js"></script>
    <script src="<?php echo ASSETS?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETS?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo ASSETS?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo ASSETS?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo ASSETS?>/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?php echo ASSETS?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo ASSETS?>/js/dragAndDrop.js"></script>
    <script src="<?php echo ASSETS?>/js/load.js"></script>
    <script>
        
        
    </script>
</body>

</html>