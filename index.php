<?php include_once 'template/header.php' ?>
		<!-- Imagem -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="margin-top:; display: flex; justify-content: center;" >
				<img src="img/agenda.png" class="img-responsive">
			</div>
		</div>

		<!-- Busca -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" >
				<div class="input-group">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit" style="height: 3.45rem; background-color: #99E0EC; color: #fff;">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
					<input type="text" class="form-control" placeholder="Cidade" id="cidade">
				</div>
			</div>
		</div><br>

		<!-- Tabs -->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Técnicos</a></li>
					<li><a data-toggle="tab" href="#menu1">Repetidores(PNG)</a></li>
					<li><a data-toggle="tab" href="#menu2">Sábados</a></li>
				</ul>
				<div class="tab-content">

					<!-- Tecnicos lista -->
					<div id="home" class="tab-pane fade in active">
						<div class="row" style="margin-top: 2rem">
							<div class="col-md-12" >
								<div class="input-group append">
									<!-- Nome do técnico via JS -> js/custom.js -->
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Nome</th>
												<th>Visitas</th>
												<th>Observação</th>
											</tr>
										</thead>
										<tbody class="tb">
										</tbody>
									</table>

								</div>
							</div>
						</div>
					</div>

					<!-- Repetidores -->
					<div id="menu1" class="tab-pane fade">
						<div class="col-md-12" style="margin:2rem 0; display: flex; justify-content: center;" >
							<img class="img-responsive" src="img/repetidores.png">
						</div>
					</div>

					<!-- Sábados -->
					<div id="menu2" class="tab-pane fade">
						<div class="col-md-12" style="margin:2rem 0; display: flex; justify-content: center;" >
							<div class="col-md-12" style="margin:2rem 0; display: flex; justify-content: center;" >
								<img class="img-responsive" src="img/sabados.png">
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-3"></div>	
		</div>

<?php include_once 'template/footer.php' ?>
<script type="text/javascript" src="js/custom.js"></script>
