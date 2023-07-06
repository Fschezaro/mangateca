<?php require '../controllers/mostra_livro.php';?>

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
    <h1>Editar livro</h1>
    <form method="POST" action="../controllers/edita_livro.php">
    <table class="tabela">    
        <thead>
            <tr>
                <th>Titulo</th> 
                <th>Categoria</th> 
                <th>Autor</th> 
                <th>Editora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="hidden" name="id" value="<?= $result['id'];?>"></td>
                <td><input type="text" name="titulo" value="<?= $result['titulo'];?>"></td>
                <td><input type="text" name="categoria" value="<?= $result['categoria'];?>"></td>
                <td><input type="text" name="autor" value="<?= $result['autor'];?>"></td>
                <td><input type="text" name="editora" value="<?= $result['editora'];?>"></td>
                <td><input type="submit"></td>
            </tr>
        </tbody>
    </table>
    </form>
<?php include '../components/footer.php'; ?>
</body>
</html>