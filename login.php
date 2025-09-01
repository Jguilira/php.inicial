<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">">
    <title>Pagina inicial</title>
    <link rel="icon" href="css/Senac.png" type="image">
</head>

<body class="corpo">
    <form action="src/auth_login.php" method="post">
    <section class="login">
        <div class="loginsecao">
            <div class="loginheader">
                <div class="logintitulo">
            <img src="css/Senac.png" height="40">
            <h2>Sistema Senac</h2>
        </div>
        <div class="logintextos">
            <p class="logindesc">Gerenciador de Chaves</p>
        </div>
    </div>
        
        <div class="loginarea">
            
            <p class="loginareatexto">Entre na sua conta</p>

            <div class="logindigitar">
                <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <div class="esqueceuasenhasecao">
                <a href="" class="esqueceuasenha">Esqueceu a senha?</a></div>
            </div>
        </div>
        <button type="submit" class="loginbotao">Entrar</button>
    </section>
    </form>
</body>
</html>