<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    
</head>
<body>
        
        <div class="container">
            <img src="./img/ULTRABIKEX.png" alt="logo-ubx" >
                    <form action="?c=User&a=Entrar" method="post">
                        <div class="section-inputs">
                            <label for="username">
                                <span>Username</span>
                                <input id="username" name="username" placeholder="nombre de usuario"/>
                            </label>
                            <label for="password">
                                <span>Password</span>
                                <input id="password" name="password" placeholder="6+ caracteres" />
                            </label>
                            <button type="submit" class="submit-btn" value="Entrar" >entrar</button>
                        </div>
                    </form>    
        </div>                
        
</body>
</html>