<?php

/* function sum(...$nums)
{
$sum = 0;
for ($i = 0; $i < sizeof($nums); $i++) {
$sum += $nums[$i];

}
return $sum;
// return sum;
}
 */

function sum(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
