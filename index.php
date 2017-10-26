<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test test test </title>
</head>
<body>

<h1>test </h1>

<?php
include('klasaTestowa.php');
include('product.php');

$imie = new KlasaTestowa ;  // nowy object klasy testowej


echo $imie->funckjaTestowa(); // odwolanie sie do jej metdoy



echo "<br/>";


$typ = new KlasaTestowa;
echo ($typ::Esd); // odwolanie sie do zmiennej const

echo "<br/>";



$rodzajProduktu = new Product;
echo ($rodzajProduktu::Rodzaj);

echo "<br/>";

if ($rodzajProduktu::Rodzaj === $typ::Esd){
    echo 'geniusz';
}else{
    echo 'nie-geniusz ! :)';
}
// odwolanie sie do rozszeroznego obiektu extends



$xxl = new Product;
$xxl->dajRodzaj();
$xxxl = new Product;
echo($xxxl->ustawArg("elo")); // wywolanie funkcji z argumentem
echo "<br/>";

$xxxxl = new Product;
echo "<h1>Na dzisiaj dosc</h1>";
$ostatnie = new KlasaTestowa;
echo ($ostatnie->funckjaTestowa("fajnie"));



?>






</body>
</html>