<?php
echo "no 1. Kubus<br>";
function volumeKubus($s)
{
    $result = pow($s, 3);
    echo "Volume Kubus, Sisi = " . $s . "<br>Adalah = " . $result . "<br><br>";
}

function luasPermukaanKubus($s)
{
    $result = 6 * pow($s, 2);
    echo "Luas Permukaan Kubus, Sisi = " . $s . "<br>Adalah = " . $result . "<br><br>";
}
volumeKubus(13  );
luasPermukaanKubus(10);
echo "<br>======================================================<br><br>";

echo "no 2. Balok<br>";
function volumeBalok($p, $l, $t)
{
    $result = $p * $l * $t;
    echo "Volume Kubus, Panjang = " . $p . ", Lebar = " . $l . ", Tinggi, =" . $t . "<br>Adalah = " . $result . "<br><br>";
}

function luasPermukaanBalok($p, $l, $t)
{
    $permukaan1 = $p * $l;
    $permukaan2 = $p * $t;
    $permukaan3 = $l * $t;
    $result = 2 * ($permukaan1 + $permukaan2 + $permukaan3);
    echo "Luas Permukaan Kubus, Panjang = " . $p . ", Lebar = " . $l . ", Tinggi, =" . $t . "<br>Adalah = " . $result . "<br><br>";
}
volumeBalok(3, 3, 3);
luasPermukaanBalok(3, 3, 3);
echo "<br>======================================================<br><br>";

echo "no 3. Limas Segi Empat<br>";
function volumeLimasSegiEmpat($s, $t)
{
    $luasAlas = pow($s, 2);
    $result = $luasAlas * $t;
    $result /= 3;
    echo "Volume Limas Segi Empat, Sisi = " . $s . ", Tinggi, =" . $t . "<br>Adalah = " . $result . "<br><br>";
}
volumeLimasSegiEmpat(3, 4);
echo "<br>======================================================<br><br>";

echo "no 4. Tabung<br>";
function volumeTabung($r, $t)
{
    $resutlTemp = pow($r, 2) * $t;
    $result = M_PI * $resutlTemp;
    echo "Volume Tabung, Jari-jari = " . $r . ", Tinggi, =" . $t . "<br>Adalah = " . $result . "<br><br>";
}

function luasPermukaanTabung($r, $t)
{
    $resutlTemp = $r + $t;
    $result = 2 * M_PI * $r * $resutlTemp;
    echo "Volume Tabung, Jari-jari = " . $r . ", Tinggi, =" . $t . "<br>Adalah = " . $result . "<br><br>";
}
volumeTabung(2, 3);
luasPermukaanTabung(2, 4);
echo "<br>======================================================<br><br>";

echo "no 5. Bola<br>";
function volumeBola($r)
{
    $resutlTemp = pow($r, 3);
    $resutlTemp = M_PI * $resutlTemp;
    $result = 4 * $resutlTemp / 3;
    echo "Volume Bola, Jari-jari = " . $r . "<br>Adalah = " . $result . "<br><br>";
}

function luasPermukaanBola($r)
{
    $resutlTemp = pow($r, 2);
    $result = 4 * M_PI * $resutlTemp;
    echo "Luas Permukaan Bola, Jari-jari = " . $r . "<br>Adalah = " . $result . "<br><br>";
}

volumeBola(14);
luasPermukaanBola(14);
