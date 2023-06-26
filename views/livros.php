<a href="?pagina=inserir_livro">Inserir novo manga</a>
<table style="border:1px solid #ccc; width: 100%">
    <tr>
            <th>Titulo</th>
            <th>categoria</th>
    </tr>

    <?php 

    while($linha = mysqli_fetch_array($consulta_livros)){
        echo '<tr><td>'.$linha['titulo'].'</td>';
        echo '<td>'.$linha['categoria'].'</td></tr>';
    }
?>


</table>