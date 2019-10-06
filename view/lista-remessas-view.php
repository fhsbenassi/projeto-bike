<?php 

require_once '../controller/remessa-controller.php';

$objRemessaController = new RemessaController();
$array = $objRemessaController->listar();

// foreach ($array as $row) {
// 	print_r($row);
// }
//var_dump($array);
?>
<div class="panel panel-info">
	<div class="panel-heading">Lista de Remessas</div>

	<div class="panel-body">

		<!-- ============CONTEUDO============== -->
		<div class="col-md-12">

			<div class="panel panel-default">
				<div class="panel-body">					
					<div class="col-md-4">
						<select id="tipovolume" name="tipovolume" class="form-control">
							<option value="">-- Selecione  --</option>
							<option value="1">Data</option>
							<option value="2">Carga</option>
							<option value="3">Código</option>										
						</select>
					</div>
					<button id="Buscar" name="Buscar" class="btn btn-success" type="button">Buscar</button>					
				</div>
			</div>

			<div id="lista-remessas" class="col-md-12">						
				<table class="table table-striped">
					<thead class="thead-light">
						<tr>
							<th>Cod.</th>
							<th>Data</th>
							<th>Quantidade</th>
							<th>Carga</th>									
							<th>Destino</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($array as $row) {
							switch($row['tipoVolume']){
								case 1: $tipoVolume = "Caixa"; break;
								case 2: $tipoVolume = "Pacote"; break;
								case 3: $tipoVolume = "Envelope"; break;
								default: $tipoVolume = "Outros"; break;} ?>
								<!-- <form> -->
								<tr>																	
									<td><?= $row['pk_codigoRemessa'];?> </td>
									<td><?= $row['dtRemessa'];?></td>
									<td><?= $row['quantidade'];?></td>
									<td><?= $tipoVolume;?></td>						
									<td>Bairro <?= $row['bairro'];?></td>
									<td>
										<form method="post" action="?pagina=remessa-view" id="<?= $row['pk_codigoRemessa'];?>" >
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
										<button type="Submit" class="btn btn-success btn-sm" >Visualizar</button> <!-- onclick="exibe_remessa(codigo.value,'view/remessa-view.php')" -->
										</form>
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