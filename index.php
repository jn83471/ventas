<?php
	
	require_once "config.php";

	$Controller="";
	$Method="";
	$params="";
	$url = $_GET['url'] ?? "Index/Index";

	$arrayList = explode("/", $url);
	//var_dump($arrayList);
	if (isset($arrayList[0])) {
		$Controller=$arrayList[0];
	}
	if (isset($arrayList[1])) {
		if ($arrayList[1]!='') {
			$Method= $arrayList[1];
		}
	}
	if (isset($arrayList[2])) {
		if ($arrayList[2]!='') {
			$params= $arrayList[2];
		}
	}

	spl_autoload_register(function($class){
	   //echo $class;
	    if (file_exists(LBS.$class.".php")){
	       require LBS.$class.".php";
	    }
	});
	$controller=$Controller."Controller";
	$Controllerpath="controller/".$controller.".php";
	if(file_exists($Controllerpath)){
		require_once $Controllerpath;

		$papas=new $controller();
		if(isset($Method)){
			if(method_exists($papas, $Method)){
				if(isset($params)){
					$papas->{$Method}($params);
				}
				else{
					$papas->{$Method}();
				}
			}
			else{
				$Controllerpath="controller/errorController.php";
				require_once $Controllerpath;
				$papas=new ErrorController();
				$papas->Error($url);
			}
		}
		
	}
	else{
		echo $Controllerpath;
		$Controllerpath="controller/errorController.php";
		require_once $Controllerpath;
		$papas=new ErrorController();
		$papas->Error($url);
	}

	
	//echo $Controller;
	//echo $Method;
	//echo $params;
?>