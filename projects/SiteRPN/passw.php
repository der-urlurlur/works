<!DOCTYPE html>
<html dir="ltr" lang="ru">
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
  </head>
  <body>
  <center>
	
		<p style="margin-top: 25px">
		<form id="formpassw" action="bdacesspassword.php">
			<strong>Уровень доступа:</strong>
			<select name="level">
				<option>Level 0</option><option>Level 1</option><option>Level 2</option><option>Level 3</option>
				<option>Level 4</option><option>Level 5</option><option>Level 6</option><option>Level 7</option>
			</select>
			<strong>Пароль:</strong> 
			
			<input type="password" maxlength="6" size="6" name="password">
			<form>
		</p>
		<p>
			<input type="submit" value="Применить">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Отмена" onClick="window.location.href='site.php';">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="passwordchange" value="Изменить пароль" onClick="window.location.href='passwchange.php';">
		</p>
	
  </center> 
  <script>
	 if (localStorage.getItem('password_write')=='true') document.getElementById('passwordchange').removeAttribute('disabled'); 
		  	if (localStorage.getItem('password_write')=='false') document.getElementById('passwordchange').setAttribute('disabled', true );	  
		   
$("#formpassw").submit(function(e) {
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
		if (responseArr==false)
		{
			alert("неверный пароль");
		}
		if (responseArr==true)
		{
			localStorage.setItem('t_type', "Мониторинг");
			window.location.href='site.php';
		}
		else {
			localStorage.setItem('t_type', responseArr.type);
			localStorage.setItem('settings_write', responseArr.settings_write);
			localStorage.setItem('counters_read', responseArr.counters_read);
			localStorage.setItem('qwit', responseArr.qwit);
			localStorage.setItem('resourse', responseArr.resourse);
			localStorage.setItem('password_write', responseArr.password_write);
			
			window.location.href='site.php';}
			
		}
	 });


});

</script>
  </body>
</html>
