<!DOCTYPE html>
<html>
<body>

<?php
function tafelvan($numer) {
    $tafelarray=array();
    for ($x = 0; $x <= 10; $x++) {
        array_push($tafelarray, $numer*$x);
        echo $tafelarray[$x];
        echo "<br>";
      }}
      
tafelvan(12)
?>


</body>
</html>