<?php 

Class User 
{
    function login($POST)
	{
		$DB = new Database();
		
		$_SESSION['error'] = "";
		if(isset($POST['email']) && isset($POST['password']))
		{

			$arr['email'] = $POST['email'];
			$arr['password'] = $POST['password'];
            echo "<br>" . $arr['password'] . "<br>" ;
			$query = "SELECT * FROM users WHERE EMAIL like :email && PASSWORD like :password LIMIT 1";
			$data = $DB->read($query,$arr);
            
			if(is_array($data))
			{
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['iduser'] = $data[0]->ID_USER;
                $_SESSION['login'] = "YES";
				header("Location:". ROOT . "kanban");
				die;
			}else{
				$_SESSION['error'] = "wrong username or password";
			}
		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

	}

	function signup($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']) && isset($POST['passwordconf'])  && isset($POST['email']) && isset($POST['name']))
		{
            if(strcmp($POST['passwordconf'],$POST['password']) == 0)
            {
                $arr['username'] = $POST['username'];
                $arr['password'] = $POST['password'];
                $arr['email'] = $POST['email'];
                $arr['name'] = $POST['name'];
                
    
                $query = "insert into users (NAME,USERNAME,PASSWORD,EMAIL) values (:name,:username,:password,:email)";
                $data = $DB->write($query,$arr);
                if($data)
                {
                    echo "<script>registre succecfly</script>";
                    header("Location:". ROOT . "registre");
                    die;
                }else{
                    echo "<script>error try again</script>";
                    header("Location:". ROOT . "registre");
                    die;
                }
            }else{
                echo "<script>password doesnt match</script>";
                header("Location:". ROOT . "registre");
                die;
            }

		}else{
            echo "<script>please fill all the form correctly</script>";
            header("Location:". ROOT . "registre");
        }
	}

    function check_log(){
        if(isset($_SESSION['login']))
        {
            return 1;
        }else{
            return 0;
        }
    }
}
