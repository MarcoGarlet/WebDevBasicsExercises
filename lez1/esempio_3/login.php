<?php 
include("conn.php");
$username=$_POST['username'];
$password=hash('sha256',$_POST['password']);

$checklogin = 'SELECT * FROM Users WHERE username=:username AND password=:password'; // Using a cryptographic hash function with a salt, such as bcrypt, is a more secure choice for password hashing.


$stmt = $conn->prepare($checklogin);
$stmt->execute([':username'=>$username,':password'=>$password]);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if($result)
   {
      // Note: The following line sets a cookie in a simplified manner for teaching purposes.
      // Avoid using this method in production environments due to potential security risks
      setcookie('user_id', $result['id'], time() + (86400 * 30), "/");  
      header("Location:index.php");
   }
   else{
    printf("<h1>fail %s,%s</h1>",$username,$password);
    echo $query->result_array;
   }
 ?>