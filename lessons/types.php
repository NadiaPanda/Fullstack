<?php

$name = 'Nadia';
echo $name . ' ' . gettype($name) . ' ' . '<br>';

$age = 28;
echo $age . ' ' . gettype($age) . ' ' . '<br>';

$money = 999.99;
echo $money . ' ' . gettype($money) . ' ' . '<br>';

$isRain = true;
echo $isRain . ' ' . gettype($isRain) . ' ' . '<br>';

if ($name) {
    echo 'true <br>';
} else {
    echo 'false <br>';
}

