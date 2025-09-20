<?php
$array1 = array(array(77,87), array(23,45));
$array2 = array("w3resource", "com");
$result = array();
for ($i = 0; $i < count($array1); $i++) {
    $sub = array();
    if (isset($array2[$i])) $sub[] = $array2[$i];
    foreach ($array1[$i] as $val) $sub[] = $val;
    $result[] = $sub;
}
print_r($result);
?>