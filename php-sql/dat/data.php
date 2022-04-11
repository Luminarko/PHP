<?php
include "dbh.php";

$result = mysqli_query($connect, "SELECT * FROM flight;");

while($data = mysqli_fetch_assoc($result)){
    $code = $data["code"];
    $from = $data["from_dttm"];
    $fromAirport = $data["from_airport_code"];
    $to = $data["to_dttm"];
    $toAirport = $data["to_airport_code"];
    $gate = $data["gate_code"];
    echo "<tr><td>".$code."</td><td>".$from."</td>"."<td>".$fromAirport."</td><td>".$to."</td><td>".$toAirport."</td><td>".$gate."</td></tr>";
};