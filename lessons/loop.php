<?php

$number = 0;
while ($number < 10) {
    echo $number . '<br>';
    //$number = $number + 1;
    //$number += 1;
    $number++;
}

echo '<select>';
echo '<option selected disabled> --выберите значение-- </option>';
    for ($i = 1; $i < 10; $i++) {
        echo "<option> $i </option>";
    }
echo '</select>';

echo '<hr>';

$far = -50;
while ($far < 51) {
    $cel = ($far - 32) *5 / 9;
    echo "$far  = $cel <br>";
    $far++;
}

echo '<hr>';





