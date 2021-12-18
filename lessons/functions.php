 <?php

 function sayHello () {
     echo 'Hello <br>';
 }
function plusOne ($a) {
    echo ++$a . '<br>';
} 

function multyply (int $a, int $b) {
    echo $a * $b . '<br>';
}

function sumNumbers ($a,$b, $c = 0) {
    echo $a + $b +$c . '<br>';
}

function returnPlusOne ($a) {
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
}

$number = 18;
plusOne($number);

$number = 9;
$result = returnPlusOne($number);
echo "Новое число: {$result ['oldValue']}<br>";

 sayHello();
 
 plusOne(65);

 multyply (10, 85);

 sumNumbers(45, 15, 99); 

 $res = sumNumbers(1, 2);

 echo '<pre>';
 var_dump ($res);

 $numbers = [1, 5, 3, 7, 2, 4];

 function maxNumber (array $numbers) {
     $max = $numbers[0]; 
     foreach ($numbers as $number) {
         if ($number > $max) {
             $max = $number;
         }
     }
     return $max;
 }
 function sumArray (array $numbers) {
     $res = 0;
     foreach ($numbers as $number) {
         $res += $number;
     } 
     return $res; 
 }

 echo maxNumber($numbers) . '<br>';
 echo max ($numbers) . '<br>';
