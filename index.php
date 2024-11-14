<?php
$arr2 = [
    [
        "id" => 1,
        "name" => "John",
        "class" => "Web Programming"
    ],
    [
        "id" => 2,
        "name" => "Doe",
        "class" => "Web Programming"
    ],
    [
        "id" => 3,
        "name" => "Jane",
        "class" => "Web Programming"
    ]
];

var_dump($arr2);
echo "<br><br>";
echo "======================================<br><br>";
// $rows = mysqli_fetch_all($arr2, MYSQLI_ASSOC);


echo "FOREACH<br>";
// $rows = mysqli_fetch_assoc();
foreach ($arr2 as $value) {
    echo "ID    : " . $value['id'] . "<br>";
    echo "Name  : " . $value['name'] . "<br>";
    echo "Class : " . $value['class'] . "<br>";
    echo "<br>";
};
echo "======================================<br><br>";

echo "WHILE<br>";
$param = 0;
while ($param < count($arr2)) {
    echo "ID    : " . $value['id'] . "<br>";
    echo "Name  : " . $value['name'] . "<br>";
    echo "Class : " . $value['class'] . "<br>";
    echo "<br>";
    $param++;
}
echo "======================================<br><br>";

echo "FUNCTION<br>";
function penjumlahan($nilaiX, $nilaiY)
{
    return $nilaiX + $nilaiY;
}

function pengurangan($nilaiX, $nilaiY)
{
    return $nilaiX - $nilaiY;
}

$x = 6;
$y = 10;
echo $x . " + " . $y . " = " . penjumlahan($x, $y) . "<br>";
echo "<br>";
echo $x . " - " . $y . " = " . pengurangan($x, $y) . "<br>";
echo "<br>";
echo "======================================<br><br>";
