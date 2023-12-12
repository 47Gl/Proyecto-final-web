<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #fff;
        }

        header,
        #contenido,
        article,
        footer {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        body.loaded header,
        body.loaded #contenido,
        body.loaded article,
        body.loaded footer {
            opacity: 1;
            transform: translateY(0);
        }

        header {
            text-align: center;
            background-image: url('imagenes/PENJAMO 2.jpg');
            background-size: cover;
            background-position: center;
            color: #2c3e50;
            padding: 50px;
            font-size: 50px;
        }

        article {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        section {
            margin: 20px;
        }

        .contenedor-con-imagen {
            background-image: url('imagenes/mesa.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            background-color: #E0B5A7;
            color: #fff;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>CALISABI</h1>
    </header>
    
    <section id="contenido">
        <div class="contenedor-con-imagen">
            <article>
                <h2>Historia de la Página</h2>
                
               
  <p>
                Bienvenidos a la fascinante historia de Cali-Sabi, una fusión vibrante y deliciosa nacida en las raíces de Pénjamo. El nombre "Cali-Sabi" encuentra su origen en la combinación armoniosa de "calificación y sabinos", dos elementos que poseen una importancia significativa en la rica herencia de esta encantadora ciudad.
            </p>
            <p>
                En el corazón de Pénjamo, la palabra "sabino" lleva consigo una carga emocional y cultural que trasciende generaciones. Representa no solo un árbol majestuoso que ha presenciado el devenir del tiempo, sino también la esencia misma de la comunidad, arraigada en tradiciones arraigadas y valores compartidos.
            </p>
            <p>
                Cali-Sabi se alza como tu guía gastronómica en este rincón mágico de México, donde la diversidad culinaria se despliega en cada esquina de las animadas calles. Nuestro compromiso es llevar a todos los visitantes a un viaje culinario inolvidable, explorando los auténticos sabores que esta joya penjamense tiene para ofrecer.
            </p>
            <p>
                Imagina pasear por las coloridas calles empedradas, rodeado de la arquitectura histórica que cuenta historias de tiempos pasados. En cada rincón, Cali-Sabi te invita a sumergirte en una experiencia culinaria única, donde los aromas tentadores te guían hacia auténticos tesoros gastronómicos.
            </p>
            <p>
                Desde los puestos callejeros que despiertan tus sentidos con el sabor ahumado de las delicias locales hasta los restaurantes acogedores que sirven platos tradicionales con un toque moderno, Cali-Sabi es la clave para descubrir los secretos culinarios mejor guardados de Pénjamo.
            </p>
            <p>
                En nuestro viaje gastronómico, encontrarás la fusión perfecta de sabores, donde la tradición se encuentra con la innovación. Los sabores frescos de la tierra se entrelazan con técnicas culinarias creativas, creando una sinfonía de experiencias que deleitarán tu paladar y te conectarán con la riqueza cultural de la región.
            </p>
            <p>
                Únete a nosotros en Cali-Sabi, donde cada comida es una celebración, cada bocado es una conexión con la historia y cada visita es una experiencia inolvidable. ¡Descubre Pénjamo a través de sus sabores con nosotros!
            </p>

            </article>
        </div>
    </section>


    <footer>
        <p>&copy; <?php echo date("Y"); ?> CALISABI - Explorando Ideas</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
