<?php
require '../controllers/db.php';

if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];
    $coluna = $_POST['coluna'];
    $query = $conexao->prepare("SELECT * FROM LIVROS WHERE $coluna LIKE '%$pesquisa%' AND estado = '1'");
} else {
    $query = $conexao->prepare("SELECT * FROM LIVROS WHERE estado = '1'");
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
    <div class="container d-flex justify-content-center">
        <?php
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<div class='mt-2 alert alert-danger' role='alert'>" . $_SESSION['mensagem'] . "</div>";
            unset($_SESSION['mensagem']);
        } ?>
    </div>
    <div class="container d-flex justify-content-center my-3">
        <form class="d-flex me-5" action="../views/livros.php" method="post">
            <select class="btn btn-primary" name="coluna">
                <option value="titulo">Título</option>
                <option value="categoria">Categoria</option>
                <option value="autor">Autor</option>
                <option value="editora">Editora</option>
                <option value="tipo">Tipo</option>
            </select>
            <input class="form-control mx-4" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
            <button type="submit" class="btn btn-primary"> Pesquisa</button>
        </form>
    </div>
    <div class="container">
        <table class="table table-striped border border-dark table-hover table-responsive border">
            <thead>
                <tr>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Autor</th>
                    <th class="text-center">Editora</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center" class="text-center" colspan="2"><a class="col-12 btn btn-outline-danger" href="desativados.php">Desativados</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $key => $livro) : ?>

                    <tr>
                        <td class="text-center"> <?= $livro["titulo"]; ?></td>
                        <td class="text-center"> <?= $livro["categoria"]; ?></td>
                        <td class="text-center"> <?= $livro["autor"]; ?></td>
                        <td class="text-center"> <?= $livro["editora"]; ?></td>
                        <td class="text-center"> <?= $livro["tipo"]; ?></td>
                        <td class="text-center"><a class="btn btn-secondary" href="edita_livro.php?id=<?= $livro['id']; ?>">Editar</a></td>
                        <td class="text-center"><a class="btn btn-danger btn-block" href="../controllers/exclui_livro.php?id=<?= $livro['id']; ?>">Desativar</a></td>
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