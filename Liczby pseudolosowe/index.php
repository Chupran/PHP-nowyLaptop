<?php
for($i=0; $i<7; $i++){
    for($j=0; $j<7; $j++){
        $table[$i][$j]=rand(10, 99);
        $isEnd=true;
        while($isEnd) {
            for ($i2 = 0; $i2 < $i; $i2++) {
                for ($j2 = 0; $j2 < $j; $j2++) {
                    if ($table[$i][$j] == $table[$i2][$j2]) {
                        $table[$i][$j] = rand(10, 99);
                        echo "Powtarza się $i, $j <br>";
                    }
                }
            }
            $isEnd=false;
        }
    }
}
echo "<table>";
for($i=0; $i<7; $i++){
    echo "<tr>";
    for($j=0; $j<7; $j++){
        $arrayToString=$table[$i][$j];
        echo "<td>$arrayToString</td>";
    }
    echo "</tr>";
}
echo "</table>";
//Eryk Czuchran