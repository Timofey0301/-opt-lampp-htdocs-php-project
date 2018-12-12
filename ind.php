<?php
$i= 1;
 echo "<table border=\"2\">\n";
 while ($i < 10) {
   echo "\t<tr>\n";
    $n = 1;
    while ($n < 10) {
      echo "\t\t<td =\"3\"> $n * $i = ". $n * $i ." </td>\n";
    $n++;
  }
   echo "<tr>";
   $i++;
 }
echo "</table>";
 ?>
