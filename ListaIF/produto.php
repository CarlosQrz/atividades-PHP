

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

<h1>Resultado</h1>


<form method="POST">
    <label for="preco1">Preço do produto 1 :</label>
    <input type="number" name="preco1" class="mt-5" id="preco1"><br>

    <label for="preco2">Preço do produto 2 :</label>
    <input type="number" name="preco2" class="mt-5" id="preco2"><br>

    <label for="preco3">Preço do produto 3 :</label>
    <input type="number" name="preco3" class="mt-5" id="preco3"><br>

    <button type="submit" class="btn bg-black text-white mt-5" >Comparar</button>
  </form>

<br><br>

<?php
if (isset($_POST['preco1']) && isset($_POST['preco2']) && isset($_POST['preco3'])) {
  $preco1 = $_POST['preco1'];
  $preco2 = $_POST['preco2'];
  $preco3 = $_POST['preco3'];

  if ($preco1 < $preco2 && $preco1 < $preco3) {
    echo "Compre o produto 1.";
  } elseif ($preco2 < $preco1 && $preco2 < $preco3) {
    echo "Compre o produto 2.";
  } elseif ($preco3 < $preco1 && $preco3 < $preco2) {
    echo "Compre o produto 3.";
  } else {
    echo "Há preços iguais.";
  }
} else {
  echo "Por favor, preencha todos os campos.";
}
?>

<br><br><br>

<a href="index.php" class="btn bg-black text-white" >Voltar ao menu</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
