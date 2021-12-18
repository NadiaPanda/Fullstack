<?php


echo "<select>";
for ($i = 0; $i < 5; $i++) {
    include "option.php";
}
echo "</select>";

echo "<hr>";


function plusOne ($a) {
    $a = $a + 1;
    return $a;
}
$a = 10;
echo "$a<br>";
$a = plusOne ($a);
echo "$a<br>";
wrongPlusOne ();
echo "$a<br>";

function wrongPlusOne () {
    global $a;
    $a = $a + 1;
}


$GLOBALS ['a'] = 999;

