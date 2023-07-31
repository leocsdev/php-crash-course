<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

echo '<br>string: Hello World<br>';

// Get the length of a string
echo '<br>Get the length of a string<br>';
echo strlen($string);
echo '<br>';

// Find the position of the first occurrence of a substring in a string
echo '<br>Find the position of the first occurrence of a substring in a string<br>';
echo strpos($string, 'o');
echo '<br>';

// Find the position of the last occurrence of a substring in a string
echo '<br>Find the position of the last occurrence of a substring in a string<br>';
echo strrpos($string, 'o');
echo '<br>';

// Reverse a string
echo '<br>Reverse a string<br>';
echo strrev($string);
echo '<br>';

// Convert all characters to lowercase
echo '<br>Convert all characters to lowercase<br>';
echo strtolower($string);
echo '<br>';

// Convert all characters to uppercase
echo '<br>Convert all characters to uppercase<br>';
echo strtoupper($string);
echo '<br>';

// Uppercase the first character of each word
echo '<br>Uppercase the first character of each word<br>';
echo ucwords($string);
echo '<br>';

// String replace
echo '<br>String replace: replace "World" with "Everyone"<br>';
echo str_replace('World', 'Everyone', $string);
echo '<br>';

// Return portion of a string specified by the offset and length
echo '<br>Return portion of a string specified by the offset and length<br>';
echo substr($string, 1, 5);
echo '<br>';
echo substr($string, 3);
echo '<br>';

// Starts with
echo '<br>Starts with (Hello)<br>';
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
echo '<br>';

// Ends with
echo '<br>Ends with (ld)<br>';
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
echo '<br>';

// HTML Entities
echo '<br>HTML Entities<br>';
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
echo '<br>';

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
echo '<br>Formatted Strings - useful when you have outside data<br>';
printf('%s is a %s', 'Brad', 'nice guy');
echo '<br>';
printf('1 + 1 = %f', 1 + 1); // float
echo '<br>';
