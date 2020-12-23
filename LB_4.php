<?php

if(empty($_POST['user_name'])) {
    session_start();
}
else{
    session_start();
    $_SESSION['logged_user'] = $_POST['user_name'];
}

 ?>

<html>
    <head>
        <title>Главная страница</title>
        <style>
            div{
                left: 50%;
                position: fixed;
                font-size:xx-large;
                width: auto;
                border-color: blue;
                border-style: solid;
                background-color:green;
                position: absolute;
            }
            body{
                background-color:orange;
            }
            b{
                font-size:larger;
            }
        </style>
    </head>
    <body>
        <div>
            Добро пожаловать! </br>
           <?php print_r($_SESSION['logged_user']) ?>
        </div>
        <a href="user-form.php"><b>&#8592; Вернутся до формы регистрации</b> </a> </br>
    </body>
</html>


