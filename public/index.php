<?php
//(__FILE__, 2) -> diretorio principal
require_once(dirname(__FILE__, 2) . '/src/config/database.php');

$slq = 'SELECT * FROM users';
$result = Database::getResultFromQuery($slq);

while($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}