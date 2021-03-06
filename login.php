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
                margin-top: 60px;
            }
            
            .container {
                width: 300px;
                height: 300px;
                border: 0.5px solid #808080;
                padding: 30px;
            }
            .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <p>
            <?php
            if(isset($_POST['email']) && isset($_POST['password'])){
                if (!empty($_POST['email']) && !empty($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    if ($email != $_SESSION['email'] || $password != $_SESSION['password']) {
                        echo '<div class="error">Incorrect email or password</div>';
                    }else{
                        header("Location: index.php");
                    }
                }else{
                    echo '<div class="error">The field must not be empty!</div>';
                }
            }
            ?>
        </p>
        <div class="container">
            <h3>Login</h3>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                Email:<br><input type="email" name="email" placeholder="Enter email">
                <br><br>
                Password:<br><input type="password" name="password" placeholder="Enter password">
                <br><br><br><br>
                <input type="submit" name="submit" value="Login">
                <a href="register.php"><input type="button" value="Goto Register"></a>
            </form>
        </div>
    </body>
</html>
