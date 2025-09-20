<?php
$a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($a);
echo "a) Ascending by value:\n";
print_r($a);
$ak = $a;
ksort($ak);
echo "b) Ascending by key:\n";
print_r($ak);
$ad = $a;
arsort($ad);
echo "c) Descending by value:\n";
print_r($ad);
$akd = $a;
krsort($akd);
echo "d) Descending by key:\n";
print_r($akd);
?>