<?php require '../controllers/mostra_livro.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="d-flex justify-content-center my-3">
    <div class="text-center p-3 flex-column d-flex justify-content-center border border-black">
    <form method="POST" action="../controllers/edita_livro.php">
        <input type="hidden" name="id" value="<?= $result['id']; ?>">
            <label class="d-flex justify-content-center">Título</label>
            <br>
            <input class="form-control text-center" type="text" name="titulo" value="<?= $result['titulo']; ?>">
            <br>
            <label class="d-flex justify-content-center">Categoria</label>
            <br>
            <input class="form-control text-center" type="text" name="categoria" value="<?= $result['categoria']; ?>">
            <br>
            <label class="d-flex justify-content-center">Autor</label>
            <br>
            <input class="form-control text-center" type="text" name="autor" value="<?= $result['autor']; ?>">
            <br>
            <label class="d-flex justify-content-center">Editora</label>
            <br>
            <input class="form-control text-center" type="text" name="editora" value="<?= $result['editora']; ?>">
            <br>
            <label class="d-flex justify-content-center">Tipo</label>
            <br>
            <input class="form-control text-center" type="text" name="tipo" value="<?= $result['tipo']; ?>">
            <br>
            <button type="submit" class="btn btn-primary"> Confirmar</button>
    </form>
    </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>