<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Creating Multidimensentional array
    $info = array(
        array("Arwah Mohamud Jeilani", 2006, "Kaaraan", 619226157),
        array("Ahmed Garaad Mohamed", 2008, "Hodan", 618896473),
        array("Ali Abdirahman Nuur", 2000, "Shibis", 618873648),
    );
    echo $info[0][0];
    foreach($info as $list){
        echo $list[0],$list[1];
    }
    echo "<table border=1>";
    echo "<th>Name</th>";
    echo "<th>Year of Birth</th>";
    echo "<th>Address</th>";
    echo "<th>Phone</th>";
    foreach ($info as $list){
        echo "<tr>";
        foreach($list as $item){
            echo "<td>".$item. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    if(is_array($info)){
        echo "This is an array";  
    }else{
        echo "This is not array";
    }
    echo "<br>";
     if(in_array("Arwah",$info)){
         echo "This is in the array";
    }else{
         echo "This is not in the array";
    }
    echo "<br>";
    echo ("The size of the array is ".count($info));

    // Create function in php
    function Sum($x , $y=100){
        $z= $x + $y;
        echo $z;
    }
    // Calling function - function name (if any argument accept)
    echo "<br>";
    Sum(10)
    ?>
</body>
</html>