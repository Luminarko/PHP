<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Flights</title>
</head>
<body>
    <table>
        <tr>
            <th>Flight Code</th>
            <th>Start</th>
            <th>Start Airport</th>
            <th>End</th>
            <th>End Airport</th>
            <th>Gate</th>
        </tr>
        <?php 
        include "dat/data.php";
        ?>
    </table>
</body>
</html>
