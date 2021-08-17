<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>history</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<body>

	<h1>История переключений</h1>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="60%" rowspan="2">
				<table border="1">
					<tr>
						<td width="70%">Номер переключения</td>
						<td width="10%" id="history_number_curr"></td>
						<td width="10%">из</td>
						<td width="10%" id="history_number_all"></td>
					</tr>
					<tr>
						<td>Переключение с</td>
						<td id="history_swich_from"></td>
						<td>с</td>
						<td id="history_swich_to"></td>
					</tr>
					<tr>
						<td colspan="2">Статус</td>
						<td colspan="2" id="history_status"></td>
					</tr>
					<tr>
						<td colspan="2">Дата</td>
						<td colspan="2" id="history_data"></td>
					</tr>
					<tr>
						<td colspan="2">Время переключения</td>
						<td id="history_time" style="text-align: right;"></td>
						<td>мс</td>
					</tr>
					<tr>
						<td colspan="2">Температура масла трансформатора</td>
						<td id="history_temp_oil_trans" style="text-align: right;"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td colspan="2">Температура в устройстве РПН</td>
						<td id="history_temp_oil_rpn" style="text-align: right;"></td>
						<td>°C</td>
					</tr>
					<tr>
						<td colspan="2">Ток через РПН</td>
						<td id="history_current" style="text-align: right;"></td>
						<td>А</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент</td>
						<td id="history_max_moment" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №1</td>
						<td id="history_max_moment_1" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №2</td>
						<td id="history_max_moment_2" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №3</td>
						<td id="history_max_moment_3" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №4</td>
						<td id="history_max_moment_4" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №5</td>
						<td id="history_max_moment_5" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
					<tr>
						<td colspan="2">Максимальный момент в Зоне №6</td>
						<td id="history_max_moment_6" style="text-align: right;"></td>
						<td>Нм</td>
					</tr>
				</table>
			</td>
			<td width="40%" style="vertical-align: top">
				<table border="1">
					<tr>
						<td style="border-bottom: 0pt;border-left: 0pt;border-right: 0pt;border-top: 0pt;text-align: center">
						<form id="form1" action="bdacesshistory.php">
							<input type="number" value=10 id="history_number" name="history_number">
						<form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<div style="text-align: right;">
		<input type="button" value="Назад" onClick="window.location.href='measure.php';">
	</div>
	


<script>
$("#form1").submit(function(e) {
e.preventDefault(); // avoid to execute the actual submit of the form.
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(), // serializes the form's elements.
	   success: function(data)
	   {
        var responseArr = JSON.parse(data);
																
																if (responseArr==false)
																{
																	document.getElementById("history_number_curr").innerHTML=0;
																document.getElementById("history_number_all").innerHTML=0;
																document.getElementById("history_status").style.backgroundColor='black';
																document.getElementById("history_swich_from").innerHTML=0;
																document.getElementById("history_swich_to").innerHTML=0;
																document.getElementById("history_data").innerHTML=0;
																document.getElementById("history_time").innerHTML=0;
																document.getElementById("history_temp_oil_trans").innerHTML=0;
																document.getElementById("history_temp_oil_rpn").innerHTML=0;
																document.getElementById("history_current").innerHTML=0;
																document.getElementById("history_max_moment").innerHTML=0;
																document.getElementById("history_max_moment_1").innerHTML=0;
																document.getElementById("history_max_moment_2").innerHTML=0;
																document.getElementById("history_max_moment_3").innerHTML=0;
																document.getElementById("history_max_moment_4").innerHTML=0;
																document.getElementById("history_max_moment_5").innerHTML=0;
																document.getElementById("history_max_moment_6").innerHTML=0;
																alert('Несуществующая строка');

																}
																else{document.getElementById("history_number_curr").innerHTML=responseArr.history_number_curr;
																document.getElementById("history_number_all").innerHTML=responseArr.history_number_all;
																document.getElementById("history_status").style.backgroundColor=responseArr.history_status;
																document.getElementById("history_swich_from").innerHTML=responseArr.history_swich_from;
																document.getElementById("history_swich_to").innerHTML=responseArr.history_swich_to;
																document.getElementById("history_data").innerHTML=responseArr.history_data;
																document.getElementById("history_time").innerHTML=responseArr.history_time;
																document.getElementById("history_temp_oil_trans").innerHTML=responseArr.history_temp_oil_trans;
																document.getElementById("history_temp_oil_rpn").innerHTML=responseArr.history_temp_oil_rpn;
																document.getElementById("history_current").innerHTML=responseArr.history_current;
																document.getElementById("history_max_moment").innerHTML=responseArr.history_max_moment;
																document.getElementById("history_max_moment_1").innerHTML=responseArr.history_max_moment_1;
																document.getElementById("history_max_moment_2").innerHTML=responseArr.history_max_moment_2;
																document.getElementById("history_max_moment_3").innerHTML=responseArr.history_max_moment_3;
																document.getElementById("history_max_moment_4").innerHTML=responseArr.history_max_moment_4;
																document.getElementById("history_max_moment_5").innerHTML=responseArr.history_max_moment_5;
																document.getElementById("history_max_moment_6").innerHTML=responseArr.history_max_moment_6;}
																
										
	   }
	 });


});
</script>
</body>
</html>
