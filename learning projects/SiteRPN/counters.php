<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>counters</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>

</head>

<body>


	<h1>Счетчики переключений</h1>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="70%" rowspan="2">
				<table width="100%" border="1">
					<tr>
						<th scope="col">&nbsp;</th>
						<th scope="col" style="text-align: center">механич.;</th>
						<th scope="col" style="text-align: center">электрич.;</th>
						<th colspan="4" style="text-align: center">время работы</th>
					</tr>
					<tr>
						<td width="50%">Положение №1</td>
						<td width="10%" id="count_pol1_mech" style="text-align: center;"></td>
						<td width="10%" id="count_pol1_el" style="text-align: center;"></td>
						<td width="10%" id="count_pol1_sec" style="text-align: right;"></td>
						<td width="5%">сек.</td>
						<td width="10%" id="count_pol1_hour" style="text-align: right;"></td>
						<td width="5%">ч.</td>
					</tr>
					<tr>
						<td>Положение №2</td>
						<td id="count_pol2_mech" style="text-align: center;"></td>
						<td id="count_pol2_el" style="text-align: center;"></td>
						<td id="count_pol2_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol2_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №3</td>
						<td id="count_pol3_mech" style="text-align: center;"></td>
						<td id="count_pol3_el" style="text-align: center;"></td>
						<td id="count_pol3_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol3_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №4</td>
						<td id="count_pol4_mech" style="text-align: center;"></td>
						<td id="count_pol4_el" style="text-align: center;"></td>
						<td id="count_pol4_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol4_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №5</td>
						<td id="count_pol5_mech" style="text-align: center;"></td>
						<td id="count_pol5_el" style="text-align: center;"></td>
						<td id="count_pol5_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol5_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №6</td>
						<td id="count_pol6_mech" style="text-align: center;"></td>
						<td id="count_pol6_el" style="text-align: center;"></td>
						<td id="count_pol6_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol6_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №7</td>
						<td id="count_pol7_mech" style="text-align: center;"></td>
						<td id="count_pol7_el" style="text-align: center;"></td>
						<td id="count_pol7_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol7_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №8</td>
						<td id="count_pol8_mech" style="text-align: center;"></td>
						<td id="count_pol8_el" style="text-align: center;"></td>
						<td id="count_pol8_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol8_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №9</td>
						<td id="count_pol9_mech" style="text-align: center;"></td>
						<td id="count_pol9_el" style="text-align: center;"></td>
						<td id="count_pol9_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol9_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №10</td>
						<td id="count_pol10_mech" style="text-align: center;"></td>
						<td id="count_pol10_el" style="text-align: center;"></td>
						<td id="count_pol10_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol10_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №11</td>
						<td id="count_pol11_mech" style="text-align: center;"></td>
						<td id="count_pol11_el" style="text-align: center;"></td>
						<td id="count_pol11_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol11_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №12</td>
						<td id="count_pol12_mech" style="text-align: center;"></td>
						<td id="count_pol12_el" style="text-align: center;"></td>
						<td id="count_pol12_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol12_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №13</td>
						<td id="count_pol13_mech" style="text-align: center;"></td>
						<td id="count_pol13_el" style="text-align: center;"></td>
						<td id="count_pol13_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol13_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №14</td>
						<td id="count_pol14_mech" style="text-align: center;"></td>
						<td id="count_pol14_el" style="text-align: center;"></td>
						<td id="count_pol14_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol14_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №15</td>
						<td id="count_pol15_mech" style="text-align: center;"></td>
						<td id="count_pol15_el" style="text-align: center;"></td>
						<td id="count_pol15_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol15_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №16</td>
						<td id="count_pol16_mech" style="text-align: center;"></td>
						<td id="count_pol16_el" style="text-align: center;"></td>
						<td id="count_pol16_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol16_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №17</td>
						<td id="count_pol17_mech" style="text-align: center;"></td>
						<td id="count_pol17_el" style="text-align: center;"></td>
						<td id="count_pol17_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol17_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №18</td>
						<td id="count_pol18_mech" style="text-align: center;"></td>
						<td id="count_pol18_el" style="text-align: center;"></td>
						<td id="count_pol18_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol18_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td>Положение №19</td>
						<td id="count_pol19_mech" style="text-align: center;"></td>
						<td id="count_pol19_el" style="text-align: center;"></td>
						<td id="count_pol19_sec" style="text-align: right;"></td>
						<td>сек.</td>
						<td id="count_pol19_hour" style="text-align: right;"></td>
						<td>ч.</td>
					</tr>
					<tr>
						<td><strong>Всего</strong></td>
						<td id="count_mech_all" style="text-align: center;"></td>
						<td id="count_el_all" style="text-align: center;"></td>
						<td colspan="4"></td>
					</tr>
				</table>
			</td>
			<td width="30%" style="vertical-align: top">
				<table width="100%" border="1">
					<tr>
						<th colspan="2">&nbsp;</th>
					</tr>
					<tr>
						<td width="90%">За текущие сутки</td>
						<td width="10%" id="count_curr_day"></td>
					</tr>
					<tr>
						<td>За предыдущие сутки</td>
						<td id="count_last_day"></td>
					</tr>
					<tr>
						<td>За текущий месяц</td>
						<td id="count_curr_mounth"></td>
					</tr>
					<tr>
						<td>За предыдущий месяц</td>
						<td id="count_last_mounth"></td>
					</tr>
					<tr>
						<td>За последние 12 месяцев</td>
						<td id="count_last_year"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<div style="text-align: right;">
		<input type="button" value="Назад" onClick="window.location.href='measure.php';">
	</div>
	<script>
		$(function() {
						(function worker() {
											$.ajax({
														url: 'bdacesscounters.php',
														method: 'POST',
														data: {'test':'yes'},
														success: function(data) {
														var responseArr = JSON.parse(data);
														var keys=Object.keys(responseArr);
														var elems=Object.values(responseArr);
														keys.forEach(
														function ( currentValue,i ) {
														document.getElementById(keys[i]).innerHTML=elems[i];
														}
														);
														},
												
												
													});
											})();
					});



</script>
</body>
</html>
