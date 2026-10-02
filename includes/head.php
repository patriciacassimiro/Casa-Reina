<!DOCTYPE HTML>
<html lang="pt-BR">
    
    <head>
       <title>CASA REINA — <?php echo isset($titulo_pagina) ? $titulo_pagina : "Plataforma Curatorial"; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
         <link href="css/style.css" rel="stylesheet">
         <!-- Link dos Ícones Oficiais do Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    </head>

<body class="fw-bold">

  <header class="main-header border-bottom">
  <nav class="navbar navbar-expand-lg py-3">
    <div class="container-fluid px-4 px-lg-5">
      
      <!-- Logo da Casa Reina -->
      <a class="navbar-brand py-0" href="index.php">
        <img src="img/logo-branco.png" alt="Casa Reina" width="150px" class="d-inline-block align-top">
      </a>
      
      <!-- Botão Hambúrguer para Mobile -->
      <button class="navbar-toggler custom-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCasaReina" aria-controls="navbarCasaReina" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Links de Navegação -->
      <div class="collapse navbar-collapse" id="navbarCasaReina">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase tracking-wider font-sans fw-bold">
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'index') ? 'active' : ''; ?>" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'historia') ? 'active' : ''; ?>" href="historia.php">Trajetória</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'loja') ? 'active' : ''; ?>" href="loja.php">Loja</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'projetos') ? 'active' : ''; ?>" href="projetos.php">Projetos</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'artistas') ? 'active' : ''; ?>" href="artistas.php">Artistas</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 <?php echo ($pagina_atual == 'eventos') ? 'active' : ''; ?>" href="eventos.php">Eventos</a>
          </li> 
          
          <li class="nav-item">
            <a class="nav-link nav-link-autumn px-3 pe-lg-0 <?php echo ($pagina_atual == 'contato') ? 'active' : ''; ?>" href="contato.php">Contato</a>
          </li>
          
        </ul>
      </div>

    </div>
  </nav>
</header>



