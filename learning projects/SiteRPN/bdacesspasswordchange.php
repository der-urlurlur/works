<?php
$oldpassw=$_POST['Oldpassword'];
$newpassw=$_POST['Newpassword'];
$level=$_POST['level'];
$level=substr($level, -1);
$s='SELECT * FROM roles where level='.$level.' and password="'.$oldpassw.'"';
$db = new SQLite3('test.db');
$result = $db->query($s)->fetchArray();
if ($result!=false)
$db->query('UPDATE roles set password= "'.$newpassw.'" where level= '.$level.' and password= "'.$oldpassw.'"');
$s='SELECT * FROM roles where level='.$level.' and password="'.$newpassw.'"';
$result = $db->query($s)->fetchArray();
echo json_encode($result);
