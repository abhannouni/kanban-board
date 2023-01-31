<?php 

Class Controller
{

	protected function view($view,$data = [])
	{
		if(file_exists("../app/views/home/". $view .".php"))
 		{
 			include_once "../app/views/home/". $view .".php";
 		}else{
 			include_once "../app/views/404.php";
 		}
	}

	protected function loadModel($model)
	{
		if(file_exists("../app/models/". $model .".php"))
 		{
 			include_once "../app/models/". $model .".php";
 			return $model = new $model();
 		}

 		return false;
	}


}