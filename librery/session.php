<?php
	/**
	 * 
	 */
	class session
	{
		public static function start(){
			session_start();
		}
		public static function getsession($name){
			return $_SESSION[$name];
		}
		public static function setsession($name,$data){
			return $_SESSION[$name]=$data;
		}

		public static function destroy(){
			session_destroy();
		}
	}
?>