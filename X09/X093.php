<?php
function fun3($table1, $table2){
    $table=array_merge($table1, $table2);
    sort($table);
    return $table;
}
$table1[]=5;
$table1[]=6;
$table1[]=52;
$table1[]=21;
$table1[]=2;
$table2[]=8;
$table2[]=1;
$table2[]=63;
$table2[]=32;
$table2[]=62;
var_dump(fun3($table1, $table2));
echo "Eryk Czuchran 3pir";