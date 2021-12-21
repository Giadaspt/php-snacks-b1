<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
function getRandom($min, $max, $numb){

  $arr = [];

  if($min>$max){
    $numbMin = $min;
    $min = $max;
    $max = $numbMin;
  };

  if(($max-$min) < $numb){
    $numb = $max - $min;
  };

  while(count($arr) < $numb){
    $random = rand($min, $max);
    if(!in_array($random, $arr)){
      $arr[] = $random;
    };
  };

  return $arr;

}

?>