<?php
$prime = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prime = filter_var($_POST['prime'], FILTER_SANITIZE_STRING);
}

if (!is_int( (int) $prime) && ( (int) $prime <= 0)) {
   
    echo "Not a integer number or lower than 1"; 
    return 0;
}

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

echo "<section>";
if (isPrime($prime)){
    echo $prime . " is a prime number";
} else {
    echo $prime . " is NOT a prime number";
}

echo "</section>";