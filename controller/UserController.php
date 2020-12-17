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
			if(isset($_SESSION['model1']) && isset($_SESSION["model2"] ))
			{
	            $array1 = unserialize($_SESSION['model1']);
	            $array2 = unserialize($_SESSION['model2']);
	            if($array1 != null && $array2!=null){
	                $model1 = $this->anonim->TUser($array1);
	                $model2 = $this->anonim->TUser($array2);
	                $this->views->render($this,"register",$model1,$model2);
	                //$this->views->render($this,"register",null,null); 
	            }else{
	                $this->views->render($this,"register",null,null); 
	            }
	        }else{
	            $this->views->render($this,"register",null,null); 
	        }
			
		}
		public function adduser(){
			if(empty($_POST["nid"])){
				$nid="ingrese identidad";
				$execute=false;
			}
			if(empty($_POST["name"])){
				$name="ingrese su nombre";
				$execute=false;
			}
			if(empty($_POST["lastname"])){
				$lastname="ingrese su apellido";
				$execute=false;
			}
			if(empty($_POST["email"])){
				if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
					$email="ingrese su email";
					$execute=false;
				}
			}
			if(empty($_POST["password"])){
				$password="ingrese su contraseña";
				$execute=false;
			}
			if(empty($_POST["phone"])){
				$phone="ingrese su telefono";
				$execute=false;
			}
			if(empty($_POST["user"])){
				$user="ingrese su usuario";
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
			$_SESSION["model2"]=serialize(array(
				$nid,
				$name,
				$lastname,
				$email,
				$password,
				$phone,
				$user
			));
			header('Location: Register');
		}
	}
?>