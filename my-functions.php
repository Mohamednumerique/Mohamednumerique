<!-- AFFICHAGE DU PRIX EN EURO -->
<?php
function formatPrice($prix_centime){
$prix_euro = $prix_centime / 100;
return $prix_euro;

}

echo formatPrice(100000000). " €" ;

priceExcludingVAT($tva,$ttc){

}