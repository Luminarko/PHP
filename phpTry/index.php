<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodiny</title>
    <style>
        body{
            font-family : monospace;
        }
    </style>
</head>
<body>
    <?php
        $mesic = [1 =>"leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"];
        date_default_timezone_set('CET');
        echo "<h1>Hodiny</h1>";
        echo $mesic[date("n")];
        echo date("Y H:i:s");
        $hodina = intval(date("H"));
        $minuta= intval(date("i"));
        $sekunda = intval(date("s"));

        echo "<ul>";
        echo "<li>H: ";
            for($i = 0; $i < $hodina; $i++)
            {
                echo "|";
            }
            echo"($hodina)";
        echo "</li>";
        echo "<li>M: ";
            for($i = 0; $i < $minuta; $i++)
            {
                echo "|";
            }
            echo"($minuta)";
        echo "</li>";
        echo "<li>S: ";
            for($i = 0; $i < $sekunda; $i++)
            {
                echo "|";
            }
            echo"($sekunda)";
        echo "</li>";
        echo "</ul>";
    ?>
</body>
</html>