<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>

<!Doctype html>
<html>
<title>User Registration Form </title>
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
        if(isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);

                if(!empty($email) && !empty($password) && !empty($name)){
                    //set session variables
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;

                    header("Location: login.php");
                }else{
                    echo '<div class=error>The form field must not be empty!</div>';
                }
            }
        }
    ?>
    
        <div class="container">
            <h3>User Registration Form</h3>
                <!-- <form action="index.php" method="POST"> -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                Full Name:<br><input type="text" name="name" placeholder="Enter full name">
                <br><br>
                Email:<br><input type="email" name="email" placeholder="Enter email">
                <br><br>
                Password:<br><input type="password" name="password" placeholder="Enter password">
                <br><br><br><br>
                <input type="submit" name="submit" value="Sign-up"> Or 
                <a href="login.php"><input type="button" value="Login"></a>
            </form>
        </div>
    </body>
</html>

