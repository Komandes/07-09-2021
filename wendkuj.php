<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title> 
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
    <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="left">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
        <?php 
         $db = new mysqli('localhost',
                            'root',
                            '',
                            'wedkowanie');
                $sql = "SELECT nazwa, wystepowanie FROM `ryby` WHERE `styl_zycia` = 1";
                $wynik = $db->query($sql);
                while($wiersz = $wynik->fetch_assoc()){
                    $nazwa = $wiersz['nazwa'];
                    $wystepowanie = $wiersz['wystepowanie'];
                    echo "<li>$nazwa, występowanie: $wystepowanie</li>";
                }
                $db->close();
        ?>
        </ul>
    </div>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
    <p>Stronę wykonał 00000000000</p>
    </footer>
</body>