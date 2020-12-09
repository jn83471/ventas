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
				print $th->getMessage();
			}
		}
		public function selectone($attr,$table,$where,$param){
			try{
				$where = $where ?? "";
	            $query = "SELECT ".$attr." FROM ".$table.$where;
	            $sth = $this->pdo->prepare($query);
	            $sth->execute($param);
	            $response = $sth->fetchAll(PDO::FETCH_ASSOC);

				return array("results"=>$response);
			}
			catch(Throwable $th){
				return $th->getMessage();
			}
		}
	}
?>