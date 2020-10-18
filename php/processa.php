<?php 
session_start();

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $rg =  $_POST['rg'];
    $sus = $_POST['sus'];
    $genero =  $_POST['genero'];
    $nascimento =  $_POST['nascimento'];
    $familia = $_POST['familia'];
    $telefone =    $_POST['telefone'];
    $cep = $_POST['cep'];
    $av =  $_POST['av'];
    $numero =  $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade =  $_POST['cidade'];
    $uf =  $_POST['estado'];

try {
  $pdo = new PDO('mysql:host=localhost;dbname=paciente','root', null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO registro VALUES(:id, :cpf, :nome, :rg, :sus, :genero, :nascimento, :familia, :telefone, :cep, :av, :numero, :complemento, :cidade, :estado)');
  $stmt->execute(array(

    ':id' => null,
    ':cpf' => $cpf,
    ':nome' => $nome,
    ':rg' => $rg,
    ':sus' => $sus,
    ':genero' => $genero,
    ':nascimento' => $nascimento,
    ':familia' => $familia,
    ':telefone' => $telefone,
    ':cep' =>  $cep,
    ':av' => $av,
    ':numero' => $numero,
    ':complemento' => $complemento,
    ':cidade' => $cidade,
    ':estado' => $uf,

  ));

  header("location: cadastro.php");

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?> 