<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- header section strats -->
<header class="header_section">
    <div class="header_top">
        <div class="container-fluid ">
            <div class="contact_nav">
                <a href="tel:+57 3104823766">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Llamar : +57 3104823766
                    </span>
                </a>
                <a href="contact.php">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : sistemaslecargo@gmail.com
                    </span>
                </a>
                <a target="__blank" href="https://www.google.com/maps?q=6.188716992899272, -75.58961783675565">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Ubicación
                    </span>
                </a>
            </div>
        </div> 
    </div> 
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <span>
                        <img src="../images/logoOk.png" alt="Logo Empresa Lecargo">
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="index">Inicio</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="service">Servicios</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="about">Nosotros</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact">Contacto</a>
                        </li>
                        <li class="nav-item icon-email">
                            <a target="__blank" href="https://host21.latinoamericahosting.com:2096/webmaillogout.cgi" class="nav-link"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- end header section -->