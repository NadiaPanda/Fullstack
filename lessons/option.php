<?php
$n = rand (0, 100);
echo "<option>$n</option>";

function dump ($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>'; 
}