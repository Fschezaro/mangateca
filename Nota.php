   <?php if ($livro['estado']) : ?>
       <td class="text-center"><a class="btn btn-outline-danger btn-sm col-12" href="../controllers/exclui_livro.php?id=<?= $livro['id']; ?>">Desativar</a></td>
   <?php else : ?>
       <td class="text-center"><a class="btn btn-outline-success btn-sm col-12" href="../controllers/ativa_livro.php?id=<?= $livro['id']; ?>">Ativar</a></td>
   <?php endif; ?>