<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Q1
    $num1=30;
    $num2=33;
    $num3=36;
    if($num1>$num2 && $num1>$num3){
        echo "The largest number is: ".$num1."<br>";
    }elseif($num2>$num1&& $num2>$num3){
        echo "The largest number is: ".$num2."<br>";
    }else{
        echo "The largest number is: ".$num3."<br>";
    }
    if($num1<$num2 && $num1<$num3){
        echo "The smallest number is: ".$num1."<br>";
    }elseif($num2<$num1&& $num2<$num3){
        echo "The smallest number is: ".$num2."<br>";
    }else{
        echo "The smallest number is: ".$num3."<br>";
    }
    // Q.2
    $divisible=15;
    if($divisible%3==0 && $divisible%5==0){
        echo "The number is divisible by 3 and 5.<br>";
    }elseif($divisible%3==0){
        echo "The number is divisible by 3.<br>";
    }elseif($divisible%5==0){
        echo "The number is divisible by 5.<br>";
    }else{
        echo "The number is not divisible by 3 or 5.<br>";
    }
    // Q.3
    for($i=0; $i<=20; $i++){
        if($i%2==1){
            echo $i." ";
        }
    }
    echo "<br>";
    for($i=35; $i>=7; $i--){
        if($i%2==0){
            echo $i." ";
        }
    }
    echo "<br>";
    // 4
    for($i=50;$i>=2;$i--){
        if($i%2==0&&$i%5==0){
            echo $i." ";
        }
    }
    echo "<br>";
    // Q.5
    $number_ref=123;
    $referse=0;
    while($number_ref>0){
        $last=$number_ref%10;
        $referse=($referse*10)+$last;
        $number_ref=(int)($number_ref/10);
    }
    echo $referse;
    ?>
</body>
</html>