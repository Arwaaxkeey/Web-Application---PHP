<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

    
    define("age", 20);
    echo "my age is " . age;

    $age = 20;
    if($age>=18)
      echo "Adult  ";
    else
      echo " child  ";


    $marks=50;
    switch($marks){
    case($marks>=90):
        echo "A";
        break;
    case($marks>=80):
        echo "B";
        break;
    default:
        echo "Fail";
        break;
    }

    $fuel=5;
    $result=($fuel<=1)? "TRUE" : "FALSE";
    echo $result;


    $count=1;
    while($count<=5){
        echo $count ,"<br>";
        $count++;
    }

    
    $count=1;
   do{
    echo $count;
    $count++
   }while($count <=5);


       for($count = 1 ; $count <= 12 ;$count++)
        echo "$count times 12 is " . $count * 12 . "<br>";
       


    ?>
</body>
</html>