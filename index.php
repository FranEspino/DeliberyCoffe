
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/e3cac9ba50.js" crossorigin="anonymous"></script>
    <title>Delibery Coffe</title>

</head>
<body> 

<header class="Header">
  <nav class="Logo">

    <h2><a href="#">GoodCoffe</a></h2>
  </nav>

  <nav class="Navigator">

      <span style="font-size: 1.2em; color: #000;">
      <a href="#Somos" style='text-decoration:none;color:black; outline-style: none;' >
          <i class="fas fa-users"></i>
          <p>Sobre nosotros</p>
      </a>
      </span>


        <span style="font-size: 1.2em; color: #000;">
            
        <a href="#Pedidos" style='text-decoration:none;color:black; outline-style: none;' >
        <i class="fas fa-coffee"></i>
            <p>Pide tu café</p>
            </a>
        </span>


      <span style="font-size: 1.2em; color: #000;">
      <a href="#Estab" style='text-decoration:none;color:black; outline-style: none;' >
      <i class="fas fa-store"></i>
          <p>Puntos de venta</p>
            </a>
      </span>
  
    
    

      <span id="session" style="font-size: 1.2em; color: #000;">

          <i class="fas fa-user"></i>
          <p>Inicia Sesión</p>
      </span>


     
  
  </nav>


  <nav class="Menu"> 
    <label for="menu-check">
        <span style="font-size: 2em; color: #000;">
            <i class="fas fa-bars"></i>
        </span>
    </label>
  </nav>



</header>

<input type="checkbox" id="menu-check">

<div class="Menu-movil">

     <span style="font-size: 1.2em; color: #000;">
      <a href="#Somos" style='text-decoration:none;color:black; outline-style: none;' >
          <i class="fas fa-users"></i>
          <p>Sobre nosotros</p>
      </a>
      </span>

        <span style="font-size: 1.2em; color: #000;">     
        <a href="#Pedidos" style='text-decoration:none;color:black; outline-style: none;' >
        <i class="fas fa-coffee"></i>
            <p>Pide tu café</p>
         </a>
        </span>

      <span style="font-size: 1.2em; color: #000;">
      <a href="#Estab" style='text-decoration:none;color:black; outline-style: none;' >
      <i class="fas fa-store"></i>
          <p>Puntos de venta</p>
       </a>
      </span>

</div>


<nav class="Carrusel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
          <img src="img/slider1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h5>Inicia el día con Good Coffe</h5>
            <p>El mejor café de tu ciudad con solo un click.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="5000" >
          <img src="img/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>
        <div class="carousel-item" data-interval="5000">
          <img src="img/slider3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>


      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</nav>
<h2 class="title-h2">Pedidos</h2>

<nav class="Presentation" id="Pedidos" >
  
  <div class="card" style="width: 18rem;">
      <img src="img/card1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Capuccino</h5>
        <p class="card-text">Café con leche echo en casa de manera tradicional, puede servirse caliente o helado.</p>
       <form action="backend/pedidos.php" method="post">
       <input type="hidden" name="pedido" value="Capuccino" />
       <input type="submit" value="Pedir" id="sub" class="btn btn-primary"> 
       <label for="sub">
         <a href="backend/pedidos.php" ></a>
       </label>
      </form>
      </div>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
      <img src="img/card2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Café con Chocolate</h5>
        <p class="card-text">Añade ingredientes y disfruta de una perfecta combinación para disfrutar por las mañanas.</p>
        <form action="backend/pedidos.php" method="post">
        <input type="hidden" name="pedido" value="Café con chocolate" />
       <input type="submit" value="Pedir" id="sub" class="btn btn-primary"> 
       <label for="sub">
         <a href="backend/pedidos.php" ></a>
       </label>
       </form>
      </div>
    </div>
  </div>


  <div class="card" style="width: 18rem;">
      <img src="img/card3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Café vainilla</h5>
        <p class="card-text">Una café perfecto para empezar tus mañanas con la mejor energía, simplemente exquisito.</p>
        <form action="backend/pedidos.php" method="post">
        <input type="hidden" name="pedido" value="Café de vainilla" />
       <input type="submit" value="Pedir" id="sub" class="btn btn-primary"> 
       <label for="sub">
         <a href="backend/pedidos.php" ></a>
       </label>
        </form>
      </div>
    </div>
  </div>
        

</nav>


<div class="Banner1" id="Somos">
<img src="img/banner1.jpg" class="rounded float-left" >
<nav class="Info">
<h2>¿Quienes somos?</h2>
<p>Somos unos jóvenes emprendedores que ofrecemos un servicio único, llevarte el café al lugar donde te encuentres mediante esta pagina web, cada día al adquirir nuestro producto recibirás una frase motivadora en papel reciclado.</p>
<button type="button" class="btn btn-outline-secondary">Leer más</button></nav>
</div>

<h2 class="title-h2">Establecimientos</h2>

<div class="Establecimientos" id="Estab" >
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.119126655728!2d-79.43184434981109!3d-7.227250994757055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904d3380bde312bd%3A0xfa430c02631910fe!2sPlaza%20De%20Armas%20De%20Chepen!5e0!3m2!1ses-419!2spe!4v1582560523606!5m2!1ses-419!2spe" width="350" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <div >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9791696286493!2d-79.47249464981098!3d-7.243209394745749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904d341d882e2a97%3A0x5a9e6191703a50ed!2sPlaza%20de%20Armas%20de%20Guadalupe!5e0!3m2!1ses-419!2spe!4v1582560849865!5m2!1ses-419!2spe" width="350" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
 </div>

 



 <h2 class="title-h2">Buscanos en</h2>
<footer class="Fotter" id="Fotter">
          
          <span style="font-size: 2.5em; color: #000;">
          <i class="fab fa-facebook-square"></i>
          </span>
          <span style="font-size: 2.5em; color: #000;">
          <i class="fab fa-instagram-square"></i>
          </span>
</footer> 





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>





