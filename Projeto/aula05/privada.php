<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>História do PHP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <style>
    /* Cor de fundo da página */
    body {
      background-color: #e6d9fa;
    }

    /* Aplicando a cor #a475ef em títulos e elementos */
    h1, h2, h3, h4, h5, h6,
    .sitename,
    .navmenu a,
    .navmenu a:focus,
    .navmenu a.active,
    .feature-item h4,
    .use-item h4,
    .typed,
    .social-links a:hover,
    .scroll-top {
      color: #a475ef;
    }

    .feature-item i,
    .use-item i {
      color: #a475ef;
    }

    .progress-bar {
      background-color: #a475ef;
    }

    /* Fundo branco para o menu e a página */
    .header,
    .dark-background {
      background-color: #ffffff;
    }

    /* Removendo o efeito escuro da imagem */
    .hero img {
      opacity: 1;
      filter: brightness(100%);
    }

    /* Removendo a imagem do menu */
    .profile-img {
      display: none;
    }

    /* Removendo os ícones do menu */
    .navmenu a .navicon {
      display: none;
    }

    /* Estilo do botão Desconectar */
    .navmenu .btn-desconectar {
      background-color: #a475ef;
      color: #fff;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      margin-left: 10px;
      transition: background-color 0.3s ease;
    }

    .navmenu .btn-desconectar:hover {
      background-color: #8a5cf0;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <!-- Removido o profile-img -->
    <div class="profile-img">
      <img src="assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">História do PHP</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Início</a></li>
        <li><a href="#about">Sobre o PHP</a></li>
        <li><a href="#history">História</a></li>
        <li><a href="#features">Recursos</a></li>
        <li><a href="#uses">Usos</a></li>
        <li>
          <a href="index.php" class="btn-desconectar">Desconectar</a>
        </li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <img src="assets/img/img01.png" class="img-fluid" alt="" data-aos="fade-in">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>História do PHP</h2>
        <p>Tudo sobre a evolução do PHP</p>
      </div>
    </section><!-- /Hero Section -->

    <!-- Sobre o PHP Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre o PHP</h2>
        <p>PHP (Hypertext Preprocessor) é uma linguagem de script de código aberto amplamente usada para desenvolvimento web.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/img02.jpg" class="img-fluid" alt="Logo do PHP">
          </div>
          <div class="col-lg-8 content">
            <h2>O que é PHP?</h2>
            <p class="fst-italic py-3">
              PHP é uma linguagem de script do lado do servidor projetada para desenvolvimento web, mas também usada como uma linguagem de programação de propósito geral.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Criado por:</strong> <span>Rasmus Lerdorf</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Primeira Versão:</strong> <span>1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Última Versão:</strong> <span>PHP 8.3</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Licença:</strong> <span>Licença PHP</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tipo:</strong> <span>Linguagem de Script</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Paradigma:</strong> <span>Multi-paradigma</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Site Oficial:</strong> <span>www.php.net</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Frameworks Populares:</strong> <span>Laravel, Symfony</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              PHP é usado por milhões de desenvolvedores em todo o mundo para criar sites e aplicativos dinâmicos. Ele alimenta plataformas como WordPress, Facebook (inicialmente) e Wikipedia.
            </p>
          </div>
        </div>
      </div>
    </section><!-- /Sobre o PHP Section -->

    <!-- História Section -->
    <section id="history" class="history section">
      <div class="container section-title" data-aos="fade-up">
        <h2>História do PHP</h2>
        <p>O PHP evoluiu significativamente desde sua criação em 1995. Aqui está uma breve linha do tempo de seu desenvolvimento.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-6">
            <h3>Os Primeiros Dias</h3>
            <p>PHP foi criado por Rasmus Lerdorf em 1995 como um conjunto de binários CGI escritos em C. Inicialmente, significava "Personal Home Page Tools".</p>
          </div>
          <div class="col-lg-6">
            <h3>PHP Moderno</h3>
            <p>Hoje, o PHP é uma linguagem robusta com recursos orientados a objetos, um vasto ecossistema e frameworks como Laravel e Symfony.</p>
          </div>
        </div>
      </div>
    </section><!-- /História Section -->

    <!-- Recursos Section -->
    <section id="features" class="features section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Principais Recursos do PHP</h2>
        <p>O PHP oferece uma ampla gama de recursos que o tornam uma escolha popular para desenvolvimento web.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="feature-item">
              <i class="bi bi-code-square"></i>
              <h4>Código Aberto</h4>
              <p>PHP é gratuito e tem uma grande comunidade de desenvolvedores contribuindo para seu crescimento.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-item">
              <i class="bi bi-server"></i>
              <h4>Script do Lado do Servidor</h4>
              <p>PHP é executado no servidor, gerando conteúdo dinâmico para páginas da web.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-item">
              <i class="bi bi-database"></i>
              <h4>Integração com Bancos de Dados</h4>
              <p>PHP suporta vários bancos de dados, incluindo MySQL, PostgreSQL e MongoDB.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Recursos Section -->

    <!-- Usos Section -->
    <section id="uses" class="uses section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Usos do PHP</h2>
        <p>O PHP é usado em uma variedade de aplicações, desde pequenos sites até sistemas empresariais de grande escala.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="use-item">
              <i class="bi bi-globe"></i>
              <h4>Desenvolvimento Web</h4>
              <p>PHP é amplamente usado para criar sites e aplicativos web dinâmicos.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="use-item">
              <i class="bi bi-cart"></i>
              <h4>E-Commerce</h4>
              <p>Plataformas como Magento e WooCommerce são construídas com PHP.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="use-item">
              <i class="bi bi-people"></i>
              <h4>Gerenciamento de Conteúdo</h4>
              <p>PHP alimenta plataformas CMS como WordPress, Joomla e Drupal.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Usos Section -->

  </main>

  <footer id="footer" class="footer position-relative">
    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">História do PHP</strong> <span>Todos os direitos reservados</span></p>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Adaptado por Leonardo Zaia</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>