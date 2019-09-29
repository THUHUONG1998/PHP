<?php 
// //toán tử
// $c= 'Hello ';
// $d= 'Teo';
// echo $c.' '.$d;
// echo $c.= ''.$d;
// $a=1;
// $b=3;
// echo $a+=$b;
// echo $a;// a ơ đây bằng 4
// echo $b;// b ở đây vẫn bằng 3
// // tương tự như chia và nhân


// //echo $a+1;s
// //echo ++$a;
// echo $a+=1;// toán tử cọng
// echo --$a;// toán tử trừ
// echo $a-=1;
// // câu điều kiện và vòng lặp
// // === strict equal  so sánh tuyệt đối 
// if(true){
//     echo "Dung";
// }else 
// echo "Sai";
$a=1;
$b=2;
$c=45;
// dieukien ? giatrichodieukiendung: giatrichodieukiensai
//echo $a>$b ? $a: $b;// phía trước dấu 2 chấm dành cho đúng, phía sau là sai
// $c=3;
// $a= $max;
// if($max<$b){
//     $max=$b;
// }else if($max<$c){
//     $max=$c;
// }
// echo $max;
if($a>$b && $a>$c) echo "max là  $a";
else if($b>$c) echo "max la $b"
else echo "max la $c";

?>