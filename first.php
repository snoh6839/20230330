
<?php
// 로또 번호 개수
$lotto_num_count = 6;

// 1 ~ 45까지의 숫자 배열 생성
$numbers = range(1, 45);

// 배열을 랜덤하게 섞음
shuffle($numbers);

// 앞에서부터 6개의 요소를 선택하여 로또 번호 생성
$lotto_numbers = array_slice($numbers, 0, $lotto_num_count);

// 중복값이 발생할 경우 다시 랜덤하게 선택
while (count(array_unique($lotto_numbers)) < $lotto_num_count) {
    shuffle($numbers);
    $lotto_numbers = array_slice($numbers, 0, $lotto_num_count);
}

// 로또 번호 출력
echo "로또 번호: ";
foreach ($lotto_numbers as $num) {
    echo $num . " ";
}
?>
