<?php
	/**
	 * 
	 */

	class IndexController extends controller
	{
		
		public function __construct()
		{
			parent::__construct();

		}
		public function Index(){
			$this->views->render($this,"index");
		}
	}
?>