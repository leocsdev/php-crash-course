<?php
// File Handling

// File handling is the ability to read and write files on the server.
// PHP has built in functions for reading and writing files.

$file = 'extras/users.txt';

// Check if file exists
if (file_exists($file)) {
  // echo readfile($file);

  // Open file with read mode
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  // Close
  fclose($handle);

  echo $contents;
} else {
  // Open file with write mode, create if it doesn't exist
  $handle = fopen($file, 'w');
  // Write the content
  $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
  fwrite($handle, $contents);
  // Close
  fclose($handle);
}
