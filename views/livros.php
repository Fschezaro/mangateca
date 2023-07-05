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
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php include '../Components/header.php'; ?>
    <h1>Mangas</h1>
    <a href="inserir_livro.php">Inserir novo manga</a>
    <table style="border:1px solid #ccc; width: 100%">
        <tr>
            <th>Titulo</th>
            <th>categoria</th>
        </tr>
        <?php foreach ($resultado as $key => $livro) : ?>
            <tr>
                <td> <?= $livro["titulo"]; ?></td>
                <td> <?= $livro["categoria"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php include '../Components/footer.php'; ?>
</body>

</html>