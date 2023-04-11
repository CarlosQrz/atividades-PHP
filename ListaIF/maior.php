

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

<h1>Qual é o maior número?</h1>
	<form method="post" class="mt-5" action="maior.php">
		<label for="num1">Digite o primeiro número:</label>
		<input type="number" id="num1" name="num1" required><br><br>
		<label for="num2">Digite o segundo número:</label>
		<input type="number" id="num2" name="num2" required><br><br>
		<input type="submit" class="btn bg-black text-white mt-5" value="Verificar">
	</form>
<br><br>

<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) 
{
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  if ($num1 > $num2) 
  {
    echo "O maior número é: " . $num1;
  } elseif ($num2 > $num1) {
    echo "O maior número é: " . $num2;
  } else {
    echo "Os números são iguais.";
  }
}

?>
<br><br>

<a href="index.php" class="btn bg-black text-white" >Voltar ao menu</a>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
