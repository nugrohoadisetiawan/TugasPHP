<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $a = 3;
    $i = 1;
    for ($i , $a; $i <= 10; $i++){
        if ($i){
            echo pow ($a,$i)."<br>";
        }
     }
    ?>
</body>
</html>