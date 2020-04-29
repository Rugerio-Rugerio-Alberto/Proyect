<html>

  <html lang="es">

<head>
  <meta charset="UTF-8">
  <title> Aplicacion Web </title>
  <link rel="stylesheet" type="text/css" href="CSS/estilo(1).css">
  
  <style type="text/css">
  
    html {
    font-size:100%; 
    }

    body {
      font-family: 'Open Sans', sans-serif;
      color: white;
      line-height: 1.6;
    }

    .img-responsive {
        max-width: 100%;
        height: auto;
        display: block;
    }

    h2 {
        text-align: center;
        font-family: "Oswald", sans;
        font-size: 4rem;
        font-weight: normal;
        line-height: 3.5rem;
        color: white;
    }

    h3 {
        font-size: 1.35rem;
        line-height: 2rem;
        text-transform: uppercase;
        letter-spacing: 1px; 
    }

    .cont {
        margin: 0 auto;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url(http://localhost/Proyect/img/l.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .item {
        padding: 0 30px 0 30px;
        text-align: center;
    }

    .btn {
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 1rem;  
        display: inline-block;
        line-height: 1.25rem;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: .75rem 1.25rem;
        font-size: 1rem;
        border-radius: .25rem;
        transition: all .2s ease-in-out;
  
    }

    .btn-primary:hover {
        color: yellow;
        background-color: yellow;
        border-color: #666;
    }


    @media (min-width: 992px) {
        .item {
            width:80%;
        } 
    }


    @media (min-width: 1200px) {
        .item {
            width:60%;
        }
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
        color: darken(main, 40);
        font-size: -4px;
        font-family: 'lust-display-didone', serif;
    }

    h3 {
        color: darken(main, 40);
        font-size: 25px;
        line-height: 10px;
        text-transform: uppercase;
        font-weight: 300;
        font-family: 'futura-pt', serif;
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
  
    <div class="cont">
        <div class="item">
            <h3>¡Los mejores Articulos!</h3>
            <h2>DIDACTIC WORLD</h2>
            
            <button class="btn btn-primary"><a href="Inicio.php">Inicio</a></button>
            
        </div>
    </div>
    <br><br>

    <div id="container">
        <h1>&bull; !Realiza tu Compra! &bull;</h1>

        <div class="underline"></div>

        <div class="icon_wrapper">
                <img src="img\descarga.png" alt="Logo principal">
        </div>

      <form action="Car-re.php" method="Post" id="contact_form">
    
        <div class="name">
            <label for="name"></label>
            <input type="text" placeholder="My name is" name="name" id="name_input" required>
        </div>

        <div class="email">
            <label for="email"></label>
            <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
        </div>

        <div class="telephone">
            <label for="name"></label>
            <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
        </div>

        <div class="subject">
            <label for="subject"></label>
            <select placeholder="Subject line" name="subject" id="subject_input" required>
                <option disabled hidden selected>Online Products</option>
                <option>Block cuadriculado</option>
                <option>Marcador borrable</option>
                <option>Cosedora</option>
                <option>Perforadora 2 huecos</option>
                <option>Pegante en barra</option>
                <option>Resaltador</option>
                <option>Cinta trasparente</option>
                <option>Gancho Legajador</option>
                <option>Resmas</option>
                <option>Lápiz</option>
                <option>Libreta Profesional</option>
                <option>Tijeras</option>
                <option>Corrector</option>
                <option>Notas adhesivas</option>
                <option>Esfero negro</option>
                <option>Marcador Sharpie</option>
                <option>Saca ganchos</option>
                <option>Borrador tablero</option>
                <option>Cinta enmascarar</option>
                <option>Carpeta rebajadora</option>
                <option>Gancho cosedor</option>
            </select>
        </div>

        <div class="name">
            <label for="name"></label>
            <input type="text" placeholder="Products" name="num" id="name_input" required>
        </div>

        <div class="email">
            <label for="email"></label>
            <input type="text" placeholder="Postal Code" name="postal" id="email_input" required>
        </div>


        <div class="telephone">
            <label for="name"></label>
            <input type="text" placeholder="Address" name="direccion" id="telephone_input" required>
        </div>

        <div class="message">
            <label for="message"></label>
            <textarea name="message" placeholder=" Message" id="message_input" cols="30" rows="5" required></textarea>
        </div>
        
        <div class="submit">
            <input type="submit" value="Send Message" id="form_button" name="register" />
        </div>
       </form>

        <?php 
             include("Car-re.php");
        ?>

    </div>

    <main>

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
