<?php
	/**
	 * 
	 */
	class QueryManager
	{
		public $pdo;
		public function __construct($user,$password,$db)
		{
			try{

				$this->pdo=new PDO("mysql:host=localhost;dbname=".$db.';charset=utf8',$user,$password,[
					PDO::ATTR_EMULATE_PREPARES=>false,
					PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
				]);
			}
			catch(Throwable $th){
				print "error ".$th->getMessage();
			}
		}
	}
?>