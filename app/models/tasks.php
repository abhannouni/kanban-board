<?php
class tasks{
    function addTask($POST){
        $DB = new Database();
        $arr["TITLE"] = $_POST["TITLE"];
        $arr["DESCRIPTION"] = $_POST["DESCRIPTION"];
        $arr["DEADLINE"] = $_POST["DEADLINE"];
        $arr["NUMBER_CHECKBOXES"] = $_POST["NUMBER_CHECKBOXES"];
        $arr["progress"] = 0;
        $arr["STAT"] = $_POST["STAT"];
        $arr["ID_USER"] = $_SESSION['iduser'];
        $arr["ID_USER_TASK"] = $_SESSION['iduser'];
        $query = "insert into tasks (TITLE,DESCRIPTION,DEADLINE,NUMBER_CHECKBOXES,progress,STAT,ID_USER,ID_USER_TASK) values (:TITLE,:DESCRIPTION,:DEADLINE,:NUMBER_CHECKBOXES,:progress,:STAT,:ID_USER,:ID_USER_TASK)";
        $data = $DB->write($query,$arr);
        if($data)
        {  
            $arr1 = [];
            $query2 = "SELECT ID_TASK FROM tasks ORDER BY ID_TASK DESC LIMIT 1";
            $ab = $DB->read($query2,$arr1);
            $arr2["ID_TASK"] = $ab[0]->ID_TASK;
            $arr2["STAT"] = "not_checked";
            $query3 = "insert into smalltask (ID_TASK,STAT) values (:ID_TASK,:STAT)";
            for($i=0;$i<$arr["NUMBER_CHECKBOXES"];$i++)
            {
                $data1 = $DB->write($query3,$arr2);
            }
            
            echo '<div class="alert alert-success" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                add succefly
                </div>';
        
            // header("Location:". ROOT . "kanban");
        }else{
            echo '<div class="alert alert-danger" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                failed
              </div>';
        }
    }
    function updateTask($POST){
        $DB = new Database();
        $arr["TITLE"] = $_POST["TITLE"];
        $arr["DESCRIPTION"] = $_POST["DESCRIPTION"];
        $arr["DEADLINE"] = $_POST["DEADLINE"];
        // $arr["NUMBER_CHECKBOXES"] = $_POST["NUMBER_CHECKBOXES"];
        // $arr["progress"] = 0;
        // $arr["STAT"] = $_POST["STAT"];
        $arr["ID_TASK"] = $_POST["ID_TASK"];
        $arr["ID_USER"] = $_SESSION['iduser'];
        $arr["ID_USER_TASK"] = $_SESSION['iduser'];
        $query = "update tasks set TITLE = :TITLE, DESCRIPTION = :DESCRIPTION, DEADLINE = :DEADLINE, ID_USER = :ID_USER, ID_USER_TASK = :ID_USER_TASK where ID_TASK = :ID_TASK" ;
        $data = $DB->write($query,$arr);
        if($data)
        {  
            echo '<div class="alert alert-success" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                add succefly
              </div>';
        }else{
            echo '<div class="alert alert-danger" role="alert" style="position:fixed;top:60;right:50;width:40vw">
                failed
              </div>';
        }

    }
    function updateprogresse($GET){
        $DB = new Database();
        $arr = array(
            'ID_TASK'=>$_GET["ID_TASK"],
            'progress'=>$_GET["progress"]
        );
        $query = "update tasks set progress = :progress where ID_TASK = :ID_TASK" ;
        $data = $DB->write($query,$arr);
    }
    function changeStatTask($GET){
        $DB = new Database();
        $arr = array(
            'ID_TASK'=>$_GET["ID_TASK"],
            'STAT'=>$_GET["STAT"]
        );
        $query = "update tasks set STAT = :STAT where ID_TASK = :ID_TASK" ;
        $data = $DB->write($query,$arr);
    }
    function showTask($stat){
        $DB = new Database();
		$arr['STAT'] = $stat;
		$query = "SELECT * FROM tasks WHERE STAT = :STAT ";
		$data = $DB->read($query,$arr);
        // echo $data[0]->ID_TASK;
        return $data;
    }
    function checkboxes($id){
        $DB = new Database();
		$arr['ID_TASK'] = $id;
        $query = "SELECT * FROM smalltask WHERE ID_TASK = :ID_TASK";
        $data = $DB->read($query,$arr);
        return $data;
    }

    function changeStatCheck($GET){
        $DB = new Database();
        $arr["STAT"] = $_GET['STATCHECKBOX'];
        $arr["ID_S_TASK"] = $_GET['ID_S_TASK'];
        $query = "UPDATE smalltask set STAT = :STAT where ID_S_TASK = :ID_S_TASK";
        $data = $DB->write($query,$arr);
        return $data;
    }

    function deleteTask($GET){
        $DB = new Database();
        $arr["ID_TASK"] = $_GET['ID_DELETE'];
        $query = "DELETE FROM `tasks` WHERE `tasks`.`ID_TASK` = :ID_TASK";
        $data = $DB->write($query,$arr);
        return $data;
    }
    
    
}