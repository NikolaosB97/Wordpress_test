<?php get_header(); ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NB-Developer</title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/NB-removebg-preview.png" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/e562f4e6cf.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/app.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/footer.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/navbar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet">

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/NB-removebg-preview.png" alt="Logo" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Chi sono</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sezione About -->
    <section id="about" class="about-section">
        <div class="img-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header2.png" alt="Immagine di Nicola Bongiovanni">
        </div>
        <div class="text-container">
            <p class="typing-effect"></p>
        </div>
    </section>

    <!-- Sezione Card -->
    <div class="container-fluid">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nico.png" alt="profile one">
                    <div class="details">
                        <h2>Nicola Bongiovanni</h2>
                        <p class="job-title">Full-Stack Developer</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Competences Section -->
        <div class="skills-panel">
            <h3 class="skills-header text-center">COMPETENZE:</h3>
            <div class="skills-columns my-5">
                <div class="skills-category">
                    <h4>Linguaggi</h4>
                    <ul class="skills">
                        <li><i class="fab fa-html5" style="color: #E34F26;"></i> HTML</li>
                        <li><i class="fab fa-css3-alt" style="color: #1572B6;"></i> CSS</li>
                        <li><i class="fab fa-js-square" style="color: #F7DF1E;"></i> JavaScript</li>
                        <li><i class="fab fa-php" style="color: #777BB4;"></i> PHP</li>
                        <li><i class="fab fa-python" style="color: #306998;"></i> Python</li>
                        <li><i class="fab fa-java" style="color: #007396;"></i> Java</li>
                    </ul>
                </div>

                <!-- Framework Section -->
                <div class="skills-category">
                    <h4>Framework</h4>
                    <ul class="skills">
                        <li><i class="fab fa-laravel" style="color: #FF2D20;"></i> Laravel</li>
                        <li><i class="fab fa-bootstrap" style="color: #563D7C;"></i> Bootstrap</li>
                        <li><i class="fab fa-node-js" style="color: #339933;"></i> Node.js</li>
                        <li><i class="fab fa-react" style="color: #61DAFB;"></i> React</li>
                    </ul>
                </div>

                <!-- Database Section -->
                <div class="skills-category">
                    <h4>Database</h4>
                    <ul class="skills">
                        <li><i class="fas fa-database" style="color: #4479A1;"></i> MySQL</li>
                    </ul>
                </div>

                <!-- Tools Section -->
                <div class="skills-category">
                    <h4>Altri Strumenti</h4>
                    <ul class="skills">
                        <li><i class="fab fa-github" style="color: #181717;"></i> GitHub</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sezione Progetti -->
    <section id="projects" class="projects-section">
        <h2 class="section-title">I miei progetti</h2>
        <div class="github-container align-item-center">
            <button id="toggle-button" class="github-button" onclick="toggleProjects()">
                <span id="button-text">Scopri i miei progetti su GitHub</span>
                <span id="loading-spinner" class="loading-spinner" style="display: none;"></span>
            </button>
        </div>
        <div id="projects-grid" class="projects-grid" style="display: none;">
            <!-- I progetti saranno inseriti qui da JavaScript -->
        </div>
    </section>

    <!-- Sezione Contatti -->
    <section id="contact" class="contact-section">
        <h2>Dove trovarmi</h2>
        <p>Se vuoi collaborare con me, discutere di nuove idee o semplicemente metterti in contatto, puoi trovarmi sui seguenti social media.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/nicola.bongiovanni.35/" target="_blank" class="social-link facebook">
                <i class="fab fa-facebook fa-2x"></i> Facebook
            </a>
            <a href="https://www.instagram.com/nikolaosbongio97?igsh=cGp0OXd6NTNyaXd5&utm_source=qr" target="_blank" class="social-link instagram">
                <i class="fab fa-instagram fa-2x"></i> Instagram
            </a>
            <a href="https://wa.me/3278308941" target="_blank" class="social-link whatsapp">
                <i class="fab fa-whatsapp fa-2x"></i> WhatsApp
            </a>
            <a href="https://www.linkedin.com/in/nicola-bongiovanni-b69a9327a/" target="_blank" class="social-link linkedin">
                <i class="fab fa-linkedin fa-2x"></i> LinkedIn
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center bg-body-tertiary text-muted container-fluid">
        <section class="section">
            <div class="container-fluid text-center text-md-start mt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/NB-removebg-preview.png" style="width: 100px;" class="me-2" alt="Logo">
                        <p>Developed by NB.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
                        <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:nicolabongiovanni1609@gmail.com" class="text-reset">nicolabongiovanni1609@gmail.com</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fas fa-phone me-3"></i>
                            <span>+39 3278308941</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4">© 2024 NB</div>
    </footer>

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/navbar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
<?php get_footer(); ?>