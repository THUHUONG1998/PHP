<?php
// switch 
$a =1997;
switch ($a%10){
    case 0: echo'Canh'; break;
    case 1: echo 'Tan '; break;
    case 2: echo 'Nham'; break;
    case 3: echo 'Quy'; break;
    case 4: echo 'Giap'; break;
    case 5: echo 'At' ; break;
    case 6: echo 'Binh'; break;
    case 7: echo 'Dinh'; break;
    case 8: echo 'Mau'; break;
    default: echo 'Ky'; break;
}
echo " ";
switch ($a%12){
    case 0: echo'Than'; break;
    case 1: echo 'dau '; break;
    case 2: echo 'Tuat '; break;
    case 3: echo 'Hoi'; break;
    case 4: echo 'Ti' ; break;
    case 5: echo 'Suu' ; break;
    case 6: echo 'Dan'; break;
    case 7: echo 'Mao'; break;
    case 8: echo 'Thin'; break;
    case 9: echo 'Ty' ; break;
    case 10: echo 'Ngo' ; break;
    default: echo 'Mui'; break;
}
?>