<!DOCTYPE html>
<html>
<head>
	<title>Вывод таблицы из JSON</title>
</head>
<body>

<?php
//$text= file_get_contents("table.json");
//$json = json_decode($text);
//foreach ($json as $key => $value );



$json= file_get_contents("table.json");
	$data = json_decode($json, true);

echo '<pre>' ;
print_r ($data);
echo '<pre>' ;


//$data1 = array ("people" => "lastName","port" => "firstName");


echo $data 	['people'][4]['lastName']['firstName'];


echo '<br />'; 



include "style.css";
?>



<table width="30%" >
<caption>Таблица № 1</caption>
  <colgroup>
    <col span="2" style="background:Khaki"><!-- С помощью этой конструкции задаем цвет фона для первых двух столбцов таблицы-->
    <col style="background-color:LightCyan"><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
  <tr>
    <th>№ п/п</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Адрес.</th>
    <th>Номер телефона</th>
  </tr>
  <tr>
    <td>1</td>
    <td><?=$data ['people'][0]['firstName']?></td>
    <td><?=$data ['people'][0]['lastName']?></td>
    <td><?=$data ['people'][0]['address']?></td>
    <td><?=$data ['people'][0]['phoneNumber']?></td>
  </tr>
  <tr>
    <td>2</td>
    <td><?=$data ['people'][1]['firstName']?></td>
    <td><?=$data ['people'][1]['lastName']?></td>
    <td><?=$data ['people'][1]['address']?></td>
    <td><?=$data ['people'][1]['phoneNumber']?></td>
  </tr>
  <tr>
  <td>3</td>
    <td><?=$data ['people'][2]['firstName']?></td>
    <td><?=$data ['people'][2]['lastName']?></td>
    <td><?=$data ['people'][2]['address']?></td>
    <td><?=$data ['people'][2]['phoneNumber']?></td>
  </tr>
    <tr>
  <td>4</td>
    <td><?=$data ['people'][3]['firstName']?></td>
    <td><?=$data ['people'][3]['lastName']?></td>
    <td><?=$data ['people'][3]['address']?></td>
    <td><?=$data ['people'][3]['phoneNumber']?></td>
  </tr>
    <tr>
  <td>5</td>
    <td><?=$data ['people'][4]['firstName']?></td>
    <td><?=$data ['people'][4]['lastName']?></td>
    <td><?=$data ['people'][4]['address']?></td>
    <td><?=$data ['people'][4]['phoneNumber']?></td>
  </tr>
</table>




	   

</body>
</html>

