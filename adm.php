<?php

require_once 'db.php';

$pdo = $db->prepare("SELECT * FROM cliente");
$pdo->execute();

while ($linha = $pdo->fetch(PDO::FETCH_ASSOC)) {
	echo 'cidade: '.$linha['cidade'].'<br>'.'cep: '.$linha['cep'].'<br>'.'pais: '.$linha['pais'].'<br>'.'ip: '.$linha['ip'].'<br>'.'latitude: '.$linha['latitude'].'<br>'.'longitude: '.$linha['longitude'].'<br>'.'empresa: '.$linha['empresa'].'<br>'.'<br>';
}

?>