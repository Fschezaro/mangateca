<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

    <?php include '../components/header.php'; ?>
    <h1>Inserir novos mangas</h1>
    <br>
    <!-- titulo,categoria,autor -->

    <form method="post" action="../controllers/processa_livro.php">
        <label>Título</label>
        <br>
        <input type="text" name="titulo" placeholder="Insira o título do manga">
        <br><br>
        <label>Categoria</label>
        <br>
        <input type="text" name="categoria" placeholder="Insira a categoria do manga">
        <br><br>
        <label>Autor</label>
        <br>
        <input type="text" name="autor" placeholder="Insira o autor do manga">
        <br><br>
        <label>Editora</label>
        <br>
        <input type="text" name="editora" placeholder="Insira a editora do manga">
        <br><br>
        <input type="submit" value="Inserir manga">
    </form>
    <?php include '../components/footer.php'; ?>
</body>

</html>