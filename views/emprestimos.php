<a href="?pagina=inserir_emprestimo">Inserir novo emprestimo</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
            <th>Nome do responsavel</th>
            <th>Data de inicio</th>
            <th>Data de fim</th>
    </tr>

    <?php 

    while($linha = mysqli_fetch_array($consulta_emprestimos)){
        echo '<tr><td>'.$linha['nome_responsavel'].'</td>';
        echo '<td>'.$linha['data_inicio'].'</td></tr>';
    }
?>


</table>