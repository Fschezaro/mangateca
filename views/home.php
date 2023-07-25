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
    <title>Mangateca</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="container d-flex justify-content-between">
        <div class="col-12 col-md-8 my-3">
            <form class="row" action="../views/home.php" method="post">
                <div class="col">
                    <select class="form-select btn btn-outline-dark " name="coluna">
                        <option value="titulo">Título</option>
                        <option value="categoria">Categoria</option>
                        <option value="autor">Autor</option>
                        <option value="editora">Editora</option>
                        <option value="tipo">Tipo</option>
                    </select>
                </div>
                <div class="col-8 col-md-8">
                    <input class="form-control mx-3" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-success">Pesquisa</button>
                </div>
            </form>
        </div>
        <div class="align-self-center">
            <div class="btn-group justify-content-center align-itens" role="group" aria-label="Basic mixed styles example">
                <a href="home.php" type="button" class="btn btn-success">Ativos</a>
                <button href="" type="button" class="btn btn-warning">Pendentes</button>
                <a href="desativados.php" type="button" class="btn btn-danger">Inativos</a>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead>
                <tr>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Autor</th>
                    <th class="text-center">Editora</th>
                    <th class="text-center">Tipo</th>
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