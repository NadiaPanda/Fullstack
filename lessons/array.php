<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers[2];
echo '<br>';


$count = count($numbers);
for ($i = 0; $i < $count; $i++) {
    echo "$i $numbers[$i] <br>";
}

echo '<hr>';

foreach ($numbers as $key => $value) {
   echo "$key: $value <br>";
}
$new_numbers = [];
for ($i=0; $i < 10 ; $i++) { 
    $new_numbers [] = $i **2;
} 
$new_numbers [10] = 100;
$new_numbers [3] = 99;
$new_numbers [67] = 67 * 67;

echo '<pre>';
print_r($new_numbers);

$person = [
    'name' => 'Nadia',
    'age' => '28',
    'language' => 'php',
    'city' => 'San Francisco'
];
$person['car'] = true;
echo $person ['language'];
echo '<pre>';
print_r($person);

unset ($peron['name']);

echo '<pre>';
print_r($person);

echo '<hr>';

$colors = ['red', 'green', 'blue'];

$output = '';
foreach ($colors as $color) {
    $output = $output . ' ' . $color;
    # code...
}
 $string_colors = implode(',', $colors);
echo "$string_colors<br>";
$new_str = 'предложение из 4 слов';
$array = explode(' ', $new_str);
print_r($array);

$numbers = [2, 4, 6, 1, 3];
print_r($numbers);
sort($numbers);
print_r($numbers);

print_r($person);
sort($person);
print_r($person);

$person = [
    'name' => 'Nadia',
    'age' => '28',
    'language' => 'php',
    'city' => 'San Francisco'
];

asort($person);
print_r($person);

ksort($person);
print_r($person);

rsort($numbers);
print_r($numbers);

arsort($person);
print_r($person);

krsort($person);
print_r($person);

echo '<hr>';

$persons = [
    ['name' => 'Nadia',
    'age' => 28,
    'city' => 'San Francisco'
],
['name' => 'Lesia',
'age' => 32,
'city' => 'Kazan'
],
['name' => 'Petr',
'age' => 29,
'city' => 'Novosibirsk'],
];
function sortByAge ($a, $b) {
return $a['age'] <=> $b['age'];
 
}
usort($persons, 'sortByAge');
print_r($persons);
echo '<hr>';

//$numberOne = 15;
//$numberTwo =15;
 //echo $numberOne <=> $numberTwo;
  $names = array_column($persons, 'name');
  print_r($names);

  array_multisort ($names, SORT_DESC, $persons);
 print_r($persons);
   
 $keys = array_keys($persons);
 print_r($keys);

 print_r($persons[0]['name'][0][0]);
 echo '<br>';
 print_r($persons[1]['age']);
 echo '<br>';
 print_r($persons[2]['langages']);
 echo '<br>';

