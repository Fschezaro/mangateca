<?php
require '../controllers/db.php';

$query = $conexao->prepare("SELECT * FROM LIVROS");

$query->execute();

$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangateca home</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <h1><br></h1>
    <table class="tabela">
        <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>N°</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $key => $livro) : ?>

                <tr>
                    <!-- <td> <?= $livro["id"]; ?></td> -->
                    <td> <?= $livro["titulo"]; ?></td>
                    <td> <?= $livro["categoria"]; ?></td>
                    <td> <?= $livro["autor"]; ?></td>
                    <td> <?= $livro["editora"]; ?></td>
                    <td> <?= $key ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php include '../components/footer.php'; ?>
</body>

</html>