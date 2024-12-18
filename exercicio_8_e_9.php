<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "Digite a temperatura em Fahrenheit: ";
$farenheit = trim(fgets(STDIN));
$celsius = (5 * ($farenheit - 32)) / 9;
echo "A temperatura em Celsius é: " . number_format($celsius, 2) . "\n";
?>

</body>
</html>