<!-- variavel de busca  -->


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">DG-RUNNERS</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="Corridas.php">Corridas</a></li>
                  <li class="divider"></li>
                  <li><a href="Noticias.php">Noticias</a></li>
                  <li class="divider"></li>
                  <li><a href="calendario.php">Calendário</a></li>
                </ul>
              </li>
            </ul>
            <form method="post" class="navbar-form navbar-left" role="search"  action="searchpage.php" > 
              <div class="form-group">
                <input name="busca" type="text" class="form-control" placeholder="Procure sua corrida aqui" ></input>
              </div>
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="cadastrospage.php">Cadastrar</a></li>
              <li class="dropdown">
              <?php include ("barraloagadoornot.php");?>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

