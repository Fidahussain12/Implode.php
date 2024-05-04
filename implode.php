
<!-- The implode function in PHP is used to join array elements with a string. It takes an array and returns a string containing all the array elements in the same order, separated by a specified string (the separator). Here’s the syntax for the implode function: -->



<?php 

$abc  = array("Aptech","Metro","Star","Gate");
echo "<pre>";
print_r($abc);
echo "</pre>";


$result = implode(" ",$abc);
echo $result;
?>