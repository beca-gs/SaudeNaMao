<!-- Barra de navegação inferior -->
    <div>
<style>
.footer-mobile {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100vw;
  background: #ffffffff;
  z-index: 9999;
  box-shadow: 0 -2px 8px #dbeafe;
}
.footer-mobile-nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 0.5rem 0;
}
.footer-mobile-item {
  color: #000000ff;
  text-align: center;
  text-decoration: none;
  flex: 1;
  font-size: 1.1rem;
  transition: background 0.2s;
  padding: 0.3rem 0;
}
.footer-mobile-item.active,
.footer-mobile-item:hover {
  background: #e3eaff;
  color: #111;
  box-shadow: 0 2px 12px 0 rgba(0,123,255,0.10);
  border-radius: 12px 12px 0 0;
  font-weight: bold;
  transition: background 0.25s, color 0.25s, box-shadow 0.25s;
}
.footer-mobile-item.active .fa,
.footer-mobile-item:hover .fa {
  color: #007bff;
  transform: scale(1.18);
  transition: color 0.25s, transform 0.25s;
}
.footer-mobile-item .fa {
  transition: color 0.25s, transform 0.25s;
}
.footer-mobile-label {
  display: block;
  font-size: 0.85rem;
}
body {
  padding-bottom: 60px; /* espaço para a barra não cobrir conteúdo */
}
</style>

<nav class="footer-mobile">
  <div class="footer-mobile-nav">
    <a href="<?=URL?>/paginas/home" class="footer-mobile-item">
      <i class="fa fa-home"></i>
      <span class="footer-mobile-label">Início</span>
    </a>
    <a href="<?=URL?>/paginas/postos" class="footer-mobile-item">
      <i class="fa fa-hospital"></i>
      <span class="footer-mobile-label">Postos</span>
    </a>
    <a href="<?=URL?>/paginas/saude" class="footer-mobile-item">
      <i class="fa fa-heartbeat"></i>
      <span class="footer-mobile-label">Saúde</span>
    </a>
    <a href="<?=URL?>/usuarios/perfil" class="footer-mobile-item">
      <i class="fa fa-user"></i>
      <span class="footer-mobile-label">Perfil</span>
    </a>
  </div>
</nav>

<footer class='p-4 text-light' style="background-color: #8392a0ff; margin-bottom:0;">
  <div class="container text-center">
    <small>
      Saúde na Mão <?= APP_VERSAO ?>
      <div class="border-top mt-3">
        &copy; 2025 - <?= date('Y') ?> IFRO - Guajará-Mirim / Informática - Programação WEB
      </div>
    </small>
  </div>
</footer>
