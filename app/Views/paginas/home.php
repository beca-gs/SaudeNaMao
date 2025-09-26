
<!-- Paleta branco-azul pastel com títulos e textos em azul escuro -->
<div class="container mb-4" style="margin-top: 2.5rem;">
  <div class="row g-4">
    <!-- Campanhas Ativas -->
    <div class="col-12 col-md-6">
      <div class="card painel-card shadow-sm p-4 mb-3 h-100"
        style="border-radius:22px; background:linear-gradient(90deg,#fafdff 60%,#e3f0fb 100%); border:1px solid #d6e6f5;">
        <div class="d-flex align-items-center mb-2">
          <div style="background:#dbeafe; border-radius:50%; padding:10px; margin-right:14px;">
            <img src="<?=URL?>/public/img/coracao.png" alt="Campanhas Ativas" width="28">
          </div>
          <div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Campanhas Ativas</h6>
            <span class="badge" style="font-size:0.95rem; background:#bae6fd; color:#1e293b;">3 em andamento</span>
          </div>
        </div>
        <div class="mt-2" style="color:#1e293b;">
          <strong>Março Lilás:</strong> <span>Prevenção do Câncer do Colo do Útero</span><br>
          <small class="text-muted">Período: 01/03 a 31/03</small><br>
          <small class="text-muted">Público: Mulheres 25-64 anos</small>
        </div>
      </div>
    </div>
    <!-- Posto de Saúde Mais Próximo -->
    <div class="col-12 col-md-6">
      <div class="card painel-card shadow-sm p-4 mb-3 h-100"
        style="border-radius:22px; background:linear-gradient(90deg,#fafdff 60%,#e0f2fe 100%); border:1px solid #d6e6f5;">
        <div class="d-flex align-items-center mb-2">
          <div style="background:#bae6fd; border-radius:50%; padding:10px; margin-right:14px;">
            <img src="<?=URL?>/public/img/localizacao.png" alt="Posto Próximo" width="28">
          </div>
          <div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Posto Mais Próximo</h6>
            <span class="badge" style="font-size:0.95rem; background:#bae6fd; color:#1e293b;">650 m</span>
          </div>
        </div>
        <div class="mt-2" style="color:#1e293b;">
          <strong>Centro de Saúde Altamiro Barroso</strong><br>
          <small class="text-muted">Av. Dr. Lewerger, 4734 - St. 05</small><br>
          <small class="text-muted">Tempo estimado: 2 min de carro</small>
        </div>
      </div>
    </div>
    <!-- Horários de Atendimento -->
    <div class="col-12 col-md-6">
      <div class="card painel-card shadow-sm p-4 mb-3 h-100"
        style="border-radius:22px; background:linear-gradient(90deg,#fafdff 60%,#e0f2fe 100%); border:1px solid #d6e6f5;">
        <div class="d-flex align-items-center mb-2">
          <div style="background:#e0f2fe; border-radius:50%; padding:10px; margin-right:14px;">
            <img src="<?=URL?>/public/img/calendario.png" alt="Horários" width="28">
          </div>
          <div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Horários de Atendimento</h6>
            <span class="badge" style="font-size:0.95rem; background:#bae6fd; color:#1e293b;">Hoje: 07h às 17h</span>
          </div>
        </div>
        <div class="mt-2" style="color:#1e293b;">
          <strong>Seg a Sex:</strong> <span>07h às 17h</span><br>
          <strong>Sábado:</strong> <span>08h às 12h</span><br>
          <small class="text-muted">Domingo e feriados: fechado</small>
        </div>
      </div>
    </div>
    <!-- Informações MeuSUS -->
    <div class="col-12 col-md-6">
      <div class="card painel-card shadow-sm p-4 mb-3 h-100"
        style="border-radius:22px; background:linear-gradient(90deg,#fafdff 60%,#e0f2fe 100%); border:1px solid #d6e6f5;">
        <div class="d-flex align-items-center mb-2">
          <div style="background:#dbeafe; border-radius:50%; padding:10px; margin-right:14px;">
            <img src="<?=URL?>/public/img/info.png" alt="MeuSUS" width="28">
          </div>
          <div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">MeuSUS</h6>
            <span class="badge" style="font-size:0.95rem; background:#bae6fd; color:#1e293b;">Acesso rápido</span>
          </div>
        </div>
        <div class="mt-2" style="color:#1e293b;">
          <strong>Carteira Digital, Vacinas, Consultas</strong><br>
          <small class="text-muted">Gerencie seus dados e serviços do SUS</small>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Painel Informativo -->
