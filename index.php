<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">
    <meta name="robots"  content="index,follow"  />
    <meta name="content-language" content="en" />
    <meta name="language" content="en" />
    <meta name=distribution content=global>
    <meta name="Robots" content="all"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Julio César | Ui/Ux Design - Web Design - Web Development</title>
    <!-- Fonts - Bootstrap icons - .css - .js -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/patterns.min.css">
    <script src="./assets/js/patterns.min.js"></script>
</head>
<body class="theme-dark bg-dark">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="./">
        <img src="./assets/img/logo.svg" alt="Logo">
      </a>
      <!-- Togglers -->
      <div class="d-flex ms-auto order-lg-1">
        <!-- Top navigation toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <!-- Offscreen navigation toggler -->
        <button class="btn shadow-no position-relative center-both text-white" id="off-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-tor="click:class.toggle(active, {target: body})">
          <!-- <i class="bi bi-list h4 mb-0 z-index-1 center-both"></i> -->
          <i class="bi bi-arrow-left-short position-absolute d-flex" data-tor="hover(#off-toggler):reveal(left) delay(100ms) quad"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" data-tor-group="path => hover(#off-toggler):scaleX.to(0) originX(0%) quad delay(/+100ms/);">
            <path fill="currentColor" d="M2.5 4c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z"/>
            <path fill="currentColor" d="M2.5 8c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z"/>
            <path fill="currentColor" d="M2.5 12c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z"/>
          </svg>
          <span class="circle circle-md position-absolute bg-opacity-10" data-tor="hover(#off-toggler):[bg(dark) scale.from(0)]"></span>
        </button>
      </div>
      <!-- Navigation -->
      <div class="collapse navbar-collapse small order-lg-0" id="topNavbar">
        <ul class="navbar-nav d-flex w-100 justify-content-evenly px-2 px-lg-7 links-dark">
          <li class="nav-item"><a class="nav-link" href="mailto:jcesarg@me.com" target="_blank">jcesarg@me.com <i class="'bi bi-envelope-fill text-primary"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="./assets/files/CV.pdf" target="_blank">Descargar CV <i class="bi bi-file-earmark-arrow-down-fill text-primary"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="./assets/files/Portafolio.pdf" target="_blank">Portafolio <i class="bi bi-briefcase-fill text-primary"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="tel:2226799344">Llámame <i class="bi bi-telephone-fill text-primary"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Offscreen backdrop -->
  <div id="offscreen-backdrop" class="z-index-master w-h-100 fixed-top bg-black bg-opacity-50" data-tor="active(body):[fade.in @pointer-events(none;auto)] click:class.remove(active, {target: body})"></div>
    <!-- Offscreen navigation -->
    <nav id="offscreen-nav" class="overflow-auto position-fixed z-index-master end-0 bg-white shadow w-80 w-sm-auto p-5 pe-8 h-100" data-tor="active(body):pull.left(full)">
      <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-tor="click:class.remove(active, {target: body})" aria-label="Close"></button>
      <ul class="nav flex-column links-dark nav-style-opacity nav-style-hover-primary"
        data-tor-group=".nav-item => active(body):[fade.in pull.left(sm)] delay(/25ms+25ms/) slow;.nav-link => hover:push.right(xs) quad;">    
        <li class="nav-item"><a class="nav-link transition-unset" href="#home">Inicio</a></li>    
        <li class="nav-item"><a class="nav-link transition-unset" href="#services">Servicios</a></li>    
        <li class="nav-item"><a class="nav-link transition-unset" href="#skills">Habilidades</a></li>    
        <li class="nav-item"><a class="nav-link transition-unset" href="#experience">Experiencia</a></li>   
        <li class="nav-item"><a class="nav-link transition-unset" href="#portfolio">Portafolio</a></li>    
        <li class="nav-item"><a class="nav-link transition-unset" href="#stay-connected">Contacto</a></li>    
      </ul>
    </nav>

    <main id="main-content">
      <!-- HERO-->
      <section id="home">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 center-v min-vh-100">
            <!-- left -->
            <div class="col my-3">
              <!-- Badge -->
              <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Acerca de Mi</div>
              <!-- Title -->
              <h1 class="mb-5">
                <span data-tor="inview:reveal(up) bounce slow">Hola mundo,</span>
                <br>
                <span data-tor="inview:reveal(up) bounce slow delay(.5s)">Soy</span>
                <span data-tor="inview:reveal(up) bounce slow delay(.6s)" class="text-primary">Julio César</span>
              </h1>
              <!-- Subtitle -->
              <h2 class="h3 font-sans-serif fw-normal text-body-light mb-3">Front-End Development, Diseño Web, Diseño Gráfico, UI/UX.</h2>
              <!-- Description -->
              <p class="text-body-light w-80 mb-6">
              Oye, ¿estás buscando un programador para <span class="text-primary">construir tu sitio o marca?</span> Dejame darte una mano.</p>
              <!-- CTA -->
              <a href="#stay-connected" class="btn btn-primary btn-arrow py-2 px-3 mb-4" data-tor="hover:[bg(transparent) text(primary)]">Contáctame</a>
            </div>
            <!-- end .col -->
            <!-- Right Illustration -->
            <div class="col">
            <img src="./assets/img/main.svg" alt="icon" class="p-2">
            </div>
            <!-- end .col -->
          </div>
          <!-- end .row -->
        </div>
        <!-- .container -->
      </section>

      <!-- SERVICES -->
      <section id="services" class="py-5 py-lg-8 bg-dark bg-darken-sm">
        <div class="container py-4">
          <!-- Title -->
          <div class="title-badge d-inline-block mb-3 bg-primary text-primary bg-opacity-10 px-3 small">Servicios</div>
          <div class="row row-cols-1 row-cols-md-2 mt-5 center-v">
            <!-- Illustration -->
            <div class="col my-3">
              <div class="pe-6">
                <img src="./assets/img/services.svg" alt="icon" class="p-2">
              </div>
            </div>
            <!-- end .col -->
            <!-- Description -->
            <div class="col">          
              <h2 class="mb-4 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">Estos son algunos de los <span class="text-primary">  
              <span class="text-nowrap"><span class="fx">s</span><span class="fx">e</span><span class="fx">r</span><span class="fx">v</span><span class="fx">i</span><span class="fx">c</span><span class="fx">i</span><span class="fx">o</span><span class="fx">s</span></span> <span class="text-white text-opacity-30 ms-n1" data-tor="loop:blink"> | </span></span> que proveeo.</h2>
              <p class="mb-6">Egresado del Instituto Tecnológico de Puebla en la licenciatura en Informática. Cuento con 10 años de experiencia en el diseño y desarrollo web, enfocándome en RWD y en las necesidades concretas de cada empresa. Diseñador gráfico con 6 años de experiencia en agencias de publicidad.</p>
              <div class="row row-cols-1 row-cols-md-2" data-tor-group=".circle => inview:[scale.from(0) rotate.from(20deg)] delay(/+50ms/) slow; h3 => inview:[pull.left(sm) fade.in] slow delay(/+50ms/);">            
                <div class="col mb-5" data-tor-parent="hover">
                  <a href="#" class="center-v">
                    <!-- Icon -->
                    <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)"><i class="bi bi-phone text-white h3 mb-0"></i></div>
                    <!-- Heading -->
                    <h3 class="font-sans-serif h5 mb-0">Ui/Ux Design</h3><i class="bi bi-arrow-right ms-auto text-secondary" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                  </a>
                </div>            
                <div class="col mb-5" data-tor-parent="hover">
                  <a href="#" class="center-v">
                    <!-- Icon -->
                    <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)"><i class="bi bi-globe text-white h3 mb-0"></i></div>
                    <!-- Heading -->
                    <h3 class="font-sans-serif h5 mb-0">Diseño Web</h3><i class="bi bi-arrow-right ms-auto text-secondary" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                  </a>
                </div>            
                <div class="col mb-5" data-tor-parent="hover">
                  <a href="#" class="center-v">
                    <!-- Icon -->
                    <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)"><i class="bi bi-brush text-white h3 mb-0"></i></div>
                    <!-- Heading -->
                    <h3 class="font-sans-serif h5 mb-0">Diseño Gráfico</h3><i class="bi bi-arrow-right ms-auto text-secondary" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                  </a>
                </div>            
                <div class="col mb-5" data-tor-parent="hover">
                  <a href="#" class="center-v">
                    <!-- Icon -->
                    <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)"><i class="bi bi-bootstrap text-white h3 mb-0"></i></div>
                    <!-- Heading -->
                    <h3 class="font-sans-serif h5 mb-0">Full-Stack</h3><i class="bi bi-arrow-right ms-auto text-secondary" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                  </a>
                </div>            
              </div>
            </div>
            <!-- end .col -->
          </div>
          <!-- end .row -->
        </div>
        <!-- end .container -->
      </section>
      <!-- end #services -->

      <!-- SKILLS -->
      <section id="skills" class="py-5 mt-3 py-lg-8">
        <div class="container">
          <!-- Badge -->
          <div class="title-badge d-inline-block mb-3 bg-primary text-primary bg-opacity-10 px-3 small">Habilidades</div>
          <div class="row row-cols-1 row-cols-md-2 mt-md-5 center-v">
            <!-- Description -->
            <div class="col">
              <!-- Title -->              
              <h2 class="mb-4 w-80 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">Como programador estoy mejorando constantemente mis<span class="text-primary">    
              <span class="text-nowrap"><span class="fx">h</span><span class="fx">a</span><span class="fx">b</span><span class="fx">i</span><span class="fx">l</span><span class="fx">i</span><span class="fx">d</span><span class="fx">a</span><span class="fx">d</span><span class="fx">e</span><span class="fx">s</span></span> <span class="text-white text-opacity-30 ms-n1" data-tor="loop:blink">|</span></span></h2>
              <!-- Description -->
              <p class="mb-6">He laborado en diversas empresas de marketing desde 2013, he colabora-do en la edición y diseño de libros de español, así como folletos, trípticos y más, diseñado diversos sistemas basados en PHP los cuales son de inventario y ventas, tiendas en línea, gestión de citas médicas, control de alumnos, asistencia, sistemas bibliotecarios,  sistema para compartir archivos y más.</p>
              
              <div class="row row-cols-1 row-cols-md-2 mt-md-5 center-v">
                <div class="col">
                  <!-- Skill progress -->
                  <div id="skill-progress">                 
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">Photoshop</h3>
                      <progress max="100" value="50" class="html5"></progress>
                    </div>
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">Illustrator</h3>
                      <progress max="100" value="65" class="html5"></progress>
                    </div>  
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">InDesing</h3>
                      <progress max="100" value="50" class="html5"></progress>
                    </div>                                  
                  </div> 
                  <div class="skill mb-5">
                    <h3 class="h6 small font-sans-serif mb-3">HTML - CSS</h3>
                    <progress max="100" value="85" class="html5"></progress>
                  </div> 
                </div>
                <div class="col">
                  <!-- Skill progress -->
                  <div id="skill-progress">  
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">PHP</h3>
                      <progress max="100" value="70" class="html5"></progress>
                    </div> 
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">JavaScript - JQuery</h3>
                      <progress max="100" value="60" class="html5"></progress>
                    </div> 
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">SQL</h3>
                      <progress max="100" value="60" class="html5"></progress>
                    </div>                      
                    <div class="skill mb-5">
                      <h3 class="h6 small font-sans-serif mb-3">Laravel</h3>
                      <progress max="100" value="20" class="html5"></progress>
                    </div>       
                  </div>
                </div>
              </div>
            </div>
            <!-- end .col -->
            <!-- Illustration -->
            <div class="col">
              <div class="px-4 ps-md-7 pe-md-0">
              <img src="./assets/img/skills.svg" alt="icon" class="p-2">
              </div>
            </div>
            <!-- end .col -->
          </div>
        </div>
      </section>
      <!-- end #skills -->

      <!-- EXPERIENCE -->
      <section id="experience" class="py-5 py-lg-8 overflow-hidden bg-dark bg-darken-sm">
      <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2">
          <!-- My education -->
          <div class="col"
            data-tor-group=".experience-box .date=> inview:reveal(up) delay(/+50ms/);.experience-box .description  => inview:[pull.left(md) fade.in] delay(/+50ms/) wait(100ms) slow;">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Educación y Cursos</div>
            <!-- Title -->
            <h2 class="ms-md-6 mb-5">Educación</h2>            
              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2004 - 2010</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h5 class="text-primary font-sans-serif">TÍTULO</h5>
                    <h4 class="font-sans-serif">Licenciado en Informática</h4>
                    <small class="text-secondary">Instituto Tecnológico de Puebla</small>
                  </div>
                  <p class="small">Programación, redes, manejo de bases de datos.</p>
                </div>
              </div>

              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2019 - 2022</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h5 class="text-primary font-sans-serif">CURSO</h5>
                    <h4 class="font-sans-serif">The Ultimate UI/UX Design</h4>
                    <h4 class="font-sans-serif">Fundamentos de UX & UI</h4>
                    <h4 class="font-sans-serif">SEO desde cero: posiciona en Google</h4>
                    <h4 class="font-sans-serif">Branding e identidad visual</h4>
                    <h4 class="font-sans-serif">Identidad Corporativa</h4>
                    <h4 class="font-sans-serif">Diseño de interfaces web y móviles</h4>
                  </div>
                </div>
              </div>                 
          </div>
          <!-- end .col -->

          <!-- My education -->
          <div class="col"
            data-tor-group=".experience-box .date=> inview:reveal(up) delay(/+50ms/);.experience-box .description  => inview:[pull.left(md) fade.in] delay(/+50ms/) wait(100ms) slow;">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Experiencia</div>
            <!-- Title -->
            <h2 class="ms-6 mb-5">Trabajos</h2>            
              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2014 - 2022</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h4 class="font-sans-serif">Front-End Developer, Diseño Gráfico</h4>
                    <small class="text-secondary">Spanish Language School</small>
                  </div>
                  <p class="small">Branding institucional, Identidad de marca, páginas web, diseño gráﬁco, videos corporativos, promocionales, Redes Sociales, creación y administración de contenido, campañas publicitarias en distintas plataformas, creación de libros, folletos, volantes, trípticos, carteles, tarjetas de presentación, lona, vinil, manejo de personal administrativo.</p>
                </div>
              </div>
            
              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2021 - 2022</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h4 class="font-sans-serif">Front-End Developer, Diseño Gráfico</h4>
                    <small class="text-secondary">Empresa de inversión de capital</small>
                  </div>
                  <p class="small">Construcción del sitio web para la empresa, así como una aplicación en el sitio web que permite cargar archivos y asignarlos a clientes específicos que uno mismo cree. Seguro, privado y fácil, sin depender de servicios externos o correo electrónico para enviar esos archivos.</p>
                </div>
              </div>

              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2015 - 2022</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h4 class="font-sans-serif">Front-End Developer, Diseño Gráfico</h4>
                    <small class="text-secondary">Hotelería y turismo</small>
                  </div>
                  <p class="small">Diseño y desarrollo de un sistema de booking, en el cual se observa, nombre, día de llegada, hora y fecha, cancelaciones, tipo de pago, de cada una de las habitaciones con las que cuenta Suites La Concordia, utilizando bases de datos donde se guarda la información.</p>
                </div>
              </div>

              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2017 - 2019</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h4 class="font-sans-serif">Diseño Web, Diseño Gráfico</h4>
                    <small class="text-secondary">Servicios de telefonía celular</small>
                  </div>
                  <p class="small">Branding institucional y personal, Identidad de marca, packing, páginas web, diseño y desarrollo de tiendas en linea, videos corporativos, videos promocionales, corte vinil, promocionales.</p>
                </div>
              </div>

              <div class="experience-box row mb-3">
                <div class="col-md-3 py-2 py-md-5">
                  <small class="d-inline-block date">2012 - 2013</small>
                </div>
                <div class="description col-md-9 border-start py-md-5">
                  <div class="mb-4">
                    <h4 class="font-sans-serif">Diseño Web, Diseño Gráfico</h4>
                    <small class="text-secondary">Agencia publicitaria</small>
                  </div>
                  <p class="small">Construcción de sitios web para la empresa de marketing.</p>
                </div>
              </div>            
            </div>
            <!-- end .col -->
          </div>
          <!-- end .row -->
        </div>
        <!-- end .container -->
      </section>
      <!-- end #experience -->

      <!-- PORTFOLIO -->
      <section id="portfolio" class="py-5 py-lg-8">
        <div class="container py-4">
          <!-- Title -->
          <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Portafolio</div>
            <div class="row row-cols-1 row-cols-md-2 mb-7">
              <div class="col">            
                <h2 class="mb-4 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">
                Algunos de mis trabajos de <span class="text-primary"><span class="text-nowrap"><span class="fx">p</span><span class="fx">r</span><span class="fx">o</span><span class="fx">g</span><span class="fx">r</span><span class="fx">a</span><span class="fx">m</span><span class="fx">a</span><span class="fx">c</span><span class="fx">i</span><span class="fx">ó</span><span class="fx">n</span></span></span> y <span class="text-primary"><span class="text-nowrap"><span class="fx">d</span><span class="fx">i</span><span class="fx">s</span><span class="fx">e</span><span class="fx">ñ</span><span class="fx">o</span></span> <span class="text-white text-opacity-30 ms-n1" data-tor="loop:blink">|</span></span>
                </h2>
                <p class="mb-6">Como programador llevo unos años trabajando en este sector, y he realizado montones de proyectos.</p>
                <a href="portafolio.php" class="btn-link btn-arrow">Explorar más</a>
              </div>
              <div class="col">
                <div class="row row-cols-md-2 mt-4">
                  <!-- col -->
                  <div class="col center-v">
                    <div class="display-5 font-sans-serif text-primary me-4">10</div>
                    <h3 class="h5 mb-0 font-sans-serif w-md-30">Años de experiencia</h3>
                  </div>
                  <!-- end .col -->
                  <!-- col -->
                  <div class="col center-v">
                    <div class="display-5 font-sans-serif text-primary me-4">5</div>
                    <h3 class="h5 mb-0 font-sans-serif w-md-70">Años en<br>diseño gráfico</h3>
                  </div>
                  <!-- end .col -->
                </div>
              </div>
            </div>
            <div class="tor-slider" data-tor-slider="count(1 md::2) margin(80) indicators(true) add-trigger(active) indicators-light" data-tor-group=".portfolio-item => active(p):[scale.from(80%) rotate.from(5deg)];">
              <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/work-01.jpg" alt="illustration">
              <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/work-02.jpg" alt="illustration">
              <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/work-11.jpg" alt="illustration">
              <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/work-12.jpg" alt="illustration">
            </div>
          </div>
        </div>
        <!-- end .container -->
      </section>
      <!-- end #portfolio -->

      <!-- FOOTER -->
      <section id="stay-connected">
        <div class="container position-relative pb-1 overflow-hidden overflow-sm-visible">
          <div class="row">
            <div class="col-md-3 my-3">
              <div class="d-none d-md-block px-5">
              <img src="./assets/img/stay-connect.svg" alt="icon" class="p-2">
              </div>
            </div>
            <div class="col-md-4 offset-md-1 center-both my-3">
              <div class="text-center" data-tor-group=".fx => inview:reveal(up) delay(/+100ms/);">
                <h2 class="fx mb-5">Contacto</h2>
                <p class="fx opacity-50 fw-500 mb-2">Puebla, Pue.</p>
                <a href="mailto:jcesarg@me.com" class="nav-link" target="_blank">Envíame un e-mail</a>
                <a class="nav-link" href="tel:2226799344" target="_blank">Llámame</a>
              </div>
            </div>
          </div>
          <!-- end .row -->
          <div class="position-absolute bottom-0 z-index-n1 w-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1363 74.1" class="w-100 overflow-visible" data-tor-group="path => mouseX:@parallax(/+3/);">
              <path d="M0 73.9s85-29 117-29 86 25 111 27 323 5 354-13 58.6-58 106-58c39.5 0 74 19.9 94 36 26.5 21.4 90 30 122 26s338.5 11 338.5 11H0z" fill="#f8e9de" />
              <path d="M208.1 74.1s81.9-27.9 127.1-30 84.1 11.3 123.1 15.4 76.9-29.8 112.9-33.9 92.3 9.2 134.4 24.6c42.1 15.4 96.4 34.9 142.6 13.3C894.3 42.1 916.8 0 1003 0s105.7 10.3 137.5 27.7 60.5 27.7 88.2 16.4c27.7-11.3 35.9-14.4 60.5 0s30.8 29.8 30.8 29.8l-1111.9.2z" fill="#f79682" />
              <path d="M283 73.9s77-28 121-30 82 11 120 15 75-29 110-33 90 9 131 24 94 34 139 13 67-62 151-62 103 10 134 27 59 27 86 16 35-14 59 0 29 30 29 30H283z" fill="#77acd7" />
            </svg>
          </div>
        </div>
        <!-- end .container -->
      </section>
      <!-- end #footer -->
    </main>

  <!-- Scripts -->
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>