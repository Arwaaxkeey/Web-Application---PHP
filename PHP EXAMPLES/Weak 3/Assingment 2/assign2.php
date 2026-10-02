<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      // Q.1. 

// 1. Declare and initialize the array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// 2. Print all elements of the array
echo "All elements of the array:<br>";

foreach ($array as $value) {
    echo $value . " ";
}

echo "<br><br>";

// 3. Calculate and print total of all elements
$total = array_sum($array);

echo "Total of all elements: " . $total . "<br>";

// 4. Calculate and print total of even elements
$evenTotal = 0;

foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    }
}

echo "Total of even elements: " . $evenTotal . "<br>";

// 5. Calculate and print total of odd elements
$oddTotal = 0;

foreach ($array as $value) {
    if ($value % 2 != 0) {
        $oddTotal += $value;
    }
}

echo "Total of odd elements: " . $oddTotal . "<br>";

// 6. Find minimum element and its positions
$min = min($array);
$minPositions = [];

foreach ($array as $index => $value) {
    if ($value == $min) {
        $minPositions[] = $index;
    }
}

echo "Minimum element: " . $min . "<br>";
echo "Minimum positions: ";

foreach ($minPositions as $position) {
    echo $position . " ";
}

echo "<br>";

// 7. Find maximum element and its positions
$max = max($array);
$maxPositions = [];

foreach ($array as $index => $value) {
    if ($value == $max) {
        $maxPositions[] = $index;
    }
}

echo "Maximum element: " . $max . "<br>";
echo "Maximum positions: ";

foreach ($maxPositions as $position) {
    echo $position . " ";
}

    // Q.2.

echo "<br><br>";

$colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],
    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],
    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $columns) {

    echo "<tr>";

    echo "<td><b>$row</b></td>";

    foreach ($columns as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";

     // Q.3

echo "<br><br>";
$students = [
    [
        "ID" => "CA233",
        "Name" => "Arwah Mohamud Jeilani",
        "Phone" => "0619226157",
        "Address" => "Kaaraan, jabuuti"
    ],
    [
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],
    [
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>