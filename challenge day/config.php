<?php

  $user="root";
  $pass="";
  $server="localhost";
  $dbname="testdb";

  try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
    // echo  "Connected successfully!";

  } catch (Exception $e) {
    echo "Error:". $e->getMessage();
  }
?>

