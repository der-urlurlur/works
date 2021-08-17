<?php
$db = new SQLite3('test.db');
$length = $db->query('SELECT COUNT(1) FROM logs');
$value=$length->fetchArray();
$fid = $db->query('SELECT id FROM logs ORDER BY
id LIMIT 1')->fetchArray();
$lid=$fid[0]+$value[0];
$mass=array();
for ($i = $fid[0]; $i <$lid; $i++) {
    $results = $db->query('select * from logs where id='.$i);
    if ($results->fetchArray()==false)
    {
      $lid++;
      $i++;
      $results = $db->query('select * from logs where id='.$i);
    }
    $results = $db->query('select * from logs where id='.$i);
    array_push($mass,$results->fetchArray());
    if($mass[count($mass)-1]['type']=='Аварийное')
    {
      array_push($mass[count($mass)-1],'IndianRed','black');

    }
    if($mass[count($mass)-1]['type']=='Информационное')
    {
      array_push($mass[count($mass)-1],'lightgray','black');

    }
    if($mass[count($mass)-1]['type']=='Предаварийное')
    {
      array_push($mass[count($mass)-1],'yellow','black');

    }
    if($mass[count($mass)-1]['type']=='КТС')
    {
      array_push($mass[count($mass)-1],'aqua','black');

    }
  }
echo json_encode($mass);