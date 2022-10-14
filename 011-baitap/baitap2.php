<?php
function count_seach(int $number,array $arr)
{
    $counts=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$number)
        {
            $counts++;
        }
    }
    return $counts;
}
$number1=8;
$numbers = [ 2,4,5,6,7,8,10,34,24];
echo count_seach($number1,$numbers);
echo "<br>";
$taxRates = [
    'NC' => 8.75,
    'CA' => 8.25,
    'NY' => 8.875
];
asort($taxRates);
echo "<pre>";
print_r($taxRates);
ksort($taxRates);
echo "<pre>";
print_r($taxRates);
arsort($taxRates);
echo "<pre>";
print_r($taxRates);
krsort($taxRates);
echo "<pre>";
print_r($taxRates);