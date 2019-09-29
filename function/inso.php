<?php
/**
 * BT2
 * Viet 1 function thuc hien cac yeu cau sau phụ thuộc vào tham so đầu vào, voi n = 100
 * Yêu cầu:
 * a. In ra day cac so chan tu 0->n
 * b. In ra day cac so le tu 0->n
 * c. In ra day cac so tu 0->n chia 5 du 4 
 */
// function insoChan($n=100){
//     for($i=0; $i<=$n; $i++ ){
//         if($i%2==0){
//         echo $i.' ';
//         }
//     }
// }
// insoChan();
// function insoLe($n=100){
//     for($i=0; $i<=$n; $i++){
//         if($i%2==1){
//             echo $i.' ';
//         }
//     }
// }
// insoLe();
// function insochiahetcho5($n=100){
//     for($i=0; $i<=$n; $i++){
//         if($i%5==4){
//             echo $i.' ';
//         }
//     }
// }
// insochiahetcho5();
function inSo($n=100, $soChia, $soDu){
    for($i=0; $i<=$n; $i++){
        if($i%$soChia==$soDu){
            echo $i.' ';
        }
    }
}
inSo(100, 2, 0);
?>