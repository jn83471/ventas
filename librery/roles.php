<?php
	/**
	 * 
	 */
	declare (strict_types = 1);
	class Roles extends Conexion
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function setroles(){
			 try {
	            $this->db->pdo->beginTransaction();
	            $listRoles = array("Admin","User");
	            $where = " WHERE Role = :Role";
	            foreach ($listRoles as $key => $value){
	                $roles = $this->db->selectone("role",'troles',$where,array('Role' => $value));
	                if (is_array($roles)){
	                    if (0 == count($roles['results'])){
	                        $query = "INSERT INTO troles (role) VALUES (:Role)";
	                        $sth = $this->db->pdo->prepare($query);
	                        $sth->execute((array)$this->rolesf(array($value)));
	                    }
	                }else{
	                    break;
	                    return $roles;
	                }
	            }
	            $this->db->pdo->commit();
	        } catch (\Throwable $th) {
	            $this->db->pdo->rollBack();
	            return $th->getMessage();
	        }
		}

		public function rolesf(array $array){
			return new class($array){
            var $Role;
            function __construct($array){
                if(0 < count($array)){
                    $this->Role = $array[0];
                }
            }
        	};
		}


	}
?>