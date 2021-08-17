<?php
$db = new SQLite3('test.db');
$results = $db->query('select * from settings ORDER BY
id DESC
LIMIT 1');
$row = $results->fetchArray();
 
  $row[0] = $_POST["rpn_type_contact"];
  $row[1] = $_POST["rpn_type"];
  $row[2] = $_POST["made_date"];
  $row[3] = $_POST["serial"];
  $row[4] = $_POST["num_median_pol"];
  $row[5] = $_POST["num_pol"];
  $row[6] = $_POST["num_step"];
  $row[7] = $_POST["kor_pol"];
  $row[8] = $_POST["use_date"];
  $row[9] = $_POST["num_block_step"];
  $row[10] = $_POST["nominal_current_rpn"];
  $row[11] = $_POST["nominal_current_tr"];
  $row[12] = $_POST["koeff_tt"];
  $row[13] = $_POST["synchro_turns"];
  $row[14] = $_POST["turns_out"];
  $row[15] = $_POST["power"];
  $row[16] = $_POST["current"];
  $row[17] = $_POST["frequ"];
  $row[18] = $_POST["time_swich"];
  $row[19] = $_POST["nominal_torque"];
  $row[20] = $_POST["temp_oil_rpn"];
  $row[21] = $_POST["temp_oil_tr"];
  $row[22] = $_POST["max_cur_rpn"];
  $row[23] = $_POST["max_k"];
  $row[24] = $_POST["min_temp_oil_swich"];
  $row[25] = $_POST["min_temp_oil_use"];
  $row[26] = $_POST["max_temp_oil_swich"];
  $row[27] = $_POST["current_secondary"];
  $row[28] = $_POST["diff_temp"];
  $row[29] = $_POST["alarm"];
  $row[30] = $_POST["warning"];
  $row[31] = $_POST["first_revision"];
  $row[32] = $_POST["intervision_chechs"];
  $row[33] = $_POST["change_cont"];
  $row[34] = $_POST["oil_probe"];
  $row[35] = $_POST["oil_change"];
  $row[36] = $_POST["selector_change"];
  $row[37] = $_POST["electric_wearout"];
  $row[38] = $_POST["mechanic_wearout"];
  $row[39] = $_POST["min_in_year"];
  $row[40] = $_POST["first_revision_2"];
  $row[41] = $_POST["intervision_check"];
  $row[42] = $_POST["sample_oil"];
  $row[43] = $_POST["change_oil"];
  
  $sql = "INSERT INTO settings 
  (
  rpn_type_contact,
  rpn_type,
  made_date,
  serial,
  num_median_pol,
  num_pol,
  num_step,
  kor_pol,
  use_date,
  num_block_step,
  nominal_current_rpn,
  nominal_current_tr,
  koeff_tt,
  synchro_turns,
  turns_out,
  power,
  current,
  frequ,
  time_swich,
  nominal_torque,
  temp_oil_rpn,
  temp_oil_tr,
  max_cur_rpn,
  max_k,
  min_temp_oil_swich,
  min_temp_oil_use,
  max_temp_oil_swich,
  current_secondary,
  diff_temp,
  alarm,
  warning,
  first_revision,
  intervision_chechs,
  change_cont,
  oil_probe,
  oil_change,
  selector_change,
  electric_wearout,
  mechanic_wearout,
  min_in_year,
  first_revision_2,
  intervision_check,
  sample_oil,
  change_oil
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
  {$row[40]},
  {$row[41]},
  {$row[42]},
  {$row[43]}
  )";
 
$db->exec($sql);
header('Location:measure.php');
  exit;