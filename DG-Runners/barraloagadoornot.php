<?php

session_start();
if(isset($_SESSION["usuario"]))
{
    echo '<ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Olá, '.$_SESSION["usuarionome"].'<span class="caret"></span></a>
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
    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login <span class="caret"></span></a>
    <ul id="login-dp" class="dropdown-menu">
        <li>
             <div class="row">
                    <div class="col-md-12">
                        Login via
                        <div class="social-buttons">
                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                        </div>
                        ou
                         <form class="form" role="form" method="post" action="logadoornot.php" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                     <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                     <input name="usuario" type="email" class="form-control" id="exampleInputEmail2" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" placeholder="Email address" required>
                                </div>
                                <div class="form-group">
                                     <label class="sr-only" for="exampleInputPassword2">Password</label>
                                     <input name="senha" type="password" class="form-control" id="exampleInputPassword2" oninvalid="Invalidsenha(this);" placeholder="Password" required>
                                     <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                </div>
                                <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">Logar</button>
                                </div>
                         </form>
                    </div>

             </div>
        </li>
    </ul>';
}






?>