<div> 
<?php
 $person=[
 'LastName'=>'Иванов',
 'FirstName'=>'Иван',
 'patronyName'=>'Иванович',
 'avgOrderLost'=>'15000',
 ];
 
 $fields=[
 'LastName'=>'Фамилия',
 'FirstName'=>'Имя',
 'patronyName'=>'Отчество',
 'avgOrderLost'=>'СредняяСуммаПокупки',
 ];
 foreach($person as $field=>$value){
 echo "<p>".$fields[$field].":".$value."</p>";
 }
?>
</div>