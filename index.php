<?php
// $id = $_GET['id'];
$id = 'EB-ID5607';

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
    
    // print("<pre>".print_r($resultadoindividual,true)."</pre>");     

    $img = $resultadoindividual['property_images'];



    $op = $resultadoindividual['operations'];
    $op2 = $op[0];
    
    $loc = $resultadoindividual['location'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/alfgow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> 

    <title>Inmobiliaria Villanueva Garcia / <?php echo $resultadoindividual['title'] ?></title>
    
</head>

<main class="main">
    <div class="wrapper">
        <div class="mainContent">
        <img src="<?php echo $img[0]['url'] ?>" alt="<?php echo $img[0]['title'] ?>" title="<?php echo $img[0]['title'] ?>">
        <p class="titleContent"><?php echo $resultadoindividual['title'] ?></p>
        <p class="content">Calle: <?php echo $resultadoindividual['location']['street'] ?> | <?php echo $resultadoindividual['bedrooms'] ?> </p>
        </div>
    </div>
</main>

