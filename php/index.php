<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>301 группа</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="ayth.php"><div>
        <input type="text" placeholder="Введите имя пользователя" name="login">
        <input type="text" placeholder="Введите пароль" name="pass">
</div>
<div>
<button>Войти</button>
</div>
</form>    
<div class="reg_form">
        <h1>Регистрация</h1>
        <form action="/../reg.php" method="POST">
            <input type="text" placeholder="Введите логин" id="login-reg" name="login-reg">
            <input type="text" placeholder="Введите пароль" id='pass-reg' name="pass-reg">
            <input type="submit" value="Зарегистрироваться">
            </form>
    </div>
</body>

</html>