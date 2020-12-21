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
		}
		public function Register(){
			$model1=session::getsession("model1");
			$model2=session::getsession("model2");
			if($model1!=null && $model2!=null )
			{
				
	            $array1 = unserialize($model1);
	            $array2 = unserialize($model2);
	            if($array1 != null && $array2!=null){
	                $model1 = $this->TUser($array1);
	                $model2 = $this->TUser($array2);
	                $_SESSION['model1']="";
	                $_SESSION['model2']="";
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
			$model1=array(
				$_POST["nid"],
				$_POST["name"],
				$_POST["lastname"],
				$_POST["email"],
				$_POST["password"],
				$_POST["phone"],
				$_POST["user"]	
			);
			session::setsession("model1",serialize($model1));
			
			$model2=array(
				$nid,
				$name,
				$lastname,
				$email,
				$password,
				$phone,
				$user
			);
			session::setsession("model2",serialize($model2));
			header('Location: Register');
		}
	}
?>