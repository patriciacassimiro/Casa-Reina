<?php include ('includes/head.php') ?>
<main> 
  

  <!-- CONEXÃO E CANAIS DE CONTATO -->
  <section class="py-5 mt-5 mb-5 bg-4">
    <div class="container-fluid px-4 px-lg-5 my-4 ">
      <div class="row g-5 align-items-start">
        
        <!-- LADO ESQUERDO: Informações Diretas -->
        <div class="col-12 col-lg-5 offset-lg-1 pe-lg-5 mt-5 bg-white shadow-lg p-4 p-lg-5 rounded-2">
          <span class="about-tag text-uppercase tracking-wider d-block mb-3 fw-bold">Conecte-se</span>
          <h1 class="hero-title font-serif fw-bold mb-4" style="font-size: clamp(2.5rem, 4vw, 3.5rem);">Canais Diretos</h1>
          <p class="about-text font-sans fw-bold lh-lg mb-5">
            Entre em contato para solicitar orçamentos de peças do acervo, propor projetos de curadoria ou agendar visitas aos lounges assinados pela diretora criativa Michele Wharton.
          </p>

          <!-- Blocos de informação com os ícones do rodapé reaproveitados -->
          <div class="font-sans lh-lg text-container">
            <div class="mb-4">
              <span class="text-uppercase tracking-wider fw-bold d-block" style="color: var(--castanho-medio);">E-mail Institucional</span>
              <a href="mailto:contato@casareina.com.br" class="text-decoration-none h4 font-serif fw-bold" style="color: var(--marrom-chocolate);">contato@casareina.com.br</a>
            </div>
            <div class="mb-4">
              <span class="text-uppercase tracking-wider fw-bold d-block" style="color: var(--castanho-medio);">Atendimento WhatsApp</span>
              <a href="https://wa.me" target="_blank" class="text-decoration-none h4 font-serif fw-bold" style="color: var(--marrom-chocolate);">+55 11 99999-9999</a>
            </div>
            <div>
              <span class="text-uppercase tracking-wider fw-bold d-block" style="color: var(--castanho-medio);">Base Operacional</span>
              <span class="h4 font-serif fw-bold" style="color: var(--marrom-chocolate);">São Paulo — Brasil</span>
              <br><br>
            </div>
          </div>
        </div>

        <!-- LADO DIREITO: Formulário Editorial (Reaproveitando .custom-input do seu CSS) -->
        <div class="col-12 col-lg-5 ms-auto container-fluid mt-5">
          <form action="enviar-mensagem.php" method="POST" class="font-sans">
            
            <div class="mb-3">
              <label for="nome_contato" class="form-label text-uppercase tracking-wider fw-bold" style="color: var(--marrom-chocolate);">Seu Nome</label>
              <input type="text" class="form-control fw-bold rounded-0 custom-input py-3" id="nome_contato" name="nome" required>
            </div>

            <div class="mb-3">
              <label for="email_contato" class="form-label text-uppercase tracking-wider fw-bold" style="color: var(--marrom-chocolate);">Seu E-mail</label>
              <input type="email" class="form-control fw-bold rounded-0 custom-input py-3" id="email_contato" name="email" required>
            </div>

            <div class="mb-3">
              <label for="assunto" class="form-label text-uppercase tracking-wider fw-bold" style="color: var(--marrom-chocolate);">Assunto</label>
              <!-- Reaproveita o estilo limpo no select também -->
              <select class="form-select fw-bold rounded-0 custom-input py-3" id="assunto" name="assunto" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="Apoio Comercial / Loja">Aquisição de Peças (Loja)</option>
                <option value="Curadoria / Parceria">Curadorias e Parcerias</option>
                <option value="Imprensa">Imprensa / Entrevistas</option>
                <option value="Outros">Outros Assuntos</option>
              </select>
            </div>

            <div class="mb-4">
              <label for="mensagem" class="form-label text-uppercase tracking-wider fw-bold" style="color: var(--marrom-chocolate);">Sua Mensagem</label>
              <textarea class="form-control fw-bold rounded-0 custom-input py-3" id="mensagem" name="mensagem" rows="5" placeholder="Escreva aqui sua solicitação..." required></textarea>
            </div>

            <!-- Botão com o seu Laranja Abóbora -->
            <button type="submit" class="btn fw-bold btn-lg font-sans px-5 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn w-100 w-sm-auto">
              Enviar Mensagem <span class="ms-2 arrow-icon">→</span>
            </button>

          </form>
        </div>

      </div>
    </div>
  </section>


</main>
<?php include ('includes/footer.php') ?>