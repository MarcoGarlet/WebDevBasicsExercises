<?php 
session_start();
include("conn.php");

$username=$_POST['username'];
$password=hash('sha256',$_POST['password']);

$checklogin = 'SELECT * FROM Users WHERE username=:username AND password=:password';

$stmt = $conn->prepare($checklogin);
$stmt->execute([':username'=>$username,':password'=>$password]);

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
