<?php
function setInterval($f, $milliseconds)
{
$seconds=(int)$milliseconds/1000;
while(true)
{
$f();
sleep($seconds);
}
}
// Usage:

setInterval(function(){
    // date_default_timezone_set('Asia/Seoul');
    echo date('H:i:s')."\n";
}, 1000);

?>