<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>events</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<script>
$(function() {
    (function worker() {
      $.ajax({
        url: 'bdacesslogs.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          // анализировать полученные данные в объект массива JSON
		  var arraylog = JSON.parse(data);
		  if (localStorage.getItem('qwit')=='true') document.getElementById('qwit').removeAttribute('disabled'); 
		  if (localStorage.getItem('qwit')=='false') document.getElementById('qwit').setAttribute('disabled', true );	  
		  document.querySelector('#table tbody').innerHTML = arraylog.map(n => `
  		<tr>
		    <td width="20%" style="background-color:${n[4]};color:${n[5]}; border:1px solid black; opacity:0.9">${n.added}</td>
			<td width="20%" style="background-color:${n[4]};color:${n[5]}; border:1px solid black;opacity:0.9">${n.type}</td>
			<td width="60%" style="background-color:${n[4]};color:${n[5]}; border:1px solid black;opacity:0.9">${n.text}</td>
  		</tr>`).join('');
		}  
        });
    })();
});



</script>
<body>
	<table id="table">
  <thead>
    <tr>
		<th width="20%" style="border-bottom: 1pt;border-left: 1pt;border-right: 1pt;border-top: 1pt">Дата</th>
		<th width="20%" style="border-bottom: 1pt;border-left: 1pt;border-right: 1pt;border-top: 1pt">Тип</th>
		<th width="60%" style="border-bottom: 1pt;border-left: 1pt;border-right: 1pt;border-top: 1pt">Сообщение</th>
		
    </tr>
  </thead>
  <tbody></tbody>
</table>
<table width="100%" border="1">
	  <tbody>
		<tr>
		<th width="86%"><input type="button" id='qwit' value="Квитирование" onClick="window.location.href='qwit.php';"></th>
		<th width="5%"><input type="button" value="Назад" onClick="window.location.href='measure.php';"></th>
		</tr>
	  </tbody>
	</table>
	
	
</body>
</html>
