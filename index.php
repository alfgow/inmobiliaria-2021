<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5FW3ND');</script>
  <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" 
    content="<?php echo $resultadoindividual['title'] ?>">
    <link rel="stylesheet" href="./css/alfgow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="facebook-domain-verification" content="ln8p8i1zhw67a6ayx9y82l9qpvp03s" />
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- FB Cards -->
    <meta property="og:title" content="Inmobiliaria Villanueva García" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Somos profesionales en Bienes Raíces. Rentas? Vendes? Somos tu mejor elección!" />
    <meta property="og:url" content="https://villanuevagarcia.com/" />
    <meta property="og:image" content="https://villanuevagarcia.com/img/imgTweetCard.jpg" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="810" />
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@inmobiliaria_vq">
    <meta name="twitter:creator" content="@inmobiliaria_vq">
    <meta name="twitter:title" content="Inmobiliaria Villanueva García">
    <meta name="twitter:description" content="Somos profesionales en Bienes Raíces. Rentas? Vendes? Somos tu mejor elección!">
    
    <title>Villanueva García</title>
    
    
    
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FW3ND"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<main class="main">
    <div class="wrapper">

        <div class="header">
            <img class="imagenencabezado" src="./img/logoCircular.jpg">
        </div>

          <!--/ Nav Star /-->
          <nav class="navbar">
            <div class="container">
              
              
              
        
              
              <div class="navMenu">
                <ul class="navMenuItems">
                  <li class="navItem">
                    <a class="nav-link" href="index.php">Propiedades</a>
                  </li>
                      <span>/</span>
                  <li class="navItem">
                    <a class="nav-link contactoInmueble" href="https://api.whatsapp.com/send/?phone=525584438656" target="_blank"><i class='bx bxl-whatsapp bx-tada' ></i></a>
                  </li>
                      <span>/</span>
                  <li class="navItem">
                    <a class="nav-link" href="https://www.arrendamientoseguro.com/" target="_blank">Arrendamiento Seguro</a>
                  </li>

                </ul>
              </div>
      
            </div>
          </nav>
          <!--/ Nav End /-->
        <div class="mainContent">

        <div class="tipoOperacion">

<h2>Inmuebles Disponibles en Venta</h2>

</div>

<div class="gridCard">

  <?php
  $url = 'https://api.easybroker.com/v1/properties?search%5Boperation_type%5D=sale&search%5Bstatuses%5D%5B%5D=published';
  $curl = curl_init();
      // OPTIONS:
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
  ));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  // EXECUTE:
  $uno = curl_exec($curl);
  //Desmarañando
  $resultado = json_decode($uno, true);
  $entrando = $resultado["content"];

    foreach ($entrando as $propiedades){ 

      $id = $propiedades['public_id'];

      $url2 = "https://api.easybroker.com/v1/properties/".$id;
      $curl2 = curl_init();
          // OPTIONS:
      curl_setopt($curl2, CURLOPT_URL, $url2);
      curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
      'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
      ));
      curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE:
      $dos = curl_exec($curl2);
      //Desmarañando
      $resultadoindividual = json_decode($dos, true);

      $op = $resultadoindividual['operations'];
      $op2 = $op[0];
    ?>

        <div class="card">
          <div class="cardContent">

            <h3 class='cardTitle'>
                Colonia: <?php echo $propiedades['location']; ?>
                <?php echo $op2['formatted_amount'];?>&nbsp;<?php echo $op2['currency'];?>
            </h3>

            <?php
                $url2 = "https://api.easybroker.com/v1/properties/".$id;
                $curl2 = curl_init();
                    // OPTIONS:
                curl_setopt($curl2, CURLOPT_URL, $url2);
                curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
                'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
                ));
                curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                // EXECUTE:
                $dos = curl_exec($curl2);
                //Desmarañando
                $resultadoindividual = json_decode($dos, true);



                $img = $resultadoindividual['property_images'];


                $i = 0; 
                $elementoimg = 0;

                $op = $resultadoindividual['operations'];
                $op2 = $op[0];

                $loc = $resultadoindividual['location'];

            ?>

            <scroll-container class="slider-container" id="indexSlider">
              
              <?php 
                  foreach ($img as $img2){ 

                    $imgurl = $img2['url'];
                    $imgnombre = $img2['title'];

              ?>

                <scroll-page class="slider-slide">
                  
                        <img class="rsImg" 
                        alt="<?php echo $propiedades['location']; ?>" 
                        title="<?php echo $propiedades['location']; ?>"
                        src="<?php echo $imgurl ?>" 
                        id="<?php echo $id?>"                                 
                        />
                  
                </scroll-page>
                                        
                        
            <?php } ?>  

            </scroll-container>                         

            <div class="cardBody">

              <a href="inmueble?id=<?php echo $id; ?>" class="linkButton">
                <input type="submit" value="Ver detalles" class="buttonIndex"> 
              </a>
                
            </div>

          </div>
        </div>

    <?php } ?>

