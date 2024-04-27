<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Port Lotniczy</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <div id="baner1">
            <img src="zad5.png" alt="logo lotnisko">
        </div>

        <div id="baner2">
            <h1>Przyloty</h1>
        </div>

        <div id="baner3">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt">Pobierz...</a>
        </div>

        <main>
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
                <?php
                    // Skrypt #1
                    $conn = new mysqli("localhost","root","","egzamin");

                    $sql = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
                    $result = $conn->query($sql);

                    while($row = $result -> fetch_array()) {
                        echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }

                    $conn -> close();
                ?>
            </table>
        </main>

        <div id="stopka1">
        <?php
            // Skrypt #2
            if(isset($_COOKIE['visited'])) {
                echo "<p><i>Witaj ponownie na stronie lotniska!</i></p>";
            }
            else {
                echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek.</b></p>";
                setcookie("visited", "true", time() + 3600);
            }
        ?>
        </div>

        <div id="stopka2">
           <p>Numer peselL: 654654654132054</p>
        </div>
    </body>
</html>