<?php
$db = new SQLite3('test.db');
$results = $db->query('select * from progress ORDER BY
  id DESC
LIMIT 1');
$row = $results->fetchArray();

echo json_encode($row);
