<section class="contact_section layout_padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5 offset-md-1">
                <div class="heading_container">
                    <h2>
                        Escríbenos
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-5 offset-md-1">
                <div class="form_container">
                    <form id="form">
                        <div>
                            <input type="text" placeholder="Tu Nombre" name="name" required/>
                        </div>
                        <div>
                            <input type="text" placeholder="Celular" name="phone" required/>
                        </div>
                        <div>
                            <input type="email" placeholder="Correo Electrónico"  name="phone" required/>
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Mensaje" name="menssage" required/>
                        </div>
                        <div class="btn_box">
                            <input type="submit" id="button" value="Enviar Mensaje" class="btn btn1 button" >
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d508.98660256620684!2d-75.5899274126711!3d6.188635699675295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTEnMTkuNCJOIDc1wrAzNScyMi42Ilc!5e0!3m2!1ses-419!2sco!4v1733801499967!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('5rzL6gs8jJttfxXnF')
</script>
<script>const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Enviando...';

   const serviceID = 'default_service';
   const templateID = 'template_0o3m3mi';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Enviar Mensaje';
      alert('Mensaje enviado con éxito!');
      this.reset();
    }, (err) => {
      btn.value = 'Enviar Mensaje';
      alert(JSON.stringify(err));
    });
});</script>