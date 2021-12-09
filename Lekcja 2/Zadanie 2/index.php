<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <table> 
        <?php
            for($h=1; $h<=10; $h++){
                echo "<tr>\n";

                for ($w=1; $w<=10; $w++){
                    echo "<td>";
                    echo $h*$w;
                    echo "</td>\n";
                }
                echo "</tr>\n";
            }
        ?>
    </table>
</body>
</html>