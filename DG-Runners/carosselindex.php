
<?php

//Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
$conexao = pg_connect("user=postgres password=1234 port=5432 dbname=dgrunners host=localhost") or die ("Não foi possível conectar ao servidor PostGreSQL");

$result=pg_query($conexao, "select *  from sitecorridas.corridas where imgbannerindex is not null order by pk_codcorridas desc ");

for($i=0;$consulta = pg_fetch_assoc($result) AND $i<3 ;$i++)
{
 $nome[$i]=$consulta['nome'];
 $imgbanner[$i]=$consulta['imgbannerindex'];


}

pg_close($conexao);
?>

