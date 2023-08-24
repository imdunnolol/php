//https://codeforces.com/problemset/problem/71/A?locale=en
<?php
$array = array(
    5,
    "union",
    "localization",
    "internationalization",
    "internationalizatdsafasdion",
    "intdshfasjdfhasldjfhsadjfhjdernationalization",
    "internationalization",
    "internationalizatiasdfasdfon",
    "inte",
    "internationalization",
    "internationalizatiasdfasdfasdfsdfon",
);
$maxWordLenght = $array[0];
for ($i = 1; $i <= array_key_last($array); $i++) {
    if (count(mb_str_split($array[$i])) > $maxWordLenght) {
        $arrayWordLetters = mb_str_split($array[$i]);
        $lenght = count($arrayWordLetters) - 2;
        $result = $arrayWordLetters[array_key_first($arrayWordLetters)] . $lenght . $arrayWordLetters[array_key_last($arrayWordLetters)];
        echo "{$result}\n";
    } else {
        echo "{$array[$i]}\n";
    }
}