<div class="container mb-4">
  <div class="card painel-card p-4" style="border-radius:18px; background:#fafdff;">
    <div class="d-flex align-items-center mb-3">
      <h4 class="mb-0" style="font-weight:800; color:#1e293b;">Notificações Importantes</h4>
    </div>
    <!-- Notificação 1 -->
    <div class="mb-3 border-bottom pb-3 d-flex align-items-start" style="color:#1e293b;">
      <img src="<?=URL?>/public/img/megafone.png" alt="Vacinação" width="38" class="me-3 mt-1">
      <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center">
          <span style="font-size:1.1rem; font-weight:700; color:#1e293b;">Vacinação contra gripe prorrogada</span>
          <button class="btn btn-link p-0" style="color:#2563eb;" type="button" onclick="abrirNotificacao('notificacao1')">
            Saiba mais <i class="fa fa-arrow-right ms-1"></i>
          </button>
        </div>
        <div style="font-size:1rem; color:#334155; margin-top:2px;">
          A campanha de vacinação contra gripe foi prorrogada até o dia 30/09.
        </div>
        <div class="mt-2" style="font-size:0.93rem; color:#64748b;">
          <i class="fa fa-tag me-1"></i> Vacinação
        </div>
      </div>
    </div>
    <!-- Notificação 2 -->
    <div class="mb-3 border-bottom pb-3 d-flex align-items-start" style="color:#1e293b;">
      <img src="<?=URL?>/public/img/relogio.png" alt="Horário" width="38" class="me-3 mt-1">
      <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center">
          <span style="font-size:1.1rem; font-weight:700; color:#1e293b;">Alteração no horário do posto central</span>
          <button class="btn btn-link p-0" style="color:#2563eb;" type="button" onclick="abrirNotificacao('notificacao2')">
            Saiba mais <i class="fa fa-arrow-right ms-1"></i>
          </button>
        </div>
        <div style="font-size:1rem; color:#334155; margin-top:2px;">
          O posto central funcionará das 8h às 14h nesta semana.
        </div>
        <div class="mt-2" style="font-size:0.93rem; color:#64748b;">
          <i class="fa fa-tag me-1"></i> Posto
        </div>
      </div>
    </div>
    <!-- Notificação 3 -->
    <div class="mb-3 d-flex align-items-start" style="color:#1e293b;">
      <img src="<?=URL?>/public/img/lampada.png" alt="Campanha" width="38" class="me-3 mt-1">
      <div class="flex-grow-1">
        <div class="d-flex justify-content-between align-items-center">
          <span style="font-size:1.1rem; font-weight:700; color:#1e293b;">Campanha Outubro Rosa começa semana que vem</span>
          <button class="btn btn-link p-0" style="color:#2563eb;" type="button" onclick="abrirNotificacao('notificacao3')">
            Saiba mais <i class="fa fa-arrow-right ms-1"></i>
          </button>
        </div>
        <div style="font-size:1rem; color:#334155; margin-top:2px;">
          Haverá exames gratuitos e palestras em todos os postos de saúde.
        </div>
        <div class="mt-2" style="font-size:0.93rem; color:#64748b;">
          <i class="fa fa-tag me-1"></i> Campanha
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Aba Flutuante de Notificação (direita) -->
<div id="notificacaoSidebar" style="display:none; position:fixed; top:0; right:0; width:370px; max-width:100vw; height:100vh; background:#fafdff; box-shadow:-4px 0 24px rgba(30,41,59,0.10); z-index:4000; transition:right 0.3s;">
  <div class="p-4">
    <div class="d-flex align-items-center mb-3">
      <img id="notificacaoIcone" src="" alt="Ícone" width="44" class="me-2">
      <div>
        <h5 id="notificacaoTituloSidebar" style="font-weight:800; color:#1e293b; margin-bottom:2px;"></h5>
        <div id="notificacaoResumoSidebar" style="font-size:1rem; color:#334155;"></div>
      </div>
      <button type="button" class="btn-close ms-auto" onclick="fecharNotificacaoSidebar()" aria-label="Fechar"></button>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-clock me-1"></i> <span id="notificacaoHorarioSidebar"></span>
    </div>
    <div class="mb-3" id="notificacaoTextoSidebar" style="color:#1e293b; font-size:1rem;"></div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-map-marker-alt me-1"></i> <span id="notificacaoLocalSidebar"></span>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-calendar-alt me-1"></i> <span id="notificacaoDataSidebar"></span>
    </div>
    <div class="mb-3" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-user me-1"></i> <span id="notificacaoAutorSidebar"></span>
    </div>
    <button class="btn btn-outline-primary rounded-pill px-4" style="color:#000; border-color:#000;" onclick="compartilharNotificacao()">
      <i class="fa fa-share-alt me-2"></i>Compartilhar
    </button>
  </div>
</div>
<div id="notificacaoSidebarOverlay" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(30,41,59,0.10); z-index:3999;" onclick="fecharNotificacaoSidebar()"></div>

