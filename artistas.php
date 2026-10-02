

 <?php include ('includes/head.php') ?>

 <main class="container-fluid px-4 px-lg-5 bg-4">
  <!-- 1. TOPO DA PÁGINA (Reaproveitando classes do Hero) -->
  <section class="py-5 mt-5 ">
    <div class="container-fluid px-4 px-lg-5 text-center text-lg-start">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-1">
          <!-- Reaproveitando .about-tag -->
          <span class="about-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">Curadoria Permanente</span>
          <!-- Reaproveitando .hero-title -->
          <h1 class="hero-title font-serif fw-bold mb-4">Artistas & Criadores</h1>
          <!-- Reaproveitando .hero-subtitle -->
          <p class="hero-subtitle font-sans fw-bold lh-lg mb-0" style="max-width: 700px;">
            Uma seleção dedicada à valorização de vozes afro-brasileiras, indígenas e latino-americanas que conectam ancestralidade, inovação e mercado.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. GRADE DE EXPOSIÇÃO DOS ARTISTAS (Reaproveitando as molduras limpas) -->

 <!-- Seção: Galeria de Artistas Circulares com Interação Forte -->
<section >
  <div class="container-fluid px-4 px-lg-5">
    
    <div class="row g-5 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
      
      <!-- CARD ARTISTA 1 -->
      <div class="col">
        <div class="card border-0 bg-transparent h-100 artist-card-circle">
          <!-- Área da Imagem em Círculo Perfeito com Borda Dinâmica -->
          <div class="circle-wrapper mx-auto mb-4 position-relative">
            <img src="img/michele.jpg" alt="Michele Wharton" class="img-fluid artist-img-circle">
          </div>
          <!-- Corpo do Card -->
          <div class="card-body p-0 text-center">
            <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Moda, Têxtil & Arquitetura</span>
            <h3 class="font-serif fw-bold h2 mb-2 artist-title-glow">Michele Wharton</h3>
            <p class="font-sans fw-bold small mb-3">Brasil / São Paulo</p>
            <p class="font-sans fw-bold small mb-4" style=" max-width: 340px; margin: 0 auto;">
              Pesquisa autoral fundamentada na cosmovisão das molas panamenhas e xilogravuras, traduzindo ancestralidade em linguagem contemporânea.
            </p>
            <a href="hstoria.php" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn">
              Conhecer Trajetória <span class="ms-1 arrow-trigger">➔</span>
            </a>
          </div>
        </div>
      </div>

      <!-- CARD ARTISTA 2 -->
      <div class="col">
        <div class="card border-0 bg-transparent h-100 artist-card-circle">
          <div class="circle-wrapper mx-auto mb-4 position-relative">
            <img src="img/sala.png" alt="Artista 2" class="img-fluid artist-img-circle">
          </div>
          <div class="card-body p-0 text-center">
            <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Arte Contemporânea & Pintura</span>
            <h3 class="font-serif fw-bold h2 mb-2 artist-title-glow">Nome do Artista 2</h3>
            <p class="font-sans fw-bold small mb-3">Bahia / Salvador</p>
            <p class="font-sans fw-bold small mb-4" style="max-width: 340px; margin: 0 auto;">
              Investigação visual focada em narrativas afro-brasileiras, utilizando pigmentos naturais e texturas que resgatam memórias afetivas.
            </p>
            <a href="#link-artista" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn">
              Conhecer Trajetória <span class="ms-1 arrow-trigger">➔</span>
            </a>
          </div>
        </div>
      </div>

      <!-- CARD ARTISTA 3 -->
      <div class="col">
        <div class="card border-0 bg-transparent h-100 artist-card-circle">
          <div class="circle-wrapper mx-auto mb-4 position-relative">
            <img src="img/sofa.png" alt="Artista 3" class="img-fluid artist-img-circle">
          </div>
          <div class="card-body p-0 text-center">
            <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Design Autoral & Mobiliário</span>
            <h3 class="font-serif fw-bold h2 mb-2 artist-title-glow">Nome do Artista 3</h3>
            <p class="font-sans fw-bold small mb-3">América Latina / Panamá</p>
            <p class="font-sans fw-bold small mb-4" style="max-width: 340px; margin: 0 auto;">
              Criação de peças de mobiliário escultórico fundindo marcenaria fina tradicional e técnicas herdadas de comunidades indígenas.
            </p>
            <a href="#link-artista" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn">
              Conhecer Trajetória <span class="ms-1 arrow-trigger">➔</span>
            </a>
          </div>
        </div>
      </div>
