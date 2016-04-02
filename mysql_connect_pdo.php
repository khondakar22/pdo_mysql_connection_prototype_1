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
    
$mysql_connect=new PDO("mysql:host=$loal_server,$passowrt, $user_name)
    
} catch (Exception $ex) {
    
}
