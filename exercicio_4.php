<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "Digite a primeira nota: ";
$nota1 = trim(fgets(STDIN)); 

echo "Digite a segunda nota: ";
$nota2 = trim(fgets(STDIN));

echo "Digite a terceira nota: ";
$nota3 = trim(fgets(STDIN)); 
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "A média do aluno é: " . number_format($media, 2) . "\n";
?>

</body>
</html>