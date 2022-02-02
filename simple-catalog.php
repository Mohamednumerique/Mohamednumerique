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
$products = ["oeuf_du_Caucase", "oeuf_Pamyat_Azova"];
foreach($products as $produit)
{
    echo $produit. "<hr>"; 
}
echo "boucle for<br><hr>";
$nombre_produit = count($products);
for ($i= 0; $i < $nombre_produit; $i++ ){
    echo $products[$i]. "<hr>";
}
echo "boucle while<br><hr>";
$q = 0;
while ($q < $nombre_produit )
{
    echo $products[$q]. "<hr>";
    $q++;
}
echo "boucle do while<br><hr>";
$r = 0;
do { 
    echo $products[$r]. "<hr>"; 
    $r++;
}


while($r < $nombre_produit);





?>
<?php
include 'footer.php';
?>