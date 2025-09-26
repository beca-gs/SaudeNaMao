<!-- filepath: c:\xampp\htdocs\SaudeNaMao\app\Views\paginas\saude.php -->
<div class="container my-4" style="max-width:900px;">

  <!-- Campo de pesquisa com lupa e histórico -->
  <div class="mb-4">
    <div class="input-group" style="width:100%;">
      <input type="text" id="campoPesquisaVideo" class="form-control" placeholder="Pesquisar vídeos informativos por tema, autor ou palavra-chave...">
      <button class="btn btn-outline-secondary" type="button" id="btnPesquisarVideo">
        <i class="fa fa-search"></i>
      </button>
    </div>
    <!-- Histórico de pesquisa -->
    <div id="historicoPesquisaVideo" class="mt-2" style="display:none;">
      <div style="color:#64748b; font-size:0.97rem; font-weight:600;">Histórico de pesquisa:</div>
      <div id="itensHistoricoVideo" class="d-flex flex-wrap gap-2 mt-1"></div>
    </div>
  </div>

  <!-- Categorias dos vídeos -->
  <div class="mb-4">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Categorias</div>
    <div class="d-flex flex-wrap gap-2">
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Vacinação</span>
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Prevenção</span>
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Saúde Mental</span>
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Alimentação</span>
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Exercícios</span>
      <span class="badge rounded-pill" style="background:#e0f2fe; color:#2563eb; font-size:1rem; cursor:pointer;">Outros</span>
    </div>
  </div>

  <!-- Vídeo em destaque -->
  <div class="mb-5 p-4 rounded" style="background:#fafdff; border:1px solid #e0f2fe;">
    <div class="row g-3 align-items-center">
      <div class="col-md-5">
        <div style="position:relative;">
          <img src="<?=URL?>/public/img/video-destaque.jpg" alt="Vídeo em destaque" class="img-fluid rounded" style="width:100%; object-fit:cover;">
          <span style="position:absolute; bottom:8px; right:12px; background:#2563eb; color:#fff; padding:2px 10px; border-radius:12px; font-size:0.95rem;">12:34</span>
        </div>
      </div>
      <div class="col-md-7">
        <div style="font-size:1.2rem; font-weight:700; color:#1e293b;">Como prevenir a gripe: dicas e cuidados</div>
        <div class="mb-2" style="color:#64748b;">Autor: Dr. João Silva</div>
        <div class="mb-2" style="color:#64748b;">
          <i class="fa fa-eye me-1"></i> 2.340 visualizações
        </div>
        <button class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">
          Assistir agora
        </button>
      </div>
    </div>
  </div>

  <!-- Lista de vídeos -->
  <div>
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Vídeos Informativos</div>
    <div class="row g-4">
      <!-- Vídeo 1 -->
      <div class="col-md-6">
        <div class="card p-3 h-100" style="border-radius:16px; border:1px solid #e0f2fe; background:#e0f2fe;">
          <div style="position:relative;">
            <img src="<?=URL?>/public/img/video1.jpg" alt="Vacinação infantil" class="img-fluid rounded" style="width:100%; object-fit:cover;">
            <span style="position:absolute; bottom:8px; right:12px; background:#2563eb; color:#fff; padding:2px 10px; border-radius:12px; font-size:0.95rem;">08:20</span>
          </div>
          <div class="mt-2" style="font-weight:600; color:#1e293b;">Vacinação infantil: importância e mitos</div>
          <div class="mb-1" style="color:#64748b;">Autor: Enf. Maria Souza</div>
          <div class="mb-1" style="color:#64748b;"><i class="fa fa-eye me-1"></i> 1.120 visualizações</div>
          <div class="mb-2" style="color:#334155; font-size:0.97rem;">
            Saiba por que vacinar as crianças é fundamental para a saúde pública e desvende mitos comuns.
          </div>
          <button class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">
            Assistir
          </button>
        </div>
      </div>
      <!-- Vídeo 2 -->
      <div class="col-md-6">
        <div class="card p-3 h-100" style="border-radius:16px; border:1px solid #e0f2fe; background:#fafdff;">
          <div style="position:relative;">
            <img src="<?=URL?>/public/img/video2.png" alt="Saúde mental" class="img-fluid rounded" style="width:100%; object-fit:cover;">
            <span style="position:absolute; bottom:8px; right:12px; background:#2563eb; color:#fff; padding:2px 10px; border-radius:12px; font-size:0.95rem;">10:05</span>
          </div>
          <div class="mt-2" style="font-weight:600; color:#1e293b;">Saúde mental: sinais de alerta</div>
          <div class="mb-1" style="color:#64748b;">Autor: Psic. Ana Lima</div>
          <div class="mb-1" style="color:#64748b;"><i class="fa fa-eye me-1"></i> 980 visualizações</div>
          <div class="mb-2" style="color:#334155; font-size:0.97rem;">
            Entenda como identificar sinais de sofrimento emocional e onde buscar ajuda.
          </div>
          <button class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">
            Assistir
          </button>
        </div>
      </div>
      <!-- Vídeo 3 -->
      <div class="col-md-6">
        <div class="card p-3 h-100" style="border-radius:16px; border:1px solid #e0f2fe; background:#e0f2fe;">
          <div style="position:relative;">
            <img src="<?=URL?>/public/img/video3.jpg" alt="Alimentação saudável" class="img-fluid rounded" style="width:100%; object-fit:cover;">
            <span style="position:absolute; bottom:8px; right:12px; background:#2563eb; color:#fff; padding:2px 10px; border-radius:12px; font-size:0.95rem;">07:45</span>
          </div>
          <div class="mt-2" style="font-weight:600; color:#1e293b;">Alimentação saudável no dia a dia</div>
          <div class="mb-1" style="color:#64748b;">Autor: Nutri. Carla Dias</div>
          <div class="mb-1" style="color:#64748b;"><i class="fa fa-eye me-1"></i> 1.540 visualizações</div>
          <div class="mb-2" style="color:#334155; font-size:0.97rem;">
            Dicas práticas para manter uma alimentação equilibrada mesmo com rotina corrida.
          </div>
          <button class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">
            Assistir
          </button>
        </div>
      </div>
      <!-- Vídeo 4 -->
      <div class="col-md-6">
        <div class="card p-3 h-100" style="border-radius:16px; border:1px solid #e0f2fe; background:#fafdff;">
          <div style="position:relative;">
            <img src="<?=URL?>/public/img/video4.jpeg" alt="Exercícios físicos" class="img-fluid rounded" style="width:100%; object-fit:cover;">
            <span style="position:absolute; bottom:8px; right:12px; background:#2563eb; color:#fff; padding:2px 10px; border-radius:12px; font-size:0.95rem;">09:10</span>
          </div>
          <div class="mt-2" style="font-weight:600; color:#1e293b;">Exercícios físicos para iniciantes</div>
          <div class="mb-1" style="color:#64748b;">Autor: Prof. Lucas Souza</div>
          <div class="mb-1" style="color:#64748b;"><i class="fa fa-eye me-1"></i> 870 visualizações</div>
          <div class="mb-2" style="color:#334155; font-size:0.97rem;">
            Veja como começar a praticar exercícios físicos de forma segura e eficiente.
          </div>
          <button class="btn btn-sm rounded-pill px-4" style="background:#2563eb; color:#fff;">
            Assistir
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Histórico de pesquisa simples usando localStorage
const campoPesquisa = document.getElementById('campoPesquisaVideo');
const btnPesquisar = document.getElementById('btnPesquisarVideo');
const historicoDiv = document.getElementById('historicoPesquisaVideo');
const itensHistorico = document.getElementById('itensHistoricoVideo');

