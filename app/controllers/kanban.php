<?php

Class kanban extends Controller 
{
	function index()
	{
        $user = $this->loadModel("user");
        $task = $this->loadModel("tasks");
        $data['page_title'] = "book";
        $data['stat'] = "login";
        $data['taskToDo'] = $task->showTask("to_do");
        $data['taskDoing'] = $task->showTask("doing");
        $data['taskToDone'] = $task->showTask("done");
        // $data['checkboxes'] = $task->checkboxes();
        if(is_array($data['taskToDo'])){

            for($i=0;$i<count($data['taskToDo']);$i++){
                $ab = $task->checkboxes($data['taskToDo'][$i]->ID_TASK);
                $data['taskToDo'][$i]->nbcheck = $ab;
            }
        }
        if(is_array($data['taskDoing'])){

            for($i=0;$i<count($data['taskDoing']);$i++){
                $abd = $task->checkboxes($data['taskDoing'][$i]->ID_TASK);
                $data['taskDoing'][$i]->nbcheck = $abd;
            }
        }
        if(is_array($data['taskToDone'])){

            for($i=0;$i<count($data['taskToDone']);$i++){
                $abc = $task->checkboxes($data['taskToDone'][$i]->ID_TASK);
                $data['taskToDone'][$i]->nbcheck = $abc;
            }
        }
        // show($data['taskToDo']);
        if(isset($_GET['progress']) && isset($_GET['ID_TASK'])){
            $task->updateprogresse($_GET);
            die;
        }
        if(isset($_POST['submitTask'])){
            if(isset($_POST["TITLE"]) && isset($_POST["DESCRIPTION"]) && isset($_POST["DEADLINE"]) && isset($_POST["NUMBER_CHECKBOXES"]) && isset($_POST["STAT"]) ){
                if(empty($_POST["TITLE"]) || empty($_POST["DESCRIPTION"]) || empty($_POST["DEADLINE"]) || empty($_POST["NUMBER_CHECKBOXES"]) || empty($_POST["STAT"]) ){
                    echo '<div class="alert alert-danger" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                    field empty
              </div>';
                }else{
                    $task->addTask($_POST);
                }
            }else{
                echo '<div class="alert alert-danger" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                    isset
              </div>';
            }
        }

        
        if($user->check_log()==1){
            $data['stat'] = "logout";
            $this->view('kanban',$data);
        }else{
            $data['stat'] = "login";
            header("Location:". ROOT . "register");
            die;
        }
	}

    
}