<?php
$str_tang = "안녕하세요. PHP입니다.";
// echo mb_substr($str_tang, -7)."\n";
// echo mb_substr($str_tang, 3, 5)."\n";

$tangArray = mb_str_split($str_tang);
// print_r($tangArray);

for ($i=0; $i < count($tangArray); $i++) { 
    if ($i >= 3 && $i <= 7) {
        echo $tangArray[$i];
    }
}

echo "\n--------------------\n";

define("ERRORMSG", "ERROR (%d) : %s ERROR가 발생했습니다.\n");

printf(ERRORMSG, 1, "시스템");
printf(ERRORMSG, 2, "로그인");
printf(ERRORMSG, 3, "접속");

// echo "\n--------------------\n";

// $happtArr = "I am always Hello.";
// $happtArrExpl = explode(" ", $happtArr);
// $replacements = array(3 => "Happy.");
// $helloArr = array_replace($happtArrExpl, $replacements);
// print_r($helloArr);

echo "\n--------------------\n";

function replaceAtIndex($string, $index, $replacement)
{
    $stringArr = explode(" ", $string);
    $stringArr[$index] = $replacement;
    return implode(" ", $stringArr);
}

$happtArr = "I am always Hello.";
$helloArr = replaceAtIndex($happtArr, 3, "Happy.");
print_r($helloArr);


echo "\n--------------------\n";
//위 코드를 써서
//for랑 if로 돌려서  $stringArr[$index] == $replacement1 면 $replacement2로 바뀌게 해서 인덱스를 몰라도
// 바꾸고 싶은 문자열을 내가 지정한 문자열로 바꾸는 함수 replaceAtString

function replaceAtString($string, $search, $replacement1, $replacement2)
{
    $stringArr = explode($search, $string);
    for($i = 0; $i < count($stringArr); $i++) {
        if($stringArr[$i] == $replacement1) {
            $stringArr[$i] = $replacement2;
        }
    }
    return implode($search, $stringArr);
}

$happyArr = "I am always Hello.";
$helloArr = replaceAtString($happyArr, " ", "Hello.", "Happy.");
print_r($helloArr);

echo "\n--------------------\n";

function my_str_replace($string, $search, $replacement1, $replacement2)
{
    $stringArr = explode($search, $string);
    $tempArr = array();
    foreach($stringArr as $element){
        if($element == $replacement1){
            array_push($tempArr, $replacement2);
        } else {
            array_push($tempArr, $element);
        }
    }
    return implode($search, $tempArr);
}

$happyArr = "I am always Hello.";
$helloArr = my_str_replace($happyArr, " ", "Hello.", "Happy.");
print_r($helloArr);



echo "\n--------------------\n";
//$happtArr = "I am always Hello.";
//$happexpl = explode("$replacement1", $str_all);
//$happimpl = implode("$replacement2", $happexpl);
//의 원리를 써서 같은 기능으로 구현

function my_str_replace2($arr, $re1, $re2)
{
    $str_expl = explode($re1, $arr);
    $str_impl = implode($re2, $str_expl);
    $result = $str_impl;
    return $result;
}

$happyArr = "I am always Hello.";
echo my_str_replace2($happyArr, "Hello", "Happy");

echo "\n--------------------\n";

?>
