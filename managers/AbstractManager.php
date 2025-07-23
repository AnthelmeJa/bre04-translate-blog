<?php
    

    class AbstractManager{
        protected PDO $db;
        
        
        public function __construct(){
            
            $host = "db.3wa.io";
            $port = "3306";
            $dbname = "anthelmejarreau_BRE04_translate_blog";
            $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            
            $user = "anthelmejarreau";
            $password = "5933760875c5c37582d6377c4c359532";
            
            
            
            $this->db = new PDO(
                $connexionString,
                $user,
                $password
            );
        }
        
        
    }

?>