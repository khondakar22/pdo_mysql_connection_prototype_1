<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$local_server="localhost";
$user_name="root";
$passowrt= "";

try {
    
$mysql_connect=new PDO("mysql:host=$loal_server;dbname=db_smile_mobile",$passowrt, $user_name);
$mysql_connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo 'Connection successfully';
    
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();

    $mysql_connect=NULL;
}

class person{
   
   var $name; // The data / variables inside a class (ex; var $name) called 'properties'
   function set_name($new_name){
       $this->name=$new_name;
   }
   function get_name(){
       return $this->name; //Don't forget in a class, variables are called 'properties' amd functions are called 'methods';
   }
   
   
   
}
