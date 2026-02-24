<?php

echo "Welcome to PHP\n";

$name = "Alice";
echo "Hello " . $name . "!\n";

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;

echo "Total pizza slices: " . $totalSlices . "\n"; //$totalSlices implicitly casted to string

$isHungry = true;
echo "Is " . $name . " hungry?\n";
echo $isHungry ? "Yes" : "No" . "\n";

/* Anything that has a value is an expression.
 * Able to mix values, variables, function calls and operators
 * 
 * Simple Expressions: 55, 3.14, -0.01, "Hello", true
 * Variable Expression: $name
 * Arithmetic Expression: 5 + 3, $x * 2
 * Function Expression: strlen("php"), max(5, 10)
 * Complex Expression: ((5 + 3) * 2) - (10 - 2)
 * Comparison Expression: $a == $b, $x > 3
 * Logical Expression: $a && $b, %x || $y
 * 
 * Arithmetic Operators: +, -, *, /, %
 * Logical Operators: &&, ||, and, or, !
 * Comparison Operators: ==, ===, >, <, >=, <=, !=, !==
 * String Operator: . (concatenation)
 */