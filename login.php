<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php.inicial/css/loginstyle.css">
    <title>Pagina inicial</title>
    <link rel="icon" href="../php.inicial/css/Senac.png" type="image">
</head>

<body class="corpo">
    <form action="../php.inicial/src/auth_login.php" method="post">
    <section class="login">
        <div class="loginsecao">
            <div class="loginheader">
                
                <div class="logintitulo">
            <img src="../php.inicial/css/Senac.png" height="40">
            <h2>Sistema Senac</h2>
        </div>
        <div class="logintextos">
            <p class="logindesc">Gerenciador de Chaves</p>
        </div>
    </div>
        
        <div class="loginarea">
            
            <p class="loginareatexto">Entre na sua conta</p>

            <div class="logindigitar">
            <input type="cpf" id="cpf" placeholder="CPF" required>
            <input type="password" id="senha" placeholder="Senha" required>
            <div class="esqueceuasenhasecao">
            <a href="" class="esqueceuasenha">Esqueceu a senha?</a></div>
            </div>
        </div>
        <a href="" class="loginbotao">Entrar</a>
    </section>
    </form>
</body>

</html>