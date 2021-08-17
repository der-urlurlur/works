<!DOCTYPE html>
<html lang="en">
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>
<body>
<center>
	
		<p style="margin-top: 25px">
		<form id="formpassw" action="bdacesspasswordchange.php">
			<strong>Уровень доступа:</strong>
			<select name="level">
				<option>Level 0</option><option>Level 1</option><option>Level 2</option><option>Level 3</option>
				<option>Level 4</option><option>Level 5</option><option>Level 6</option><option>Level 7</option>
			</select>
            <br>
			<strong>Старый пароль:</strong> 
			
			<input type="password" maxlength="6" size="6" name="Oldpassword">
            
            <strong>Новый пароль:</strong> 
			
			<input type="password" maxlength="6" size="6" name="Newpassword">
            
			<form>
		</p>
		<p>
			<input type="submit" value="подтвердить">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Отмена" onClick="window.location.href='site.php';">
		</p>
	
  </center> 
    <script>
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
        console.log(responseArr);
        }
	 });


});
    </script>
</body>
</html>