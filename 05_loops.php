<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

echo '<br>';
echo 'For Loop';
echo '<br>';

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

echo '<br>';
echo 'While Loop';
echo '<br>';

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

/* ---------- Do While Loop --------- */

echo '<br>';
echo 'Do While Loop';
echo '<br>';

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- Foreach Loop ---------- */

echo '<br>';
echo 'Foreach Loop (For Arrays)';
echo '<br>';

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

$numbers = ['Post 1', 'Post 2', 'Post 3', 'Post 4', 'Post 5'];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}


// Use the indexes within the loop

echo '<br>';
echo 'Foreach Loop (For Arrays) - Use the indexes within the loop';
echo '<br>';

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "$index - $post <br>";
}

// Use the keys within the loop for an associative array

echo '<br>';
echo 'Foreach Loop (For Arrays) - Use the keys within the loop for an associative array';
echo '<br>';

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "$key - $val <br>";
}
