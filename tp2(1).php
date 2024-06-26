<!DOCTYPE html>
<html>
<head>
    <title>TP2(1)</title>
</head>
<body>

<?php
// Obj 1
$numbers = range(0, 63);

echo "<h2>Objectif 1</h2>";
echo "<table border='1'>";
echo "<tr><th>Index</th><th>Value</th></tr>";
foreach ($numbers as $index => $value) {
    echo "<tr><td>$index</td><td>$value</td></tr>";
}
echo "</table>";

// Obj 2
$decimals = [];
for ($i = 0; $i <= 63; $i++) {
    $decimals[] = $i / 10;
}

echo "<h2>Objectif 2</h2>";
echo "<table border='1'>";
echo "<tr><th>Index</th><th>Value</th></tr>";
foreach ($decimals as $index => $value) {
    echo "<tr><td>$index</td><td>$value</td></tr>";
}
echo "</table>";

// Obj 3
$sines = [];
foreach ($decimals as $x) {
    $sines[(string)$x] = sin($x);
}

echo "<h2>Objectif 3</h2>";
echo "<table border='1'>";
echo "<tr><th>X</th><th>sin(X)</th></tr>";
foreach ($sines as $x => $value) {
    echo "<tr><td>$x</td><td>$value</td></tr>";
}
echo "</table>";

// Obj 4
$addresses = [
    "hello@provider1.com", "john@provider1.com", "jane@provider1.com", "bob@provider1.com",
    "hello@provider2.net", "goodbye@provider2.net", "alice@provider2.net",
    "hello@provider3.io", "charlie@provider3.io"
];

$providers = [];
foreach ($addresses as $address) {
    $domain = substr(strrchr($address, "@"), 1);
    if (isset($providers[$domain])) {
        $providers[$domain]++;
    } else {
        $providers[$domain] = 1;
    }
}

// Occurrences
echo "<h2>Objectif 4: Occurrences</h2>";
echo "<table border='1'>";
echo "<tr><th>Index</th><th>Value</th></tr>";
foreach ($providers as $domain => $occurrences) {
    echo "<tr><td>@$domain</td><td>$occurrences</td></tr>";
}
echo "</table>";

// Pourcentages
$totalAddresses = count($addresses);
echo "<h2>Objectif 4: Pourcentages</h2>";
echo "<table border='1'>";
echo "<tr><th>Index</th><th>Value</th></tr>";
foreach ($providers as $domain => $occurrences) {
    $percentage = ($occurrences / $totalAddresses) * 100;
    echo "<tr><td>@$domain</td><td>". number_format($percentage, 2). "%</td></tr>";
}
echo "</table>";
?>

</body>
</html>