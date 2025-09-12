<h1><?php echo $dados['titulo']; ?></h1>
<p><?php echo $dados['descricao'];?><p>

<?php
// Verifica se a sessão está iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Nome do usuário (exemplo: vindo da sessão)
$usuario = $_SESSION['usuario_nome'] ?? 'Visitante';
?>

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
    <h2>Olá, <?= htmlspecialchars($usuario); ?></h2>
  </header>

  <section class="dashboard">
    <div class="card green">
      <h3>Saúde Geral</h3>
      <p>Status: Boa</p>
    </div>
    <div class="card orange">
      <h3>Coronavírus Ativo</h3>
      <p>3 disposições</p>
    </div>
    <div class="card blue">
      <h3>Posto mais próximo</h3>
      <p>UBS Centro</p>
    </div>
    <div class="card purple">
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