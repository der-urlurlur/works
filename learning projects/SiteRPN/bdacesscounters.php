<?php
$db = new SQLite3('test.db');
$results = $db->query('SELECT * FROM counters order by id DESC LIMIT 1')->fetchArray();
for ($i = 0; $i <=83; $i++)
unset($results[$i]);
unset($results['id']);
echo json_encode($results);
