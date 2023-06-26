<h1>Inserir novos mangas</h1>
<br>
<!-- codigo,titulo,categoria,autor,editora,tipo -->

<form method="post" action="processa_livro.php">
    <label>Codigo</label>
    <br>
    <input type="text" name="codigo" placeholder="Insira o codigo do manga">
    <br><br>
    <label>Título</label>
    <br>
    <input type="text" name="titulo" placeholder="Insira o título do manga">
    <br><br>
    <label>Categoria</label>
    <br>
    <input type="text" name="categoria" placeholder="Insira a categoria do manga">
    <br><br>
    <input type="text" name="autor" placeholder="Insira o autor do manga">
    <br><br>
    <input type="text" name="editora" placeholder="Insira a editora do manga">
    <br><br>
    <input type="text" name="tipo" placeholder="Insira o tipo do manga">
    <br><br>
    <input type="submit" value="Inserir manga" >