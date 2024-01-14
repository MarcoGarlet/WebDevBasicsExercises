<html>
    <body>
        <?php 
            if (!isset($_COOKIE['user_id'])) { 
                echo <<<EOD
                <form name="loginForm" id="loginForm" method="post" action="login.php">
                Username: <input type="text" name="username" id="username" required>
                Password: <input type="password" name="password" id="password" required> <br/>
                <input type="submit" name="login" id="login" value="Login"/>
                EOD;
            }   
            else {
                printf("<h4>%s logged</h4>",$_COOKIE['user_id']);
                echo <<<EOD
                <form name="logoutForm" id="logoutForm" method="post" action="logout.php">
                <input type="submit" name="logout" id="logout" value="Logout"/>
                EOD;
            }
            ?>
        </form>
    </body>
</html>