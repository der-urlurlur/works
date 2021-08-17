<?php
$db = new SQLite3('test.db');
$results = $db->query('select * from data ORDER BY
id DESC
LIMIT 1');
$row = $results->fetchArray();
$row[0] = $row[0]+1;
$row[1] = $row[1]+1;
$row[2] = $row[2]+1;
$row[3] = $row[3]+1;
$row[4] = $row[4]+1;
$row[5] = $row[5]+1;
$row[6] = $row[6]+1;
$row[7] = $row[7]+1;
$row[8] = $row[8]+1;
$row[9] = $row[9]+1;
$row[10] = $row[10]+1;
$row[11] = $row[11]+1;
$row[12] = $row[12]+1;
$row[13] = $row[13]+1;
$row[14] = $row[14]+1;
$row[15] = $row[15]+1;
$row[16] = $row[16]+1;
$row[17] = $row[17]+1;
$row[18] = $row[18]+1;
$row[19] = $row[19]+1;
$row[20] = $row[20]+1;
$row[21] = $row[21]+1;
$row[22] = $row[22]+1;
$row[23] = $row[23]+1;
$row[24] = $row[24]+1;
$row[25] = $row[25]+1;
$row[26] = $row[26]+1;
$row[27] = $row[27]+1;
$row[28] = $row[28]+1;
$row[29] = $row[29]+1;
$row[30] = $row[30]+1;
$row[31] = $row[31]+1;
$row[32] = $row[32]+1;
$row[33] = $row[33]+1;
$row[34] = $row[34]+1;
$row[35] = $row[35]+1;
$row[36] = $row[36]+1;
$row[37] = $row[37]+1;
$row[38] = $row[38]+1;
$row[39] = $row[39]+1;
$row[40] = $row[40]+1;


  
$sql = "INSERT INTO data
  (
    Theater,
    Irpn,
    Tvsn,
    IdriveRPN,
    ToilRPN,
    Time,
    DeltaT,
    K,
    MaxMoment,
    Moment,
    Revision,
    DataLastRevision,
    DataNextRevision,
    CountLastRevision,
    CountNextRevision,
    ProbOil,
    DataLastProbOil,
    DataNextProbOil,
    CountLastProbOil,
    CountNextProbOil,
    ChangeOil,
    DataLastChangeOil,
    DataNextChangeOil,
    CountLastChangeOil,
    CountNextChangeOil,
    ChangeContact,
    DataLastChangeContact,
    DataNextChangeContact,
    CountLastChangeContact,
    CountNextChangeContact,
    ChangeContactor,
    DataLastChangeContactor,
    DataNextChangeContactor,
    CountLastChangeContactor,
    CountNextChangeContactor,
    ChangeSelective,
    DataLastChangeSelective,
    DataNextChangeSelective,
    CountLastChangeSelective,
    CountNextChangeSelective,
    id
  ) 
  VALUES 
 ({$row[0]},
  {$row[1]},
  {$row[2]},
  {$row[3]},
  {$row[4]},
  {$row[5]},
  {$row[6]},
  {$row[7]},
  {$row[8]},
  {$row[9]},
  {$row[10]},
  {$row[11]},
  {$row[12]},
  {$row[13]},
  {$row[14]},
  {$row[15]},
  {$row[16]},
  {$row[17]},
  {$row[18]},
  {$row[19]},
  {$row[20]},
  {$row[21]},
  {$row[22]},
  {$row[23]},
  {$row[24]},
  {$row[25]},
  {$row[26]},
  {$row[27]},
  {$row[28]},
  {$row[29]},
  {$row[30]},
  {$row[31]},
  {$row[32]},
  {$row[33]},
  {$row[34]},
  {$row[35]},
  {$row[36]},
  {$row[37]},
  {$row[38]},
  {$row[39]},
  {$row[40]}
  )";

$db->exec($sql);
echo $db->changes();