<?php

session_start();
if (!$_SESSION['logged']) {
    header('Location: login.php');
}

$iduser = $_SESSION['iduser'];

require '../controllers/db.php';

$query = $conexao->prepare("SELECT * FROM livros WHERE recebido = 0 AND relation = $iduser");

$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $conexao->prepare("SELECT SUM(valor) from livros WHERE estado = 1");

$query->execute();
$valor = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangateca</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined.correto {
            color: green;
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        .material-symbols-outlined.cancel {
            color: red;
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>
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
    $_SESSION['redirecionamento'] = 'pendentes';
    include '../components/menu.php';
    ?>
    <div class="row mx-4">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Titulo</th>
                        <th class="text-center">Autor</th>
                        <th class="text-center">Editora</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Valor</th>
                        <th class="text-center" colspan="3"> Edição</th>
                    </tr>
                </thead>
                <tbody id="tabela">
                    <?php foreach ($resultado as $key => $livro) : ?>
                        <tr>
                            <td class="text-center"> <?= $livro["titulo"]; ?></td>
                            <td class="text-center "> <?= $livro["autor"]; ?></td>
                            <td class="text-center"> <?= $livro["editora"]; ?></td>
                            <td class="text-center"> <?= $livro["tipo"]; ?></td>
                            <td class="text-center"> <?= $livro["valor"]; ?></td>
                            <td class="text-center"><a href="../controllers/recebelivro.php?id=<?= $livro['id']; ?>"><span class="material-symbols-outlined correto">check</span></a></td>
                            <td class="text-center"><a href=" edita_livro.php?id=<?= $livro['id']; ?>"><span class="material-symbols-outlined">edit</span></a></td>
                            <td class="text-center"><a href="../controllers/inativa_livro.php?id=<?= $livro['id']; ?>"><span class="material-symbols-outlined cancel">cancel</span></a></td>
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