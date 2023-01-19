<?php

$file = 'quotes.txt';

// opening a file for reading --
//$handle = fopen($file, 'r');

// opening a file for reading --
$handle = fopen($file, 'r+');
//$handle = fopen($file, 'a+');
//$handle = fopen($file, 'a');
//$handle = fopen($file, 'x+');
//$handle = fopen($file, 'x');
//$handle = fopen($file, 'w+');
//$handle = fopen($file, 'w');


// read the file --
//echo fread($handle, filesize($file));
//echo fread($handle, 112);

// read a single line --
//echo fgets($handle);
//echo fgets($handle);

// read a single character
//echo fgetc($handle);

//writing to a file
fwrite($handle, "\nThe all details about pekka");

// close a file --
fclose($handle);

// delete  a file --
//unlink($file);

?>