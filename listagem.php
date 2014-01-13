<?php
include_once "conexao_bdo.php"; //conexao com o bdo

$stmt = $db->query('SELECT * FROM word');

var_dump($stmt);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['field'].''.$row['field2'];
}
?>
