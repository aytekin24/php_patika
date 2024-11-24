<?php
  $planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Uranus', 'Neptune', '', '', NULL];

function test($planets)
{
  $deger=rand(2,6);
  $temiz = array_filter($planets);
  $b = array_rand($temiz,$deger);
    for ($i = 0; $i < count($b); $i++) {
      $dizi[] = $temiz[$b[$i]];
    }
    $arr[]=$dizi;
    function dongu($arr){
      echo '<pre>';
      print_r($arr);
      echo '</pre>';
    }
    array_map('dongu' ,$arr);
}
test($planets);



