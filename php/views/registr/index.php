<head>
<link rel="stylesheet" href="source/css/sign.css">
    
</head>

<form action="php/engine/registration.php" method="post">				
        <div id="wrapper">
            <div id="login">
                <h1>Регистрация</h1> 
                <p> 
                    <label > Ваш  логин</label>
                    <input type="text" name="login" placeholder="Введите логин" required><br>
                </p>
                <p> 
                    <label > Ваш пароль </label>
                    <input type="password" name="password" placeholder="Введите пароль" required><br> 
                </p>
                <p> 
                    <label > Ваш email </label>
                    <input type="email" name="email" placeholder="Введите email" required><br> 
                </p>
                <p> 
                    <label > ФИО</label>
                    <input type="text" name="fio" placeholder="Введите данные" required><br>
                </p>
                <p> 
                    <label > Контакты</label>
                    <input type="tel" name="contacts" placeholder="Введите номер телефона" required><br>
                </p> 
                
                <p class="login_button"> 
                    <input type="submit" value="Создать"> 
                </p>
            </div>
        </div>  
    </form>