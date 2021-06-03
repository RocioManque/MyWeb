<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Litzh Web</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#begin"><h1><span>M</span>anque <span>R</span>ocio</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#begin" data-after="Home">inicio</a></li>
            <li><a href="#about" data-after="About">Sobre mi</a></li>
            <li><a href="#services" data-after="Service">Servicios</a></li>
            <li><a href="#projects" data-after="Projects">Proyectos</a></li>
            <li><a href="#contact" data-after="Contact">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <a href="english.php" class="btn-lang">
   <img src="https://img.icons8.com/color/50/000000/liberia-circular.png"/>
</a>

  <!-- Begin Section  -->
  <section id="begin">
    <div class="begin container">
      <div>
        <h1>Hola, <span></span></h1>
        <h1>Puedes llamarme <span></span></h1>
        <h1>Litzh <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Begin Section  -->

   <!-- About Section -->
   <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="img/as.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sobre <span>mi</span></h1>
        <h2>Desarrolladora web full stack</h2>
        <p>Mi nombre es Elisa Rocio Anahi Manque, soy freelance Jr. y actualmente resido en Neuquen, Argentina. Me gustan las cosas estéticamente bien ejecutadas por lo que el Front-end es mi mayor fortaleza. En los ultimos meses he estado trabajando en pequeños proyectos en los que he sido capaz de ayudar a convertir una idea y una visión en un producto útil.</p>
        <a href="pdf/Elisa_rocio_anahi_manque.pdf" download="Rocio_Manque.pdf" target="_blank" class="cta" >Descargar CV</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>cios</h1>
        <p> </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web desing</h2>
          <p>Podemos desarrollar esa idea que viene dando vueltas en tu cabeza para llevar tu marca a un paso más adelante. Juntos, podemos diseñar el futuro de tu negocio en la internet.</p>

        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Comunity Management</h2>
          <p>Si tu negocio crece cada vez más y no tienes el tiempo suficiente para desarrollar una presencia firme de tu marca en las redes sociales podemos trabajar juntos para solucionarlo.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web develop</h2>
          <p>Si buscas algo más especifico que necesite de código para ser realizado puedes escribirme con toda confianza, siempre estoy abierta a nuevas oportunidades y desafíos.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"> Proy<span>e</span>ctos</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>K9 campana</h1>
            <h2>Asociación civil</h2>
            <p>Esta ONG sin fines de lucro nos solicitó una página de información y contacto para el público. Si bien fue desarrollada con mi equipo de proyecto final durante mis estudios, actualmente la página esta recibiendo cambios importantes de mi parte, con nueva experiencia y solicitudes</p>
          </div>
          <a href="https://k9campana.com.ar/" target="_blank">
          <div class="project-img">
            <img src="img/LOGO.png" alt="img">
          </div>
        </a>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contacta<span>me</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <form class="contact-form" action="index.php" method="post">
            <input id="nombre" type="text" class="contact-form-text" name="nombre" placeholder="Tu nombre" required>
            <input id="email" type="email" class="contact-form-text" name="email" placeholder="Tu email" required>
            <textarea id="mensaje" class="contact-form-text" name="mensaje" placeholder="Tu mensaje" required></textarea>
            <input id="submit" type="submit" class="contact-form-btn" name="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'manque.rocio01@gmail.com';
$titulo = 'Pagina web';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://litzhweb.com/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>R</span>ocio <span>M</span>anque</h1></div>
      <h2>Tu mejor solución </h2>
      <div class="social-icon">
        
        <div class="social-item">
          <a href="https://www.instagram.com/liitzh/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.linkedin.com/in/rocio-manque-53400a170/" target="_blank"><img src="https://img.icons8.com/bubbles/50/000000/linkedin.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://github.com/RocioManque/miweb" target="_blank"><img src="https://img.icons8.com/bubbles/50/000000/github.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 Litzh. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>

