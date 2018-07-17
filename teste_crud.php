<?php
include_once('class/mysql_crud.php');
//$url = 'http://localhost/agenda0912/';
$url = 'http://matias.byethost8.com/';
$resposta_view = isset($_GET['val'])?$_GET['val']:'inicio'; // resposta_view =  2

$limpar = isset($_GET['valor'])?$_GET['valor']:'';  // limpar = false

$tab = isset($_GET['tabela'])?$_GET['tabela']:'';


// numero da tabela gerado
$tabela = 'registro'.$_SESSION['num_tabela'];







// criar tabela dinâmica
if($tabela != ''){
	$db_registro = new Database();
	$db_registro->connect();
	$db_registro->sql('create table '.$tabela.'(
		id int not null auto_increment primary key,
		num int not null
		)');
	// inserir valor 1 na tabela
	$db_registro->sql('insert into '.$tabela.' values ("1", "1")');
	
}


// Limpar a tela volta tudo.
if($limpar == 'limpar'){
	$db_truncar = new Database();
	$db_truncar->connect();
	$db_truncar->sql('truncate registro'. $tab);
	header('Location: '.$url.'teste_view.php?val=1');
	var_dump($db_truncar->result);
}



// Busca os registros de atividade

$db = new Database();
$db->connect();
$db->select($tabela);
$res = $db->getResult(); 
$base_conta = count($res); // base_conta =  2


// Insere respostas do usuário

if($resposta_view /* = 2  */> $base_conta /*= 2 */){
	$db_insert = new Database();
	$db_insert->connect();
	$db_insert->insert($tabela,"".$resposta_view.", '".$resposta_view."'");
	header('Location: teste_view.php');
}


$tecnologia = $_SESSION['tecnologia'];
//var_dump($tecnologia); die();
switch ($tecnologia) {
	case 'radio':
	$tecnologia = 'base';
	break;

	case 'fibra':
	$tecnologia = 'base_fibra';
	break;

	case 'predio':
	$tecnologia = 'base_predio';
	break;

	case 'lentidao':
	$tecnologia = 'base_lentidao';
	break;
	
	default: 
	echo 'não tem base';
	break;
}
// Busca os registros da base
$db_busca_pergunta = new Database();
$db_busca_pergunta->connect();
$db_busca_pergunta->select($tecnologia); 
$res_base = $db_busca_pergunta->getResult(); // array bidimensional [0][a=>b]







// 

// Registro
for($i=0; $i<count($res) /*= 1*/ ;$i++){
	$valor =  fazPertunta($res[$i]['num']); // res[0][num] = 1
	$arr[$i] = $valor; 	
	$r = implode('', $arr);
}
$r = isset($r)? $r :'';
echo '<input id="resumo" type="hidden"  name="" value="'.$r.'">';

// Renderiza a próxima pergunta
function fazPertunta($val){
	$val--;
	global $res_base;

	
	// pergunta = 0

	

	echo '<div class="row">';

	echo'<div class="col-md-6 col-md-offset-3">';

	echo '<div class="card">';
	echo '<div class="card-image">';

	echo '</div>';

	echo '<div class="card-content">';
	echo '<p style="color: #666;">'.$res_base[$val]['pergunta'].'</p>';
	echo '</div>';
	echo '<div class="card-action">';
	echo '<button class="btn btn-info"><a href="teste_view.php?val='.$res_base[$val]['sim'].'">sim</a></button>';
	echo '<button class="btn btn-danger"><a href="teste_view.php?val='.$res_base[$val]['nao'].'">não</a></button>';

	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo'</div>';
	echo'</div>';

	$resumo = $res_base[$val]['id'];
	return $resumo;
	var_dump($res_base);die();
}










