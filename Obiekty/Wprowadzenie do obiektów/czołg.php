<?php
class czołg{
    public $nazwa, $kolor, $ilość_amunicji;
    function info(){
        echo $this->nazwa." ".$this->kolor." ".$this->ilość_amunicji;
        echo "<br>";
    }
    function pomaluj($arg1){
        $this->kolor=$arg1;
    }
    function załaduj($arg2){
        $this->ilość_amunicji+=$arg2;
        echo "Czołg posiada $this->ilość_amunicji pocisków!<br>";
    }
    function strzelaj(){
        if($this->ilość_amunicji>0){
            $this->ilość_amunicji--;
            echo "Oddano strzał! Pozostało $this->ilość_amunicji pocisków!<br>";
        }else{
            echo "Nie ma czym strzelać!<br>";
        }
    }
}
$czołg1=new czołg();
$czołg1->nazwa="7TP";
$czołg1->kolor="zielony";
$czołg1->ilość_amunicji=2;
$czołg1->info();
$czołg1->pomaluj('brązowy');
$czołg1->załaduj(5);
$czołg1->info();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();
$czołg1->strzelaj();