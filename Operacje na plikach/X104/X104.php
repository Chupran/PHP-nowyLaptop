<?php
$file=fopen('napisy.txt', 'r');
$counter=0;
while(!feof($file)){
    $f=fgets($file);
    $f2=bindec($f);
    $counter+=1;
    echo "$counter,  $f,  $f2 <br>";
}