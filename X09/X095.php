<?php
function fun5($monthInPolish){
    $todayY=date("Y");
    $todayM=date("m");
    $todayD=date("d");
    return "$todayD $monthInPolish[$todayM] $todayY";
}
$monthInPolish[1]="Styczeń";
$monthInPolish[2]="Luty";
$monthInPolish[3]="Marzec";
$monthInPolish[4]="Kwiecień";
$monthInPolish[5]="Maj";
$monthInPolish[6]="Czerwiec";
$monthInPolish[7]="Lipiec";
$monthInPolish[8]="Sierpień";
$monthInPolish[9]="Wrzesień";
$monthInPolish[10]="Październik";
$monthInPolish[11]="Listopad";
$monthInPolish[12]="Grudzień";
echo fun5($monthInPolish);
echo "<br>Eryk Czuchran 3pir";