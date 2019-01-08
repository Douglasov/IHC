<?php
$usuarioout=$_SESSION['usuarionome'];
unset( $_SESSION['usuario'] );
unset($_SESSION['usuarionome']);

echo 'Usuário '.$usuarioout.' deslogado com sucesso';
echo '<meta http-equiv="refresh" content="5;URL=index.php" /> ';


?>