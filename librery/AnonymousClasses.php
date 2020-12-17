<?php
	declare (strict_types = 1);
	class AnonymousClasses
	{
    public function TUser(array $array){
        return new class($array){
            public $NID;
            public $Name;
            public $LastName;
            public $Email;
            public $Password;
            public $Phone;
            public $User;
            public $Role;
            public $Image;
            function __construct($array){
                if(0 < count($array)){
                    $this->NID = $array[0];
                    $this->Name = $array[1];
                    $this->LastName = $array[2];
                    $this->Email = $array[3];
                    $this->Password = $array[4];
                    $this->Phone = $array[5];
                    $this->User = $array[6];
                }
            }
        };
    }
}
?>