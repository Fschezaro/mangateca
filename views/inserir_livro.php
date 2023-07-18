<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="d-flex justify-content-center my-3">
        <div class="text-center p-3 d-flex justify-content-center border border-black">
            <form method="post" action="../controllers/processa_livro.php">
                <label class="d-flex justify-content-center">Título</label>
                <br>
                <input class="form-control text-center" type="text" name="titulo" placeholder="Insira o título">
                <br>
                <label class="d-flex justify-content-center">Categoria</label>
                <br>
                <input class="form-control text-center" type="text" name="categoria" placeholder="Insira a categoria">
                <br>
                <label class="d-flex justify-content-center">Autor</label>
                <br>
                <input class="form-control text-center" type="text" name="autor" placeholder="Insira o autor">
                <br>
                <label class="d-flex justify-content-center">Editora</label>
                <br>
                <input class="form-control text-center" type="text" name="editora" placeholder="Insira a editora">
                <br>
                <label class="d-flex justify-content-center">Tipo</label>
                <br>
                <select class="btn btn-primary" name="tipo">
                    <option name="tipo" value="Manga">Manga</option>
                    <option name="tipo" value="Revista">Revista</option>
                    <option name="tipo" value="Objeto">Objeto</option>
                </select>
                <br>
                <br>
                <input class="btn btn-primary col-12" type="submit" value="Inserir manga">
            </form>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>