function atualizarHistorico() {
  let historico = JSON.parse(localStorage.getItem('historicoPesquisaVideo') || '[]');
  if (historico.length > 0) {
    historicoDiv.style.display = '';
    itensHistorico.innerHTML = '';
    historico.slice(-5).reverse().forEach(item => {
      const span = document.createElement('span');
      span.className = 'badge rounded-pill';
      span.style.background = '#fafdff';
      span.style.color = '#2563eb';
      span.style.cursor = 'pointer';
      span.textContent = item;
      span.onclick = () => { campoPesquisa.value = item; };
      itensHistorico.appendChild(span);
    });
  } else {
    historicoDiv.style.display = 'none';
  }
}

function adicionarAoHistorico(valor) {
  if (!valor.trim()) return;
  let historico = JSON.parse(localStorage.getItem('historicoPesquisaVideo') || '[]');
  historico = historico.filter(item => item !== valor);
  historico.push(valor);
  localStorage.setItem('historicoPesquisaVideo', JSON.stringify(historico));
  atualizarHistorico();
}

btnPesquisar.onclick = function() {
  adicionarAoHistorico(campoPesquisa.value);
  // Aqui você pode adicionar a lógica de pesquisa real
};

campoPesquisa.addEventListener('keydown', function(e) {
  if (e.key === 'Enter') {
    adicionarAoHistorico(campoPesquisa.value);
    // Aqui você pode adicionar a lógica de pesquisa real
  }
});

document.addEventListener('DOMContentLoaded', atualizarHistorico);
</script>