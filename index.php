<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

// Exercice 1

$mois=array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');


echo "<br>exercice 2<br><br>";

echo $mois[2];

echo "<br><br> exercice 3 <br><br>";

echo $mois[5];

echo "<br><br> exercice 4 <br><br>";

$mois[7] = "août";
echo $mois[7];


echo "<br><br> exercice 5 <br><br>";

$departement = array(
  "9"=>"Ariège" ,
"11"=>"Aude",
"12"=>"Aveyron",
"30"=>"Gard",
"31"=>"Haute-Garonne" ,
"32"=>"Gers",
"46"=>"Lot",
"32"=>"Gers" ,
"34"=>"Hérault",
"46"=>"Lot",
"48"=>"Lozère" ,
"65"=>"Haute-Pyrénées" ,
"66"=>"Pyrénées-orientales" ,
"81"=>"Tarn",
"82"=>"Tarn-et-garonne" ,
);

echo "<br><br> exercice 6 <br><br>";

echo($departement[30]);

echo "<br><br> exercice 7 <br><br>";



echo "<br><br> exercice 8 <br><br>";

foreach ($mois as $value) {
  echo "<br>".$value;
}

echo "<br><br> exercice 9 <br><br>";

foreach ($departement as $value) {
  echo "<br>".$value;
}

echo "<br><br> exercice 10 <br><br>";

print_r($departement);





 ?>
  </body>
</html>
