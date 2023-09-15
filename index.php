<?php
//arrays and loops
$jerrican = [
 ['naam' => 'mairo' , 'gender' => 'male', 'employment' => 'cashier', 'income' => 2400, 'city' => 'Almere', 'hobby' => 'slapen', 'telefoonnummr' => '04559305', 'donor' => 'nee', 'schoonmaat' => 43, 'intereses' => 'females'],
 ['naam' => 'rick' , 'gender' => 'male', 'employment' => 'unemployed', 'income' => 0, 'city' => 'Almere', 'hobby' => 'coderen', 'telefoonnummr' => '85059845', 'donor' => 'nee', 'schoonmaat' => 41, 'intereses' => 'females'],
 ['naam' => 'rick' , 'gender' => 'male', 'employment' => 'unemployed', 'income' => 0, 'city' => 'Almere', 'hobby' => 'eten', 'telefoonnummr' => '646294623', 'donor' => 'nee', 'schoonmaat' => 39, 'intereses' => 'females']];

foreach($jerrican as $key ) {
 foreach ($key as $cb => $c) {
     echo "$cb  $c<br>";
 }
    for ($i = 64; $i <= 74; $i+= 2){
        echo $i;
    }
 echo "<hr>";
}

