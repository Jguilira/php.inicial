<?php
require_once('../config.php');

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$verificaUsuario = "SELECT senha, cargo FROM usuarios WHERE cpf = :cpf";
$req = $dbh->prepare($verificaUsuario);
$req->bindValue(':cpf', $cpf);
$req->execute();
$dadosUsuario = $req->fetch(PDO::FETCH_ASSOC);

if($dadosUsuario){
    if (password_verify($senha, $dadosUsuario["senha"])) {
        
        if($dadosUsuario["cargo"] === "porteiro"){
            header('Location: ../menu_porteiro.php?sucesso=0');
        }
        elseif($dadosUsuario["cargo"] === "master"){
            header('Location: ../menu_master.php?sucesso=0');
        }
        else{
            header('Location: ../login.php?sucesso=2');
            exit();
        }
    }
}
?>
