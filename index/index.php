<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class ="banco">
    <div class ="oco">
    <?php 
        $n=8;
        for($y=1; $y<9; $y++){
            for ($x=1; $x<9; $x++){
                if(($x+$y)%2==0){
                    echo '<div class = "white"> </div> ';
                }else  echo '<div class = "black"> </div> ';
            }
        };
    ?>
    </div>
    </div> 
</body>
</html>