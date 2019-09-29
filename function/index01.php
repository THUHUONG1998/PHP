<?php
function Chuoi($length=7){
    $chars="abcdefghkqeuhnfknjkhdm0123456789";
    $size=strlen($chars);
    $str=' ';
    for($i=0; $i<$length; $i++){
        $str .= $chars[rand(0, $size-1)];
    }
    echo  $str;
}
Chuoi();

?>