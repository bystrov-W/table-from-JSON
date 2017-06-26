<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

<?php
$text= file_get_contents("1.json");
$json = json_decode($text);


function objectToarray($json)
   {
       $array = (array)$json;
       foreach($array as $key => &$field){
           if(is_object($field))$field = $this->objectToarray($field);
       }
       return $array;
   }


//echo $text ;
foreach ($json->people as $obj):
?>
    Имя: <?=$obj->firstName?><br>
    Фамилия: <?=$obj->lastName?><br>
	Адрес: <?=$obj->address?><br>
    Номер тел. : <?=$obj-> phoneNumber?><hr>
	
<?php endforeach; ?>






</body>
</html>

