<?php
// mang trong php
// $arrNunber= array(1,2,3,4);
// $arrString= ['key' => 'PHP', 3=>'Mysql', 'HTML'];
// foreach ($arrNunber as $value){
//     echo $value;
//}
// vong lap for k dung duoc dung khoa tu dong
// mang long mang
$level3 =array('AngularJS', 'Angular 8');
$fontEnd = ['HTML', 'CSS', 'JS', 'ANGULAR' => $level3];
$arrSubject = [
    'backend' => ['PHP', 'MySQL'],
    'frontend' => $fontEnd
];
echo $arrSubject['frontend']['ANGULAR'][1];
?>