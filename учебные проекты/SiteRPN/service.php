<?php

$db = new SQLite3('test.db');
$db->query('UPDATE progress set ProgRevision= "0"');

if($level==0 && $passw==null)
$result=true;
echo json_encode($result);