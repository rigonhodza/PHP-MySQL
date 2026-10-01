<?php

$user='root';
$pass='';
$server='localhost';
$db_name='movie_project';

try{
    $conn=new PDO("mysql:host=$server;dbname=$db_name",'root',"");
   echo "Connected successfully!";


}catch(Exception $error){
    echo "Error:".$error->getMessage();
    
}




?>


//