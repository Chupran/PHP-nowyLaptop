<?php
$file=fopen("imiona.txt", "r");
while(!feof($file)){
    $f=fgets($file);
    echo "$f<br>";
}
$file2=file('imiona.txt');
for($i=6; $i>=0; $i++){
    echo "$file2[i]<br>";
}