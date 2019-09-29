<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bai.css">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
    ?>
    <form method ="POST">
    <h1>Calculator</h1>
    Số a: <input type="text" class="so_a" name = "so_a">
    <select name="pheptinh" class="pheptinh">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
    </select>
    Số b: <input type="text" class="so_b" name="so_b">
    Kết quả: <input type="text" class="result" name="result" value="<?php $_GET['kq']?>">
    <input type="submit" value="Thực hiện" name=''>
    </form>
</body>
</html>