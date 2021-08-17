<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>settings</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php


$db = new SQLite3('test.db');
$results = $db->query('select * from settings ORDER BY
  id DESC
LIMIT 1');
$row = $results->fetchArray();




?>


<form action="save.php" method="POST">
	<table>
	
		<tr>
			<td width="60%">
				<table border="1">
				
					<tr>
						<th colspan="2">РПН</th>
					</tr>
					<tr>
						<td width="90%">Тип контактора РПН</td>
						<td width="10%"><input type="text" id="rpn_type_contact" name="rpn_type_contact" value="<?php echo $row[0]?>"></td>
					</tr>
					<tr>
						<td>Тип привода</td>
						<td><input type="text" id="rpn_type" name="rpn_type" value="<?php echo $row[1]?>"></td>
					</tr>
					<tr>
						<td>Год выпуска</td>
						<td><input type="text" id="made_date" name="made_date" value="<?php echo $row[2]?>"></td>
					</tr>
					<tr>
						<td>Заводской №</td>
						<td><input type="text" id="serial" name="serial" value="<?php echo $row[3]?>"></td>
					</tr>
					<tr>
						<td>Номер среднего положения</td>
						<td><input type="number" id="num_median_pol" name="num_median_pol" value="<?php echo $row[4]?>"></td>
					</tr>
					<tr>
						<td>Число положений</td>
						<td><input type="number" id="num_pol" name="num_pol" value="<?php echo $row[5]?>"></td>
					</tr>
					<tr>
						<td>Число ступеней</td>
						<td><input type="number" id="num_step" name="num_step" value="<?php echo $row[6]?>"></td>
					</tr>
					<tr>
						<td>Коррекция положений</td>
						<td><input type="number" id="kor_pol" name="kor_pol" value="<?php echo $row[7]?>"></td>
					</tr>
					<tr>
						<td>Дата ввода в эксплуатацию</td>
						<td><input type="text" id="use_date" name="use_date" value="<?php echo $row[8]?>"></td>
					</tr>
					<tr>
						<td>Номер блокированной ступени</td>
						<td><input type="number" id="num_block_step" name="num_block_step" value="<?php echo $row[9]?>"></td>
					</tr>
					<tr>
						<td>Номинальный ток РПН</td>
						<td><input type="number" id="nominal_current_rpn" name="nominal_current_rpn" value="<?php echo $row[10]?>"></td>
					</tr>
					<tr>
						<td>Номинальный ток трансформатора</td>
						<td><input type="number" id="nominal_current_tr" name="nominal_current_tr" value="<?php echo $row[11]?>"></td>
					</tr>
					<tr>
						<td>Коэффициент трансформации ТТ</td>
						<td><input type="number" id="koeff_tt" name="koeff_tt" value="<?php echo $row[12]?>"></td>
					</tr>
				
				</table>
			</td>
			<td style="vertical-align: top">
				<table border="1">
				
					<tr>
						<th colspan="3"> Двигатель привода РПН</th>
					</tr>
					<tr>
						<td width="85%">Синхронные обороты</td>
						<td width="5%"><input type="number" id="synchro_turns" name="synchro_turns" value="<?php echo $row[13]?>"></td>
						<td width="10%">об/мин</td>
					</tr>
					<tr>
						<td>Обороты на выходе привода</td>
						<td><input type="number" id="turns_out" name="turns_out" value="<?php echo $row[14]?>"></td>
						<td>об/мин</td>
					</tr>
					<tr>
						<td>Мощность</td>
						<td><input type="number" id="power" name="power" value="<?php echo $row[15]?>"></td>
						<td>кВ</td>
					</tr>
					<tr>
						<td>Ток</td>
						<td><input type="number" id="current" name="current" value="<?php echo $row[16]?>"></td>
						<td>А</td>
					</tr>
					<tr>
						<td>Частота сети</td>
						<td><input type="number" id="frequ" name="frequ" value="<?php echo $row[17]?>"></td>
						<td>Гц</td>
					</tr>
					<tr>
						<td>Время переключения</td>
						<td><input type="number" id="time_swich" name="time_swich" value="<?php echo $row[18]?>"></td>
						<td>сек</td>
					</tr>
					<tr>
						<td>Номинальный вращающий момент</td>
						<td><input type="number" id="nominal_torque" name="nominal_torque" value="<?php echo $row[19]?>"></td>
						<td>Нм</td>
					</tr>
					
				</table>
				<table border="1">
				
					<tr>
						<th colspan="3">Датчики</th>
					</tr>
					<tr>
						<td width="85%">Температура масла в устройстве РПН</td>
						<td width="5%"><input type="number" id="temp_oil_rpn" name="temp_oil_rpn" value="<?php echo $row[20]?>"></td>
						<td width="10%">°C</td>
					</tr>
					<tr>
						<td>Температура масла в трансформаторе</td>
						<td><input type="number" id="temp_oil_tr" name="temp_oil_tr" value="<?php echo $row[21]?>"></td>
						<td>°C</td>
					</tr>
				
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="1">
				
					<tr>
						<th colspan="3">Установки</th>
					</tr>
					<tr>
						<td width="85%">Максимальный ток нагрузки через РПН</td>
						<td width="5%"><input type="number" id="max_cur_rpn" name="max_cur_rpn" value="<?php echo $row[22]?>"></td>
						<td width="10%">А</td>
					</tr>
					<tr>
						<td>Максимальный К нагрузки</td>
						<td><input type="number" id="max_k" name="max_k" value="<?php echo $row[23]?>"></td>
						<td>А</td>
					</tr>
					<tr>
						<td>Минимальная температура масла в устройстве РПН при которой возможно переключение</td>
						<td><input type="number" id="min_temp_oil_swich" name="min_temp_oil_swich" value="<?php echo $row[24]?>"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td>Минимальная температура масла в устройстве РПН при которой возможна эксплуатация</td>
						<td><input type="number" id="min_temp_oil_use" name="min_temp_oil_use" value="<?php echo $row[25]?>"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td>Максимальная температура масла в устройстве РПН при которой возможно переключение</td>
						<td><input type="number" id="max_temp_oil_swich" name="max_temp_oil_swich" value="<?php echo $row[26]?>"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td>Вторичный ток преобразователя канала измерения тока через РПН</td>
						<td><input type="number" id="current_secondary" name="current_secondary" value="<?php echo $row[27]?>"></td>
						<td>А</td>
					</tr>
					<tr>
						<td>Максимальное превышение температуры масла в устройстве РПН над температурой масла трансформатора</td>
						<td><input type="number" id="diff_temp" name="diff_temp" value="<?php echo $row[28]?>"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td>"Авария"</td>
						<td><input type="number" id="alarm" name="alarm" value="<?php echo $row[29]?>"></td>
						<td></td>
					</tr>
					<tr>
						<td>"Предавария"</td>
						<td><input type="number" id="warning" name="warning" value="<?php echo $row[30]?>"></td>
						<td></td>
					</tr>
				
				</table>
			</td>
			<td>
				<table border="1">
				
					<tr>
						<th colspan="2">Ресурс (количество переключений)</th>
					</tr>
					<tr>
						<td width="90%">Первая ревизия</td>
						<td width="10%"><input type="number" id="first_revision" name="first_revision" value="<?php echo $row[31]?>"></td>
					</tr>
					<tr>
						<td>Межревизионные проверки</td>
						<td><input type="number" id="intervision_checks" name="intervision_chechs" value="<?php echo $row[32]?>"></td>
					</tr>
					<tr>
						<td>Замена контакора</td>
						<td><input type="number" id="change_cont" name="change_cont" value="<?php echo $row[33]?>"></td>
					</tr>
					<tr>
						<td>Проба масла</td>
						<td><input type="number" id="oil_probe" name="oil_probe" value="<?php echo $row[34]?>"></td>
					</tr>
					<tr>
						<td>Замена масла</td>
						<td><input type="number" id="oil_change" name="oil_change" value="<?php echo $row[35]?>"></td>
					</tr>
					<tr>
						<td>Замена избирателя</td>
						<td><input type="number" id="selector_change" name="selector_change" value="<?php echo $row[36]?>"></td>
					</tr>
					<tr>
						<td>Электрический износ</td>
						<td><input type="number" id="electric_wearout" name="electric_wearout" value="<?php echo $row[37]?>"></td>
					</tr>
					<tr>
						<td>Механический износ</td>
						<td><input type="number" id="mechanic_wearout" name="mechanic_wearout" value="<?php echo $row[38]?>"></td>
					</tr>
					<tr>
						<td>Минимально в год</td>
						<td><input type="number" id="min_in_year" name="min_in_year" value="<?php echo $row[39]?>"></td>
					</tr>
				
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="1">
				
					<tr>
						<th colspan="2">Ресурс (года)</th>
					</tr>
					<tr>
						<td width="90%">Первая ревизия</td>
						<td width="10%"><input type="number" id="first_revision_2" name="first_revision_2" value="<?php echo $row[40]?>"></td>
					</tr>
					<tr>
						<td>Межревизионные проверки</td>
						<td><input type="number" id="intervision_check" name="intervision_check" value="<?php echo $row[41]?>"></td>
					</tr>
					<tr>
						<td>Проба масла</td>
						<td><input type="number" id="sample_oil" name="sample_oil" value="<?php echo $row[42]?>"></td>
					</tr>
					<tr>
						<td>Замена масла</td>
						<td><input type="number" id="change_oil" name="change_oil" value="<?php echo $row[43]?>"></td>
					</tr>
				
				</table>
			</td>
		</tr>
	
	</table>
	<div align="right">
	<button type="button" onClick="window.location.href='measure.php';">Назад</button>
		
	</div>
	<div align="left">
<input type="submit" value="Сохранить" id="b2">		
	</div>
</form>
<script>
console.log(document.getElementsByTagName('input'));
for (var i=0;i<=52;i++) {
if (localStorage.getItem('settings_write')=='true') document.getElementsByTagName('input')[i].removeAttribute('disabled'); 
if (localStorage.getItem('settings_write')=='false') document.getElementsByTagName('input')[i].setAttribute('disabled', true );	  

}

</script>
</body>
</html>
