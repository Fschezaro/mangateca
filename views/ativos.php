<?php
session_start();
if (!$_SESSION['logged']) {
    header('Location: login.php');
}

require '../controllers/db.php';

if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];
    $query = $conexao->prepare("SELECT * FROM livros WHERE estado = 1  AND (titulo LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%' OR autor LIKE '%$pesquisa%' OR editora LIKE '%$pesquisa%' OR tipo LIKE '%$pesquisa%')");
} else {
    $query = $conexao->prepare("SELECT * FROM livros WHERE estado = 1 AND recebido = 1");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/iziToast.min.css">
</head>
<script src="../js/iziToast.min.js" type="text/javascript">
    iziToast.settings({
        timeout: 10000,
        resetOnHover: true,
        icon: 'material-icons',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        onOpening: function() {
            console.log('callback abriu!');
        },
        onClosing: function() {
            console.log("callback fechou!");
        }
    });
</script>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<script>
    $(document).ready(function() {
        $("#pesquisa").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tabela tr").filter(function() {
                $(this).toggle($(this).text()
                    .toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<body>
    <?php include '../components/header.php';
    unset($_SESSION['redirecionamento']);
    $_SESSION['redirecionamento'] = 'ativos';
    include '../components/menu.php';
    ?>
    <div class="row mx-4">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover table-bordered sortable">
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
                <tbody id="tabela">
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