</div>                         



            <div class="tipoOperacion">

                <h2>Inmuebles Disponibles en Renta</h2>
                
            </div>

            <div class="gridCard">
                
              <?php
                $url = 'https://api.easybroker.com/v1/properties?search%5Boperation_type%5D=rental&search%5Bstatuses%5D%5B%5D=published';
                $curl = curl_init();
                    // OPTIONS:
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                  'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
                ));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                // EXECUTE:
                $uno = curl_exec($curl);
                //Desmarañando
                $resultado = json_decode($uno, true);
                $entrando = $resultado["content"];

    

                foreach ($entrando as $propiedadesRenta){ 

                  $id = $propiedadesRenta['public_id'];

                  $url2 = "https://api.easybroker.com/v1/properties/".$id;
                  $curl2 = curl_init();
                      // OPTIONS:
                  curl_setopt($curl2, CURLOPT_URL, $url2);
                  curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
                  'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
                  ));
                  curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($curl2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                  // EXECUTE:
                  $dos = curl_exec($curl2);
                  //Desmarañando
                  $resultadoindividual = json_decode($dos, true);

                  $op = $resultadoindividual['operations'];
                  $op2 = $op[0];
              ?>

                      <div class="card">
                        <div class="cardContent">

                          <h3 class='cardTitle'>
                              Colonia: <?php echo $propiedadesRenta['location']; ?>
                              <?php echo $op2['formatted_amount'];?>&nbsp;<?php echo $op2['currency'];?>
                          </h3>

                          <?php
                              $url2 = "https://api.easybroker.com/v1/properties/".$id;
                              $curl2 = curl_init();
                                  // OPTIONS:
                              curl_setopt($curl2, CURLOPT_URL, $url2);
                              curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
                              'X-Authorization: vc7t7o5uopriecledy5mrsd7qb3nml'
                              ));
                              curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
                              curl_setopt($curl2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                              // EXECUTE:
                              $dos = curl_exec($curl2);
                              //Desmarañando
                              $resultadoindividual = json_decode($dos, true);
      
          

                              $img = $resultadoindividual['property_images'];

      
                              $i = 0; 
                              $elementoimg = 0;

                              $op = $resultadoindividual['operations'];
                              $op2 = $op[0];
      
                              $loc = $resultadoindividual['location'];

                          ?>

                          <scroll-container class="slider-container" id="indexSlider">
                          
                            <?php 
                                foreach ($img as $img2){ 

                                  $imgurl = $img2['url'];
                                  $imgnombre = $img2['title'];

                            ?>

                              <scroll-page class="slider-slide">
                              
                                      <img class="rsImg" 
                                      alt="<?php echo $propiedadesRenta['location']; ?>" 
                                      title="<?php echo $propiedadesRenta['location']; ?>"
                                      src="<?php echo $imgurl ?>" 
                                      id="<?php echo $id?>"                                 
                                      />
                              
                              </scroll-page>
                                                    
                                    
                          <?php } ?>  

                          </scroll-container>                         

                          <div class="cardBody">

                            <a href="inmueble?id=<?php echo $id; ?>" class="linkButton">
                              <input type="submit" value="Ver detalles" class="buttonIndex"> 
                            </a>
                            
                          </div>

                        </div>
                      </div>
       




                  <?php } ?>
            
            </div>

            

        </div>
</main>

</body>     


<footer>
  <p>
    &copy; Grupo Veintiuno Cero Cinco Doce S.A. de C.V. 
  </p>
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
</footer>
