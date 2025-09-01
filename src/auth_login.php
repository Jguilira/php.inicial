<?php
require_once('../config.php');

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$verificaUsuario = "SELECT senha FROM usuarios WHERE cpf = :cpf";
$req = $dbh->prepare($verificaUsuario);
$req->bindValue(':cpf', $cpf);
$req->execute();
$dadosUsuario = $req->fetch(PDO::FETCH_ASSOC);

if($dadosUsuario){
    if(password_verify($senha, $dadosUsuario["senha"])){
        header('Location: ../index_menu.php?sucesso=0');
        exit;
    }else{
        header('Location: ../login.php?sucesso=1');
        exit;
    }
    }else{
    header('Location: ../login.php?sucesso=1');
    exit;
}
?>
