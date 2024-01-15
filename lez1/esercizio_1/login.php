<?php 
session_start();
include("conn.php");

$email=$_POST['email'];
$password=hash('sha256',$_POST['password']);

$checklogin = 'SELECT * FROM Users WHERE email=:email AND password=:password';

$stmt = $conn->prepare($checklogin);
$stmt->execute([':email'=>$email,':password'=>$password]);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if($result)
   {
      $_SESSION['user_id'] = $result['id'];
      header("Location:index.php");
   }
   else{
    printf("<h1>fail %s,%s</h1>",$username,$password);
    echo $query->result_array;
   }
 ?>
