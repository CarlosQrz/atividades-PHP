
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
<h1 class="mt-5">Falar qual o é o Gênero</h1>  
<form method="post" class="mt-5" action="genero.php">
    <label for="genero">Digite o gênero (M/F):</label>
    <input type="text" id="genero" name="genero" required maxlength="1"><br><br>
    <input type="submit" class="btn bg-black text-white mt-5" value="Verificar">
  </form>

  <br><br>

<?php
if (isset($_POST['genero'])) {
  $genero = $_POST['genero'];

  if ($genero == "M" || $genero == "m") {
    echo "Sexo masculino.";
  } elseif ($genero == "F" || $genero == "f") {
    echo "Sexo feminino.";
  } else {
    echo "Sexo inválido.";
  }
}
?>

<br><br>

  <a href="index.php" class="btn bg-black text-white" >Voltar ao menu</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
