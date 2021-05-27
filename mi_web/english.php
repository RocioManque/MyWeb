<!DOCTYPE html>
<html lang="en">
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
            <li><a href="#begin" data-after="Home">Home</a></li>
            <li><a href="#about" data-after="About">About me</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Project</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  <a href="index.php" class="btn-lang">
    <img src="https://img.icons8.com/color/48/000000/argentina-circular.png"/>
 </a>

  <!-- Begin Section  -->
  <section id="begin">
    <div class="begin container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>You can call me <span></span></h1>
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
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Full Stack Web Developer</h2>
        <p>Hi! My full name is Elisa Rocío Anahí Manque. I'm a Jr. Freelance based in Neuquen, Argentina. I like things aesthetically well executed so the Front-end is my greatest strength. In the last few months I have been working on small projects in which I have been able to help turn an idea and a vision into a useful product, from a bit of community management to development. </p>
        <a href="pdf/Elisa_Rocio_A_Manque.pdf" download="Rocio_Manque.pdf" target="_blank" class="cta" >CV resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p> </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web desing</h2>
          <p>We can develop the idea that has been spinning in your head to take your brand one step further.  Together, we can design the future of your business on the internet.</p>

        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Comunity Management</h2>
          <p>If your business grows more and more and you don't have enough time to develop a strong presence of your brand on social media, we can work together to solve it.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web develop</h2>
          <p>If you are looking for something more specific that needs code to be carried out, you can write me with confidence, I'm always open to new opportunities and challenges.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"> Proj<span>e</span>cts</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>K9 Campana</h1>
            <h2>Civil asociation</h2>
            <p>This non-profit ONG asked us for an information and contact page for the public. Although it was developed with my final project team during my studies, the page is currently receiving important changes from me, with new experience and requests.</p>
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
      <div><h1 class="section-title">Contact <span>me</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
        <form class="contact-form" action="english.php" method="post">
            <input id="nombre" type="text" class="contact-form-text" name="nombre" placeholder="Your name" required>
            <input id="email" type="email" class="contact-form-text" name="email" placeholder="Your email" required>
            <textarea id="mensaje" class="contact-form-text" name="mensaje" placeholder="Your massage" required></textarea>
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
alert('Message send, thank you so much.');
window.location.href = 'http://litzhweb.com/';
</script>";
} else {
echo 'faild';
}
}
?>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>R</span>ocio <span>M</span>anque</h1></div>
      <h2>Your complete solution </h2>
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

