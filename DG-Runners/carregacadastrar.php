<?php

//Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
$conexao = pg_connect("user=postgres password=1234 port=5432 dbname=dgrunners host=localhost") or die ("Não foi possível conectar ao servidor PostGreSQL");




$emailcad = $_POST['emailcad'];

$result=pg_query($conexao,"select email from  sitecorridas.usuarios where email  = '$emailcad'");

if(pg_affected_rows($result)==0)
{

$nomecad = $_POST['nomecad'];
$senhacad = $_POST['senhacad'];
$telefonecad = $_POST['telefonecad'];
$datanasccad = $_POST['datanasccad'];
$sexocad = $_POST['sexocad'];
$cepcad = $_POST['cepcad'];
$enderecocad = $_POST['enderecocad'];
$numerocad = $_POST['numerocad'];
$complementocad = $_POST['complementocad'];
$bairrocad = $_POST['bairrocad'];
$cidadecad = $_POST['cidadecad'];
$estadocad = $_POST['estadocad'];
$paiscad = $_POST['paiscad'];

    echo "Cadastro feito com sucesso redirecionando para pagina princial";
    echo '<meta http-equiv="refresh" content="5;URL=index.php" /> ';

    pg_query($conexao, "insert into  sitecorridas.usuarios (nome,email,senha,telefone,cep,endereco,complemento,bairro,cidade,estado,pais,numend,sexo)
    values ('$nomecad','$emailcad','$senhacad','$telefonecad','$cepcad','$enderecocad','$complementocad','$bairrocad','$cidadecad','$estadocad','$paiscad','$numerocad','$sexocad')");





 }
else
{
    echo "Email de Usuário já cadastrado redirecionando de volta para tela de cadastro";
    echo '<meta http-equiv="refresh" content="5;URL=cadastrospage.php" /> ';
}


pg_close($conexao);

?>




 