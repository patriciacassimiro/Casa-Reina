
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
<!-- Rodapé da Plataforma -->
<footer class="site-footer fw-bold">
  <div class="py-4">
    <!-- row com gy-4 e gy-md-5 garante o espaçamento vertical perfeito quando as colunas se empilharem no celular -->
    <div class="row gy-4 gy-md-5 text-md">

      <!-- COLUNA 0: Logotipo (Centralizado no mobile, alinhado à esquerda no desktop) -->
      <div class="col-12 col-md-4 col-lg-2 text-center">
        <img src="img/logo-branco.png" alt="Logo da Plataforma Curatorial" class="img-fluid mb-2" style="max-width: 250px;">
      </div>
      
      <!-- COLUNA 1: Manifesto / Identidade (Largura controlada para não ficar gigante) -->
      <div class="col-12 col-md-8 col-lg-3 mb-3 mb-md-0">
        <h3 class="footer-heading fw-bold text-uppercase tracking-wider mb-3 mb-md-4">Michele Wharton</h3>
        <p class="footer-manifesto font-sans mb-4 mx-auto mx-md-0" style="max-width: 300px;">
          Uma investigação sensível sobre o espaço, a forma e a expressão nas intersecções da arte, design, moda e arquitetura.
        </p>
      </div>

      <!-- COLUNA 2: Navegação / Editorias -->
      <div class="col-6 col-md-4 col-lg-2">
        <h4 class="footer-heading fw-bold text-uppercase tracking-wider mb-3 mb-md-4">Editorias</h4>
        <ul class="list-unstyled footer-links font-sans fw-bold">
          <li><a href="#arte">Arte Contemporânea</a></li>
          <li><a href="#design">Design Autoral</a></li>
          <li><a href="#moda">Moda e Expressão</a></li>
          <li><a href="#arquitetura">Arquitetura</a></li>
        </ul>
      </div>
        
      <!-- COLUNA 3: Plataforma / Institucional -->
      <div class="col-6 col-md-4 col-lg-2">
        <h4 class="footer-heading fw-bold text-uppercase tracking-wider mb-3 mb-md-4">Explorar</h4>
        <ul class="list-unstyled footer-links font-sans fw-bold">
          <li><a href="#acervo">O Acervo</a></li>
          <li><a href="#sobre">Sobre a Curadora</a></li>
          <li><a href="#exposicoes">Exposições</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </div>

      <!-- COLUNA 4: Redes Sociais e Contato -->
      <div class="col-12 col-md-4 col-lg-3">
        <h4 class="footer-heading fw-bold text-uppercase tracking-wider mb-3 mb-md-4">Contato</h4>
        
        <ul class="list-unstyled footer-contact-info font-sans fw-bold mb-4">
          <li class="mb-2">
            <a href="mailto:contato@casareina.com.br">
              <i class="bi bi-envelope me-2"></i> contato@casareina.com.br
            </a>
          </li>
          <li class="mb-2">
            <a href="https://wa.me" target="_blank">
              <i class="bi bi-whatsapp me-2"></i> +55 11 99999-9999
            </a>
          </li>
          <li class="text-white">
            <i class="bi bi-geo-alt me-2"></i> São Paulo — Brasil
          </li>
        </ul>
        <!-- justify-content-center alinha no meio no celular, justify-content-md-start joga para a esquerda no PC -->
        <div class="footer-links d-flex justify-content-center justify-content-md-start gap-4 fs-4">
          <a href="https://instagram.com" target="_blank" title="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://pinterest.com" target="_blank" title="Pinterest">
            <i class="bi bi-pinterest"></i>
          </a>
          <a href="https://youtube.com" target="_blank" title="YouTube">
            <i class="bi bi-youtube"></i>
          </a>
        </div>
         
          
      </div>

    </div>
    </div>
       <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.2);">
       <p class="font-sans fw-bold small text-center" style="color: var(--castanho-medio);">
        &copy; <?php echo date("Y"); ?> Michele Wharton. Todos os direitos reservados.
      </p>

</footer>
