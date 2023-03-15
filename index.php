<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<form action="index.php" method="post">
<h2>Formulario alunos marta</h2>


  <label for="nome">Nome:</label>
  <input type="text"  name="n"><br><br>
  <label for="sobre">Sobrenome:</label>
  <input type="text"  name="s"><br><br>
   <label for="Turma">Turma:</label>
  <input type="text"  name="T"><br><br>
  <label for="idade">idade:</label>
  <input type="number"  name="i"><br><br>
  <label for="cpf">Cpf:</label>
  <input type="text"  name="c"><br><br>
  <input type="submit" value="Submit">
</form>

<?php

$nome =$_POST["n"];
$Sobrenome =$_POST["s"];
$Turma =$_POST["T"];
$idade =$_POST["i"];
$Id =$_POST["c"];



$servername = "localhost";
$username = "root";
$password = "";
$db = "escola";


$conn = new mysqli($servername,$username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";

$sql = "INSERT INTO alunos (Id,Nome,Sobrenome,Turma,idade)
VALUES ('$Id','$nome', '$Sobrenome', '$Turma','$idade')";

if ($conn->query($sql) === TRUE) {
  echo "Registro criado com exito";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<script src="script.js"></script>
</body>
</html>