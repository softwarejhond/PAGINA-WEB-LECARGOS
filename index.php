<!DOCTYPE html>
<html>

<?php
include './controllers/head.php';
?>

<body>
<div class="hero_area">
  <?php 
  include './views/header.php'
  ?>
  <!-- slider section -->
  <section class="slider_section">
      <div class="slider_bg_box">
        <!-- <img src="images/slider-bg.jpg" alt=""> -->
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      Tenemos el Mejor <br>
                      Servicio de Transporte
                    </h1>
                    <p>
                      Contamos con una moderna y versátil flota de transporte fidelizada en el país que asciende hasta 150 unidades en todas sus configuraciones.<br>
                      Tenemos una flota propia que nos respalda la capacidad de respuesta de acuerdo al lugar de requerimiento, realizamos seguimiento y trazabilidad en la prestación del servicio.

                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Escríbenos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 ">
                  <div class="detail-box">
                    <h1>
                      NuestraTrayectoria
                    </h1>
                    <p>
                      La experiencia y trayectoria de sus socios con más de 20 años en el mercado, permite implementar nuevas tendencias y estrategias innovadoras en los procesos de abastecimiento, transporte y distribución; para atender las diferentes necesidades, de una manera eficiente y cómoda en beneficio de nuestros clientes. 
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Escríbenos
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
      </div>
      
    </section>
</div>
    <!-- end slider section -->
  <!-- service section -->
  <?php 
   include './views/viewServices.php';
  ?>
  <!-- end service section -->
  <!-- about section -->
  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 px-4">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Acerda de <span>Nosotros</span>
              </h2>
            </div>
            <p>
              Lecargo es una empresa especializada en diseñar y ofrecer soluciones con servicios de logística y transporte de carga por carretera seguros, oportunos y confiables con una infraestructura moderna y que proteja el medio ambiente; para ello contar con un recurso humano y tecnológico competente, orientados a satisfacer oportunamente las necesidades y expectativas de nuestros clientes, proveedores y socios, que genere competitividad a la industria y sostenibilidad en el tiempo.
            </p>
            <a href="about.php">
              Leer más
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- track section -->

  <section class="track_section layout_padding">
    <div class="track_bg_box"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading_container">
            <h2>
              Nuestra Politica
            </h2>
          </div>
          <p>
            Para garantizar un servicio seguro, oportuno y confiable dirigimos como organización todas nuestras actuaciones para ser aliados estratégicos de nuestros clientes en pro de su satisfacción y fidelización.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- end track section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Algunos de Nuestros <span>Clientes</span>
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/colrecicladora.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/ecoplanet.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/likanto.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/centroaceros.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/sidoc.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/suppla.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/minerales_industriales.png" alt="">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <img src="images/logosClientes/rimoplasticas.png" alt="" style="width: 100px; height:100%" >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->
<?php 
//contact section
include './views/viewContact.php';
//footer section
include './views/footer.php';
// Scripts
include './controllers/scripts.php';
?>

</body>

</html>