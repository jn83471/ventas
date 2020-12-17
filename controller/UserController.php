<?php
	declare( strict_types = 1 );
	/**
	 * 
	 */
	class UserController extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			session_start();
		}
		public function Register(){
			if(isset($_SESSION['model1'])){
	            $array1 = unserialize($_SESSION['model1']);
	            if($array1 != null){
	                $model1 = $this->TUser($array1);
	                $this->views->render($this,"register",$model1);
	            }else{
	                $this->views->render($this,"register",null); 
	            }
	        }else{
	            $this->views->render($this,"register",null); 
	        }
			
		}
		public function adduser(){
			if(empty($_POST["nid"])){
				$nid="ingrese identidad";
				$execute=false;
			}
			$_SESSION["model1"]=serialize(array(
				$_POST["nid"],
				$_POST["name"],
				$_POST["lastname"],
				$_POST["email"],
				$_POST["password"],
				$_POST["phone"],
				$_POST["user"]	
			));
			 header('Location: Register');
		}
	}
?>