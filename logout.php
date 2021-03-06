<?php 
session_start();

session_destroy();
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
        </style>
    </head>
    <body>
        <div class="container">
            <p><a href="register.php">Goto register</a></p>
            Or
            <p><a href="login.php">Goto login</a></p>
            <br><br>
            <h2>GoodBye!</h2>
        </div>
    </body>
</html>