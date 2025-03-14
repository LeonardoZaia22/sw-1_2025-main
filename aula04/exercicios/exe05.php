<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cor = $_POST['cor'];
    echo "<body style='background-color: $cor;'>";
    echo "<h2>Cor alterada para: $cor</h2>";
    echo "</body>";
}
?>
