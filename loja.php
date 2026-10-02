<?php include ('includes/head.php') ?>
<main>
    <!-- 1. TOPO DA LOJA -->
  <section class="py-5 bg-5 mb-0">
    <div class="container-fluid px-4 px-lg-5">
      <div class="row align-items-end gy-4">
        <!-- Título -->
        <div class="col-12 col-lg-6 offset-lg-1">
          <span class="about-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">Design & Memória</span>
          <h1 class="hero-title font-serif fw-bold mb-3">O Acervo</h1>
          <p class="L font-sans fw-bold lh-lg mb-0" style="max-width: 580px;">
            Mobiliários, vestimentas e objetos autorais que unem técnicas artesanais tradicionais ao design contemporâneo de alta assinatura.
          </p>
        </div>
        
        <!-- REAPROVEITANDO O CSS DO FORM: Barra de Busca Minimalista -->
        <div class="col-12 col-lg-4 ms-auto font-sans">
          <form class="d-flex position-relative">
            <!-- Reaproveitando a classe .custom-input do formulário de inscrição -->
            <input type="search" class="form-control custom-input py-3 pe-5" placeholder="Buscar no acervo..." aria-label="Buscar">
            <button type="submit" class="btn position-absolute end-0 top-50 translate-middle-y border-0 pe-4 search-btn-inside" style="color: var(--marrom-chocolate);">
              <i class="bi bi-search fs-8"></i>
            </button>
          </form>
        </div>
      </div>

      <!-- REAPROVEITANDO FILTROS SIMPLES COM A MESMA ESTÉTICA -->
      <div class="row mt-4 pt-3 offset-lg-1 font-sans text-uppercase tracking-wider small fw-bold">
        <div class="col-12 d-flex flex-wrap gap-4 project-mosaic">
          <a href="#todos" class="text-decoration-none" style="color: var(--laranja-abobora);">✦ Todos</a>
          <a href="#mobiliario" class="text-decoration-none text-muted-autumn">Mobiliário</a>
          <a href="#textil" class="text-decoration-none text-muted-autumn">Coleções Têxteis</a>
          <a href="#arte" class="text-decoration-none text-muted-autumn">Arte & Objetos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. VITRINE DE PRODUTOS AUTORAIS (Reaproveitando cards e efeitos fortes) -->
  <section class="py-4 mb-5">
    <div class="container-fluid px-4 px-lg-5">
      <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">
        
        <!-- PRODUTO 1 -->
        <div class="col">
          <!-- Reaproveitando a lógica de comportamento do .artist-card -->
          <div class="card border-0 bg-transparent h-100 artist-card">
            <!-- Reaproveitando .image-wrapper e o efeito de zoom do mosaico -->
            <div class="image-wrapper shadow-sm overflow-hidden mb-3 img-hover-zoom">
              <img src="img/sofa.png" alt="Cadeira Autoral" class="img-fluid w-100 object-fit-cover" style="height: 420px;">
            </div>
            <div class="card-body p-0 text-start">
              <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Mobiliário</span>
              <h3 class="font-serif fw-bold h3 mb-2" style="color: var(--marrom-chocolate);">Poltrona Camadas</h3>
              <!-- Preço limpo usando Castanho Médio -->
              <span class="font-sans fw-bold d-block mb-3" style="color: var(--castanho-medio); font-size: 1.1rem;">Sob consulta</span>
              <!-- Reaproveitando o botão outonal existente -->
              <a href="#contato" class="btn fw-bold font-sans px-4 py-2 rounded-0 text-uppercase tracking-wider btn-hero-autumn btn-sm w-100 text-center">
                Solicitar Peça
              </a>
            </div>
          </div>
        </div>

        <!-- PRODUTO 2 -->
        <div class="col">
          <div class="card border-0 bg-transparent h-100 artist-card">
            <div class="image-wrapper shadow-sm overflow-hidden mb-3 img-hover-zoom">
              <img src="img/sala.png" alt="Coleção Mola" class="img-fluid w-100 object-fit-cover" style="height: 420px;">
            </div>
            <div class="card-body p-0 text-start">
              <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Coleções Têxteis</span>
              <h3 class="font-serif fw-bold h3 mb-2" style="color: var(--marrom-chocolate);">Painel Têxtil Guna Dule</h3>
              <span class="font-sans fw-bold d-block mb-3" style="color: var(--castanho-medio); font-size: 1.1rem;">Sob consulta</span>
              <a href="#contato" class="btn fw-bold font-sans px-4 py-2 rounded-0 text-uppercase tracking-wider btn-hero-autumn btn-sm w-100 text-center">
                Solicitar Peça
              </a>
            </div>
          </div>
        </div>

        <!-- PRODUTO 3 -->
        <div class="col">
          <div class="card border-0 bg-transparent h-100 artist-card">
            <div class="image-wrapper shadow-sm overflow-hidden mb-3 img-hover-zoom">
              <img src="img/sofa.png" alt="Objeto de Design" class="img-fluid w-100 object-fit-cover" style="height: 420px;">
            </div>
            <div class="card-body p-0 text-start">
              <span class="about-tag text-uppercase tracking-wider small d-block mb-1">Arte & Objetos</span>
              <h3 class="font-serif fw-bold h3 mb-2" style="color: var(--marrom-chocolate);">Vaso Xilo e Barro</h3>
              <span class="font-sans fw-bold d-block mb-3" style="color: var(--castanho-medio); font-size: 1.1rem;">Sob consulta</span>
              <a href="#contato" class="btn fw-bold font-sans px-4 py-2 rounded-0 text-uppercase tracking-wider btn-hero-autumn btn-sm w-100 text-center">
                Solicitar Peça
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php include ('includes/footer.php') ?>