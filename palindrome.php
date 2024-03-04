<?php
$raw_string = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $raw_string = filter_var($_POST['word'], FILTER_SANITIZE_STRING);
}

function palindrome($word){
    for ($i = 0; $i < floor(strlen($word) / 2); $i++) {
        if ($word[$i] !== $word[strlen($word) - $i - 1]) {
            return false;
        }
    }    
    return true;
}

echo '<section>';
$result = palindrome($raw_string);
if ($result) {
    echo $raw_string . ' is a palindrome';
}else{
    echo $raw_string . ' is NOT a palindrome';
}

echo '</section>';