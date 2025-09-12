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
