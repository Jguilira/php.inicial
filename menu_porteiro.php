<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/porteiro.css">
    <title>Porteiro - Sistema SENAC</title>
    <link rel="icon" href="css/Senac.png" type="image">
</head>
<body>
    <?php 
        require_once ('config.php');
        
    ?>
    <header>
        <div class="headerporteiro">
            <div class="headerporteiroesq">
                <h2>Sistema SENAC</h2>
                <p>Gerenciador de Chaves</p>
            </div>
            <div class="headerporteirodir">
                <div class="headerporteirodirtexto">
                <h2>Nome do Porteiro</h2>
                <p>Porteiro</p></div>
                <div class="headerporteirodirimg">
                    <img src="User.jpg" alt="Foto do usuário" height="60">
                </div>
            </div>
        </div>
    </header>
    <section class="secao1">
        <div class="secao1status">
            <div class="secao1status1">
                <p>Total de Chaves</p>
                <h2>num</h2>
            </div>
            <div class="secao1status2">
                <p>Disponíveis</p>
                <h2>num</h2>
            </div>
            <div class="secao1status3">
                <p>Emprestadas</p>
                <h2>num</h2>
            </div>
            <div class="secao1status4">
                <p>Empréstimos Ativos</p>
                <h2>num</h2>
            </div>
        </div>
    </section>
    <section class="secao2">
        <div class="secao2esq">
            <h2>Emprestar Chave</h2>
            <div class="secao2esqitens">
                <select name="selchave" id="selchave" required>
                    <option disabled selected>Chave</option>
                    <option value="op1">Chave1</option>
                    <option value="op2">Chave2</option>
                    <option value="op3">Chave3</option>
                </select>
                <input type="text" name="nomecompleto" id="nomecompleto" placeholder="Nome completo do solicitante" required>
                <input type="text" name="documento" id="nomecompleto" placeholder="Documento (opcional)">
                <input type="text" name="nomecompleto" id="nomecompleto" placeholder="Observações (opcional)">
                </div><input type="submit" class="secao2esqbotao"value="Emprestar Chave">
        </div>
        <div class="secao2dir">
            <h2>Empréstimos Ativos</h2>
           <div class="secao2dirobjarea">
            <div class="secao2dirobj">
                <div class="secao2dirobjheader">
                    <h2>numchave</h2><div>
                    <p><b>dd-mm-aaaa</b>, 20:40:50</p>
                </div>
                </div>
                <div class="secao2dirobjtexto">
                <p>exemplar2</p>
                <p>Porteiro: <b>Missingno2</b></p>
                <p>Sala: <b>01</b></p></div>
                <p class="secao2dirobjheaderdevol">Devolver Chave</p>
            </div>
            <div class="secao2dirobj">
                <div class="secao2dirobjheader">
                    <h2>numchave</h2><div>
                    <p><b>dd-mm-aaaa</b>, 20:40:50</p>
                </div>  
                </div>
                <div secao2dirobjtexto>
                <p>exemplar2</p>
                <p>Porteiro: <b>Missingno2</b></p>
                <p>Sala: <b>01</b></p></div>
                <p class="secao2dirobjheaderdevol">Devolver Chave</p>
            </div></div>
        </div>
    </section>
</body>
</html>