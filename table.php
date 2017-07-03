<!DOCTYPE html>
<html>
<head>
	<title>Вывод таблицы из JSON</title>
</head>
<body>

<?php

$json= file_get_contents("table.json");
	$data = json_decode($json, true);

echo '<pre>' ;
echo '<br />'; 

include "style.css";
?>


<table width="50%" , align:center  >

<?php include "style.css"; ?>
<caption>Вывод таблицы из JSON</caption>
  
  <tr height = "50">
    <th>№ п/п</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Адрес.</th>
    <th>Номер телефона</th>
  </tr>



  <?php foreach ($data as $key => $value) 
  { ?>
    <?php //for ($i=0; $i<1; $i++) 
    { ?>

    <tr>
    <?php //echo $value;?>
	<td><?php echo $value ['№'];?></td>
    <td><?php echo $value ['firstName'];?></td>
    <td><?php echo $value ['lastName'];?></td>
    <td><?php echo $value ['address'];?></td>
    <td><?php echo $value ['phoneNumber'];?></td>
  </tr>

    <?php } ?>
<?php } ?>

  
</table>


   

</body>
</html>