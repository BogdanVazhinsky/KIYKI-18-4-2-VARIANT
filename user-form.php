<html>
    <head>
        <title>registration</title>
        <style>
            body{
                width: 400px;
                height: 400px;
                background-image: linear-gradient(45deg, #f8a261, #6e9fc9), url(https://html5book.ru/wp-content/uploads/2016/12/pale-image.jpg);
                background-blend-mode: overlay;
                text-align: center;
            }
            form{
                border: 50 px;
                border-color: yellow;
                border-style: outset;
                background-color:red;
                position: fixed;
                top: 50%;
                left: 50%;
                margin: -100px 0 0 -200px; 
                width: 300px;
                height: 175px;
                display: inline-block;
            }
            input[type = text]{
                
                border-radius: 25%;
                width: 250px;
                
            }
            p{
                font-family:Georgia, 'Times New Roman', Times, serif;
                font-size:15pt;
            } 
        </style>
    </head>
    <body>
        <form action="LB_4.php" method="post" >
            <p>Пожалуйста,введите имя пользователя!</p> 
            <input type="text" name = "user_name"> </br> </br>
            <input type="submit" value="Send"> 
        </form>
    </body>
</html>