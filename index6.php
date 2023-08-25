<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta data-safe="content-type" content="text/html; charset=utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <script src="./main.js"></script>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin-top: 100px;
            text-align: center;
        }
        
        * {
            box-sizing: border-box
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            color: #E6E6FA;
            background: #222;
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #E6E6FA;
            color: #222;
            outline: none;
        }
        
        hr {
            border: 1px solid #222;
            margin-bottom: 25px;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            box-shadow: 2px 2px 25px #4CAF50;
            border-radius: 10px;
        }
        
        button:hover {
            opacity: 1;
        }
        
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
            box-shadow: 2px 2px 25px #f44336;
            border-radius: 10px;
        }
        
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }
        
        .container {
            margin: 0 auto;
            width: 500px;
            height: 660px;
        }
        
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .vxod {
            font-family: 'Courier New', Courier, monospace;
            text-decoration: none;
            color: #E6E6FA;
            background-color: #222;
            box-shadow: 2px 2px 10px #222;
            border-radius: 2px;
            font-size: 25px;
            transition: 0.5s;
        }
        
        .vvod {
            box-shadow: 2px 2px 10px #222;
            border-radius: 10px;
        }
        
        @media screen and (max-height:720px) {
            body,
            .container {
                margin-top: 50px;
                font-size: 90%;
            }
        }
    </style>
</head>

<body>
    <?php
    if ($_COOKIE['user'] == ''):



    ?>
    <form action="auth.php" method="post">
        <div class="container">
            <h1>Форма авторизации</h1>
            <p>Пожалуйста, заполните эту форму, чтобы войти в учетную запись.</p>
            <hr>

            <label for="login"><b>Логин</b></label>
            <input id='log' class="vvod" type="text" placeholder=" Введите логин" name="login" required>

            <label for="psw"><b>Пароль</b></label>
            <input id='pass' class="vvod" type="password" placeholder=" Введите пароль" name="psw" required>
            <div class="clearfix">
                <button type="button" onclick="clearFields()" value="Clear" class="cancelbtn">Отменить (Clear)</button>
                <button type="submit" class="signupbtn">Авторизироваться</button>

                <script type="text/javascript">
                    function clearFields() {
                        document.getElementById("log").value = ""
                        document.getElementById("pass").value = ""
                    }
                </script>
            </div>
        </div>
    </form>
    <?php else:?>
        <p>Доброго времени бытия <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href= '/exit.php'>здесь</a>. <br> <br>Чтобы переместиться на главную страницу нажмите <a href= '/index.html'>здесь</a>. </p>
    <?php endif;?>
</body>

</html>