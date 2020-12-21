<?php 
	/**
	 * 
	 */
	class views
	{
		public function render($controllers,$view,$model1,$model2,$model3=""){
			$array= explode("Controller", get_class($controllers));
			$controller=$array[0];
			require_once VS.DFT.'head.php';
			require_once VS.$controller.'/'.$view.'.php';
			require_once VS.DFT.'footer.php';
		}
	}
?>