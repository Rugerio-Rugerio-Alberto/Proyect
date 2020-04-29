
<html>
  <html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Aplicacion Web </title>
    <link rel="stylesheet" type="text/css" href="CSS/Style(1).css">

    <style type="text/css">

    h2 {
	font-size:16px;
	color:white;
	line-height:28px;
	letter-spacing:.5px;
	max-width:715px;
	display:inline-block;		
}

h3{
    font-size:16px;
	color:white;
	line-height:28px;
	letter-spacing:.5px;
	max-width:715px;
	display:inline-block;
}


    @keyframes move-twink-back {
        from {background-position:0 0;}
        to {background-position:-100000px 50000px;}
    }

    .twinkling {
        position: absolute;
        height: 100%;
        width: 100%;
        background: transparent url(http://localhost/Proyect/img/pu.jpg) repeat top center;
        z-index:1;
         animation: move-twink-back 400s linear infinite;
    }

    h1 {
        color: white;
       
    }

    h3 {
        color: white;
    }

    
    hr {
        width: 100px;
        margin: 0.5em auto 1em;
        border: none;
        height: 2px;
        background: white;
    }
    
    p {
        font-size: 12px;
        line-height: 15px;
        font-family: 'futura-pt', sans-serif;
        font-style: italic;
        font-weight: 300; 
    }


    footer {
        position: relative;
        z-index: 3;
        text-align: center;
        color: white;
        padding: 12em 0 5em;
    }

    </style>
</head>

<body>

    <header>
        <h1>¡La mejor opción para ti!</h1>
        <nav>
            <a href="Inicio.php">Inicio</a>
            <a href="Didactics.php">Didactico</a>
            <a href="Oficina.php">Oficina</a>
            <a href="Cotizacion.php"> Cotización </a>
            <a href="Carrito.php"> Comprar </a>
            <div class="animation start-home"></div>
        </nav>
    </header>


    <main class="seccion contenedor">
    
    <div>


    </div>

    <div class="gusto"><br><br>
            <h2 class="gust">Nuestros Servicios</h2><br>
            <h3>Didactic World es una Tienda Online que orece lo mejores servicios de Papeleria y las mejores ofertas.</h3>
            
            <br><br><h2>Proposito:</h2><br>
            <h3>Esa aplicación web esta dirigida a todo el publico en general, desde alumnos de todos los grados académicos hasta docentes o padres de familia, por lo que los clientes podrán visualizar los productos con los que cuenta la tienda, tanto físicamente como de manera online, los mejores precios, como también las mejores ofertas, los productos me mejor calidad, así mismo de las diferentes marcas con las que cuenta el producto.</h3>
            <a class="uy">
                <img  src = "img\papeleria-barata.jpg " alt = " Logo principal " style="margin: -300px 10px 50px 80px; float: right; ">>
            </a >
            <br><br><br>
    </div>


    <br><br>
    <div class="twinkling"></div>
    <footer>
      <h1>---------</h1>
      <h3>Gracias por visitarnos</h3><br>
      <hr />
      <p>
       "Didactic World<br>
        La papeleria ´de alta Calidad<br>
      </p>
    </footer>
        
    </main>

</body>
</html>









































