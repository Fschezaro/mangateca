<?php
require '../controllers/db.php';

$query = $conexao->prepare("SELECT * FROM LIVROS");

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
    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    } ?>
    <div class="container py-3">
    <table class="table table-striped border border-dark table-hover table-responsive border">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Editora</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $key => $livro) : ?>

                <tr>
                    <td> <?= $livro["titulo"]; ?></td>
                    <td> <?= $livro["categoria"]; ?></td>
                    <td> <?= $livro["autor"]; ?></td>
                    <td> <?= $livro["editora"]; ?></td>
                    <td> <a class="btn btn-secondary" href="edita_livro.php?id=<?= $livro['id']; ?>">Editar</a></td>
                    <td><a class="btn btn-danger" href="../controllers/exclui_livro.php?id=<?= $livro['id']; ?>">Excluir</a></td>
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