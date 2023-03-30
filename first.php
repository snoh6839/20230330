<?php
$lotto_num_count = 6;

$numbers = range(1, 45);

shuffle($numbers);

$lotto_numbers = array_slice($numbers, 0, $lotto_num_count);

while (count(array_unique($lotto_numbers)) < $lotto_num_count) {
    shuffle($numbers);
    $lotto_numbers = array_slice($numbers, 0, $lotto_num_count);
}

echo "로또 번호: ";
foreach ($lotto_numbers as $num) {
    echo $num . " ";
}
?>
