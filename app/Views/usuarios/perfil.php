<!-- filepath: c:\xampp\htdocs\SaudeNaMao\app\Views\usuarios\perfil.php -->
<div class="container my-4" style="max-width:700px;">

  <!-- Perfil do Usuário -->
  <div class="text-center mb-4">
    <div style="display:inline-block; position:relative;">
      <img src="<?=URL?>/public/img/perfil.jpg" alt="Foto do Usuário" class="rounded-circle" style="width:110px; height:110px; object-fit:cover; border:4px solid #e0f2fe;">
      <!-- Ícone de editar foto (opcional) -->
      <!-- <span style="position:absolute; bottom:0; right:0; background:#2563eb; color:#fff; border-radius:50%; padding:6px; cursor:pointer;">
        <i class="fa fa-camera"></i>
      </span> -->
    </div>
    <h3 class="mt-3 mb-1" style="color:#1e293b; font-weight:700;"></h3>
    <div class="mb-2">
      <span class="badge" style="background:#bae6fd; color:#1e293b; font-size:1rem;">Cartão SUS: 123 4567 8901 2345</span>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3 mb-2">
      <span class="badge" style="background:#38bdf8; color:#fff; font-size:0.95rem;">Ativo</span>
      <!-- ou <span class="badge" style="background:#e0e7ef; color:#64748b; font-size:0.95rem;">Inativo</span> -->
      <span class="badge" style="background:#fafdff; color:#1e293b; font-size:0.95rem;">Tipo Sanguíneo: O+</span>
    </div>
  </div>

  <!-- Informações Pessoais -->
  <div class="mb-4 p-3 rounded" style="background:#e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Informações Pessoais</div>
    <div class="row">
      <div class="col-md-6 mb-2"><b>Nome completo:</b></div>
      <div class="col-md-6 mb-2"><b>CPF:</b> 123.456.789-00</div>
      <div class="col-md-6 mb-2"><b>RG:</b> 1234567 SSP/RO</div>
      <div class="col-md-6 mb-2"><b>Data de nascimento:</b> 01/01/1990</div>
      <div class="col-md-6 mb-2"><b>Telefone:</b> (69) 99999-0000</div>
      <div class="col-md-6 mb-2"><b>Email:</b> joao@email.com</div>
    </div>
  </div>

  <!-- Endereço -->
  <div class="mb-4 p-3 rounded" style="background:#fafdff; border:1px solid #e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Endereço</div>
    <div class="row">
      <div class="col-md-8 mb-2"><b>Endereço:</b> Rua das Flores, 123</div>
      <div class="col-md-4 mb-2"><b>Cidade:</b> Guajará-Mirim</div>
      <div class="col-md-4 mb-2"><b>Estado:</b> RO</div>
      <div class="col-md-4 mb-2"><b>CEP:</b> 76850-000</div>
    </div>
  </div>

  <!-- Informações de Saúde -->
  <div class="mb-4 p-3 rounded" style="background:#e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Informações de Saúde</div>
    <div class="row">
      <div class="col-md-6 mb-2"><b>Cartão SUS:</b> 123 4567 8901 2345</div>
      <div class="col-md-6 mb-2"><b>Tipo Sanguíneo:</b> O+</div>
      <div class="col-md-6 mb-2"><b>Alergias:</b> Nenhuma</div>
      <div class="col-md-6 mb-2"><b>Condições Crônicas:</b> Hipertensão</div>
    </div>
  </div>

  <!-- Agente de Saúde -->
  <div class="mb-4 p-3 rounded" style="background:#fafdff; border:1px solid #e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Agente de Saúde</div>
    <div class="row">
      <div class="col-md-8 mb-2"><b>Nome:</b> Maria dos Santos</div>
      <div class="col-md-4 mb-2"><b>Telefone:</b> (69) 98888-1111</div>
    </div>
  </div>

  <!-- Contato de Emergência -->
  <div class="mb-4 p-3 rounded" style="background:#e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Contato de Emergência</div>
    <div class="row">
      <div class="col-md-6 mb-2"><b>Nome:</b> Ana Silva</div>
      <div class="col-md-4 mb-2"><b>Telefone:</b> (69) 97777-2222</div>
      <div class="col-md-2 mb-2"><b>Parentesco:</b> Esposa</div>
    </div>
  </div>

  <!-- Ações Rápidas -->
  <div class="mb-4 p-3 rounded" style="background:#fafdff; border:1px solid #e0f2fe;">
    <div style="font-weight:700; color:#2563eb; margin-bottom:8px;">Ações Rápidas</div>
    <div class="d-flex flex-wrap gap-3">
      <a href="<?=URL?>/paginas/notificacoes" class="btn btn-outline-primary rounded-pill px-4" style="min-width:140px;">
        <i class="fa fa-bell me-2"></i>Notificações
      </a>
      <a href="<?=URL?>/paginas/privacidade" class="btn btn-outline-primary rounded-pill px-4" style="min-width:140px;">
        <i class="fa fa-lock me-2"></i>Privacidade
      </a>
      <a href="<?=URL?>/paginas/configuracoes" class="btn btn-outline-primary rounded-pill px-4" style="min-width:140px;">
        <i class="fa fa-cog me-2"></i>Configurações
      </a>
      <a href="<?=URL?>/usuarios/logout" class="btn btn-danger rounded-pill px-4" style="min-width:140px;">
        <i class="fa fa-sign-out-alt me-2"></i>Sair do App
      </a>
    </div>
  </div>
</div>