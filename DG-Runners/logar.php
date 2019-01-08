<?php

$conexao = pg_connect("user=postgres password=1234 port=5432 dbname=dgrunners host=localhost") or die ("Não foi possível conectar ao servidor PostGreSQL");
$emailusu=$_POST["usuario"];
$resultemail=pg_query($conexao,"select email from  sitecorridas.usuarios where email = '$emailusu'");




if(pg_affected_rows($resultemail)==0)
{
    echo "E-mail de usuario inexistente redirecionando para homepage";
    echo '<meta http-equiv="refresh" content="5;URL=index.php" /> ';
}
else
{
    $senhausu=$_POST["senha"];
    $resultsenha=pg_query($conexao,"select * from  sitecorridas.usuarios where email = '$emailusu' and senha = '$senhausu'");
    if(pg_affected_rows($resultsenha)==0)
    {
        echo "Senha Incorreta redirecionando para homepage";
        echo '<meta http-equiv="refresh" content="5;URL=index.php" /> ';
    }
    else
    {
        $consultauser = pg_fetch_assoc($resultsenha);
        $_SESSION['usuario']=$consultauser['pk_coduser'];
        $_SESSION['usuarionome']=$consultauser['nome'];
        echo "Usuario ".$_SESSION['usuarionome']." logado com sucesso redirecionando para homepage";
        echo '<meta http-equiv="refresh" content="5;URL=index.php" /> ';
    }

 }






?>