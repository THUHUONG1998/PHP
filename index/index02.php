<?php 
$str = 'hello'; // string
$n = 1; //integer
$m = 1.4; // float 
$bool =true;// boolean true: 1 hoắc false (không có giá trị in ra màn hình)
$arr = [1,2,3,4]; //array
 class Person {};
  
 $p = new Person();// objject
 echo gettype($n); //dùng hàm để nhìn thấy kiểu dũ liệu
 $c= null;
 echo gettype($c);
 // định nghĩa hằng số, hằng số chỉ được định nghĩa một lần
 define("PI", 3.14);
 echo PI;

//  die("in ra màn hình");// dừng ở dòng này

?>