<?php
$arr = array(1,2,3,4,5);
echo "Original array :\n";
echo implode(" ", $arr) . "\n";
array_splice($arr, 3, 0, '$');
echo "After inserting '\$' the array is :\n";
echo implode(" ", $arr) . "\n";
?>