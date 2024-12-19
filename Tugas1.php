<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 20; $i++) {
    $type = "";

    if ($i % 2 == 0) {
        $type .= "genap";
    } else {
        $type .= "ganjil";
    }

    if (isPrime($i)) {
        $type .= " dan sekaligus bilangan prima";
    }

    echo "Angka $i adalah bilangan $type.<br>";
}
?>