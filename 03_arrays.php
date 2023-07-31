<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$fruits = array('apple', 'banana', 'orange');

// Outputting values from an array
echo $numbers[3] + $numbers[4];
echo '<br>';

// We can use print_r or var_dump to see the contents of an array
// print_r($numbers);
// print_r($fruits);

// var_dump($numbers);
// echo '<br>';
// var_dump($fruits);

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

echo $colors[1];
echo '<br>';

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'];
echo '<br>';
var_dump($hex);
echo '<br>';

// Single person
$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

echo $person['first_name'];
echo '<br>';

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Array of people
$people = [
  $person, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people);
echo '<br>';

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo '<br>';
echo $people[2]['email'];

// Encode to JSON
var_dump(json_encode($people));
echo '<br>';

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
