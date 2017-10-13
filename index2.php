<div> 
<?php
$max=0;
 $groups=[
 '101'=>4.2,
 '102'=>4.0,
 '103'=>4.8, 
 '104'=>4.6,
 '105'=>3.8,
   ];
	foreach ($groups as $group=>$scoregroup){
		if ($scoregroup>$max){
			$max=$scoregroup;
	        $maxgroup=$group;
	    }
    }
	echo $maxgroup;
	   
   
   
?>
</div>