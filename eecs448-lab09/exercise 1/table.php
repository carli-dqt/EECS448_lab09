<?php
$htmlTable = '<table border="1" cellspacing="0" cellpadding="4"><tr>';
$colums=100;
$rows=100;

for($i = 0; $i <=$rows; $i++){
	if($i == 0){
    	$htmlTable .= '<td></td>';
    }else{
		$htmlTable .= '<td>' .$i. '</td>';
    }
    for($j = 1; $j <=$colums; $j++){
      if($i == 0){
        $result = $j;
      }else{
        $result = $i * $j;
      }
      $htmlTable .= '<td>' .$result. '</td>';
    }
    $htmlTable .= '</tr><tr>';

}

echo $htmlTable;
?> 
