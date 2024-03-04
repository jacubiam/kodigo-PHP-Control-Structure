<?php
$length = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $length = filter_var($_POST['length'], FILTER_SANITIZE_STRING);
}

if (!is_int( (int) $length) && ( (int) $length <= 0)) {
   
    echo "Not a integer number or lower than 1"; 
    return 1;
}

function fibonacci($n)
{
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    while ($counter < $n) {
        echo ' ' . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter++;
    }
}

echo "<section>";
echo "The firsts " . $length . " fibonacci terms are:" . "<br/>";
fibonacci($length);
echo "</section>";