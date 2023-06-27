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

switch($pagina){
    case 'livros': include 'views/livros.php';break;
    case 'inserir_livro': include 'views/inserir_livro.php';break;
    case 'emprestimos': include 'views/emprestimos.php';break;
    case 'inserir_emprestimo': include 'views/inserir_emprestimo.php';break;
    case 'usuarios': include 'views/usuarios.php';break;
    case 'inserir_usuario': include 'views/inserir_usuario.php';break;
    default: 'views/home.php';break;


}
// if($pagina == 'livros'){
//     include 'views/livros.php';
// }
// elseif($pagina == 'inserir_livro'){
//     include 'views/inserir_livro.php';
// }
// elseif($pagina == 'emprestimos'){
//     include 'views/emprestimos.php';
// }
// elseif($pagina == 'inserir_emprestimo'){
//     include 'views/inserir_emprestimo.php';
// }
// elseif($pagina == 'usuarios'){
//     include 'views/usuarios.php';
// }
// elseif($pagina == 'inserir_usuario'){
//     include 'views/inserir_usuario.php';
// }
// else{
//     include 'views/home.php';
// }
// # Rodapé
// include 'footer.php';
