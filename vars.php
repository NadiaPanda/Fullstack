<?php

$name = "Nadia";
$age = 28;
//не делай как попало...

echo $name;
echo"<br>";
echo $age;

$name2 = "Yana";

echo "<br>";
echo $name2;

$lastName = "Kharlamova";
$last_name = "Kharlamova";

$fullName = $name . ' ' . $lastName;
echo "<br>";
echo $fullName;

$word = 'lower_case';
$word = strtoupper($word);
echo "<br>";
echo $word;

$upperCase = 'UPPER_CASE';
$upperCase = strtoupper($upperCase);
echo "<br>";
echo $upperCase;

echo "<br>";
$password = 'qwerty ';
echo "<br>";
echo '!' . $password . '!';
echo "<br>";
echo trim($password);

$number = 5 * 5;
echo "<br>";
echo $number *2;

$burger = 4.95;
$coctail = 1.95;
$coca = 0.85;
$allFood = $burger * 2 . $coctail . $coca; 
$tea = ($allFood)/0.16;
$nds = ($tea . $allFood)/0.075;
$total = $tea . $allFood . $nds;
echo $total;




