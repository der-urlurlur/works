<?php

$db = new SQLite3('test.db');
$db->query('UPDATE progress set ProgProbOil= "0"');
$result=true;
echo json_encode($result);