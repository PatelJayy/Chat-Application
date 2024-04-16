<?php
//    define('DBUSER', "root");
//    define('DBPASS', " ");
//    define('DBNAME', "mychat_db");
//    define('DBHOST', "Localhost");
class Database
{
 
   private $con;

   function __construct()
   {

    $this->con=$this->connect();

   }

   private function connect()
   {
    
    $string = "mysql:host=localhost;dbname=mychat_db";
    
        // $string="mysql:host=localhost;mychat_db";
        try
        {
            $connection = new PDO($string,DBUSER,DBPASS);
            return $connection;
        }catch(PDOException $e)
        {
            echo $e->getMessage();
            die;
        }

        return false;


   }

}