<script>
  // Dados fictícios das notificações completas
  const notificacoesSidebar = {
    notificacao1: {
      icone: "<?=URL?>/public/img/megafone.png",
      titulo: "Vacinação contra gripe prorrogada",
      resumo: "A campanha de vacinação contra gripe foi prorrogada até o dia 30/09.",
      horario: "Hoje, 09:30",
      texto: "A campanha de vacinação contra gripe foi prorrogada até o dia 30/09. Procure o posto mais próximo e mantenha sua vacinação em dia. Leve seu cartão de vacinação e documento com foto.",
      local: "UBS Central",
      data: "30/09/2025",
      autor: "Secretaria Municipal de Saúde"
    },
    notificacao2: {
      icone: "<?=URL?>/public/img/relogio.png",
      titulo: "Alteração no horário do posto central",
      resumo: "O posto central funcionará das 8h às 14h nesta semana.",
      horario: "Ontem, 16:00",
      texto: "Informamos que, excepcionalmente nesta semana, o posto central funcionará das 8h às 14h devido à manutenção elétrica. Para emergências, procure a UPA mais próxima.",
      local: "UBS Central",
      data: "27/09/2025",
      autor: "Secretaria Municipal de Saúde"
    },
    notificacao3: {
      icone: "<?=URL?>/public/img/lampada.png",
      titulo: "Campanha Outubro Rosa começa semana que vem",
      resumo: "Haverá exames gratuitos e palestras em todos os postos de saúde.",
      horario: "25/09, 11:00",
      texto: "Participe da campanha Outubro Rosa para prevenção do câncer de mama. Haverá exames gratuitos e palestras de conscientização em todos os postos de saúde da cidade.",
      local: "Todas as UBS",
      data: "01/10/2025",
      autor: "Secretaria Municipal de Saúde"
    }
  };

  function abrirNotificacao(id) {
    const n = notificacoesSidebar[id];
    document.getElementById('notificacaoIcone').src = n.icone;
    document.getElementById('notificacaoTituloSidebar').innerText = n.titulo;
    document.getElementById('notificacaoResumoSidebar').innerText = n.resumo;
    document.getElementById('notificacaoHorarioSidebar').innerText = n.horario;
    document.getElementById('notificacaoTextoSidebar').innerText = n.texto;
    document.getElementById('notificacaoLocalSidebar').innerText = n.local;
    document.getElementById('notificacaoDataSidebar').innerText = n.data;
    document.getElementById('notificacaoAutorSidebar').innerText = n.autor;
    document.getElementById('notificacaoSidebar').style.display = 'block';
    document.getElementById('notificacaoSidebarOverlay').style.display = 'block';
    setTimeout(() => {
      document.getElementById('notificacaoSidebar').style.right = '0';
    }, 10);
    document.body.style.overflow = 'hidden';
  }
  function fecharNotificacaoSidebar() {
    document.getElementById('notificacaoSidebar').style.right = '-400px';
    setTimeout(() => {
      document.getElementById('notificacaoSidebar').style.display = 'none';
      document.getElementById('notificacaoSidebarOverlay').style.display = 'none';
      document.body.style.overflow = '';
    }, 250);
  }
  function compartilharNotificacao() {
    alert('Link para compartilhamento copiado!');
  }
</script>

<style>
.btn-outline-info.btn-sm.rounded-pill.mt-1.px-3:hover,
.btn-outline-info.btn-sm.rounded-pill.mt-1.px-3:focus {
  background: #2563eb !important;
  color: #fff !important;
  border-color: #2563eb !important;
  transition: background 0.2s, color 0.2s;
}
.hover-shadow:hover {
  box-shadow: 0 4px 24px #2563eb33 !important;
  transition: box-shadow 0.2s;
}
</style>

