<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $skr = date("d/m/y");
    echo "Sekarang adalah $skr <br>";
    $waktu = date("h:i:s A"); //A menunjukkan AM atau PM
    echo "Jam menunjukkan pukul : $waktu";
?>
</body>
</html>