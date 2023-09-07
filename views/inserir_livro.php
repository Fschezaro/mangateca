<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="container my-3">
        <form method="post" action="../controllers/processa_livro.php">
            <div class="row ">
                <div class="col">
                    <label>Título</label>
                    <input class="form-control" type="text" name="titulo" placeholder="Insira o título">
                </div>
                <div class="col">
                    <label>Categoria</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Insira a categoria">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Autor</label>
                    <input class="form-control" type="text" name="autor" placeholder="Insira o autor">
                </div>
                <div class="col">
                    <label>Editora</label>
                    <input class="form-control" type="text" name="editora" placeholder="Insira a editora">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <label>Tipo</label>
                    <input class="form-control" type="text" name="tipo" placeholder="Insira o tipo">
                </div>
                <div class="row">
                    <div class="col">
                        <input class="btn btn-success col-12 mt-3 align-middle" type="submit" value="Inserir manga">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-12 position-absolute bottom-0">
        <footer>
            <div class="p-1 bg-dark text-white d-flex justify-content-center">
                Mangateca by Fer - 2023 ©
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>