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
        <img src="images/slider-bg.jpg" alt="">
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
                        Get A Quote
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
                    	Contamos con una larga trayectoria en el sector del transporte. Somos confiables, por tener una alta cobertura, trayectoria y respaldo de nuestra compañía de seguros.<br>
                      Contamos con respaldo y oportunidad con apoyo de alianzas estratégicas. 

                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Get A Quote
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
          <!-- <li data-target="#customCarousel1" data-slide-to="2"></li> -->
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
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Acerda de <span>Nosotros</span>
              </h2>
            </div>
            <p>
              La experiencia y trayectoria de sus socios con más de 20 años en el mercado, permite implementar nuevas tendencias y estrategias innovadoras en los procesos de abastecimiento, transporte y distribución; para atender las diferentes necesidades, de una manera eficiente y cómoda en beneficio de nuestros clientes
            </p>
            <a href="about.php">
              Read More
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
    <div class="track_bg_box">
      <img src="images/track-bg.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading_container">
            <h2>
              Track Your Shipment
            </h2>
          </div>
          <p>
            Iste reprehenderit maiores facilis saepe cumque molestias. Labore iusto excepturi, laborum aliquid pariatur veritatis autem, mollitia sint nesciunt hic error porro.
            Deserunt officia unde repellat beatae ipsum sed. Aperiam tempora consectetur voluptas magnam maxime asperiores quas similique repudiandae, veritatis reiciendis harum fuga atque.
          </p>
          <form action="">
            <input type="text" placeholder="Enter Your Tracking Number" />
            <button type="submit">
              Track
            </button>
          </form>
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
          What Says Our <span>Client</span>
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="" class="img-1">
                  </div>
                  <div class="name">
                    <h6>
                      Adipiscing
                    </h6>
                    <p>
                      Magna
                    </p>
                  </div>
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