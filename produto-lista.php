<?php include("cabecalho.php");
include("conectaphp.php");
include ("banco-produto.php");
?>

<table class="table table-striped table-bordered">
<?php
  $produtos= listaProdutos($conexao);
  foreach($produtos as $produto) :
?>
  <tr>
  <td><?=$produto['nome'] ?></td>
  <td><?=$produto['preco']?></td>
  <td><?=$produto['descricao']?></td>
  <td> <a class="btn btn-primary" href="produto-altera-formulario.php">Alterar</a></td>
    </form>

  </td>
</tr>
<?php
  endforeach
?>

<?php include("rodape.php"); ?>
