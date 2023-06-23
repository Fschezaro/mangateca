<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteudo para página
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'home';
}
if($pagina == 'livros'){
    include 'views/livros.php';
}
elseif($pagina == 'emprestimos'){
    include 'views/emprestimos.php';
}
elseif($pagina == 'usuarios'){
    include 'views/usuarios.php';
}
else{
    include 'views/home.php';
}

# Rodapé
include 'footer.php';
