
<?php
$products = [
    "oeuf" => [
    "name" => "oeuf_Pamyat_Azova",
    "price" => 1000000,
    "weight" => 125,
    "discount" => null,
    "picture_url" => "https://brocantemeg-antique.com/attachments/Image/232482.png?template=generic"
    ],
    "oeuf_du_Caucase" => [
    "name" => "oeuf_du_Caucase",
    "price" => 1500000,
    "weight" => 105,
    "discount" => null,
    "picture_url" => "https://cdn-apple.com/ipad.jpg"],
    ];
    

    foreach($products as $produit => $caractéristique ){

echo $produit . "<br>";

        foreach($caractéristique as $carat => $valeur){
            echo $carat. " : " . $valeur."<br>";
        
        }
                echo "<br>";
    }


    ?>