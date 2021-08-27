<?php require('head.php') ?>

<nav class="header-contact container">
  <a href="https://g.page/unicesumar-curitiba-portao?share" target="_blank">
    R. Itajubá, 673 - Portão, Curitiba - PR, 81070-190
  </a>
  <a href="tel:99999999">(00) 0000-0000</a>
  <a href="tel:99999999">Whatsapp/Cel:(00) 0000-0000</a>
  <a href="mailto:contato@kandju.com.br">contato@kandju.com.br</a>
</nav>

<header class="header">
  <h1 class="header-title" title="kandju é 'Doce' em Maltês">kandju</h1>
  <h2 class="header-subtitle">A doceria que á mais doce, que doce de batata doce!</h2>
</header>

<div class="header-menu">
  <div class="container">
    <input type="checkbox" id="control-nav" style="display:none;" />
    <label for="control-nav" class="control-nav"></label>
    <label for="control-nav" class="control-nav-close"></label>
    <nav class="header-menu-nav">
      <a class="header-menu-link <?= (!getCurrentPage()) ? 'current' : '' ?>" href="<?= BASE_URL ?>">home</a>
      <a class="header-menu-link <?= (getCurrentPage() == 'produtos') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=produtos">produtos</a>
      <a class="header-menu-link <?= (getCurrentPage() == 'a-kandju') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=a-kandju">quem somos</a>
      <a class="header-menu-link <?= (getCurrentPage() == 'contato') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=contato">contato</a>
    </nav>
  </div>
</div>