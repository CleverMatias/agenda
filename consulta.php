<?php 
// Dados da conexão com o banco de dados
define('SERVER', 'sql109.byethost8.com');
define('DBNAME', 'b8_21086127_teste_db');
define('USER', 'b8_21086127');
define('PASSWORD', 'cle546546ver');

// define('SERVER', 'localhost');
// define('DBNAME', 'bkp_agenda');
// define('USER', 'root');
// define('PASSWORD', '');

// Recebe os parâmetros enviados via GET
$acao = (isset($_GET['acao'])) ? $_GET['acao'] : ''; // autocomplete ou consulta
$parametro = (isset($_GET['parametro'])) ? $_GET['parametro'] : ''; // valor do campo cidade

// Configura uma conexão com o banco de dados
$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
$conexao = new PDO("mysql:host=".SERVER."; dbname=".DBNAME, USER, PASSWORD, $opcoes);

// Verifica se foi solicitado uma consulta  para o autocomplete
if($acao == 'autocomplete'):
	$where = (!empty($parametro)) ? 'WHERE nome LIKE ?' : '';
$sql = "SELECT nome FROM cidades " . $where;

$stm = $conexao->prepare($sql);
$stm->bindValue(1, '%'.$parametro.'%');
$stm->execute();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);

$json = json_encode($dados);
echo $json;
endif;

// Verifica se foi solicitado uma consulta para preencher os campos do formulário
if($acao == 'consulta'):
	$sql;
	//$sql = "SELECT tecnicos."."nome, tecnicos.id FROM tecnicos JOIN cidades WHERE cidades."."nome LIKE ? and cidades."."id = tecnicos."."cid_id";

$sql = "select t.nome, t.visitas, t.observacao, c.nome as cnome from tecnicos as t join cid_tec ct
on t.id = ct.tecnicos_id
join cidades c
on c.id = ct.cidades_id
where c.nome like ?
order by t.nome";

$stm = $conexao->prepare($sql);
$stm->bindValue(1, $parametro.'%');
$stm->execute();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);

$json = json_encode($dados);
echo $json;
endif;