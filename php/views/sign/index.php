<head>
<link rel="stylesheet" href="source/css/sign.css">
</head>
<form action="php/engine/authorization.php" method="post">				
        <div id="wrapper">
            <div id="login">
                <h1>Вход</h1> 
                <p> 
                    <label > Ваш  логин</label>
                    <input type="text" name="login" placeholder="Введите логин" required><br>
                </p>
                <p> 
                    <label > Ваш пароль </label>
                    <input type="password" name="password" placeholder="Введите пароль" required><br> 
                </p>
                
                <p class="login button"> 
                <input type="submit" name="do-auth" value="Войти"> 
                </p>
                <p class="change_link">
                    Не зарегистрированы еще ?
                    <a href="registr" class="to_register">Присоединяйтесь</a>
                </p>
            </div>
        </div> 
</form>