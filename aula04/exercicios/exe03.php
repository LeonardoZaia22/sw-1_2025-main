<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "etec" && $senha == "informática") {
        echo "<h2>Logado com sucesso!</h2>";
    } else {
        echo "<h2>Login ou senha incorretos!</h2>";
    }
}
?>
