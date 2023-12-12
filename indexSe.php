<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <style>
        .dark-mode {
            background-color: #333 !important;
            color: #fff !important;
        }
      .dark-mode .navbar-nav .nav-link,
        .dark-mode .navbar-brand {
            color: #fff !important;
        }
        .social-links {
          list-style: none;
          padding: 0;
        }

        .social-links li {
          display: inline-block;
          margin-right: 10px;
        }

        .social-links a {
          text-decoration: none;
          color: #333;
          font-weight: bold;
          font-size: 16px;
        }

        .social-links a:hover {
          color: #007bff; 
        }
        .social-links img {
           max-width: 10%; 
           height: auto; 
           margin-right: 5px; 
}
.Nombre{
    color: #fff;
    margin: 25px 0 45px 0;
}
.footer {
  background-color: #333; 
  padding: 20px 0;
  text-align: center;
}
.footer p {
  color: #fff; 
}
.link {
  max-width: 2000px;
  margin: 0 auto; 
}

.social-links {
  list-style: none;
  padding: 0;
  display: flex;
  justify-content: center; 
  align-items: center; 
}

.social-links li {
  margin-right: 10px;
}

.social-links img {
  width: 500px; 
  border-radius: 50%;
}
.services-1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 20px;
}

.services-1 img {
    width: 100%;
    height: 200px;
    object-fit: cover; 
    border-radius: 10px; 
}

.services-content {
    scroll-snap-type: y mandatory;
}

.services-1 {
    scroll-snap-align: start;
}

.services-1 img {
    transition: transform 0.3s ease-in-out; 
}

.services-1:hover img {
    transform: scale(1.1); 
}

    </style>

    <title>Document</title>
    
    
</head>
<body data-bs-theme="light">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CaliSabi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#historia">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#categorias">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#destacados">Destacados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#restaurantes">Restaurantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">Contacto</a>
        </li>
        <li>
          <button class="btn rounded-fill justify-content-between text-secondary" onclick="cambiarTema()">
           <i class="bi bi-moon"></i>
          </button>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="includes/logout.php">Cerrar sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="header-content" id="historia">
 
    <h1>CaliSabi</h1>
    <h3 class="Nombre">Bienvenido <?php echo $user->getNombre(); ?><h3>
    <p>¡Somos Cali-Sabi! procedentes de "calificacion y sabinos" donde la palabra sabino conlleva
      suma importancia en Pénjamo. 
      Somos tu guía gastronómica en esta encantadora ciudad, donde la diversidad
      culinaria se encuentra en cada esquina. Sumérgete en la experiencia de explorar los sabores
      que esta joya penjamense tiene para ofrecer</p>
    <a href="contenido.php" class="btn-1">Información</a>
</div>


<section class="coffee" id="categorias">
    <div class="coffee-content container">
        <h2>Diferentes lugares en Pénjamo</h2>

        <p class="txt-p">
            Pénjamo es conocido por sus diferentes lugares gastronómicos, donde puedes disfrutar de un buen momento en compañía de tus seres queridos, visitas de negocios, o simplemente disfrutar de los exquisitos platillos.
            ¡Da un vistazo a nuestra Galería de imágenes que tenemos para ofrecerte!
        </p>

        <div class="coffee-group">

            <a href="cafe_page.php" class="coffee-1">
                <img src="public/images/cafe.png" alt="">
                <h3>Cafeterías</h3>
                <p>¡Disfruta de un buen café en....!</p>
            </a>

            <a href="restaurantes_page.php" class="coffee-1">
                <img src="public/images/restaurantee.png" alt="">
                <h3>Restaurantes</h3>
                <p>¡Goza de los exquisitos platillos penjamenses!</p>
            </a>

            <a href="pizzerias_page.php" class="coffee-1">
                <img src="public/images/pizzaa.png" alt="">
                <h3>Pizzerías</h3>
                <p>¡Descubre el auténtico sabor de una pizza!</p>
            </a>
        </div>
    </div>
</section>




    </div>
</section>

