<!DOCTYPE html>
<html>

<?php
include './controllers/head.php'
?>

<body class="sub_page">

  <?php
  include './views/header.php';
  ?>
  <section class="contact_section layout_padding-top fade-div">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5">
          <div class="heading_container">
            <h2>
              Solicita tu Pqrs
            </h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="form_container m-0">
            <form id="form">
              <div>
                <label for="radicadoPqrs">Radicado Pqrs</label>
                <input type="text" name="radicadoPqrs" id="radicadoPqrs" disabled/>
              </div>
              <div>
                <label for="tipoSolicitud">Tipo de Solicitud</label>
                <select name="tipoSolicitud" id="tipoSolicitud">
                  <option value="">Seleccionar</option>
                  <option value="Preguntas">Preguntas</option>
                  <option value="Felicitaciones">Felicitaciones</option>
                  <option value="Solicitud">Solicitud</option>
                  <option value="Reclamos">Reclamos</option>
                  <option value="Quejas">Quejas</option>
                </select>
              </div>
              <div>
                <label for="fullName">Nombre Completo</label>
                <input type="text" name="fullName" id="fullName" required />
              </div>
              <div>
                <label for="tipoIdentificacion">Tipo de Identificación</label>
                <select name="tipoIdentificacion" id="tipoIdentificacion" required>
                  <option value="">Seleccionar</option>
                  <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                  <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                  <option value="RUT">RUT</option>
                  <option value="Pasaporte">Pasaporte</option>
                  <option value="Licencia de Conducir">Licencia de Conducir</option>
                </select>
              </div>
              <div>
                <label for="numeroIdentificacion">Número de Identificación</label>
                <input type="text" name="numeroIdentificacion" id="numeroIdentificacion" required/>
              </div>
              <div>
                <label for="medioRespuesta">¿Donde Quieres Recibir la Respuesta?</label>
                <select name="medioRespuesta" id="medioRespuesta">
                  <option value="">Seleccionar</option>
                  <option value="Correo Electrónico">Correo Electrónico</option>
                  <option value="WhatsApp">WhatsApp</option>
                  <option value="Teléfono">Teléfono</option>
                </select>
              </div>
              <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" required />
              </div>
              <div>
                <label for="telefono">Número de Teléfono</label>
                <input type="tel" name="telefono" id="telefono" required />
              </div>
              <div class="mensaje">
                <label for="">Descripcion de la Solicitud</label>
                <textarea type="text" class="message-box" placeholder="Mensaje" name="menssage" required></textarea>
              </div>
              <div class="btn_box">
                <input type="submit" id="button" value="Enviar Mensaje" class="btn btn1 button">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  //footer section
  include './views/footer.php';
  // Scripts
  include './controllers/scripts.php';
  ?>
  <script>
    function generarInputAlfanumerico() { 
      const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
      let resultado = ''; // Generar la cadena alfanumérica de 8 dígitos 
      for (let i = 0; i < 8; i++) { 
        const indiceAleatorio = Math.floor(Math.random() * caracteres.length); 
        resultado += caracteres.charAt(indiceAleatorio); 
      } 
      return resultado; 
    }
    document.querySelector('#radicadoPqrs').value = generarInputAlfanumerico();
  </script>
</body>

</html>