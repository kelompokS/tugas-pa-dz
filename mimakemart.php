<?php
// Suhu ruangan dari AC (dalam derajat Celcius)
$suhu = 28;

echo "Showcase: Cek Suhu AC Minimarket<br>";
echo "-------------------------------<br>";

if ($suhu <= 24) {
    echo "❄️ AC terasa dingin. Suhu: $suhu°C";
} else {
    echo "🌡️ AC tidak terasa dingin. Suhu: $suhu°C";
}
?>
