<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>measure</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<body>
<script type="text/javascript">

$(function() {
    (function worker() {
      $.ajax({
        url: 'bdacess.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          // анализировать полученные данные в объект массива JSON
		  var array = JSON.parse(data);
		  document.getElementById("Theater").innerText=array[0];
		  document.getElementById("Irpn").innerText=array[1]; 
		  document.getElementById("Tvsn").innerText=array[2];
		  document.getElementById("IdriveRPN").innerText=array[3];
		  document.getElementById("ToilRPN").innerText=array[4];
		  document.getElementById("Time").innerText=array[5];
		  document.getElementById("DeltaT").innerText=array[6];
		  document.getElementById("K").innerText=array[7];
		  document.getElementById("MaxMoment").innerText=array[8];
		  document.getElementById("Moment").innerText=array[9];
		  document.getElementById("Revision").innerText=array[10];
		  document.getElementById("DataLastRevision").innerText=array[11];
		  document.getElementById("DataNextRevision").innerText=array[12];
		  document.getElementById("CountLastRevision").innerText=array[13];
		  document.getElementById("CountNextRevision").innerText=array[14];
		  document.getElementById("ProbOil").innerText=array[15];
		  document.getElementById("DataLastProbOil").innerText=array[16];
		  document.getElementById("DataNextProbOil").innerText=array[17];
		  document.getElementById("CountLastProbOil").innerText=array[18];
		  document.getElementById("CountNextProbOil").innerText=array[19];
		  document.getElementById("ChangeOil").innerText=array[20];
		  document.getElementById("DataLastChangeOil").innerText=array[21];
		  document.getElementById("DataNextChangeOil").innerText=array[22];
		  document.getElementById("CountLastChangeOil").innerText=array[23];
		  document.getElementById("CountNextChangeOil").innerText=array[24];
		  document.getElementById("ChangeContact").innerText=array[25];
		  document.getElementById("DataLastChangeContact").innerText=array[26];
		  document.getElementById("DataNextChangeContact").innerText=array[27];
		  document.getElementById("CountLastChangeContact").innerText=array[28];
		  document.getElementById("CountNextChangeContact").innerText=array[29];
		  document.getElementById("ChangeContactor").innerText=array[30];
		  document.getElementById("DataLastChangeContactor").innerText=array[31];
		  document.getElementById("DataNextChangeContactor").innerText=array[32];
		  document.getElementById("CountLastChangeContactor").innerText=array[33];
		  document.getElementById("CountNextChangeContactor").innerText=array[34];
		  document.getElementById("ChangeSelective").innerText=array[35];
		  document.getElementById("DataLastChangeSelective").innerText=array[36];
		  document.getElementById("DataNextChangeSelective").innerText=array[37];
		  document.getElementById("CountLastChangeSelective").innerText=array[38];
		  document.getElementById("CountNextChangeSelective").innerText=array[39];
		  if (localStorage.getItem('counters_read')=='false') document.getElementById('History').removeAttribute('disabled'); 
		  if (localStorage.getItem('counters_read')=='true') document.getElementById('History').setAttribute('disabled', true );	  
		  
		
		  	

		},
        complete: function() {
			setTimeout(worker, 1000);
			
          
        }
      });
    })();
});

$(function() {
    (function worker2() {
      $.ajax({
        url: 'bdacess2.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          // анализировать полученные данные в объект массива JSON
		  var arrayprogress = JSON.parse(data);
		  document.getElementById("ProgRevision").value=arrayprogress[0];
		  document.getElementById("ProgProbOil").value=arrayprogress[1];
		  document.getElementById("ProgChangeOil").value=arrayprogress[2];
		  document.getElementById("ProgChangeContact").value=arrayprogress[3];
		  document.getElementById("ProgChangeContactor").value=arrayprogress[4];
		  document.getElementById("ProgChangeSelective").value=arrayprogress[5];
		  document.getElementById("PercentRevision").innerText=arrayprogress[6];
		  document.getElementById("PercentProbOil").innerText=arrayprogress[7];
		  document.getElementById("PercentChangeOil").innerText=arrayprogress[8];
		  document.getElementById("PercentChangeContact").innerText=arrayprogress[9];
		  document.getElementById("PercentChangeContactor").innerText=arrayprogress[10];
		  document.getElementById("PercentChangeSelective").innerText=arrayprogress[11];
		},
        complete: function() {
          setTimeout(worker2, 1000);
        }
      });
    })();
});




