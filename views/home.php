<?php
require '../controllers/db.php';

if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];
    $coluna = $_POST['coluna'];
    $query = $conexao->prepare("SELECT * FROM LIVROS WHERE $coluna LIKE '%$pesquisa%'");
} else {
    $query = $conexao->prepare("SELECT * FROM LIVROS");
}
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangateca home</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>

    <div class="container py-4">

        <table class="table table-striped table-hover table-responsive border border-dark">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Autor</th>
                    <th>Editora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $key => $livro) : ?>
                    <tr>
                        <td> <?= $livro["titulo"]; ?></td>
                        <td> <?= $livro["categoria"]; ?></td>
                        <td> <?= $livro["autor"]; ?></td>
                        <td> <?= $livro["editora"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>