<?php include ('includes/head.php') ?>
    <main class="container-fluid px-4 px-lg-5 bg-1">
        <section class="projects py-5 mt-5">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold">Projetos</span>
                        <h1 class="hero-title font-serif fw-bold mb-4">Explorando a Essência e Identidade</h1>
                        <p class="hero-subtitle font-sans fw-bold lh-lg mb-0">
                            Michele Wharton é uma arquiteta, designer, diretora criativa e curadora que se destaca por sua pesquisa autoral, conectando arquitetura, design, moda, arte e ancestralidade. Seus projetos refletem uma profunda compreensão da essência e identidade cultural.
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="image-wrapper shadow-sm">
                            <!-- Sugestão: Uma imagem representativa de um projeto recente -->
                            <img src="img/logo.png" alt="Projeto de Michele Wharton" class="img-fluid object-fit-cover" style="height: 55vh; min-height: 280px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- 1. TOPO DA PÁGINA (Reaproveitando classes do Hero) -->
  <section class="py-5 mt-5">
    <div class="container-fluid px-4 px-lg-5">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-1">
          <!-- Reaproveitando .about-tag -->
          <span class="about-tag text-uppercase tracking-wider small d-block mb-3 fw-bold">Mostras & Espaços</span>
          <!-- Reaproveitando .hero-title -->
          <h1 class="hero-title font-serif fw-bold mb-4">Projetos Autorais</h1>
          <!-- Reaproveitando .hero-subtitle -->
          <p class="hero-subtitle font-sans fw-bold lh-lg mb-0" style="max-width: 720px;">
            A arquitetura como linguagem cultural e manifestação de identidade. Espaços imersivos que fundem design autoral, técnicas artesanais e memória latino-americana.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. MOSAICO DE PROJETOS (Intercalado e sem contorno nas fotos) -->
  <section class="py-5 mb-5 project-mosaic">
    <div class="container-fluid px-4 px-lg-5">
      
      <!-- PROJETO 1: Lounge Mi Corazón (Imagem na Esquerda, Texto na Direita) -->
      <div class="row align-items-center mb-5 pb-5 gy-4">
        <div class="col-12 col-lg-6 offset-lg-1">
          <!-- Reaproveitando .image-wrapper puro, sem contorno -->
          <div class="image-wrapper shadow-sm overflow-hidden img-hover-zoom">
            <img src="img/louge1.jpg" alt="Lounge Mi Corazón - CASACOR São Paulo" class="img-fluid w-100 object-fit-cover" style="height: 60vh; min-height: 400px;">
          </div>
        </div>
        <div class="col-12 col-lg-4 ps-lg-5">
          <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold">CASACOR São Paulo / 2026</span>
          <!-- Reaproveitando .about-title -->
          <h2 class="about-title font-serif fw-bold mb-3">Lounge Mi Corazón</h2>
          <!-- Reaproveitando .about-text -->
          <p class="about-text font-sans fw-bold lh-lg mb-4">
            Um ambiente inteiramente inspirado nas memórias afetivas e na arquitetura das casas latino-americanas. O espaço reuniu uma curadoria fina de design autoral, arte contemporânea e texturas orgânicas, celebrando a identidade cultural de forma calorosa e sofisticada.
          </p>
        </div>
      </div>

      <!-- PROJETO 2: Lounge Entre Camadas (Imagem na Direita, Texto na Esquerda) -->
      <div class="row align-items-center mb-5 pb-5 gy-4 flex-row-reverse">
        <div class="col-12 col-lg-6 offset-lg-1">
          <div class="image-wrapper shadow-sm overflow-hidden img-hover-zoom">
            <img src="img/louge2.jpeg" alt="Lounge Entre Camadas - CASACOR Bahia" class="img-fluid w-100 object-fit-cover" style="height: 60vh; min-height: 400px;">
          </div>
        </div>
        <div class="col-12 col-lg-4 offset-lg-1 pe-lg-5">
          <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold">CASACOR Bahia / 2026</span>
          <h2 class="about-title font-serif fw-bold mb-3">Lounge Entre Camadas</h2>
          <p class="about-text font-sans fw-bold lh-lg mb-4">
            Assinado em parceria com a arquiteta Dayse Pellegrini, o projeto investiga a volumetria e a sobreposição de texturas e materiais. Um espaço sensorial focado no rigor geométrico brutalista suavizado pelo uso de tecidos e fibras naturais.
          </p>
        </div>
      </div>

      <!-- PROJETO 3: Espelho dos Orixás (Imagem na Esquerda, Texto na Direita) -->
      <div class="row align-items-center mb-5 pb-5 gy-4">
        <div class="col-12 col-lg-6 offset-lg-1">
          <div class="image-wrapper shadow-sm overflow-hidden img-hover-zoom">
            <img src="img/louge3.jpg" alt="Exposição Espelho dos Orixás" class="img-fluid w-100 object-fit-cover" style="height: 60vh; min-height: 400px;">
          </div>
        </div>
        <div class="col-12 col-lg-4 ps-lg-5">
          <span class="about-tag text-uppercase tracking-wider small d-block mb-2 fw-bold">Exposição / CASA REINA</span>
          <h2 class="about-title font-serif fw-bold mb-3">Espelho dos Orixás</h2>
          <p class="about-text font-sans fw-bold lh-lg mb-4">
            Mostra idealizada e apresentada pela CASA REINA dentro da CASACOR Bahia. Uma curadoria profunda voltada à valorização e ao desenvolvimento artístico de criadores afro-brasileiros e indígenas, conectando ancestralidade marcante diretamente ao mercado.
          </p>
        </div>
      </div>

    </div>
  </section>


    </main>
<?php include ('includes/footer.php') ?>