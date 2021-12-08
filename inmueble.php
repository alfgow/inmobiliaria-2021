<?php
 $id = $_GET['id'];
// $id = 'EB-BQ7210';
$idinmueble = $id;

?>
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


    $operacion = '';

    if ($op2['type'] = 'rental') {
        $operacion = 'Renta';
    } else if ($op2['type'] = 'sale') { 
        $operacion = 'Venta';
    }

//  print("<pre>".print_r($operacion,true)."</pre>");


?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

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

    

    <title><?php echo $resultadoindividual['title'] ?></title>



    <meta property="og:title" content="<?php echo $resultadoindividual['title'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $resultadoindividual['description'] ?>" />
    <meta property="og:url" content="https://villanuevagarcia.com/inmueble?id=<?php echo $id ?>" />
    <meta property="og:image" content="<?php echo $img['0']['url'] ?>" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="810" />
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@inmobiliaria_vq">
    <meta name="twitter:creator" content="@inmobiliaria_vq">
    <meta name="twitter:title" content="<?php echo $resultadoindividual['title'] ?>">
    <meta name="twitter:description" content="<?php echo $resultadoindividual['location']['name'] ?>">
    
</head>

<main class="main">
    <div class="wrapper">
        <div class="mainContent">
            <div class="title">
                <a href="index.php" class="buttonInmueble">
                    
                    <i class='bx bx-arrow-back bx-tada bx-rotate-90' ></i>
                </a>
                <p class="titleContent"><?php echo $resultadoindividual['title'] ?></p>
                
            </div>
            

            <div class="slider">
                <scroll-container class="slider-container">

                    <?php 
                    
                        foreach ($img as $img2){ 

                        $imgurl = $img2['url'];
                        $imgnombre = $img2['title'];
                        
                        
                        $i = ++$i;
                        
                        $id = $i;
                       

                    ?>

                        <scroll-page class="slider-slide">
                                
                                 <img class="rsImg" 
                                 alt="<?php echo $img['title'] ?>" 
                                 title="<?php echo $img['title'] ?>"
                                 src="<?php echo $imgurl ?>" 
                                 id="<?php echo $id?>"                                 
                                 />
                                 
                        </scroll-page>
                                                      
                                      
                    <?php } ?>  
                   
                </scroll-container>
                <div class="slider-bullet-list">

                    <?php 
                        
                        foreach ($img as $img2){ 
                                        
                            
                        $elementoimg = ++$elementoimg;
                            
                        $elemntoid = $elementoimg;
                        

                    ?>

                    
                        
                        <a href="#<?php echo $elemntoid; ?>" class="slider-bullet"></a>
                                                
                    
                    
                    <?php } ?>  
                </div>
            </div> 

            <div class="descripcion">
                <p>
                    <?php echo $resultadoindividual['location']['street'] ?> - 
                    <?php echo $resultadoindividual['location']['name'] ?>
                                            
                </p>
                <p class="operacion">
                    <?php echo $operacion ?> -
                    <?php echo $op2['formatted_amount'] ?> 
                    <?php echo $op2['currency'] ?> 
                </p>
                <p class="content"> 
                    Construcción: <span class="caracteristica"><?php echo $resultadoindividual['construction_size'] ?>m2</span> |
                    Habitaciones: <span class="caracteristica"><?php echo $resultadoindividual['bedrooms'] ?></span> |
                 Baños: <span class="caracteristica"><?php echo $resultadoindividual['bathrooms'] ?></span>  |
                 Estacionamientos: <span class="caracteristica"><?php echo $resultadoindividual['parking_spaces'] ?></span>  |
                 
                </p>
                <div class="desc1">  
                    <h3>Descripción:</h3>
                     <p class="descripcionText"><?php echo $resultadoindividual['description'] ?></p>
                </div>
                <div class="contactoInmueble">  
                    <h3>Contacto:</h3>
                        <a 
                        href="https://api.whatsapp.com/send/?phone=525584438656&text=Hola,+me+interesa+obtener+informaci%C3%B3n+del+inmueble:+https://villanuevagarcia.com/inmueble?id=<?php echo $idinmueble; ?>"
                        target="_blank" >
                            <i class='bx bxl-whatsapp bx-tada' ></i>
                        </a>
                </div>
            </div>                
       
       
        </div>
    </div>
</main>

      

<footer>
  <p>
    &copy; Grupo Veintiuno Cero Cinco Doce S.A. de C.V. 
    <h3>Contacto:</h3>
  </p>
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
</footer>