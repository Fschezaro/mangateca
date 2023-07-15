<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
    <a class="navbar-brand mx-5" href="../views/home.php"><img class="" src="../img/logo.png" alt="Logo mangateca"></a>
    
    <div class="container d-flex justify-content-start">
    <a class="btn btn-primary" href="../views/home.php">Home</a>
    <a class="btn btn-primary mx-3" href="../views/livros.php">Editar</a>
    <a class="btn btn-primary" href="inserir_livro.php">Novo</a>
    </div>
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


  
</nav>