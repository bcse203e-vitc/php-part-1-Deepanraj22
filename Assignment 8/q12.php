<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "Values are in lower case.\n";
print_r(array_change_key_case(array_map('strtolower', $Color), CASE_LOWER));
echo "Values are in upper case.\n";
print_r(array_change_key_case(array_map('strtoupper', $Color), CASE_LOWER));
?>