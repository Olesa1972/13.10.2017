<div> 
<?php
 $person=[
 'LastName'=>'Иванов',
 'FirstName'=>'Иван',
 'patronyName'=>'Иванович',
 ];
 
 $fields=[
 'LastName'=>'Фамилия',
 'FirstName'=>'Имя',
 'patronyName'=>'Отчество',
 'avgOrderLost'=>'СредняяСуммаПокупки',
 ];

 foreach($person as $field=>$value){
	if (isset($person['avgOrderLost'])){
	 echo $person ['avgOrderLost'];
	}
	 echo "<p>".$fields[$field].":".$value."</p>";
	 
 }
?>
</div>