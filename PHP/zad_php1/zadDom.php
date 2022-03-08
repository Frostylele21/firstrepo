<?php
$pierwszy = array ("Najlepsze" , "Najwspanialsze", "Najserdeczniejsze", "Najcieplejsze" , "Najszczerze", "Wesołe", "Najpiękniejsze", "Wspaniałe", "Najgorętsze", "Radosne");
$drugi = array ("życzenia");
$trzeci = array ("na święta" , "z okazji urodzin", "z okazji imienin", "na dzień chłopaka" , "na dzień kobiet", "na walentynki", "na cały dzień", "na dzień matki", "na dzień ojca", "na dzień babci");

echo $pierwszy[rand(0,9)]. " ", $drugi[0]. " ", $trzeci[rand(0,9)];
?> 