</div>
</div>  
</section>

  <!-- Seção de Convocatória para Novos Artistas (Open Call) -->
<section class="py-5 mt-5">
  
  <div class="container-fluid px-4 px-lg-5 mb-5 mt-5 bg-white">
    <div class="row g-5 align-items-center">
      
      <!-- LADO ESQUERDO: O Manifesto/Convite -->
      <div class="col-12 col-lg-5 offset-lg-1 pe-lg-5">
        <span class="about-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">Open Call / Novos Talentos</span>
        <h2 class="about-title font-serif fw-bold mb-4">Faça parte do nosso acervo</h2>
        <p class="about-text font-sans fw-bold lh-lg mb-0">
          A CASA REINA é um espaço permanente de fomento, curadoria e visibilidade. Se o seu trabalho autoral investiga as intersecções invisíveis da arte, design, moda ou arquitetura através das lentes da ancestralidade afro-brasileira, indígena ou latino-americana, queremos conhecer a sua produção.
        </p>
      </div>

      <!-- LADO DIREITO: Formulário Editorial Minimalista -->
      <div class="col-12 col-lg-5 ms-auto mb-4 ">
        <form action="enviar-inscricao.php" method="POST" enctype="multipart/form-data" class="font-sans">
          
          <div class="mb-3">
            <label for="nome" class="form-label text-uppercase tracking-wider small fw-bold" style="color: var(--marrom-chocolate);">Nome Completo / Nome Artístico</label>
            <input type="text" class="form-control fw-bold rounded-0 custom-input py-3" id="nome" name="nome" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label text-uppercase tracking-wider small fw-bold" style="color: var(--marrom-chocolate);">E-mail de Contato</label>
            <input type="email" class="form-control fw-bold rounded-0 custom-input py-3" id="email" name="email" required>
          </div>

          <div class="row mb-3 g-3">
            <div class="col-12 col-sm-6">
              <label for="telefone" class="form-label text-uppercase tracking-wider small fw-bold" style="color: var(--marrom-chocolate);">WhatsApp</label>
              <input type="tel" class="form-control fw-bold rounded-0 custom-input py-3" id="telefone" name="telefone" required>
            </div>
            <div class="col-12 col-sm-6">
              <label for="portfolio_link" class="form-label text-uppercase tracking-wider small fw-bold" style="color: var(--marrom-chocolate);">Link do Portfólio / Instagram</label>
              <input type="url" class="form-control fw-bold rounded-0 custom-input py-3" id="portfolio_link" name="portfolio_link" placeholder="https://" required>
            </div>
          </div>

          <div class="mb-4">
            <label for="carta" class="form-label text-uppercase tracking-wider small fw-bold" style="color: var(--marrom-chocolate);">Breve Memorial Descritivo / Conceito da Obra</label>
            <textarea class="form-control fw-bold rounded-0 custom-input py-3" id="carta" name="carta" rows="4" placeholder="Conte-nos brevemente sobre sua pesquisa e ancestralidade..." required></textarea>
          </div>

          <!-- Botão que reaproveita a classe outonal existente -->
          <button type="submit" class="btn fw-bold btn-lg font-sans px-5 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn w-100 w-sm-auto">
            Submeter Candidatura <span class="ms-2 arrow-icon">→</span>
          </button>

        </form>
      </div>

    </div>
  </div>
</section>

</main>
<?php include ('includes/footer.php') ?>