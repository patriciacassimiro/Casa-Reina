<?php 
 $titulo_pagina = "Home — Arte, Design, Moda e Arquitetura";
  $pagina_atual = "index"; // Identificador para o menu
include ('includes/head.php') ?>

<main>
<!-- Seção Hero Assimétrica -->
<section class="hero-asymmetric d-flex align-items-center overflow-hidden bg-5">
  <div class="container-fluid px-4 px-lg-5">
    <div class="row align-items-center gy-5 mt-5 mb-5">
      
      <!-- LADO ESQUERDO: Manifesto e Conceito -->
      <div class="col-12 col-lg-5 col-xl-4 offset-xl-1 text-container pe-lg-5">
        <span class="hero-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">
          Plataforma Curatorial
        </span>
        
        <h1 class="hero-title display-4 font-serif fw-bold lh-sm mb-4">
          Plataforma curatorial de arte, design, moda e arquitetura.
        </h1>
        
        <p class="hero-subtitle font-sans fw-bold lh-lg mb-5">
          Uma investigação sensível sobre a arte contemporânea, a vestimenta como expressão, a arquitetura autoral e o design que molda o nosso tempo.
        </p>
        
        <a href="#acervo" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 text-uppercase tracking-wider btn-hero-autumn">
          Adentrar o Acervo <span class="ms-2 arrow-icon">→</span>
        </a>
      </div>

      <!-- LADO DIREITO: Composição Visual Assimétrica -->
      <div class="col-12 col-lg-7 col-xl-6 ms-auto position-relative image-composition">
        <div class="row g-3 align-items-end">
          
          <!-- Imagem Principal (Vertical) -->
          <div class="col-8">
            <div class="image-wrapper ">
              <img src="img/sala.png" 
                   alt="Arquitetura Minimalista Contemporânea" 
                   class="img-fluid w-100 ">
            </div>
          </div>
          
          <!-- Imagem Secundária Sobreposta (Detalhe) -->
          <div class="col-4">
            <div class="image-wrapper pb-5">
              <img src="img/sofa.png" 
                   alt="Detalhe de Obra de Arte ou Design" 
                   class="img-fluid w-100 ">
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Seção: Curta Biografia + Destaque de Eventos (Alinhamento Corrigido) -->
<section class="about-section py-5 bg-6">
  <div class="container-fluid px-4 px-lg-5">
    <!-- g-5 controla o espaço entre as duas metades -->
    <div class="row g-5">
      
      <!-- COLUNA DA ESQUERDA: Biografia de Michele Wharton -->
      <div class="col-12 col-lg-6">
        <!-- Adicionamos h-100 na row interna para ela esticar junto com a foto -->
        <div class="row gy-4 align-items-stretch h-100">
          
          <!-- Foto de Perfil -->
          <div class="col-12 col-xl-4 text-center text-xl-start">
            <div class="about-image-wrapper d-inline-block">
              <img src="img/michele.jpg" alt="Fotografia de Michele Wharton" class="img-fluid filter-profile">
            </div>
          </div>
          
          <!-- Texto Biográfico + Botão no Fundo -->
          <div class="col-12 col-xl-8 ps-xl-4 d-flex flex-column justify-content-between">
            <div>
              <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold">
                A Diretora Criativa
              </span>
              <h2 class="about-title font-serif fw-bold mb-3">
                Sobre Michele Wharton
              </h2>
              <p class="about-text font-sans fw-bold lh-lg mb-4">
                Michele Wharton é arquiteta, designer, curadora e diretora criativa. Desenvolve uma pesquisa autoral que conecta arquitetura, design, moda, arte e ancestralidade, valorizando as culturas afro-brasileiras, indígenas e latino-americanas por meio de uma linguagem contemporânea.
              </p>
            </div>
            
            <!-- O botão agora fica isolado na base devido ao justify-content-between -->
            <a href="hstoria.php" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 tracking-wider btn-hero-autumn w-100 text-center d-xl-inline-block">
              BIOGRAFIA<span class="ms-2 arrow-icon">→</span>
            </a>
          </div>

        </div>
      </div>

      <!-- COLUNA DA DIREITA: Próximo Evento / Mostra Atual -->
      <div class="col-12 col-lg-6 border-start-lg">
        <!-- Adicionamos h-100 na row interna para emparelhar com a esquerda -->
        <div class="row gy-4 align-items-stretch h-100">
          
          <!-- Imagem do Evento -->
          <div class="col-12 col-xl-4 text-center text-xl-start">
            <div class="about-image-wrapper d-inline-block">
              <img src="img/mesa.jpg" alt="Lounge Mi Corazón CASACOR" class="img-fluid image-gallery-effect">
            </div>
          </div>
          
          <!-- Informações do Evento + Botão no Fundo -->
          <div class="col-12 col-xl-8 ps-xl-4 d-flex flex-column justify-content-between">
            <div>
              <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold" style="color: var(--bordo);">
                Exposição Atual
              </span>
              <h2 class="about-title font-serif fw-bold mb-3">
                Lounge Mi Corazón
              </h2>
              <p class="about-text font-sans fw-bold lh-lg mb-4">
                Apresentado na CASACOR São Paulo, o ambiente é inspirado nas memórias afetivas das casas latino-americanas. O espaço reúne design autoral, arte e identidade cultural, consolidando a atuação da CASA REINA no desenvolvimento artístico contemporâneo.
              </p>
            </div>
            
            <!-- Botão da direita alinhado exatamente igual ao da esquerda -->
            <a href="eventos.php" class="btn btn-lg fw-bold font-sans px-4 py-3 rounded-0 tracking-wider btn-hero-autumn w-100 text-center d-xl-inline-block">
              AGENDA CULTURAL<span class="ms-2 arrow-icon">→</span>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>





</main>



<?php include ('includes/footer.php') ?>