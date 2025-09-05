<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro - Sistema SENAC</title>
    <link rel="icon" href="css/Senac.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="header">
            <div class="headeresq">
                <h2>Sistema SENAC</h2>
                <p>Gerenciador de Chaves</p>
            </div>
            <div class="headerdir">
                <div class="headerdirtexto">
                <h2>Nome do usuario</h2>
                <p>Porteiro/Master</p></div>
                <div class="headerdirimg">
                    <img src="User.jpg" alt="Foto do usuário" height="60">
                </div>
            </div>
        </div>
    </header>
    <form class="formulario" action="src/auth_cadastro.php" method="POST">
        <h1 class="formularioheader">Cadastro do Usuário</h1>
        <div class="areacadastro">
        <input type="text" placeholder="Nome completo" id="nome" name="nome" required>
        <select name="cargo" id="cargo" required>
            <option disabled selected>Cargo</option>
            <option value="master">Master</option>
            <option value="porteiro">Porteiro</option>
        </select>
        <input type="text" maxlength="14" name="cpf" id="cpf" placeholder="CPF" required>
        <input type="password" minlength="6" name="senha" id="senha" placeholder="senha" required>
    <p class="formulariotextosenha">A senha precisa ter no mínimo 6 caracteres, um número e um símbolo especial</p></div>
        <input class="botaocadastrar" type="submit" value="Cadastrar">
    </form>
</body>
</html>