<main class="services" id="destacados">
    <div class="services-content container">
        <h2> Platillos más populares</h2>
        <div class="services-group">
            <div class="services-1">
                <img src="public/images/imagenes/casona.jpg" alt="Servicio 1">
                <h3>La casona..</h3>
            </div>

            <div class="services-1">
                <img src="public/images/imagenes/palco.jpg" alt="Servicio 2">
                <h3>El palco...</h3>
            </div>

            <div class="services-1">
                <img src="public/images/imagenes/pardave.jpg" alt="Servicio 3">
                <h3>Cafe pardavé...</h3>
            </div>
        </div>
        <p>
            Experimenta la autenticidad en cada bocado, desde platos tradicionales hasta
            innovadoras creaciones culinarias
        </p>
    </div>
</main>


<section class="general">
  <div class="general-3"></div>
  <div class="general-1">
    <h2>Manolete</h2>
    <p>
    CARRETERA PÉNJAMO LA PIEDAD KILÓMETRO 1, CHURIPITZEO PÉNJAMO.
    </p>
    <?php
$database = new conexion();
$db = $database->open();

try {
    $sql = 'SELECT * FROM Opiniones';
    foreach ($db->query($sql) as $row) { 
        ?>
        <p><?php echo $row['Comentario'];?></p>
        <?php
    }
} catch (PDOException $e) {
    echo "Error en la conexión" . $e->getMessage();
}

$database->close();
?>
   <form action="" method="POST">
    <div class="div1">
    <?php 

    if (isset($_POST['agregar'])) {
        $database = new conexion();
        $db = $database->open();
        $Comentario = $_POST['nombre'];
        try {
            $stmt = $db->prepare("INSERT INTO Opiniones (Comentario) VALUES ('$Comentario')");


            $_SESSION['message']=($stmt ->execute()?'comentario guardado exitosamente':'Algo salio mal');
         
        }
        catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
        echo 'error', $e;
        }
        $database->close();
    }
    ?>
      <label for="" >Agregar un comentario</label>
      <input type="text" id="nombre" name="nombre" class="form-control">
    </div>

    <div class="col-md-12">

      <button type="submit" class="btn btn-primary" name="agregar">Aceptar</button>
    </div>
  </div>
</section>
<section class="blog container" id="blog">
  <h2>Blog</h2>
  <p>"Conoce lugares como..."</p>

  <div class="blog-content">
    <a href="blog_post_1.php" class="blog-1">
      <img src="public/images/restaurante2.jpg" alt="">
      <h3>REMEDIOS RESTAURANTE</h3>
      <p>
        Remedios es un acogedor restaurante que combina la exquisitez de la cocina con un toque de confort y bienestar.
      </p>
    </a>

    <a href="blog_post_2.php" class="blog-1">
      <img src="public/images/pizzeria1.jpeg" alt="">
      <h3>Pizzas Luigi</h3>
      <p>
        Luigi, la pizzería que te transporta directamente a la tradición italiana con cada bocado.
      </p>
    </a>

    <a href="blog_post_3.php" class="blog-1">
      <img src="public/images/lacasona.jpg" alt="">
      <h3>La Casona</h3>
      <p>
      La Casona, un destino culinario excepcional, te invita a sumergirte en una experiencia gastronómica única.
      </p>
    </a>
  </div>
</section>


<footer class="footer" id="contacto">
  <div class="link">
    <h3>Contáctanos</h3>
    <p>Síguenos en nuestras redes sociales:</p>
    <ul class="social-links">
      <li><a href="https://www.facebook.com/TuCuentaDeFacebook" target="_blank"><img src="public/images/imagenes/logof.png" alt="Facebook"></a></li>
      <li><a href="https://twitter.com/TuCuentaDeTwitter" target="_blank"><img src="public/images/imagenes/logox.jpg" alt="Twitter"></a></li>
      <li><a href="https://www.instagram.com/TuCuentaDeInstagram" target="_blank"><img src="public/images/imagenes/logoi.png" alt="Instagram"></a></li>
    </ul>
  </div>
</footer>
    

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./public/js/bootstrap.min.js"></script>


<script src="public/js/bootstrap.min.js"></script>
<script src="funcion.js"></script>
<script>
    function cambiarTema() {
     
        var navbar = document.querySelector('nav.navbar');

        navbar.classList.toggle('dark-mode');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var targetSection = document.getElementById('destacados');

        document.querySelector('a[href="#destacados"]').addEventListener('click', function() {
            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
</script>
</body>
</html>