<!-- Cards em coluna -->
<div class="card painel-card text-center p-3 mb-3" style="border-radius:18px; background:#fafdff;">
  <div class="d-flex align-items-center mb-3">
      <h4 class="mb-0" style="font-weight:800; color:#1e293b;">Horários de Atendimento</h4>
    </div>
  <!-- Outras UBs (informações detalhadas) -->
  <div class="mt-4">
    <!-- UB 1 -->
    <div class="card mb-3" style="border-radius:16px; border:1px solid #D9F0FF; background:#e0f2fe;">
      <div class="row g-0 align-items-center">
        <div class="col-3 text-center">
          <img src="<?=URL?>/public/img/altamiro.png" alt="UB Jardim das Palmeiras" class="img-fluid" style="width:600px; height:200px; object-fit:cover;">
        </div>
        <div class="col-9">
          <div class="card-body py-2 px-2" style="color:#D9F0FF;">
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Centro de Saúde Altamiro Barroso</h6>
            <div class="mb-1">
              <span class="badge" style="background:#003366; color:#fff; font-size:0.85rem;">Aberto</span>
              <span class="ms-2" style="color:#fbbf24;">
                ★★★★☆
              </span>
              <span class="text-muted ms-1" style="font-size:0.85rem;">4.2</span>
            </div>
            <div class="mb-1">
              <small class="text-muted">Av. Dr. Lewerger, 4734 - St. 05, Guajará-Mirim - RO, 76850-000</small>
            </div>
            <div class="mb-1">
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Clínica Geral</span>
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Pediatria</span>
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Vacinação</span>
            </div>
            <a href="https://www.google.com/maps/dir/?api=1&destination=Av. Dr. Lewerger, 4734 - St. 05, Guajará-Mirim - RO, 76850-000" target="_blank"
               class="btn btn-outline-info btn-sm rounded-pill mt-1 px-3" style="font-size:0.95rem; color:#2563eb; border-color:#bae6fd;">
              Rota no Google Maps
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- UB 2 -->
    <div class="card mb-3" style="border-radius:16px; border:1px solid #d6e6f5; background:#e0f2fe;">
      <div class="row g-0 align-items-center">
        <div class="col-3 text-center">
          <img src="<?=URL?>/public/img/agostinho.png" alt="Centro de Saúde Irmã Maria Agostinho" class="img-fluid" style="width:600px; height:200px; object-fit:cover;">
        </div>
        <div class="col-9">
          <div class="card-body py-2 px-2" style="color:#1e293b;">
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Centro de Saúde Irmã Maria Agostinho</h6>
            <div class="mb-1">
              <span class="badge" style="background:#003366; color:#fff; font-size:0.85rem;">Aberto</span>
              <span class="ms-2" style="color:#fbbf24;">
                ★★★★☆
              </span>
              <span class="text-muted ms-1" style="font-size:0.85rem;">4.5</span>
            </div>
            <div class="mb-1">
              <small class="text-muted">Av. Cel. Aluísio Ferreira - Dez de Abril, Guajará-Mirim - RO, 76850-000</small>
            </div>
            <div class="mb-1">
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Clínica Geral</span>
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Odontologia</span>
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Vacinação</span>
            </div>
            <a href="https://www.google.com/maps/dir/?api=1&destination=Av. Cel. Aluísio Ferreira, 1847-1927 - Dez de Abril, Guajará-Mirim - RO, 76850-000" target="_blank"
               class="btn btn-outline-info btn-sm rounded-pill mt-1 px-3" style="font-size:0.95rem; color:#2563eb; border-color:#bae6fd;">
              Rota no Google Maps
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- UB 3 -->
    <div class="card mb-1" style="border-radius:16px; border:1px solid #d6e6f5; background:#e0f2fe;">
      <div class="row g-0 align-items-center">
        <div class="col-3 text-center">
          <img src="<?=URL?>/public/img/chargas.png" alt="Centro de Saúde Carlos Chagas" class="img-fluid" style="width:600px; height:200px; object-fit:cover;">
        </div>
        <div class="col-9">
          <div class="card-body py-2 px-2" style="color:#1e293b;">
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Centro de Saúde Carlos Chagas</h6>
            <div class="mb-1">
              <span class="badge" style="background:#c02948; color:#fff; font-size:0.85rem;">Fechado</span>
              <span class="ms-2" style="color:#fbbf24;">
                ★★★☆☆
              </span>
              <span class="text-muted ms-1" style="font-size:0.85rem;">3.8</span>
            </div>
            <div class="mb-1">
              <small class="text-muted">Av. Marcílio Dias - Tamandaré, Guajará-Mirim - RO, 76850-000</small>
            </div>
            <div class="mb-1">
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Clínica Geral</span>
              <span class="badge" style="font-size:0.8rem; background:#bae6fd; color:#1e293b;">Pediatria</span>
            </div>
            <a href="https://www.google.com/maps/dir/?api=1&destination=Av. Marcílio Dias, 1443-1363 - St. 02, Guajará-Mirim - RO, 76850-000" target="_blank"
               class="btn btn-outline-info btn-sm rounded-pill mt-1 px-3" style="font-size:0.95rem; color:#2563eb; border-color:#bae6fd;">
              Rota no Google Maps
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="<?=URL?>/paginas/postos" class="btn btn-info btn-rounded mt-3" style="border-radius:24px; background:#2563eb; color:#fff;">
  Ver postos
</a>
</div>

