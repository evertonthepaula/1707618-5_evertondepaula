<?php
$produtos = include('data/products.php');

$produto = findProductInArray($produtos, 'id', getUrlParam('id'));
?>

<section class="single-product-page">
  <div class="container">
    <?php if (!empty($produto)) : ?>
      <div class="single-product-image">
        <img src="<?= $produto['image'] ?>">
      </div>
      <div class="single-product-info">
        <h2 class="single-product-title"> <?= $produto['name'] ?></h2>
        <h4 class="single-product-value"> Valor: <?= currency($produto['price']) ?></h4>
        <h5 class="single-product-qtd"> Quantidade por Porção: <?= $produto['qtd'] ?></h5>
        <b class="single-product-desc">Descrição:</b>
        <p class="single-product-desc"> <?= $produto['description'] ?></p>
      </div>
    <?php endif ?>
  </div>
</section>

<?php if (empty($produto)) : ?>
  <div class="single-product-empty">
    <h3 class="title">Desculpe mas não conseguimos encontar o produto que você estava procurando.
      <a href="<?= BASE_URL . '?pagina=produtos' ?>" class="see-all-products">Voltar a pagina de produtos</a>
    </h3>
  </div>
<?php endif ?>