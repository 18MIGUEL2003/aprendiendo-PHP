<?php
function countVowels($string){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    foreach ($vowels as $vowel) {
        $count += substr_count($string,$vowel);
    }
    return $count;
}

$text = "Miguel.";
$vowelCount = countVowels($text);
echo "El número de vocales es: " . $vowelCount;
?>