</script>


	
	
	<table width="100%" border="1">
	  <tbody>
		<tr>
			<th colspan="6">Основные параметры</th>
		</tr>
		<tr>
		  <td width="40%">Температура внутри шкафа</td>
		  <td width="5%" id="Theater" style="text-align: right;"></td>
		  <td width="5%">°C</td>
		  <td width="40%">Ток через РПН</td>
		  <td width="5%" id="Irpn" style="text-align: right;"></td>
		  <td width="5%">А</td>
		</tr>
		<tr>
		  <td>Температура масла трансформатора</td>
		  <td id="Tvsn" style="text-align: right;"></td>
		  <td>°C</td>
		  <td>Ток привода РПН</td>
		  <td id="IdriveRPN" style="text-align: right;"></td>
		  <td>А</td>
		</tr>
		<tr>
		  <td>Температура масла в устройстве РПН</td>
		  <td id="ToilRPN" style="text-align: right;"></td>
		  <td>°C</td>
		  <td>Время работы на текущем положении</td>
		  <td id="Time" style="text-align: right;"></td>
		  <td>час</td>
		</tr>
		<tr>
		  <td>Превыш. Т масла в РПН над Т масла трансф.</td>
		  <td id="DeltaT" style="text-align: right;"></td>
		  <td>°C</td>
		  <td>Коэффициент нагрузки устроцства РПН</td>
		  <td id="K" style="text-align: right;"></td>
		  <td></td>
		</tr>
	  </tbody>
	</table>
	<br>
	<table width="100%" border="1">
	  <tbody>
		  <tr>
			  <th colspan="6">Момент на валу</th>
		  </tr>
		<tr>
		  <td width="40%">Максимальный момент на выходном валу привода РПН (при последнем переключении)</td>
		  <td width="5%" id="MaxMoment" style="text-align: right;"></td>
		  <td width="5%">нМ</td>
		  <td width="40%">Момент на выходном валу привода РПН</td>
		  <td width="5%" id="Moment" style="text-align: right;"></td>
		  <td width="5%">нМ</td>
		</tr>
	  </tbody>
	</table>
	<br>
	<table width="100%" border="1">
	  <tbody>
	  
		  <tr>
			  <th colspan="3" width="30%">Ресурс</th>
			  <th width="10%">Предыдущий сервис:<br>количество переключений<br>дата</th>
			  <th width="25%"></th>
			  <th width="5%" ></th>
			  <th width="10%">Следующий сервис:<br>количество переключений<br>дата</th>
		  </tr>
		<tr>
		  <td width="20%" rowspan="2">Ревизия РПН</td>
		  <td width="5%" rowspan="2" id="Revision" style="text-align: right;"></td>
		  <td width="2%" rowspan="2">%</td>
		  <td width="15%" id="DataLastRevision" style="text-align: center;"></td>
		  <td width="35%" style="border-bottom: 0pt">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td width="15%" id="DataNextRevision" style="text-align: center;"></td>
		</tr>
		<tr>
			
		  <td id="CountLastRevision" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgRevision" value="0" max="100"><span id="PercentRevision">0</span>%</progress></td>
			<td><form id='service1' action='service1.php' method='post'><input  style="width: min-content;" type="submit" id="service1" value="да" ></form></td>
			<td width="10%" id="CountNextRevision" style="text-align: center;"></td>
		</tr>
	   <tr>
		  <td rowspan="2">Проба масла из РПН</td>
		  <td rowspan="2" id="ProbOil" style="text-align: right;"></td>
		  <td rowspan="2">%</td>
		  <td id="DataLastProbOil" style="text-align: center;"></td>
		  <td style="border-bottom: 0pt" width="30%">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td id="DataNextProbOil" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td id="CountLastProbOil" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgProbOil" value="0" max="100"><span id="PercentProbOil">0</span>%</progress></td>
			<td><form id='service2' action='service2.php' method='post'><input  style="width: min-content;" type="submit" id="service2" value="да" ></form></td>

		  <td id="CountNextProbOil" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td rowspan="2">Замена масла в РПН</td>
		  <td rowspan="2" id="ChangeOil" style="text-align: right;"></td>
		  <td rowspan="2">%</td>
		  <td id="DataLastChangeOil" style="text-align: center;"></td>
		  <td style="border-bottom: 0pt" width="30%">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td id="DataNextChangeOil" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td id="CountLastChangeOil" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgChangeOil" value="0" max="100"><span id="PercentChangeOil">0</span>%</progress></td>
			<td><form id='service3' action='service3.php' method='post'><input  style="width: min-content;" type="submit" id="service3" value="да" ></form></td>
			<td id="CountNextChangeOil" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td rowspan="2">Замена контактов в РПН</td>
		  <td rowspan="2" id="ChangeContact" style="text-align: right;"></td>
		  <td rowspan="2">%</td>
		  <td id="DataLastChangeContact" style="text-align: center;"></td>
		  <td style="border-bottom: 0pt" width="30%">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td id="DataNextChangeContact" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td id="CountLastChangeContact" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgChangeContact" value="0" max="100"><span id="PercentChangeContact">0</span>%</progress></td>
			<td><form id='service4' action='service4.php' method='post'><input  style="width: min-content;" type="submit" id="service4" value="да" ></form></td>
			<td id="CountNextChangeContact" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td rowspan="2">Замена контактора в РПН</td>
		  <td rowspan="2" id="ChangeContactor" style="text-align: right;"></td>
		  <td rowspan="2">%</td>
		  <td id="DataLastChangeContactor" style="text-align: center;"></td>
		  <td style="border-bottom: 0pt" width="30%">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td id="DataNextChangeContactor" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td id="CountLastChangeContactor" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgChangeContactor" value="0" max="100"><span id="PercentChangeContactor">0</span>%</progress></td>
			<td><form id='service5' action='service5.php' method='post'><input  style="width: min-content;" type="submit" id="service5" value="да" ></form></td>
			<td id="CountNextChangeContactor" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td rowspan="2">Замена избирателя в РПН</td>
		  <td rowspan="2" id="ChangeSelective" style="text-align: right;"></td>
		  <td rowspan="2">%</td>
		  <td id="DataLastChangeSelective" style="text-align: center;"></td>
		  <td style="border-bottom: 0pt" width="30%">0%<text style="float:right;">100%</text></td>
		  <td width="5%"></td>
		  <td id="DataNextChangeSelective" style="text-align: center;"></td>
		</tr>
		<tr>
		  <td id="CountLastChangeSelective" style="text-align: center;"></td>
			<td style="border-top: 0pt"><progress id="ProgChangeSelective" value="0" max="100"><span id="PercentChangeSelective">0</span>%</progress></td>
			<td><form id='service6' action='service6.php' method='post'><input  style="width: min-content;" type="submit" id="service6" value="да" ></form></td>
			<td id="CountNextChangeSelective" style="text-align: center;"></td>
		</tr>

	  </tbody>
	</table>
	<br>
	<table width="100%" border="1">
	  <tbody>
		<tr>
		  <th width="75%"><input type="submit" id="Settings" value="Настройка" onClick="window.location.href='settings.php';"></th>
		  <th width="5%"><input type="button" id="Counters" value="Счетчики" onClick="window.location.href='counters.php';"></th>
		  <th width="10%"><input type="submit" id="History" value="История переключений" onClick="window.location.href='history.php';"></th>
		  <th width="10%"><input type="submit" id="Event" value="Журнал сообщений" onClick="window.location.href='events.php';"></th>
		</tr>
	  </tbody>
	</table>

<script src="jquery-3.6.0.min.js"></script>
<script>
	
		   
$("#service1").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});
$("#service2").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});
$("#service3").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});
$("#service4").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});
$("#service5").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});
$("#service6").submit(function(e) {
e.preventDefault();
var form = $(this);
var url = form.attr('action');

$.ajax({
	   type: "POST",
	   url: url,
	   data: form.serialize(),
	   success: function(data)
		{
        var responseArr = JSON.parse(data);	
		}
	 });
});

</script>
</body>
</html>
