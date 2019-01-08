
<?php

//Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
$conexao = pg_connect("user=postgres password=1234 port=5432 dbname=dgrunners host=localhost") or die ("Não foi possível conectar ao servidor PostGreSQL");

$result=pg_query($conexao, "select * from sitecorridas.corridas order by pk_codcorridas desc");

while($consulta = pg_fetch_assoc($result))
{
 $nome=$consulta['nome'];
 $img=$consulta['img'];
 $valor=$consulta['valor'];
 $descricao=$consulta['descricao'];


 echo '<div class="col-lg-4 col-md-6 mb-4">
					<div class="card h-100">
						<h4 class="card-title">
							<header>
                <h2>';
                print $nome;
               echo '</h2>
							</header>
						</h4>
						<a href="espcorridapage.php">
              <img class="card-img-top" src="';
              print $img;
              echo '" alt="" height="150" width="340">
						</a>
						<div class="card-body">
              <h5>';
              print $valor;
              echo' R$</h5>
              <p class="card-text">';
              print $descricao;
              echo '</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
							<a href="#" class="button">Comprar</a>
						</div>
					</div>
				</div>';

}
pg_close($conexao);
?>