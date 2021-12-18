<?php

$number = 4;

if ($number > 5) {
    echo '10 больше 5';
    echo '<br>';
    echo '!';
}

echo '<br>';
echo 'просто какая-то строка';

if ($number > 5){
    echo '<br>';
    echo 'число больше 5';
} else {
    echo '<br>';
    echo 'число меньше или равно 5';
}
if ($number > 5){
    echo '<br>';
    echo 'число больше 5';
} else if ($number > 3) {
    echo '<br>';
    echo 'число меньше или равно 5, но больше 3';
} else if ($number > 0) {
    echo '<br>';
    echo 'либо 1, либо 2, либо 3';
} else {
    echo '<br>';
    echo '0 or negative';
}
$second_number = 0;

echo '<hr>';

if ($number > 0 and $second_number == 0) {
    echo '<br>';
    echo '$number > 0 & $second_number = 0';
}

if ($number > 0 or $second_number == 0) {
    echo '<br>';
    echo '$number > 0 or $second_number = 0';
}
echo '<br>';
if  ($number > 0) {
    if ($number > 2) {
        echo 'число больше 2';
}
}

if ($number != 0) {
    echo 'число не 0';
}
echo '<hr>';

$age = 28;

if ($age < 7) {
    echo '<br>';
    echo 'Вы дошкольник';
} else if ($age > 18) {
    echo '<br>';
    echo 'Вы Закончили школу';
} else { 
    echo '<br>';
    echo 'Вы школьник';
}