<!-- Campanhas de Saúde -->
<div class="card painel-card text-center p-3 mb-3" style="border-radius:18px; background:#fafdff;">
  <div class="d-flex align-items-center mb-3">
    <h4 class="mb-0" style="font-weight:800; color:#1e293b;">Campanhas de Saúde</h4>
  </div>
  <!-- Notícias/Campanhas -->
  <div class="mt-3">
    <!-- Notícia/Campanha 1 -->
    <div class="card mb-3 text-start" style="border-radius:14px; border:1px solid #d6e6f5; background:#e0f2fe;">
      <div class="row g-0 align-items-center">
        <div class="col-md-3 text-center">
          <img src="<?=URL?>/public/img/marcoLilas.jpg" alt="Março Lilás" class="img-fluid rounded-start" style="height:300px; object-fit:cover;">
        </div>
        <div class="col-md-9">
          <div class="card-body py-3 px-3" style="color:#1e293b;">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="text-muted small"><i class="fa fa-calendar me-1"></i>25/09/2025</span>
            </div>
            <h6 class="mb-1" style="font-weight:900; color:#1e293b;">Março Lilás: Prevenção do Câncer do Colo do Útero</h6>
            <div class="mb-2 text-muted small">
              <i class="fa fa-eye me-1"></i> 1.234 pessoas visualizaram
            </div>
            <p class="mb-2" style="font-size:0.97rem;">
              Participe da campanha Março Lilás! Realize exames preventivos e tire dúvidas com especialistas nos postos de saúde.
            </p>
            <span class="badge" style="font-size:0.85rem; background:#fafdff; color:#1e293b;">Prevenção</span>
            <div class="d-flex justify-content-end align-items-center mt-4">
            <a class="btn btn-sm rounded-pill px-4 w-100"
              style="background:#2563eb; color:#fff; border:none; box-shadow:0 2px 8px #e0f2fe; font-weight:600;"
              onclick="abrirCampanhaSidebar('campanha1')">
              Saiba mais
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Notícia/Campanha 2 -->
    <div class="card mb-3 text-start" style="border-radius:14px; border:1px solid #d6e6f5; background:#fafdff;">
      <div class="row g-0 align-items-center">
        <div class="col-md-3 text-center">
          <img src="<?=URL?>/public/img/vacina.jpg" alt="Vacinação Gripe" class="img-fluid rounded-start" style="height:340px; object-fit:cover;">
        </div>
        <div class="col-md-9">
          <div class="card-body py-3 px-3" style="color:#1e293b;">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="text-muted small"><i class="fa fa-calendar me-1"></i>20/09/2025</span>
            </div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Campanha Nacional de Vacinação contra Gripe</h6>
            <div class="mb-2 text-muted small">
              <i class="fa fa-eye me-1"></i> 2.045 pessoas visualizaram
            </div>
            <p class="mb-2" style="font-size:0.97rem;">
              A vacinação contra gripe está disponível para todos os públicos prioritários. Procure o posto mais próximo!
            </p>
            <span class="badge" style="font-size:0.85rem; background:#bae6fd; color:#000;">Vacinação</span>
            <div class="d-flex justify-content-end align-items-center mt-4">
            <a class="btn btn-sm rounded-pill px-4 w-100"
              style="background:#2563eb; color:#fff; border:none; box-shadow:0 2px 8px #e0f2fe; font-weight:600;"
              onclick="abrirCampanhaSidebar('campanha2')">
              Saiba mais
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Notícia/Campanha 3 -->
    <div class="card mb-2 text-start" style="border-radius:14px; border:1px solid #d6e6f5; background:#e0f2fe;">
      <div class="row g-0 align-items-center">
        <div class="col-md-3 text-center">
          <img src="<?=URL?>/public/img/setembroAmarelo.jpg" alt="Setembro Amarelo" class="img-fluid rounded-start" style="height:300px; object-fit:cover;">
        </div>
        <div class="col-md-9">
          <div class="card-body py-3 px-3" style="color:#1e293b;">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="text-muted small"><i class="fa fa-calendar me-1"></i>15/09/2025</span>
            </div>
            <h6 class="mb-1" style="font-weight:700; color:#1e293b;">Setembro Amarelo: Valorização da Vida</h6>
            <div class="mb-2 text-muted small">
              <i class="fa fa-eye me-1"></i> 3.012 pessoas visualizaram
            </div>
            <p class="mb-2" style="font-size:0.97rem;">
              Acompanhe palestras e rodas de conversa sobre saúde mental em todas as UBS do município.
            </p>
            <span class="badge" style="font-size:0.85rem; background:#fafdff; color:#1e293b;">Conscientização</span>
            <div class="d-flex justify-content-end align-items-center mt-4">
            <a  class="btn btn-sm rounded-pill px-4 w-100"
            style="background:#2563eb; color:#fff; border:none; box-shadow:0 2px 8px #e0f2fe; font-weight:600;"
            onclick="abrirCampanhaSidebar('campanha3')">
            Saiba mais
          </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal/Aba Flutuante de Campanha -->
