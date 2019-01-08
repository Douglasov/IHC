<?php

session_start();
if(isset($_SESSION["usuario"]))
{
    echo '<ul class="nav navbar-nav">
    <li>
  <logen>
      <a href="#">  </a>
  </logen>
</li>
    <li>
  <logen>
      <a href="#">Olá, '.$_SESSION["usuarionome"].' </a>
  </logen>
</li>
    <li class="dropdown">
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Meus Dados</a></li>
        <li class="divider"></li>
        <li><a href="#">Carrinho</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </li>
  </ul>';





}
else
{
 echo   '<li>
    <logen>
        <a href="loginpage.php">Login</a>
    </logen>
</li>
<li>
    <logen>
        <a href="cadastrospage.php">Registrar</a>
    </logen>
</li>';
}






?>