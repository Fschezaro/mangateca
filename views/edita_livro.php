<?php
require '../components/logado.php';
require '../controllers/mostra_livro.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangateca - Editar</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="container my-3">
        <?php if ($_SESSION['redirecionamento'] == 'ativos') {
            echo '<a class="btn btn-outline-primary rounded-5 mb-4" href="../views/ativos.php">Voltar</a>';
        } else if ($_SESSION['redirecionamento'] == 'pendentes') {
            echo '<a class="btn btn-outline-primary rounded-5 mb-4" href="../views/pendentes.php">Voltar</a>';
        } else {
            echo '<a class="btn btn-outline-primary rounded-5 mb-4" href="../views/inativos.php">Voltar</a>';
        } ?>
        <form method="POST" action="../controllers/edita_livro.php">
            <div class="row row-cols-sm-2 row-cols-1">
                <input type="hidden" name="id" value="<?= $result['id']; ?>">
                <div class="col">
                    <label>Título</label>
                    <input class="form-control" type="text" name="titulo" value="<?= $result['titulo']; ?>">
                </div>
                <div class="col">
                    <label>Categoria</label>
                    <input class="form-control" type="text" name="categoria" value="<?= $result['categoria']; ?>">
                </div>
                <div class="col">
                    <label>Autor</label>
                    <input class="form-control" type="text" name="autor" value="<?= $result['autor']; ?>">
                </div>
                <div class="col">
                    <label>Editora</label>
                    <input class="form-control" type="text" name="editora" value="<?= $result['editora']; ?>">
                </div>
                <div class="col">
                    <label>Tipo</label>
                    <input class="form-control" type="text" name="tipo" value="<?= $result['tipo']; ?>">
                </div>
                <div class="col">
                    <label>Valor</label>
                    <input class="form-control" type="text" name="valor" value="<?= $result['valor']; ?>">
                </div>
                <div class="col d-flex justify-content-center align-self-center mt-sm-4 mt-3">
                    <div class="btn-group col-12 col-sm-6" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" value=1 name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-info" for="btnradio1">Em mãos</label>

                        <input type="radio" class="btn-check" value=0 name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-info" for="btnradio2">A receber</label>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-12">
                    <label>Foto</label>
                    <input class="col-6 form-control" type="file" name="arquivo">
                </div> -->
            </div>
            <div class="col d-flex justify-content-center align-self-center mt-sm-0 mt-3">
                <button type="submit" class="btn btn-success col-sm-4 col-12 mt-3">Salvar</button>
            </div>
        </form>
    </div>
    <footer>
        <div class="fixed-bottom col-12 col-md-12 p-1 bg-dark text-white text-center ">
            Mangateca by Fer - 2023 ©
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>