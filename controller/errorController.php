<?php

	class ErrorController extends controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		public function Error($url){
			$this->views->render($this,"404",$url,null);
		}

	}
?>