<?php
function picture($number)
{
for ($break = 1; $break <= $number; $break++) {
echo "<br>";
for ($dot = 1; $dot <= $break; $dot++) {
echo "*";
}
}
for ($break = $number; $break >= 1; $break--) {
echo "<br>";
for ($dot = 1; $dot <= $break; $dot++) {
echo "8";
}
}
}

function mano($nr1)
{
    for ($nr2 = 1; $nr2 <= $nr1; $nr2++){
        echo "<br>";
        for ($nr3=1; $nr3 <= $nr2; $nr3++){
            echo "*";
        }
    }
    for ($nr2=$nr1; $nr2>=1; $nr2--){
        echo "<br>";
        for ($nr3=1; $nr3<=$nr2; $nr3++){
            echo "*";
        }
    }
}


