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


?>