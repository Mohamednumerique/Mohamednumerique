<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta names="desciption" content="Catalogues des diférents continents et pays où se trouvent des activités.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produit.css">
</head>
<body>
<?php    
include 'header.php';
?>
<?php
$products = [
    "oeuf_Pamyat_Azova" => [
    "name" => "oeuf_Pamyat_Azova",
    "price" => 1000000,
    "weight" => 125,
    "discount" => 0,
    "picture_url" => "https://brocantemeg-antique.com/attachments/Image/232482.png?template=generic"
    ],
    "oeuf_du_Caucase" => [
    "name" => "oeuf_du_Caucase",
    "price" => 1500000,
    "weight" => 105,
    "discount" => 0,
    "picture_url" => "https://i.pinimg.com/originals/7b/6f/01/7b6f010e72fff116bf56628f82e02586.jpg"],
    ];
    

    foreach($products as $produit => $caractéristique ){
        echo "<br>";
        echo "<hr>";
     foreach($caractéristique as $carat => $valeur){
        echo "<h2>";
        echo $carat. " = " .$valeur;
        echo "</h2>";
        
        
        } if ($produit === "oeuf_Pamyat_Azova" ){
            echo "<img src=" . $products["oeuf_Pamyat_Azova"]["picture_url"] . " alt=" . "oeuf Pamyat Azova" .">";
        } elseif($produit === "oeuf_du_Caucase"){
            echo "<img src=" . $products["oeuf_du_Caucase"]["picture_url"] . " alt=" . "oeuf Pamyat Azova" .">";
        }

        
    };
?>
<?php
include 'footer.php';
?>
