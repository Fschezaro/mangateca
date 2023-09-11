<?php $red = $_SESSION['redirecionamento']; ?>

<div class="mx-5 my-3">
    <form class="row justify-content-center">
        <div class="col-sm-4 col-12 mb-3 mb-sm-0">
            <input id="pesquisa" class="form-control form-control-sm" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisa">
        </div>
        <!-- <button type="submit" class="btn btn-outline-primary btn-sm rounded-5 col-sm-1 col-4 m-auto mb-3 mb-sm-0">Pesquisa</button> -->
        <a class="btn btn-outline-primary btn-sm rounded-5 col-sm-1 col-4 m-auto mb-3 mb-sm-0 mt-sm-0 mt-3" href="inserir_livro.php">Adicionar</a>
        <div class="btn-group col-sm-2 col-8 align-self-center" role="group" aria-label="Basic mixed styles example">
            <a href="ativos.php" type="button" class="btn btn-success btn-sm">Ativos</a>
            <a href="pendentes.php" type="button" class="btn btn-warning btn-sm">Acaminho</a>
            <a href="inativos.php" type="button" class="btn btn-danger btn-sm">Inativos</a>
        </div>
    </form>
</div>