<?php
require '../controllers/db.php';

if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];
    $query = $conexao->prepare("SELECT * FROM LIVROS WHERE estado = '1' AND (titulo IS NOT NULL AND categoria IS NOT NULL AND autor IS NOT NULL AND editora IS NOT NULL) AND (titulo LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%' OR autor LIKE '%$pesquisa%' OR editora LIKE '%$pesquisa%' OR tipo LIKE '%$pesquisa%')");
} else {
    $query = $conexao->prepare("SELECT * FROM LIVROS WHERE estado = '1' AND (titulo IS NOT NULL AND categoria IS NOT NULL AND autor IS NOT NULL AND editora IS NOT NULL)");
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
    <?php
    session_start();
    $_SESSION['local'] = "1";
    ?>
    <div class="mx-4">
        <div class="row m-auto">
            <div class="col-10 col-md-8 mt-3 mb-4">
                <form class="row" action="../views/ativos.php" method="post">
                    <div class="col-8 col-md-8">
                        <input class="form-control form-control-sm" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-primary btn-sm rounded-5">Pesquisa</button>
                    </div>
                </form>
            </div>
            <div class="col align-self-center mt-3 mb-4">
                <a class="btn btn-outline-primary btn-sm rounded-5 " href="inserir_livro.php">Adicionar</a>
            </div>
            <div class="col align-self-center mt-3 mb-4">
                <div class="btn-group justify-content-center align-itens" role="group" aria-label="Basic mixed styles example">
                    <a href="ativos.php" type="button" class="btn btn-success btn-sm ">Ativos</a>
                    <a href="pendentes.php" type="button" class="btn btn-warning btn-sm ">Pendentes</a>
                    <a href="inativos.php" type="button" class="btn btn-danger btn-sm ">Inativos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-4">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Titulo</th>
                        <th class="text-center">Categoria</th>
                        <th class="text-center">Autor</th>
                        <th class="text-center">Editora</th>
                        <th class="text-center">Tipo</th>
                        <th colspan="2" class="text-center">Edição</th>
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
                            <td class="text-center"><a class="btn btn-outline-secondary btn-sm" href="edita_livro.php?id=<?= $livro['id']; ?>">Editar</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger btn-sm col-12" href="../controllers/inativa_livro.php?id=<?= $livro['id']; ?>">Desativar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>