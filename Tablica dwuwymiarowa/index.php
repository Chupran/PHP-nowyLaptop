<?php
for($i=0; $i<3; $i++){
    for($j=0; $j<3; $j++){
        $table[$i][$j]=rand(1,9);
    }
}
$wynik=0;
$wynik2=0;
$zm1=$table[0][0];
$zm2=$table[0][1];
$zm3=$table[0][2];
$zm4=$table[1][0];
$zm5=$table[1][1];
$zm6=$table[1][2];
$zm7=$table[2][0];
$zm8=$table[2][1];
$zm9=$table[2][2];
echo "<table>
    <tr>
        <td>$zm1</td>
        <td>$zm2</td>
        <td>$zm3</td>
    </tr>
    <tr>
        <td>$zm4</td>
        <td>$zm5</td>
        <td>$zm6</td>
    </tr>
    <tr>
        <td>$zm7</td>
        <td>$zm8</td>
        <td>$zm9</td>
    </tr>
</table>";
echo "<br>";
$x=0;
$y=0;
for($i=0; $i<3; $i++){
    $wynik+=$table[$x][$y];
    $x+=1;
    $y+=1;
}
$xx=0;
$yy=2;
for($i=0; $i<3; $i++){
    $wynik2+=$table[$xx][$yy];
    $xx+=1;
    $yy-=1;
}
if($wynik>$wynik2){
    echo "Większa jest liczba $wynik. Mniejsze jest $wynik2.";
}else if($wynik2>$wynik){
    echo "Większa jest liczba $wynik2. Mniejsze jest $wynik.";
}else{
    echo "Te dwie liczby $wynik, $wynik2 są równe";
}
//Eryk Czuchran