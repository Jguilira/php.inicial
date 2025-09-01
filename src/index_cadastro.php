<?php 
// Inserindo cargo master ou porteiro
require_once ('../config.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $cargo = filter_input(INPUT_POST, 'cargo');
    $senha = filter_input(INPUT_POST, 'senha');


    $senha = password_hash($senha, PASSWORD_ARGON2ID);

    $insertcargo = "INSERT INTO usuarios VALUES(null, :nome, :cpf, :senha, :cargo)";
    $req = $dbh->prepare($insertcargo);
    $req->bindValue(':nome', $nome);
    $req->bindValue(':cpf', $cpf);
    $req->bindValue(':senha', $senha);
    $req->bindValue(':cargo', $cargo);
    if($req->execute()){

        header("location: ../login.php?sucesso=1");

    }else{
        header("Location: ../../views/views_cadastro.php?sucesso=0");
    }

}else{
    header("Location: ../../views/views_cadastro.php");
    exit;
}


/* 
1º Receber as informações do HTML via POST
2º preparar a string de inserção 
3º executar
4º Exibir uma mensagem de cadastro realizador com sucesso.

*/
?>