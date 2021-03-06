<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<!Doctype html>
<html>
    <head>
        <title>Login form</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                margin: 30px;
            }
            .container {
                margin-top: 30px;
                width: 400px;
                height: 400px;
                border: 0.5px solid #808080;
                padding: 30px;
            }
            .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <?php
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                echo '<div class="container">';
                        echo "<h3>Welcome <strong> " .$_SESSION['name']. "</strong> </h3>";
                        echo 'You\'re logged-in as <strong>'. $_SESSION['email']. ' </strong>';
                        echo '<h3>Task Description</h3>';
                        echo '<p>A task to create an authentication system and store data in sessions or cookies variables.</p>';
                        
                        echo ' <br><br><p><a href="logout.php"> Logout </a></p>';
                echo '</div>';
            }else{ 
                echo 'You are not logged in ';
                echo ' <p><a href="login.php"> Login </a></p>';
                echo 'Or';
                echo ' <p><a href="register.php"> Register </a></p>';
            }
        ?>
        
    </body>
</html>
