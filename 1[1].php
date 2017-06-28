<!DOCTYPE html>
<html>
<head>
	<title>Вывод таблицы из JSON</title>
</head>
<body>

<?php
$text= file_get_contents("1.json");
$json = json_decode($text);
//echo $text ;
foreach ($json->people as $obj):
?>


<table width="30%" >
<br>
<th width="30%" >
	Имя:<br>Фамилия: <br>Адрес:<br>Номер тел. :<br>
</th> 

<td>  
	<?=$obj-> firstName?><br>
	<?=$obj-> lastName?><br>
	<?=$obj-> address?><br>
	<?=$obj-> phoneNumber?>
</td>
   
</table>
	
<?php endforeach; ?>

<style>
    table { 
        border-spacing: 10;
        border-collapse: collapse;
		;
	  }

    table td, th {
        border: 2px solid #ccc;
        padding: 15px;
  		 }
    th {background: #4682B4;}
    td {background: #eee;}
	
</style>
	
</body>
</html>

