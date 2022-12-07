<?php
function fun2($table){
    $counter=0;
    for($i=0; $i<count($table); $i++){
        if(str_ends_with($table[$i], 'a')){
            $counter++;
        }
    }
    return $counter;
}
$table[]="Joanna";
$table[]="Tomasz";
$table[]="Kamila";
$table[]="Zygmunt";
$table[]="Agata";
echo fun2($table);