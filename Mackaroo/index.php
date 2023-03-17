<?php
$base=mysqli_connect("localhost", "root", "", "3pir_2_pracownicy_w_kolorze");
$query=mysqli_query($base,"SELECT * FROM `mock_data` WHERE 1");
while($row=mysqli_fetch_row($query)){
    echo "<p style='background-color: $row[6]'>$row[0], $row[1], $row[2], $row[3], $row[4], $row[5],</p>";
}
mysqli_close($base);
//Eryk Czuchran 3pir