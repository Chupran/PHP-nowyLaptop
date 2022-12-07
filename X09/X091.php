<?php
function fun($table){
    sort($table);
    return $table[0]+$table[1];
}
$table[0]=1;
$table[1]=54;
$table[2]=21;
$table[3]=52;
$table[4]=21;
$table[5]=52;
$table[6]=522;
$table[7]=3;
$table[8]=765;
echo "Eryk Czuchran 3pir<br>";
echo fun($table);