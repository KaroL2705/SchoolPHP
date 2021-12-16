<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $connect= mysqli_connect([localhost[,root[,[Swiercz]]]]);
        or die('Nie mogę połączyć się z bazą danych<br>'.mysqli_error());
        echo "Udało się połączyć z bazą dancyh";
    ?>   
</body>
</html>