   <?php if ($livro['estado']) : ?>
       <td class="text-center"><a class="btn btn-outline-danger btn-sm col-12" href="../controllers/inativa_livro.php?id=<?= $livro['id']; ?>">Desativar</a></td>
   <?php else : ?>
       <td class="text-center"><a class="btn btn-outline-success btn-sm col-12" href="../controllers/ativa_livro.php?id=<?= $livro['id']; ?>">Ativar</a></td>
   <?php endif; ?>
   $_SESSION['ativos'] = "ativos";
   if (isset($_SESSION['desativado'])) {
   echo "<div class='justify-content-center text-center container mt-2 alert alert-danger col-4' role='alert'>" . $_SESSION['desativado'] . "</div>";
   unset($_SESSION['desativado']);
   } ?>
   <?php
    if (isset($_SESSION['ativado'])) {
        echo "<div class='justify-content-center text-center container mt-2 col-4 alert alert-success' role='alert'>" . $_SESSION['ativado'] . "</div>";
        unset($_SESSION['ativado']);
    } ?>