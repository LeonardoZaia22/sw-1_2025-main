<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="exe01.php" method="get">

        <p>digite seu nome: <input type="text" name="cxnome" id=""></p>
        
        <label for="tentacles">digite sua primeira nota:</label>
        <input type="number" id="tentacles" name="nota1" min="0" max="10" />

        <label for="tentacles">digite sua segunda nota:</label>
        <input type="number" id="tentacles" name="nota2" min="0" max="10" />

        <label for="tentacles">digite sua terceira nota:</label>
        <input type="number" id="tentacles" name="nota3" min="0" max="10" />
        <input type="submit" value="enviar">

    </form>  
    
    
</body>
</html>