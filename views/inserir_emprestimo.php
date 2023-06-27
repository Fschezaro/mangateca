<h1>Inserir novos emprestimos</h1>
<br>
<!-- nome do responsavel, data de inicio e data de fim -->

<form method="post" action="processa_emprestimo.php">
    <label>Nome do responsavel</label>
    <br>
    <input type="text" name="nome_responsavel" placeholder="Insira o responsavel pelo emprestimo">
    <br><br>
    <label>Data de inicio do emprestimo</label>
    <br>
    <input type="text" name="data_inicio" placeholder="Insira a data de inicio do emprestimo">
    <br><br>
    <label>Data de fim do emprestimo</label>
    <br>
    <input type="text" name="data_fim" placeholder="Insira a data de termino do emprestimo">
    <br><br>
    <input type="submit" value="Inserir emprestimo" >