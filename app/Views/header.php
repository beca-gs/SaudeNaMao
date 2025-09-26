<header style="background-color: #d6e6f5;">
    <link rel="stylesheet" href="<?=URL?>/public/css/saudename.css"/>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark d-flex justify-content-between align-items-center">
            
            <!-- Logo + Nome do App + Saudação -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="<?=URL?>">
                    <img src="/SaudeNaMao/public/img/logo.png" alt="Logo" style="height: 80px; width: 100px; margin-right: 18px;">
                </a>
                <div>
                    <span style="font-size: 1.7rem; font-weight: bold; color: #1f5461ff;">Saúde na Mão</span><br>
                    <span style="font-size: 1rem; color: #0a0d14ff;">Olá, <?= $_SESSION['usuario_nome'] ?? 'Visitante' ?>!</span>
                </div>
            </div>

            <!-- Notificações à direita -->
            <div class="d-flex align-items-center position-relative">
                <!-- Ícone de notificações -->
                <button id="btnNotificacoes" class="btn btn-light position-relative" style="border-radius:50%; padding:10px;">
                    <img src="<?=URL?>/public/img/bell.png" alt="Notificações" style="width:28px;">
                    <!-- Badge de notificação removida, apenas o sino será exibido -->
                </button>
                <!-- Aba flutuante de notificações -->
                <div id="notificacoesDropdown" class="shadow rounded" style="display:none; position:absolute; right:0; top:48px; min-width:320px; background:#fff; z-index:2000;">
                    <div class="p-3 border-bottom" style="font-weight:600; color:#1f5461ff;">Notificações</div>
                    <div class="p-3 border-bottom">
                        <div style="font-weight:500;">Vacinação contra gripe prorrogada</div>
                        <div class="text-muted small">A campanha foi prorrogada até 30/09.</div>
                    </div>
                    <div class="p-3 border-bottom">
                        <div style="font-weight:500;">Alteração no horário do posto central</div>
                        <div class="text-muted small">Funcionamento das 8h às 14h nesta semana.</div>
                    </div>
                    <div class="p-3 text-center">
                        <a href="#" style="color:#1f5461ff; text-decoration:underline;">Ver todas notificações</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script>
        // Exibe/oculta a aba de notificações ao clicar no sino
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('btnNotificacoes');
            var dropdown = document.getElementById('notificacoesDropdown');
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
            document.addEventListener('click', function() {
                dropdown.style.display = 'none';
            });
        });
    </script>
</header>
