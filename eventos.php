<?php 
 $titulo_pagina = "Eventos | CASA REINA";
  $pagina_atual = "eventos"; // Identificador para o menu
 include ('includes/head.php') ?>
<main> 


  <!-- TOPO DA PÁGINA (Reaproveitando classes) -->
  <section class="py-5 bg-3">
    <div class="container-fluid px-4 px-lg-5">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-1">
          <span class="about-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">Calendário Cultural</span>
          <h1 class="hero-title font-serif fw-bold mb-4">Exposições & Vivências</h1>
          <p class="hero-subtitle font-sans fw-bold lh-lg mb-0" style="max-width: 720px;">
            Aproximando arte, arquitetura, design, moda e mercado por meio de experiências imersivas que celebram a memória e a ancestralidade.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- LISTA DE EVENTOS ASSIMÉTRICA -->
  <section class="py-5 mb-5">
    <div class="container-fluid px-4 px-lg-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          
          <!-- EVENTO 1 (Em Destaque / Atual) -->
          <div class="row align-items-center mb-5 py-4 g-4 border-bottom" style="border-color: rgba(74, 47, 27, 0.1) !important;">
            <div class="col-12 col-md-3 text-md-start">
              <!-- Data com o Bordô em destaque -->
              <span class="font-serif d-block lh-1 mb-1" style="color: var(--bordo); font-size: 2.8rem;">MAI</span>
              <span class="font-sans text-uppercase tracking-wider small text-muted">CASACOR São Paulo</span>
            </div>
            <div class="col-12 col-md-6">
              <h3 class="font-serif fw-bold h2 mb-2" style="color: var(--marrom-chocolate);">Lounge Mi Corazón</h3>
              <p class="font-sans fw-bold lh-lg text-secondary mb-0" style="font-size: 1.1rem;">
                Apresentação do ambiente imersivo inspirado nas memórias afetivas das casas latino-americanas. Uma convergência única entre arquitetura autoral e identidade cultural.
              </p>
            </div>
            <div class="col-12 col-md-3 text-md-end">
              <a href="projetos.php" class="btn fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn btn-sm w-100 text-center">
                Ver Detalhes
              </a>
            </div>
          </div>

          <!-- EVENTO 2 (Passado / Registro) -->
          <div class="row align-items-center mb-5 py-4 g-4 border-bottom" style="border-color: rgba(74, 47, 27, 0.1) !important;">
            <div class="col-12 col-md-3 text-md-start">
              <span class="font-serif d-block lh-1 mb-1" style="color: var(--castanho-medio); font-size: 2.8rem;">AGO</span>
              <span class="font-sans text-uppercase tracking-wider small text-muted">CASACOR Bahia</span>
            </div>
            <div class="col-12 col-md-6">
              <h3 class="font-serif fw-bold h2 mb-2" style="color: var(--marrom-chocolate);">Exposição Espelho dos Orixás</h3>
              <p class="font-sans fw-bold lh-lg text-secondary mb-0" style="font-size: 1.1rem;">
                Mostra permanente dedicada à valorização de artistas e criadores afro-brasileiros e indígenas, promovida pela plataforma CASA REINA no Lounge Entre Camadas.
              </p>
            </div>
            <div class="col-12 col-md-3 text-md-end">
              <a href="projetos.php" class="btn fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn btn-sm w-100 text-center" style="background-color: var(--castanho-medio); border-color: var(--castanho-medio);">
                Ver Galeria
              </a>
            </div>
          </div>

          <!-- EVENTO 3 (Histórico) -->
          <div class="row align-items-center mb-4 py-4 g-4">
            <div class="col-12 col-md-3 text-md-start">
              <span class="font-serif d-block lh-1 mb-1" style="color: var(--castanho-medio); font-size: 2.8rem;">DW!</span>
              <span class="font-sans text-uppercase tracking-wider small text-muted">São Paulo</span>
            </div>
            <div class="col-12 col-md-6">
              <h3 class="font-serif fw-bold h2 mb-2" style="color: var(--marrom-chocolate);">Lançamento Oficial CASA REINA</h3>
              <p class="font-sans fw-bold lh-lg text-secondary mb-0" style="font-size: 1.1rem;">
                Consolidação da nossa frente de atuação voltada à curadoria e ao desenvolvimento artístico durante a semana de design mais importante da América Latina.
              </p>
            </div>
            <div class="col-12 col-md-3 text-md-end">
              <span class="font-sans text-uppercase tracking-wider small text-muted d-block text-center py-2" style="letter-spacing: 0.1em;">Concluído</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  

</main>
<?php include ('includes/footer.php') ?>