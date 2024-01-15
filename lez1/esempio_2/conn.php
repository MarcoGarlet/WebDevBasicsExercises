<?php
//connect to database 
$connection = new mysqli("localhost","root","","lab0"); 
if(mysqli_connect_errno()){
    printf("Connection failed: %s\n",mysqli_connect_error());   
    exit(); 
}
?>