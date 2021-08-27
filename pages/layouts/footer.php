<div class="footer-social">
  <nav class="container">
    <h3 class="social-title">Encontre a <strong>kandju</strong> nas sedes sociais!</h3>
    <a href="#" class="social-item sprites instagram"></a>
    <a href="#" class="social-item sprites facebook"></a>
    <a href="#" class="social-item sprites youtube"></a>
    <a href="#" class="social-item sprites linkedin"></a>
  </nav>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer-menu">
      <a class="footer-menu-link <?= (!getCurrentPage()) ? 'current' : '' ?>" href="<?= BASE_URL ?>">home</a>
      <a class="footer-menu-link <?= (getCurrentPage() == 'produtos') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=produtos">produtos</a>
      <a class="footer-menu-link <?= (getCurrentPage() == 'a-kandju') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=a-kandju">quem somos</a>
      <a class="footer-menu-link <?= (getCurrentPage() == 'contato') ? 'current' : '' ?>" href="<?= BASE_URL ?>?pagina=contato">contato</a>
    </div>

    <div class="footer-contact">
      <a class="footer-contact-link" href="https://g.page/unicesumar-curitiba-portao?share" target="_blank">
        R. Itajubá, 673 - Portão, Curitiba - PR, 81070-190
      </a>
      <a class="footer-contact-link" href="tel:99999999">(00) 0000-0000</a>
      <a class="footer-contact-link" href="tel:99999999">Whatsapp/Cel:(00) 0000-0000</a>
      <a class="footer-contact-link" href="mailto:contato@kandju.com.br">contato@kandju.com.br</a>
      </nav>
    </div>
  </div>
</footer>

<div class="allRights">
  <strong>kandju</strong> © 2021 All Rights Reserved
</div>

<div class="evertonthepaula">
  Everton de Paula - RA: 17076185
</div>

<script src="" async defer></script>
</body>

</html>