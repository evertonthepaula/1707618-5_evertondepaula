<section class="carroussel-container">
  <div class="img-slider">
    <div class="slider-container">

      <div class="slide">
        <div class="slide-info">
          <h2 class="title">Imqaret - "Date Cakes"</h2>
          <h3 class="subtitle">Tâmaras Marroquinas frescas, para paladares delicados!</h3>
        </div>
        <span class="mage" style="background-image: url('<?= PATH_IMG ?>/date-cake.jpg')"></span>
      </div>

      <div class="slide">
        <div class="slide-info">
          <h2 class="title">Qaghaq tal-Ghasel - "Honey rings"</h2>
          <h3 class="subtitle">O Natal do Mediterrâneo dentro de um delicios o biscoito Maltês!</h3>
        </div>
        <span class="mage" style="background-image: url('<?= PATH_IMG ?>/qaghaq-tal-ghasel.jpg')"></span>
      </div>

      <div class="slide">
        <div class="slide-info">
          <h2 class="title">Torta tal-marmurat</h2>
          <h3 class="subtitle">A Exclusivissíma tradicional receita de familia Maltesa, disponível agora na sua mesa!</h3>
        </div>
        <span class="mage" style="background-image: url('<?= PATH_IMG ?>/torta-tal-marmurat.jpg')"></span>
      </div>
    </div>
  </div>
</section>

<?php
$produtos = include('data/products.php');
?>

<?php if (!empty($produtos)) : ?>
  <div class="container">
    <h2 class="title">Conheça os doces da kandju</h2>

    <div class="products-box">

      <?php foreach ($produtos as $produto) : ?>
        <a href="<?= BASE_URL . '?pagina=produto&produto=' . slugify($produto['name']) . '&id=' . $produto['id'] ?>" class="product-card">
          <img src="<?= $produto['image'] ?>">
          <h3 class="product-card-title"> <?= $produto['name'] ?></h3>
          <h4 class="product-card-value"> Valor: <b><?= currency($produto['price']) ?></b></h4>
          <h5 class="product-card-qtd"> Quantidade: <b><?= $produto['qtd'] ?></b></h5>
        </a>
      <?php endforeach ?>
    </div>

    <a href="<?= BASE_URL . '?pagina=produtos' ?>" class="see-all-products">Veja Todos os Produtos</a>
  </div>
<?php endif ?>