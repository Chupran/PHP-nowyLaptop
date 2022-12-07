<?php
function fun4($day, $month, $year){
    if(checkdate($month, $day, $year)){
        $todayY=date("Y");
        $todayM=date("m");
        $todayD=date("d");
        if($todayY==$year && $todayM==$month && $todayD==$day){
            return "teraźniejszość";
        }else if($todayY>$year || $todayY==$year && $todayM>$month || $todayY==$year && $todayM==$month && $todayD>$day){
            return "historia";
        }else{
            return "przyszłość";
        }
    }else{
        return "Data nie jest poprawna";
    }
}
$day=7;
$month=12;
$year=2022;
echo fun4($day, $month, $year);
echo "<br>Eryk Czuchran";