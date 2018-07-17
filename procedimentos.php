<?php 
include_once 'template/header.php';
//$url = 'http://localhost/agenda0912/';
$url = 'http://matias.byethost8.com/';
?>
<?php 
$protocolo_voltar = isset($_GET['protocolo_voltar'])?$_GET['protocolo_voltar']:'';
$nome_voltar = isset($_GET['nome_voltar'])?$_GET['nome_voltar']:'';
$telefone_voltar = isset($_GET['telefone_voltar'])?$_GET['telefone_voltar']:'';
$problema_voltar = isset($_GET['problema_voltar'])?$_GET['problema_voltar']:'';
$limpar = isset($_GET['limpar'])?$_GET['limpar']:'';


$protocolo = isset($_GET['protocolo'])?$_GET['protocolo']:'';
$nome = isset($_GET['nome'])?$_GET['nome']:'';
$telefone = isset($_GET['telefone'])?$_GET['telefone']:'';
$problema = isset($_GET['problema'])?$_GET['problema']:'';
$tecnologia = isset($_GET['tecnologia'])?$_GET['tecnologia']:'';
$session = isset($_GET['session'])?$_GET['session']:'';
session_start();
$_SESSION['protocolo'] = $protocolo;
$_SESSION['nome'] = $nome;
$_SESSION['telefone'] = $telefone;
$_SESSION['problema'] = $problema;
$_SESSION['tecnologia'] = $tecnologia;

if(($_SESSION['protocolo']) && ($tecnologia == 'padrao')){
	header('Location: '.$url.'padrao.php');
	die();
}

if($session == 'clean'){
	if (!isset($_SESSION['num_tabela'])) {
		$_SESSION['num_tabela'] = '';
	}
	include_once 'class/mysql_crud.php';
	$db_truncar = new Database();
	$db_truncar->connect();
	$db_truncar->sql('Drop table registro'. $_SESSION['num_tabela']);
	session_destroy();
}

if(isset($_SESSION['num_tabela'])){
    include_once 'class/mysql_crud.php';
	$db_truncar = new Database();
	$db_truncar->connect();
	$db_truncar->sql('Drop table registro'. $_SESSION['num_tabela']);
}

if($tecnologia != ''){
	$_SESSION['num_tabela'] = time();
}
if($_SESSION['protocolo']){
	header('Location: '.$url.'teste_view.php?val=1');
}

if($limpar != ''){
	header('Location: '.$url.'procedimentos.php?protocolo=');
}

if(($tecnologia != '')  && ($protocolo == '')){
	$alerta = '<p style="color: red">Preencha o protocolo!</p>';
}

?>
<!-- Imagem -->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="margin-top:; display: flex; justify-content: center;" >
		<img src="img/procedimentos.jpg" class="img-responsive">
	</div>
</div>

<form action="<?php echo $url; ?>procedimentos.php">
	<div class="row" style="margin-top: 1rem">
		<div class="col-md-6 col-md-offset-3" style="margin-top:; display: flex; flex-direction: column;" >
			<div class="input-group">
				<span class="input-group-addon">Protocolo: </span>

				<input id="msg" type="text" autocomplete="off" class="form-control" name="protocolo" value="<?php echo $protocolo_voltar ?>">
			</div>

			<div class="input-group">
				<span class="input-group-addon" style="padding-right: 2.45em;">Nome: </span>
				<input id="msg" type="text" autocomplete="off" class="form-control" name="nome" value="<?php echo $nome_voltar ?>">
			</div>

			<div class="input-group">
				<span class="input-group-addon">Problema: </span>
				<input id="msg" type="text" class="form-control" name="problema" value="<?php echo $problema_voltar ?>">
			</div>

			<div class="input-group">
				<span style="padding-right: 1.41em;" class="input-group-addon">Telefone: </span>
				<input id="msg" type="text" autocomplete="off" class="form-control" name="telefone" value="<?php echo $telefone_voltar?>">
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo isset($alerta)?$alerta:''; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-offset-3" style="margin-top:2rem; display: flex;" >
			<button type='submit' name="limpar" value="limpar"  style="margin-right: 10px;" class="btn btn-default"><a style="text-decoration: none; color: inherit;">Limpar</a></button>
			<button type='submit' name="tecnologia" value="padrao"  style="margin-right: 10px;" class="btn btn-default"><a style="text-decoration: none; color: inherit;">Máscara Padrão</a></button>
		</div>

	</div>

	<div class="row">
		
		<div class="col-sm-2 col-md-offset-3" style="margin-top:2rem; display: flex;" >
			<button type='submit' name="tecnologia" value="radio"  style="margin-right: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit;">Desconexão rádio</a></button>
		</div>
		<div class="col-sm-2" style="margin-top:2rem; display: flex;" >
			<button type='submit' name="tecnologia" value="fibra"  style="margin-right: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit;">Desconexão fibra</a></button>
		</div>
		<div class="col-sm-2" style="margin-top:2rem; display: flex;">
			<button type='submit' name="tecnologia" value="predio"  style="margin-right: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit;">Desconexão Prédio</a></button>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-2 col-md-offset-3" style="margin-top:2rem; display: flex;" >
			<button type='submit' name="tecnologia" value="lentidao"  style="margin-right: 10px;" class="btn btn-danger"><a style="text-decoration: none; color: inherit;">Lentidão</a></button>
		</div>
	</div>
</form>

<?php include_once 'template/footer.php' ?>