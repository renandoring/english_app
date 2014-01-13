<?php
/* Conectar com o banco de dados da aplicação PDO */
define('HOST', '127.0.0.1');
define('PORT', '3306');
define('USER', 'root');
define('PASS', '020906');
define('BD', 'english_app');

try {
    $dsn = "mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . BD;
    $conexao = new PDO($dsn, USER, PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "CONECTADO COM SUCESSO" . PHP_EOL;
    
    /*QUERY SELECT BDO*/
    $sql = "SELECT * FROM words";
    
    $results = $conexao->query($sql);
        
    foreach ($results as $row)
    {
    echo $row['pal_eng'].'<br />'.$row['pal_port'];
    }
} catch (PDOException $ex) {
    echo "Erro ao conectar com o banco!" . $ex->getMessage();
}

?>
