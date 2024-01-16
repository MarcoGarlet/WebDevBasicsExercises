<?php 
include("conn.php");
$username=$_POST['username'];
$password=hash('sha256',$_POST['password']); // Using a cryptographic hash function with a salt, such as bcrypt, is a more secure choice for password hashing.


$checklogin="SELECT * FROM Users WHERE username=? AND password=?";
$query = $connection->prepare($checklogin);
$query->bind_param("ss",$username,$password);
$query->execute() or die($connection->error);
$query->store_result();
$count = $query->num_rows;
if($count==1)
   {
      header("Location:index.html");
   }
   else{
    printf("<h1>fail %s,%s</h1>",$username,$password);
    echo $query->result_array;
   }
 ?>