<!-- filepath: c:\xampp\htdocs\SaudeNaMao\app\Views\usuarios\cadastrar.php -->
<div class="container my-5" style="max-width:1000px;">
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preencha o formulário abaixo para fazer seu cadastro completo</small></p>

            <form name="cadastrar" method="POST" action="" class="mt-4">
                <!-- Dados de Login -->
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="nome">Nome completo: <sup class="text-danger">*</sup></label>
                        <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback"><?= $dados['nome_erro'] ?></div>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                        <input type="email" name="email" id="email" value="<?= $dados['email'] ?>" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>">
                        <div class="invalid-feedback"><?= $dados['email_erro'] ?></div>
                    </div>
                </div>

                <!-- Informações Pessoais -->
                <div class="row">
                    <div class="form-group mb-3 col-md-4">
                        <label for="cpf">CPF: <sup class="text-danger">*</sup></label>
                        <input type="text" name="cpf" id="cpf" value="<?= $dados['cpf'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-4">
                        <label for="rg">RG:</label>
                        <input type="text" name="rg" id="rg" value="<?= $dados['rg'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-4">
                        <label for="data_nascimento">Data de nascimento: <sup class="text-danger">*</sup></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $dados['data_nascimento'] ?? '' ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" value="<?= $dados['telefone'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <!-- Endereço -->
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" value="<?= $dados['endereco'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" value="<?= $dados['cidade'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-2">
                        <label for="estado">Estado:</label>
                        <input type="text" name="estado" id="estado" value="<?= $dados['estado'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-1">
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" id="cep" value="<?= $dados['cep'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <!-- Informações de Saúde -->
                <div class="row">
                    <div class="form-group mb-3 col-md-3">
                        <label for="cartao_sus">Cartão do SUS:</label>
                        <input type="text" name="cartao_sus" id="cartao_sus" value="<?= $dados['cartao_sus'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="tipo_sanguineo">Tipo sanguíneo:</label>
                        <input type="text" name="tipo_sanguineo" id="tipo_sanguineo" value="<?= $dados['tipo_sanguineo'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="alergias">Alergias:</label>
                        <input type="text" name="alergias" id="alergias" value="<?= $dados['alergias'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-3">
                        <label for="condicoes_cronicas">Condições crônicas:</label>
                        <input type="text" name="condicoes_cronicas" id="condicoes_cronicas" value="<?= $dados['condicoes_cronicas'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <!-- Agente de Saúde -->
                <div class="row">
                    <div class="form-group mb-3 col-md-8">
                        <label for="agente_nome">Nome do agente de saúde:</label>
                        <input type="text" name="agente_nome" id="agente_nome" value="<?= $dados['agente_nome'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-4">
                        <label for="agente_telefone">Telefone do agente:</label>
                        <input type="text" name="agente_telefone" id="agente_telefone" value="<?= $dados['agente_telefone'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <!-- Contato de Emergência -->
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="emergencia_nome">Nome do contato de emergência:</label>
                        <input type="text" name="emergencia_nome" id="emergencia_nome" value="<?= $dados['emergencia_nome'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-4">
                        <label for="emergencia_telefone">Telefone:</label>
                        <input type="text" name="emergencia_telefone" id="emergencia_telefone" value="<?= $dados['emergencia_telefone'] ?? '' ?>" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-2">
                        <label for="emergencia_parentesco">Parentesco:</label>
                        <input type="text" name="emergencia_parentesco" id="emergencia_parentesco" value="<?= $dados['emergencia_parentesco'] ?? '' ?>" class="form-control">
                    </div>
                </div>

                <!-- Ações -->
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="Cadastrar" 
                            class="btn w-100 py-3"
                            style="background:#2563eb; color:#fff; font-weight:700; font-size:1.2rem; border-radius:32px; box-shadow:0 2px 8px #dbeafe; border:none;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>