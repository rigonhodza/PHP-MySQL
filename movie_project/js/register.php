<?php
include_once("config.php");


if(isset($_POST['submit'])){
    //1. I marrim te dhenat prej input formes
    $emri=$_POST['emri'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $roli=$_POST['roli'];  

    //2. Bojme check per empty values
    if(empty ($emri)||
    empty($username)||
    empty($email)||
    empty($password)||
    empty($roli)
    ){
     echo "Ypu have not filled in all the fields.";
    }else{
        //3. Check if user exits
        $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
        $tempSql=$conn->prepare($sql);
        $tempSql->execute();

        if($tempSql->rowCount()>0){
            echo "User with email/username already exits!";
            header("refresh:2; url=index.php");
        }else{
            //4, Insert new user into database
            $hashedPassword=password_hash($password,);
            $query="INSERT INTO users(emri,username,email,password,roli) VALUES ('$emri','$username','$emai;','$password','$roli')";
            $insertSQl=$conn->prepare($query);
            $insertSql->execute();
            echo "New user created succesfully, in 2 seconds please login!";
            header("refresh:2; url=login.php");
        }
    }
              
}


?>