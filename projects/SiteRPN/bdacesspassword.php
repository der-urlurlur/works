<?php
$passw=$_POST['password'];
$level=$_POST['level'];
$level=substr($level, -1);
$s='SELECT * FROM roles where level='.$level.' and password="'.$passw.'"';
$db = new SQLite3('test.db');
$result = $db->query($s)->fetchArray();

if($level==0 && $passw==null)
$result=true;
echo json_encode($result);
