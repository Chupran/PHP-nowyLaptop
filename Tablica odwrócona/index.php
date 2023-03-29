<?php
for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        $table[$i][$j]=rand(0,1);
    }
}
echo "<table>
        <tr>";
for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        echo "<td>$table[$i][$j]</td>";
    }
}
echo "</tr></table>";
$result=0;
$counter=0;
for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        $counter+=$table[$i][$j];
    }
    if($counter>$result){
        for($i2=0; $i2<4; $i2++){
            $table2[$i2]=$table[$i][$i2];
        }
    }
}
echo "<table>
        <tr>";
for($i=0; $i<4; $i++){
    echo"<td>$table2[$i]</td>";
}
echo "</tr></table>";