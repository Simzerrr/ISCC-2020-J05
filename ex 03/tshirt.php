<?php
$nomproduit="T-shirt simple";
$couleur="Blanc";
$prix= 10.50;
$disponible="true";
$quantité= 10;

echo "<h3>".$nomproduit . "</h3>";
echo "<p> Le nom du produit est .$nomproduit .</p>";
echo "<p> Il reste .$quantité." "produits en stock </p>";
echo "<p> Le produit t-shirt simple est de couleur" . $couleur. "</p>";

echo "<h4>" .$nomproduit. "</h4>";
echo "<h4> Acheter 3 produits coûterait" . $prix* 3 . "</p>";
echo "<p> Acheter la totalité des produits disponibles coûterait" . $prix* $quantite . "</p>";
echo "<p> Si 3 produits sont vendus alors il reste" . ($quantite - 3) . "</p>";

if($disponible= true) {
    echo "Le produit" .$nomproduit. "est disponible en ligne";
}
if($disponible= false) {
    echo "<p> Le produit" .$nomproduit. "n'est malheureusement plus disponible </p>";
}
if($quantité > 5) {  
    echo "<p> Il reste " .$quantité. "produits en magasin </p>";
}
if($quantité < 5) {
    echo "<p> Il ne reste que " .$quantité. "produits en magasin </p>";
}
?>