<div id="campanhaModal" class="modal" tabindex="-1" style="display:none; background:rgba(0,0,0,0.25); position:fixed; top:0; left:0; width:100vw; height:100vh; z-index:3000;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius:18px;">
      <div class="modal-header" style="background:#e0f2fe;">
        <h5 class="modal-title" id="campanhaTitulo" style="color:#1e293b;"></h5>
        <button type="button" class="btn-close" onclick="fecharCampanha()" aria-label="Fechar"></button>
      </div>
      <div class="modal-body" id="campanhaConteudo" style="color:#1e293b;"></div>
      <div class="modal-footer" style="background:#e0f2fe;">
        <button type="button" class="btn rounded-pill px-4" style="background:#2563eb; color:#fff;" onclick="fecharCampanha()">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Dados fictícios das campanhas completas
  const campanhas = {
    campanha1: {
      titulo: "Março Lilás: Prevenção do Câncer do Colo do Útero",
      conteudo: `
        <p><b>Categoria:</b> Prevenção</p>
        <p><b>Data de publicação:</b> 25/09/2025</p>
        <p><b>Visualizações:</b> 1.234</p>
        <p>
          A campanha Março Lilás visa conscientizar sobre a importância do exame preventivo do câncer do colo do útero. Durante todo o mês, as UBSs estarão realizando exames gratuitos e distribuindo materiais informativos.
        </p>
        <hr>
        <b>Feedback de pessoas:</b>
        <ul>
          <li><b>Maria S.:</b> "Fui muito bem atendida, recomendo a todas!"</li>
          <li><b>Juliana P.:</b> "Campanha essencial para nossa saúde."</li>
        </ul>
      `
    },
    campanha2: {
      titulo: "Campanha Nacional de Vacinação contra Gripe",
      conteudo: `
        <p><b>Categoria:</b> Vacinação</p>
        <p><b>Data de publicação:</b> 20/09/2025</p>
        <p><b>Visualizações:</b> 2.045</p>
        <p>
          A vacinação contra gripe está disponível para crianças, idosos, gestantes e profissionais da saúde. Não perca o prazo e mantenha sua carteira de vacinação em dia!
        </p>
        <hr>
        <b>Feedback de pessoas:</b>
        <ul>
          <li><b>Carlos M.:</b> "Vacinei toda a família, atendimento rápido."</li>
          <li><b>Fernanda L.:</b> "Muito importante para evitar doenças."</li>
        </ul>
      `
    },
    campanha3: {
      titulo: "Setembro Amarelo: Valorização da Vida",
      conteudo: `
        <p><b>Categoria:</b> Conscientização</p>
        <p><b>Data de publicação:</b> 15/09/2025</p>
        <p><b>Visualizações:</b> 3.012</p>
        <p>
          O Setembro Amarelo promove ações de valorização da vida e prevenção ao suicídio. Participe das palestras e procure apoio psicológico nas UBSs.
        </p>
        <hr>
        <b>Feedback de pessoas:</b>
        <ul>
          <li><b>Lucas R.</b> "As palestras foram esclarecedoras."</li>
          <li><b>Patrícia D.</b> "Muito bom saber que temos esse apoio."</li>
        </ul>
      `
    }
  };

  function abrirCampanha(id) {
    document.getElementById('campanhaTitulo').innerHTML = campanhas[id].titulo;
    document.getElementById('campanhaConteudo').innerHTML = campanhas[id].conteudo;
    document.getElementById('campanhaModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
  }
  function fecharCampanha() {
    document.getElementById('campanhaModal').style.display = 'none';
    document.body.style.overflow = '';
  }
</script>

<!-- Modal/Aba Flutuante de Campanha (direita) -->
<div id="campanhaSidebar" style="display:none; position:fixed; top:0; right:0; width:420px; max-width:100vw; height:100vh; background:#fafdff; box-shadow:-4px 0 24px rgba(30,41,59,0.10); z-index:4000; transition:right 0.3s;">
  <div class="p-4" style="overflow-y:auto; height:100vh;">
    <div class="d-flex align-items-center mb-3">
      <img id="campanhaImagemSidebar" src="" alt="Imagem Campanha" width="56" class="me-3 rounded" style="object-fit:cover; height:56px;">
      <div>
        <h5 id="campanhaTituloSidebar" style="font-weight:800; color:#1e293b; margin-bottom:2px;"></h5>
        <div id="campanhaResumoSidebar" style="font-size:1rem; color:#334155;"></div>
      </div>
      <button type="button" class="btn-close ms-auto" onclick="fecharCampanhaSidebar()" aria-label="Fechar"></button>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-calendar-alt me-1"></i> <span id="campanhaDataSidebar"></span>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-map-marker-alt me-1"></i> <span id="campanhaBairrosSidebar"></span>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-users me-1"></i> <span id="campanhaPublicoSidebar"></span>
    </div>
    <div class="mb-2" style="color:#64748b; font-size:0.97rem;">
      <i class="fa fa-hospital me-1"></i> <span id="campanhaUBSSidebar"></span>
    </div>
    <!-- Horários -->
    <div class="mb-3 p-3 rounded" style="background:#e0f2fe;">
      <div style="font-weight:700; color:#2563eb; margin-bottom:4px;"><i class="fa fa-clock me-1"></i>Horários de Funcionamento</div>
      <div id="campanhaHorariosSidebar" style="color:#1e293b;"></div>
    </div>
    <!-- Ações da campanha -->
    <div class="mb-3 p-3 rounded" style="background:#e0f2fe;">
      <div style="font-weight:700; color:#2563eb; margin-bottom:4px;"><i class="fa fa-tasks me-1"></i>Ações da Campanha</div>
      <ul id="campanhaAcoesSidebar" style="color:#1e293b; padding-left:18px;"></ul>
    </div>
    <!-- Contato -->
    <div class="mb-3 p-3 rounded" style="background:#e0f2fe;">
      <div style="font-weight:700; color:#2563eb; margin-bottom:4px;"><i class="fa fa-phone me-1"></i>Contato da UBS</div>
      <div id="campanhaContatoSidebar" style="color:#1e293b;"></div>
    </div>
    <!-- Comentários -->
    <div class="mb-3 p-3 rounded" style="background:#fafdff; border:1px solid #e0f2fe;">
      <div style="font-weight:700; color:#2563eb; margin-bottom:4px;"><i class="fa fa-comments me-1"></i>Comentários</div>
      <form id="formComentarioCampanha" class="mb-3">
        <textarea id="comentarioInput" class="form-control mb-2" rows="2" placeholder="Deixe seu comentário sobre o atendimento"></textarea>
        <button type="submit" class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">Publicar</button>
      </form>
      <div id="comentariosCampanhaSidebar" style="max-height:120px; overflow-y:auto;">
        <!-- Comentários serão inseridos aqui -->
      </div>
    </div>
  </div>
</div>
<div id="campanhaSidebarOverlay" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(30,41,59,0.10); z-index:3999;" onclick="fecharCampanhaSidebar()"></div>

<script>
const campanhasSidebar = {
  campanha1: {
    imagem: "<?=URL?>/public/img/marcoLilas.jpg",
    titulo: "Março Lilás: Prevenção do Câncer do Colo do Útero",
    resumo: "Campanha de prevenção e conscientização sobre o câncer do colo do útero.",
    data: "01/03/2025 a 31/03/2025",
    bairros: "Centro, Jardim das Palmeiras, Nova Esperança",
    publico: "Mulheres de 25 a 64 anos",
    ubs: "Centro de Saúde Altamiro Barroso",
    horarios: "Seg a Sex: 07h às 17h<br>Sábado: 08h às 12h",
    acoes: [
      "Exames preventivos gratuitos",
      "Palestras educativas",
      "Distribuição de materiais informativos",
      "Atendimento psicológico"
    ],
    contato: "Telefone: (69) 1234-5678<br>Email: altamiro@saude.gov.br",
    comentarios: [
      {nome: "Maria S.", texto: "Fui muito bem atendida, recomendo a todas!"},
      {nome: "Juliana P.", texto: "Campanha essencial para nossa saúde."}
    ]
  },
  campanha2: {
    imagem: "<?=URL?>/public/img/vacina.jpg",
    titulo: "Campanha Nacional de Vacinação contra Gripe",
    resumo: "Vacinação contra gripe para públicos prioritários em toda a cidade.",
    data: "20/09/2025 a 30/09/2025",
    bairros: "Todos os bairros",
    publico: "Crianças, idosos, gestantes, profissionais da saúde",
    ubs: "Centro de Saúde Irmã Maria Agostinho",
    horarios: "Seg a Sex: 08h às 16h<br>Sábado: 08h às 12h",
    acoes: [
      "Vacinação gratuita",
      "Orientação sobre prevenção",
      "Atualização da carteira de vacinação"
    ],
    contato: "Telefone: (69) 2345-6789<br>Email: agostinho@saude.gov.br",
    comentarios: [
      {nome: "Carlos M.", texto: "Vacinei toda a família, atendimento rápido."},
      {nome: "Fernanda L.", texto: "Muito importante para evitar doenças."}
    ]
  },
  campanha3: {
    imagem: "<?=URL?>/public/img/setembroAmarelo.jpg",
    titulo: "Setembro Amarelo: Valorização da Vida",
    resumo: "Ações de valorização da vida e prevenção ao suicídio.",
    data: "01/09/2025 a 30/09/2025",
    bairros: "Centro, Tamandaré, Dez de Abril",
    publico: "Toda a população",
    ubs: "Centro de Saúde Carlos Chagas",
    horarios: "Seg a Sex: 07h às 17h",
    acoes: [
      "Palestras sobre saúde mental",
      "Rodas de conversa",
      "Atendimento psicológico",
      "Distribuição de materiais informativos"
    ],
    contato: "Telefone: (69) 3456-7890<br>Email: chagas@saude.gov.br",
    comentarios: [
      {nome: "Lucas R.", texto: "As palestras foram esclarecedoras."},
      {nome: "Patrícia D.", texto: "Muito bom saber que temos esse apoio."}
    ]
  }
};

let campanhaAtual = null;

function abrirCampanhaSidebar(id) {
  campanhaAtual = id;
  const c = campanhasSidebar[id];
  document.getElementById('campanhaImagemSidebar').src = c.imagem;
  document.getElementById('campanhaTituloSidebar').innerText = c.titulo;
  document.getElementById('campanhaResumoSidebar').innerText = c.resumo;
  document.getElementById('campanhaDataSidebar').innerText = c.data;
  document.getElementById('campanhaBairrosSidebar').innerText = c.bairros;
  document.getElementById('campanhaPublicoSidebar').innerText = c.publico;
  document.getElementById('campanhaUBSSidebar').innerText = c.ubs;
  document.getElementById('campanhaHorariosSidebar').innerHTML = c.horarios;
  // Ações
  let acoesHtml = '';
  c.acoes.forEach(a => { acoesHtml += `<li>${a}</li>`; });
  document.getElementById('campanhaAcoesSidebar').innerHTML = acoesHtml;
  // Contato
  document.getElementById('campanhaContatoSidebar').innerHTML = c.contato;
  // Comentários
  renderizarComentarios();
  // Exibe a sidebar
  document.getElementById('campanhaSidebar').style.display = 'block';
  document.getElementById('campanhaSidebarOverlay').style.display = 'block';
  setTimeout(() => {
    document.getElementById('campanhaSidebar').style.right = '0';
  }, 10);
  document.body.style.overflow = 'hidden';
}

function fecharCampanhaSidebar() {
  document.getElementById('campanhaSidebar').style.right = '-440px';
  setTimeout(() => {
    document.getElementById('campanhaSidebar').style.display = 'none';
    document.getElementById('campanhaSidebarOverlay').style.display = 'none';
    document.body.style.overflow = '';
  }, 250);
}

// Comentários
function renderizarComentarios() {
  const comentariosDiv = document.getElementById('comentariosCampanhaSidebar');
  const comentarios = campanhasSidebar[campanhaAtual].comentarios;
  comentariosDiv.innerHTML = comentarios.length
    ? comentarios.map(c => `<div class="mb-2"><b>${c.nome}:</b> <span>${c.texto}</span></div>`).join('')
    : '<div class="text-muted">Nenhum comentário ainda.</div>';
}

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('formComentarioCampanha');
  if(form){
    form.onsubmit = function(e){
      e.preventDefault();
      const input = document.getElementById('comentarioInput');
      const texto = input.value.trim();
      if(texto && campanhaAtual){
        campanhasSidebar[campanhaAtual].comentarios.push({nome: "Você", texto});
        input.value = '';
        renderizarComentarios();
      }
    }
  }
});
</script>

