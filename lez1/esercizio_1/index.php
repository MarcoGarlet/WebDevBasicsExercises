<html>
    <body>
        <?php 
            session_start();
            if (!isset($_SESSION['user_id'])) { 
                echo <<<EOD
                <form name="loginForm" id="loginForm" method="post" action="login.php">
                Email: <input type="text" name="email" id="email" required>
                Password: <input type="password" name="password" id="password" required> <br/>
                <input type="submit" name="login" id="login" value="Login"/>
                EOD;
            }   
            else {
                printf("<h4>%s logged</h4>",$_SESSION['user_id']);
                echo <<<EOD
                <form name="loginForm" id="loginForm" method="post" action="logout.php">
                <input type="submit" name="logout" id="logout" value="Logout"/>
                EOD;
            }
            ?>
        </form>
    </body>
</html>