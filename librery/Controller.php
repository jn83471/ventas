<?php 
	/**
	 * 
	 */
	class controller extends AnonymousClasses
	{
		
		public function __construct()
		{
			$this->views=new views();
			$this->role=new Roles();
			$this->loadclassmodels();
			session::start();
		}
		public function loadclassmodels(){
			//optine el nombre de la clase
			$class=get_class($this);
			$array= explode("Controller", $class);
			$model=$array[0]."Model";
			$path="models/".$model.".php";
			if(file_exists($path)){
				require_once $path;
				$this->model=new $model();
			}
		}
	}
?>