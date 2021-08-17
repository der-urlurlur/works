
<!DOCTYPE html>
<html dir="ltr" lang="ru">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>site</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script type="text/javascript">

$(function() {
    (function worker() {
      $.ajax({
        url: 'bdacesssite.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          // анализировать полученные данные в объект массива JSON
		  var arrayprogress = JSON.parse(data);
		  document.getElementById("rpn").innerText=arrayprogress[0];
		  document.getElementById("pol").innerText=arrayprogress[1];
      
		}
      });
    })();
});
$(function() {
    (function worker2() {
      $.ajax({
        url: 'bdacesscircles.php',
        method: 'POST',
        data: {'test':'yes'},
        success: function(data) {
          // анализировать полученные данные в объект массива JSON
		  var arraylog = JSON.parse(data);
		  if (arraylog[0][0]!=0)
        {
          document.getElementById("circle_red").style.background="red";
        }
        else document.getElementById("circle_red").style.background="gray";
      if (arraylog[1][0]!=0)
        {
          document.getElementById("circle_grey").style.background="yellow";
        }
        else document.getElementById("circle_grey").style.background="gray";
        if (arraylog[2]!=0)
        {
          document.getElementById("circle_green").style.background="green";
        }
        else document.getElementById("circle_green").style.background="gray";
        document.getElementById("user").innerText=localStorage.getItem('t_type');
    	},
      complete: function() {
          setTimeout(worker2, 1000);
        }  
        
      });
    })();
});



</script>
  </head>
  <body>
    
    <style>
		.raz {
		  text-align: right;
		}
		.raz div {
		  display: inline-block; 
		  width: 1em;
		  max-width: 100%;
		  min-height: 2em;
		  border: 1px solid orange;
		  vertical-align: middle;
		  text-align: start;
		  background: #fff5d7;
		}
	  </style>
    <table width="100%" border="1">
      <tbody>
        <tr>
          <th rowspan="2" width="10%">
            <p class="MsoNormal" align="left">
            	<input type="image" src="intera.png" onClick="window.location.href='passw.php';" style="border: 0px solid ; width: 160px; height: 66px; float:left; margin: 0px 0px;">
     			 </p>
            <br>
          </th>
          <th style="vertical-align: bottom;" width="20%">
            <h2>Пользователь:</h2>
          </th>
          <th style="vertical-align: bottom;" width="55%">
            <h1> Система мониторинга РПН </h1>
          </th>
          <th rowspan="2" width="10%">
            <div class="raz">
              <div id="circle_red"></div>
              <div id="circle_grey"></div>
              <div id="circle_green"></div>
            </div>
            <br>
          </th>
          <th rowspan="2" width="5%">
            <div style="border: solid; text-align: center;">
              <h2 id="pol"></h2>
            </div>
            <br>
          </th>
        </tr>
        <tr>
          <th id="user" style="vertical-align: top;"><br>
          </th>
          <th style="text-align: center; vertical-align: top;">
            <h2 id="rpn"></h2>
            <br>
          </th>
        </tr>
      </tbody>
    </table>
    
  </body>
</html>
