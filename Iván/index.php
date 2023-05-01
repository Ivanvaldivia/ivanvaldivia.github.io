<!DOCTYPE html>
<html lang="es">

<head>

  <title>Rosana Mesa - Ilustradora</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Rosana Mesa">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/extras_bootstrap.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />-->
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

<!--  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <!-- <meta name="theme-color" content="#ffffff">
  <!-- Theme CSS
  <link href="css/creative.css" rel="stylesheet">-->

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top scrolling-navbar">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Rosana Mesa</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link page-scroll" href="libros.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="projectos.php">Arte visual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="bio.php">Bio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#contacto">Contact</a>
        </li>

      </ul>
    </div>
  </nav>

  <br><br><br>
  <section id="news" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="card">
            <img src="imagenes/elementos/Amarilla_mortecina.jpg" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card border-light">
            <div class="card-body">
              <h4 class="card-title">Amarilla mortecina</h4>
              <p class="card-text">
                <?php
                  $ficha = "Mixta sobre papel<br>70 x 95 cm<br>2012";
                  print nl2br($ficha); //Pone saltos de línea
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<br>
<br>
<br>
  <section id="contacto" class="bg-primary bg-light">
    <div class="container">
      <div class="row justify-content-md-center text-center">
        <div class="col-sm-12">
          <a class="text-faded" href="mailto:contacto@rosanamesa.com" target="_blank">
            <i class="fa fa-envelope-o sr-contact"></i>
          </a>&nbsp;&nbsp;&nbsp;
          <a class="text-faded" href="https://www.facebook.com/rosana" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>&nbsp;&nbsp;&nbsp;
          <a class="text-faded" href="https://www.instagram.com/rosanamesa.ilustradora" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
        <div class="col-sm-12">
          <span class="fa fa-copyright text-muted" >&nbsp;&nbsp;Rosana Mesa 2020</span>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250);
        event.preventDefault();
    });

  </script>

</body>

</html>
