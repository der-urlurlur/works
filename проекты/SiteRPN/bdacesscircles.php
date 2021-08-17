<?php
$mass=array();
$db = new SQLite3('test.db');
if ($db){$check=1;}
else{$check=1;}
$results = $db->query('SELECT COUNT(*) FROM logs where type="Аварийное"');
$row = $results->fetchArray();
array_push($mass,$row);
$results = $db->query('SELECT COUNT(*) FROM logs where type="Предаварийное"');
$row = $results->fetchArray();

array_push($mass,$row);
array_push($mass,$check);
echo json_encode($mass);