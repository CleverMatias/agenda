<?php


$mysqli = new mysqli("localhost", "root", "", "bkp_agenda");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Select queries return a resultset */
if ($result = $mysqli->query("SELECT * FROM registro")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    $row = mysqli_fetch_row($result);

    $num = $result->num_rows;
    for($i=0; $i<=$num; $i++){
      echo "<br>" . $row[1];
    }



    /* free result set */
    $result->close();

    

}


$mysqli->close();

?>




// Base de dados
 $base = array(
  10 => array(
    'id' => 0,
  'pergunta' => 'pergunta0',
    'sim' => 10,
    'nao' => 40,
    ),
  1 => array(
    'id' => 111,
    'pergunta' => 'pergunta1',
    'sim' => 40,
    'nao' => 40,
    ),
  40 => array(
    'id' => 4000,
    'pergunta' => 'pergunta40',
    'sim' => 0,
    'nao' => 45,
    )
  );









// Gerador da pergunta
function fazPertunta($val){
  global $base, $pergunta_corrente;
  echo '<p>'.$base[$val]['pergunta'].'<a href="teste.php?val='.$base[$val]['sim'].'">sim</a></p>';
 }



// Apresentador da pergunta

  for($i=0; $i<=$registro ;$i++){
    
  
    //fazPertunta($dados[$i]);
  
  }



