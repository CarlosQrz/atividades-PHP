<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encontrar o maior número</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid mt-5 text-center">
		<h1>Encontrar o maior número <br> entre os três</h1>
		<form method="POST" action="maior3.php" class="mt-5 w-25 container-fluid">
			<div class="mt-5">
				<label for="num1" class="form-label">Número 1</label>
				<input type="number" class="form-control" id="num1" name="num1">
			</div>
			<div class="mt-5">
				<label for="num2" class="form-label">Número 2</label>
				<input type="number" class="form-control" id="num2" name="num2">
			</div>
			<div class="mt-5">
				<label for="num3" class="form-label">Número 3</label>
				<input type="number" class="form-control" id="num3" name="num3">
			</div>
			<button type="submit" class="btn bg-black text-white mt-5">Encontrar o maior número</button>
		</form>
  <br><br>
<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];

  if ($num1 > $num2 && $num1 > $num3) {
    echo "O maior número é : " . $num1;
  } elseif ($num2 > $num1 && $num2 > $num3) {
    echo "O maior número é : " . $num2;
  } elseif ($num3 > $num1 && $num3 > $num2) {
    echo "O maior número é : " . $num3;
  } else {
    echo "Há números iguais.";
  }
}

?>
<br><br><br>

<a href="index.php" class="btn bg-black text-white" >Voltar ao menu</a>
	</div>
  


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>