<!-- Ações Rápidas -->
<div class="container mb-4">
  <div class="mb-2">
    <h5 style="font-weight:800; color:#1e293b;">Ações Rápidas</h5>
  </div>
  <div class="row g-4">
    <!-- Encontrar Posto -->
    <div class="col-12 col-md-6">
      <a href="<?=URL?>/paginas/postos" class="text-decoration-none">
        <div class="card shadow-sm p-4 h-100 text-center hover-shadow"
          style="border-radius:20px; background:#e0f2fe; border:1px solid #d6e6f5; cursor:pointer; transition:box-shadow 0.2s;">
          <div style="background:#bae6fd; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
            <img src="<?=URL?>/public/img/localizacao.png" alt="Encontrar Posto" width="26">
          </div>
          <h6 style="font-weight:700; color:#1e293b;">Encontrar Posto</h6>
        </div>
      </a>
    </div>
    <!-- Emergência -->
    <div class="col-12 col-md-6">
    <a href="<?=URL?>/paginas/emergencia" class="text-decoration-none">
      <div class="card shadow-sm p-4 h-100 text-center hover-shadow"
        style="border-radius:20px; background:#fafdff; border:1px solid #d6e6f5; cursor:pointer; transition:box-shadow 0.2s;">
        <div style="background:#e0e7ef; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
          <img src="<?=URL?>/public/img/alarme.png" alt="Emergência" width="26">
        </div>
        <h6 style="font-weight:700; color:#1e293b;">Emergência</h6>
      </div>
