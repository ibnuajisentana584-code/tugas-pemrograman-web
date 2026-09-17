<?php
$A = 123; // variabel GLOBAL

function Test() {
    global $A; 
    echo "Nilai A dalam fungsi = $A <br>";
}

Test(); 
echo "Nilai A luar fungsi = $A <br>";
?>
