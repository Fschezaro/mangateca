<a href="?pagina=inserir_usuario">Inserir novo usuario</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
            <th>usuario</th>
            <th>permissão</th>
    </tr>

    <?php 

    while($linha = mysqli_fetch_array($consulta_usuarios)){
        echo '<tr><td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['permissao'].'</td></tr>';
    }
?>


</table>