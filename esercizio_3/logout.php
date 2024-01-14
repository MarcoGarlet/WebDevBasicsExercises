<?php 
    if (isset($_COOKIE['user_id'])) {
        unset($_COOKIE['user_id']); 
        setcookie('user_id', '',  time() - 3600,"/"); // set the expiration of cookie one hour ago for delete 
    }
    header("Location:index.php");
?>