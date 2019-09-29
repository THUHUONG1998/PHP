<?php
$a= $_GET['so_a'];
$b= $_GET['so_b'];
$kq= $_GET['result'];
if($_GET['pheptinh']=='+'){
        $_GET['kq']= $_GET['so_a']+$_GET['so_b'];
        echo $_GET['kq'];
}
if($_GET['pheptinh']=='-'){
        $_GET['kq']= $_GET['so_a']-$_GET['so_b'];
        echo $_GET['kq'];
}
if($_GET['pheptinh']=='*'){
        $_GET['kq']= $_GET['so_a']*$_GET['so_b'];
        echo $_GET['kq'];
}
if($_GET['pheptinh']=='/'){
        $_GET['kq']= $_GET['so_a']/$_GET['so_b'];
        echo $_GET['kq'];
}
if($_GET['pheptinh']=='%'){
        $_GET['kq']= $_GET['so_a']%$_GET['so_b'];
        echo $_GET['kq'];
}
?>