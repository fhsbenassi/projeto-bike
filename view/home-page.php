	<!-- CONTEUDO -->
	<div class="main">
		<div class="container" style="padding-top: 20px;">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						
						<h4 style="font-weight: bold;">Olá, <?php echo(current(explode(' ', $_SESSION['nome']))); ?> </h4>

						<hr />

						<div class="col-md-12 btn-painel">
							<button <?php if ($_SESSION['tipouser']=='2') {printf("style=\"display: none;\"");} ?> class="btn btn-info" id="btn-remessas" type="Submit" onclick="carrega_dinamico('view/lista-remessas-view.php')">
								<span class="glyphicon glyphicon-transfer"></span> Remessas Cadastradas
							</button>

							<button <?php if ($_SESSION['tipouser']=='1') {printf("style=\"display: none;\"");} ?> class="btn btn-info" id="btn-remessas" type="Submit" > <!-- onclick="carrega_dinamico('view/lista-remessas-view.php')" -->
								<span class="glyphicon glyphicon-transfer"></span> Minhas Remessas
							</button>
						</div>

						<div class="col-md-12 btn-painel">
							<button <?php if ($_SESSION['tipouser']=='2') {printf("style=\"display: none;\"");} ?> class="btn btn-success" id="btn-nova-remessa" onclick="carrega_dinamico('view/remessa-cad-view.php')">
								<span class="glyphicon glyphicon-plus"></span>  Nova Remessa
							</button>

							<button <?php if ($_SESSION['tipouser']=='1') {printf("style=\"display: none;\"");} ?> class="btn btn-success" id="btn-nova-remessa" onclick="carrega_dinamico('view/lista-remessas-view.php')">
								<span class="glyphicon glyphicon-plus"></span>  Buscar Remessas
							</button>
						</div>

						<div class="col-md-12 btn-painel" >							
							<button <?php if ($_SESSION['tipouser']=='2') {printf("style=\"display: none;\"");} ?> class="btn btn-info" id="btn-perfil" onclick="carrega_dinamico('view/profile-contratante.php')">
								<span class="glyphicon glyphicon-user"></span>  Perfil
							</button>

							<button <?php if ($_SESSION['tipouser']=='1') {printf("style=\"display: none;\"");} ?> class="btn btn-info" id="btn-perfil" onclick="carrega_dinamico('view/profile-entregador.php')">
								<span class="glyphicon glyphicon-user"></span>  Perfil
							</button>
						</div>
						<div class="col-md-12 btn-painel">
							<button class="btn btn-danger" id="btn-nova-remessa" onclick="logout()">
								<span class="glyphicon glyphicon-log-out"></span>  SAIR
							</button>
						</div>
						

					</div>
				</div>
			</div>

			<div class="col-md-9" id="conteudo-dinamico"> <!-- style="border: 2px solid red" -->
				<!-- conteudo ajax aqui -->
			</div>			

		</div> <!-- /container -->

	</div>  <!-- /main -->
<!-- /CONTEUDO -->