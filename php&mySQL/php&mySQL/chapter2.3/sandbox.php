<?php

// file system --

//$quotes = readfile('readme.txt');
//echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){

    // read file --
    echo readfile($file) .'<br />';

    // copy files --
    copy($file, 'quotes.txt');

    // absolute path --
    echo realpath($file) .'<br />';

    // file size --
    echo filesize($file) .'<br />';

    // rename file --
    rename($file, 'text.txt');

} else {
    echo 'file does not exist';
}

// make directory
mkdir('quotes');

?>