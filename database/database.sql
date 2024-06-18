<?php
 $userName = 'root';
 $password = '';
 $serverName = 'localhost';


 $conn = mysqli_connect($serverName,$userName,$password);

 if(!$conn){
	 echo 'Error in connecting the database';
 }

 else{

	 $query = "CREATE DATABASE bookstore";
    
    $result = mysqli_query($conn,$query);
    if($result){
        echo "Database created <br>";
    }
    else{
        echo "Error in creating database<br>";
    }
    
    $result1 = mysqli_select_db($conn,"bookstore");
    if($result1){
        echo "Database selected <br>";
    }
    else{
        echo "Error in selecting database<br>";
    }

    $query1 = "CREATE TABLE registration(name varchar(30),username varchar(30),password varchar(30),gender varchar(10),mail varchar(30),number bigint(10));";

    $result3 = mysqli_query($conn,$query1);
    if($result3){
        echo "Table create <br>";
    }
    $query2 = "CREATE TABLE orderbook(fname varchar(30),lname varchar(30),address varchar(30),city varchar(30),state varchar(30),zip varchar(30),cardno varchar(30),ex varchar(30),security varchar(30));";
    $result4 = mysqli_query($conn,$query2);
    if($result4){
        echo "Table create <br>";
    }
 }

?>
