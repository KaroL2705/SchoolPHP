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
        $connect=mysqli_connect('localhost','root','','Swiercz') or die('Nie mogę połączyć się z bazą danych<br>'.mysqli_error());
        echo "Udało się połączyć z bazą dancyh.<br>";
        //$DB= 'CREATE TABLE TEST(id int not null, nazwisko char(30), lata char(3))';
        //$zapytanie =mysqli_query($connect,$DB) or die ('nie udało się utworzyć tabeli');
        //echo "Udało się utowrzyć tabelę<br> $zapytanie";
        $wybór= 'SELECT nazwiska,lata from TEST';
        $idzapytania= mysqli_query($connect,$wybór);
        echo '<table>'; 
        while ($wiersz = mysqli_fetch_row($idzapytania)){ 
            echo '<tr><td>Nazwisko: '. $wiersz[0] .'</td><td>Lata: '. $wiersz[1] .'</td></tr>'; 
        }
    echo '</table>';


    ?>   
</body>
</html>