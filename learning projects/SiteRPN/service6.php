<?php

$db = new SQLite3('test.db');
$db->query('UPDATE progress set ProgChangeSelective= "0"');
$result=true;
echo json_encode($result);