<?php
$db = new SQLite3('test.db');
$results = $db->query('select * from data ORDER BY id DESC LIMIT 1')->fetchArray();
echo json_encode($results);
