<!DOCTYPE html>
<html>
<head>
    <title>TP2(2)</title>
</head>
<body>

<?php
$personnes = [
    ["first_name" => "Aurélie", "last_name" => "Lefebvre"],
    ["first_name" => "Léon", "last_name" => "Garnier"],
    ["first_name" => "Sophie", "last_name" => "Rousseau"]
];

echo "<table border='1'>";
echo "<tr>";
foreach(array_keys($personnes[0]) as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

foreach($personnes as $row) {
    echo "<tr>";
    foreach($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>