</a>
    </div>
    <!-- Suporte -->
    <div class="col-12 col-md-6">
      <a href="<?=URL?>/paginas/suporte" class="text-decoration-none">
        <div class="card shadow-sm p-4 h-100 text-center hover-shadow"
          style="border-radius:20px; background:#fafdff; border:1px solid #d6e6f5; cursor:pointer; transition:box-shadow 0.2s;">
          <div style="background:#dbeafe; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
            <img src="<?=URL?>/public/img/suporte.png" alt="Suporte" width="26">
          </div>
          <h6 style="font-weight:700; color:#1e293b;">Suporte</h6>
        </div>
      </a>
    </div>
    <!-- Meu SUS Digital -->
    <div class="col-12 col-md-6">
      <a href="https://meususdigital.saude.gov.br/login" target="_blank" class="text-decoration-none">
        <div class="card shadow-sm p-4 h-100 text-center hover-shadow"
          style="border-radius:20px; background:#e0f2fe; border:1px solid #d6e6f5; cursor:pointer; transition:box-shadow 0.2s;">
          <div style="background:#e0e7ef; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center; margin:0 auto 10px;">
            <img src="<?=URL?>/public/img/info.png" alt="Meu SUS Digital" width="26">
          </div>
          <h6 style="font-weight:700; color:#1e293b;">Meu SUS Digital</h6>
        </div>
      </a>
    </div>
  </div>

</div>

   


<h1><?php echo $dados['titulo']; ?></h1>
<p><?php echo $dados['descricao'];?><p>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Saúde na Mão</title>
  <style>

  </style>
</head>
<body>

  <header>
    <h2>Olá,V <?= htmlspecialchars($usuario); ?></h2>
  </header>

  <section class="dashboard">
    <div class="card green" style="cursor:pointer;" onclick="alert('Saúde Geral: Status Boa')">
      <h3>Saúde Geral</h3>
      <p>Status: Boa</p>
    </div>
    <div class="card orange" style="cursor:pointer;" onclick="alert('Coronavírus Ativo: 3 disposições')">
      <h3>Coronavírus Ativo</h3>
      <p>3 disposições</p>
    </div>
    <div class="card blue" style="cursor:pointer;" onclick="alert('Posto mais próximo: UBS Centro')">
      <h3>Posto mais próximo</h3>
      <p>UBS Centro</p>
    </div>
    <div class="card purple" style="cursor:pointer;" onclick="alert('Vacina mais próxima: É importante')">
      <h3>Vacina mais próxima</h3>
      <p>É importante</p>
    </div>
  </section>

  <section class="notification">
    <strong>Campanha de Vacinação contra Dengue:</strong> Vacine-se! Disponível para agendamento em 4 dias úteis.
  </section>

  <section class="notification" style="background-color:#d1ecf1; border-left-color:#17a2b8;">
    <strong>Mutirão de Exames Preventivos:</strong> Mamografia e Papanicolau gratuitos até 15/Mar.
  </section>

  <section class="notification" style="background-color:#f8d7da; border-left-color:#dc3545;">
    <strong>Uso de Máscara:</strong> Obrigatório em qualquer UBS da cidade.
  </section>

  <nav class="nav">
    <button onclick="alert('Página Início')">Início</button>
    <button onclick="alert('Página Postos')">Postos</button>
    <button onclick="alert('Página Perfil')">Perfil</button>
    <button onclick="alert('Página Notificações')">Notificações</button>
  </nav>

</body>
</html>

