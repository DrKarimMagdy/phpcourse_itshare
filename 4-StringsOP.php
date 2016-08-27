<?php
$greating  = " Hello";
$country =  " Egypt" ;

echo "Lower".strtolower($greating)."</br>";
echo "Upper".strtoupper($greating)."</br>";
echo "Characters :".strlen($greating)."</br>";
echo "Replacing :".str_replace('H','K',$greating)."</br>";
$str = $greating." ".$country ;
echo "Trim :".trim($str)."</br>";

$resord = "Karim Magdy,02215478-25,50000$";

$pieces = explode(", ", $resord);
print_r($pieces);

?>