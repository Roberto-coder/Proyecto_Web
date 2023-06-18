<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario de contacto</title>
  

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>titulo de empresa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Travel Agency <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mas</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">Sobre nosotros</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                      <a class="dropdown-item" href="terms.php">Terminos y condiciones</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contactanos</a></li>
            </ul>
          </div>
        </div>
      </nav>
  
  <section class="form-register">
    <h4>Formulario de contacto</h4>
    <form method="POST" action="guardar_datos.php">
      <label>Nombre completo:*</label>
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Escriba su nombre completo">
      <label>Correo electrónico:*</label>
      <input class="controls" type="text" name="correo" id="correo" placeholder="Escribe tu correo">
      <label>Número telefónico:*</label>
      <input class="controls" type="number" name="telefonico" id="telefonico" placeholder="Escribe tu número telefónico">
      <label>Sitio web:*</label>
      <input class="controls" type="text" name="sitio_web" id="sitio_web" placeholder="Coloca la URL de tu sitio web">
      <label>Asunto:*</label>
      <input class="controls" type="text" name="asunto" id="asunto" placeholder="Escribe un asunto">
      <label>Mensaje:*</label>
      <input class="controls" type="text" name="mensaje" id="mensaje" placeholder="Escribe un mensaje">
      <input class="botons" type="submit" value="ENVIAR">
    </form>
    <h1>* Los campos son obligatorios.</h1>
    
  </section>
  <center>
  <p>Siguenos en nuestras redes sociles</p>  
  <a href="https://www.facebook.com/">
  <img src="assets/images/fa.png" alt="Texto alternativo de la imagen" width="30" height="30">
  <a href="https://www.instagram.com/">
  <img src="assets/images/ins.png" alt="Texto alternativo de la imagen" width="30" height="30">
  <a href="https://twitter.com/">
  <img src="assets/images/tw.png" alt="Texto alternativo de la imagen" width="30" height="30">
  

</center>
</a>
</body>
</html>
