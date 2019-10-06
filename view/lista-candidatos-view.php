<?php 

if (isset($_GET['pagina'])){
  $escolha = ($_GET['pagina']);
  if ($escolha == 'candidatos') {
    require_once 'controller/remessa-controller.php'; 
        //echo "model sem pontos";
  }else {
    require_once '../controller/remessa-controller.php';
        //echo "model com pontos";
  }
}else {
  //require_once '../controller/remessa-controller.php';
        //echo "sem setar get";
}
//require_once '../controller/remessa-controller.php';

$objRemessaController = new RemessaController();
$array_candidatos = $objRemessaController->listar_candidatos($_POST['codigoRemessa2']);
//var_dump($array_candidatos);
//exit();

if(!empty($_POST)){}else{
  echo "o _POST ta vazio";
  exit();
}

$array_remessa = $_POST;

// foreach ($array as $row) {
// 	print_r($row);
// }
//var_dump($array);
?>


<div class="main">
  <div class="container" id="container_cadastro">

<div class="panel panel-info">
	<div class="panel-heading">Lista de Candidatos</div>

	<div class="panel-body">

		<!-- ============CONTEUDO============== -->
		<div class="col-md-12">

			
			<div id="lista-remessas" class="col-md-12">						
				<table class="table table-striped">
					<thead class="thead-light">
						<tr>
							<th>Cod.</th>
							<th>Data</th>
							<th>Destino</th>
							<th>Candidato</th>						
						</tr>
					</thead>
					<tbody>	
					<?php foreach ($array_candidatos as $row) {
						//var_dump($row);
						//exit();
						?>						
								<tr>																	
									<td><?= $row['pk_codigoRemessa'];?> </td>
									<td><?= $row['dtRemessa'];?></td>
									<td>Bairro <?= $row['bairro'];?></td>						
									<td><?= $row['nomeUser'];?></td>
									<td>
										<form method="post" action="?pagina=candidatos" id="<?= $row['pk_codigoRemessa'];?>" >
										<input type="hidden" name="pk_codigoRemessa" id="pk_codigoRemessa" value="<?php echo $row['pk_codigoRemessa'];?>">
										<input type="hidden" name="status" id="status" value="<?php echo $row['status'];?>">
										<input type="hidden" name="quantidade" id="quantidade" value="<?php echo $row['quantidade'];?>">
										<input type="hidden" name="peso" id="peso" value="<?php echo $row['peso'];?>">
										<input type="hidden" name="fragilidade" id="fragilidade" value="<?php echo $row['fragilidade'];?>">
										<input type="hidden" name="dtRemessa" id="dtRemessa" value="<?php echo $row['dtRemessa'];?>">
										<input type="hidden" name="tipoVolume" id="tipoVolume" value="<?php echo $row['tipoVolume'];?>">
										<input type="hidden" name="fk_codigoContratante" id="fk_codigoContratante" value="<?php echo $row['fk_codigoContratante'];?>">
										<input type="hidden" name="fk_codigoDestinatario" id="fk_codigoDestinatario" value="<?php echo $row['fk_codigoDestinatario'];?>">
										<input type="hidden" name="fk_codigoEnderecoColeta" id="fk_codigoEnderecoColeta" value="<?php echo $row['fk_codigoEnderecoColeta'];?>">
										<input type="hidden" name="fk_codigoEntregador" id="fk_codigoEntregador" value="<?php echo $row['fk_codigoEntregador'];?>">
										<input type="hidden" name="nomeDestinatario" id="nomeDestinatario" value="<?php echo $row['nomeDestinatario'];?>">
										<input type="hidden" name="emailDestinatario" id="emailDestinatario" value="<?php echo $row['emailDestinatario'];?>">
										<input type="hidden" name="fk_codigoEndereco" id="fk_codigoEndereco" value="<?php echo $row['fk_codigoEndereco'];?>">
										<input type="hidden" name="fk_codigoTelefone" id="fk_codigoTelefone" value="<?php echo $row['fk_codigoTelefone'];?>">
										<input type="hidden" name="cep" id="cep" value="<?php echo $row['cep'];?>">
										<input type="hidden" name="bairro" id="bairro" value="<?php echo $row['bairro'];?>">
										<input type="hidden" name="logradouro" id="logradouro" value="<?php echo $row['logradouro'];?>">
										<input type="hidden" name="numero" id="numero" value="<?php echo $row['numero'];?>">
										<input type="hidden" name="complemento" id="complemento" value="<?php echo $row['complemento'];?>">
										<input type="hidden" name="fk_codigoCidade" id="fk_codigoCidade" value="<?php echo $row['fk_codigoCidade'];?>">
										<input type="hidden" name="celular" id="celular" value="<?php echo $row['celular'];?>">
										<input type="hidden" name="fixo" id="fixo" value="<?php echo $row['fixo'];?>">
										<button type="Submit" class="btn btn-primary btn-sm" >Aceitarr</button> <!-- onclick="exibe_remessa(codigo.value,'view/remessa-view.php')" -->
										</form>
									</td>
									<td>
										<a href="https://api.whatsapp.com/send?phone=55<?php echo $row['celular']; ?>&text=Olá! Vi que se candidatou para entregar minha encomenda. Vamos conversar!?" target="_blank" class="btn btn-success btn-sm" type="Submit">Enviar Mensagem</a>
									</td>

								</tr>
								<!-- </form> -->
							<?php }?>
						</tbody>
					</table>					
				</div>

			</div>

			<!-- =============/CONTEUDO============= -->

		</div> <!-- /panel-body --> 
	</div>
</div>
</div>