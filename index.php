<?php
function hello($oh){
    echo "$oh Hello Everybody <br>";
}
function hi($fn="tomi", $ln="onek valo"){
    echo "Hi Limon $fn $ln. <br>";
}
function sum($a=10, $b= 15){
    echo $a + $b ."<br>";
}
hello("Oh ho");
hello("learn");
hello("Amin");
hi("How", "are you?");
hi();
sum();
sum(30,20);
?>
