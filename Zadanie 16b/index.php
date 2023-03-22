<?php
$base=mysqli_connect("localhost", "root", "", "3pir_2_pacjenci");
$p=fopen('dane.txt', 'r');
$i=0;
while(!feof($p)){
    $w=fgets($p);
    $tablica[$i]=$w;
    $i+=1;
}
echo "$tablica[0]";
for($j=0; $j<3; $j+=1){
    $query=mysqli_query("$base", "INSERT INTO pacjenci VALUES ($tablica[$j])");

}
mysqli_close($base);