

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
<div class="container-fluid text-center mt-5">
    <h1>Calcular média</h1>
    <form action="media.php" method="POST" class="mt-5">
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1"><br><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2"><br><br>
        <input type="submit" class="btn bg-black text-white mt-5" value="Calcular">
    </form>
  
    <br><br>

<?php
if (isset($_POST['nota1']) && isset($_POST['nota2'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2) / 2;

    if ($media == 10) {
        echo "Aprovado com distinção.";
    } elseif ($media >= 7) {
        echo "Aprovado.";
    } else {
        echo "Reprovado.";
    }
}
?>

<br><br>

    <a href="index.php" class="btn bg-black text-white" >Voltar ao menu</a>
  
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
