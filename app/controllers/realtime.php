<?php

Class realtime extends Controller 
{
    function index(){
        $task = $this->loadModel("tasks");
        $user = $this->loadModel("user");
        if(isset($_GET['progress']) && isset($_GET['ID_TASK'])){
            $task->updateprogresse($_GET);
        }
        if(isset($_GET['STAT']) && isset($_GET['ID_TASK'])){
            $task->changeStatTask($_GET);
        }
        if(isset($_GET['STATCHECKBOX']) && isset($_GET['ID_S_TASK'])){
            $task->changeStatCheck($_GET);
        }
        if(isset($_GET['ID_DELETE'])){
            $task->deleteTask($_GET);
        }
    }
}