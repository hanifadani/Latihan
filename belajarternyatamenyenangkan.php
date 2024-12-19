<?php

$str = "Belajar PHP ternyata Menyenangkan";
echo strtolower($str); 
echo "<br>";
echo strtoupper($str); 
echo "<br>";
echo str_ireplace("Menyenangkan", "mudah lho", $str); 

$a = pow(2, 10); 
$b = sqrt(100); 
$c = ceil(4. 25); 
$d = floor(4. 25); 
echo "2 pangkat 10 = $a <br>";
echo "akar 100 = $b <br>";
echo "ceil(4. 25) = $c <br>";
echo "floor(4. 25) = $d <br>";

?>