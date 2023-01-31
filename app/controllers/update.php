<?php
class update extends Controller 
{
    function index(){
        $task = $this->loadModel("tasks");
        $user = $this->loadModel("user");
        $data['page_title'] = "book";
        $data['stat'] = "login";
        if(isset($_GET['ID']) ){
            $data["ID_TASK"] = $_GET['ID'];
            $data["title"] = $_GET['title'];
            $data["DESCRIPTION"] = $_GET['DESCRIPTION'];
            $data["DEADLINE"] = $_GET['DEADLINE'];
        }
        if(isset($_POST['submitTaskUpdate'])){
            if(isset($_POST["TITLE"]) && isset($_POST["DESCRIPTION"]) && isset($_POST["DEADLINE"])   )
            {
                $task->updateTask($_POST);
                header("Location:". ROOT . "kanban");
                die;
            }
        }

        if($user->check_log()==1){
            $data['stat'] = "logout";
            $this->view('update',$data);
        }else{
            $data['stat'] = "login";
            header("Location:". ROOT . "register");
            die;
        }
    }
}
?>