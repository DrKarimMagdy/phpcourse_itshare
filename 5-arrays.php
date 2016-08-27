<?php

$salaries = array(12,15,17);
print_r($salaries);
echo $salaries[0];?> </br>

<?php
$names = array("Ali","Ahmed","Omar");
print_r($names);
echo $names[0]."</br>";

$hetro = array(21,"Ahmed",12.5,true);
print_r($hetro);
echo $hetro[2]."</br>";


$mix  = array(12,"ahmed",array(15,"Waled"));
print_r($mix);
echo $mix[1]."</br>";
echo $mix[2][1]."</br>";


?>