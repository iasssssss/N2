<link rel="stylesheet" href="style.css">
<?php 
$conexao = mysqli_connect('localhost','root','','cadastro');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];

$sql = "INSERT INTO participantes(nome,cpf,dataNasc,email)values('$nome','$cpf','$dataNasc','$email')";

$retorno = mysqli_query($conexao,$sql);
echo 'Cliente Cadastrado com Sucesso!'
?>
<hr>
<a href="estudante.php">TELA INICIAL</a>