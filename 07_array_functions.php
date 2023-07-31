<?php

/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);
echo '<br>';

// Search array
echo in_array('banana', $fruits);
echo '<br>';
// if banana is in the array
var_dump(in_array('banana', $fruits));

// Add to an array
$fruits[] = 'grape';

// Another way to add to an array
array_push($fruits, 'mango', 'raspberry');
// print_r($fruits);

// Adds to the beginning
array_unshift($fruits, 'kiwi');

var_dump($fruits);
echo '<br><br>';

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

var_dump($fruits);
echo '<br><br>';

// Split into chunks of 2
echo '<br><br>';
echo 'Split into chunks of 2';
echo '<br>';

$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
echo '<br><br>';

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

var_dump($arr3);
echo '<br><br>';

$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);
echo '<br><br>';

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
var_dump($c);
echo '<br><br>';

// Array of keys
$keys = array_keys($c);
var_dump($keys);
echo '<br><br>';

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);
echo '<br><br>';

// Create array of numbers with range()
$numbers = range(1, 20);
var_dump($numbers);
echo '<br><br>';

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);
var_dump($newNumbers);
echo '<br><br>';

// Filter array
$lessThan10 = array_filter($numbers, fn ($number) => $number < 10);

var_dump($lessThan10);
echo '<br><br>';

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
echo '<br><br>';
