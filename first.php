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


$lotto_num_count2 = 6;

$numbers2 = range(1, 45);

shuffle($numbers2);

$lotto_numbers2 = array();
for ($i = 0; $i < $lotto_num_count2; $i++) {
    $random_number2 = rand(1, 45);
    while (in_array($random_number2, $lotto_numbers2)) {
        $random_number2 = rand(1, 45);
    }
    $lotto_numbers2[] = $random_number2;
}

echo "로또 번호: ";
foreach ($lotto_numbers2 as $num2) {
    echo $num2 . " ";
}


?>
