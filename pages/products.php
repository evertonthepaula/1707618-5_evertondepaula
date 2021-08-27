<?php
$produtos = include('data/products.php');
?>

<?php if (!empty($produtos)) : ?>
  <div class="container">
    <h2 class="title">Veja todos os doces da kandju</h2>

    <div class="products-box">
      <?php foreach ($produtos as $produto) : ?>
        <a href="<?= BASE_URL . '?pagina=produto&produto=' . slugify($produto['name']) . '&id=' . $produto['id'] ?>" class="product-card">
          <img src="<?= $produto['image'] ?>">
          <h3 class="product-card-title"> <?= $produto['name'] ?></h3>
          <h4 class="product-card-value"> Valor: <?= currency($produto['price']) ?></h4>
          <h5 class="product-card-qtd"> Quantidade: <?= $produto['qtd'] ?></h5>
        </a>
      <?php endforeach ?>
    </div>
  </div>
<?php endif ?>

<?php if (empty($produto)) : ?>
  <div class="single-product-empty">
    <h3 class="title">Desculpe mas não encontramos nenhum Doce cadastrado.</h3>
  </div>
<?php endif ?>