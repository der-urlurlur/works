<?php
$a=$_POST['history_number'];
$mass=array();
$db = new SQLite3('test.db');
$results = $db->query('SELECT * FROM history where id='.$a)->fetchArray();

echo json_encode($results);

