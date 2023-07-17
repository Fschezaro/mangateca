<div class="container ">
    <form class="d-flex me-5" action="../views/home.php" method="post">
        <select class="btn btn-primary" name="coluna">
            <option value="titulo">Título</option>
            <option value="categoria">Categoria</option>
            <option value="autor">Autor</option>
            <option value="editora">Editora</option>
        </select>
        <input class="form-control mx-4" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
        <button type="submit" class="btn btn-primary"> Pesquisa</button>     
    </form>
  </div>