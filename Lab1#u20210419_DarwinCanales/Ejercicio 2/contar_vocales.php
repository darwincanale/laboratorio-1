<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = $_POST['texto'];
        $texto = strtolower($texto); 

        $vocales = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);

        for ($i = 0; $i < strlen($texto); $i++) {
            $caracter = $texto[$i];
            if (isset($vocales[$caracter])) {
                $vocales[$caracter]++;
            }
        }

        echo "<table>";
        echo "<tr><th>Vocal</th><th>Cantidad</th></tr>";
        foreach ($vocales as $vocal => $cantidad) {
            echo "<tr><td>$vocal</td><td>$cantidad</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>