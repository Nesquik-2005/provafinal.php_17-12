<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Digite o raio do círculo: ";
$raio = trim(fgets(STDIN)); 

$perimetro = 2 * M_PI * $raio; 
$area = M_PI * pow($raio, 2); 

echo "Perímetro (Circunferência): " . number_format($perimetro, 2) . "\n";
echo "Área: " . number_format($area, 2) . "\n";
?>

</body>
</html>