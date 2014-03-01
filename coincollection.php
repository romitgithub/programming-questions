<?php

	$fr = fopen("php://stdin", "r");
  	$fw = fopen("php://stdout", "w");
 
  	fscanf($fr, "%d %d", $s,$g);
 	
 	$array = array();
 	
 	for($i=0; $i<$s; $i++){
 		
 		fscanf($fr,"%d", $elem);
 		
 		array_push($array, $elem);
 	}
 	
 	$prevelem = $array[0];
 	$string = $array[0];
 	$value = 1;
 	$cont = 0;
 	
 	for($k=1;$k<$s;$k++){
 		
 		$currelem = $array[$k];
 		
 		if($prevelem == $currelem-1){
 			
 			$cont = 1;
 			$value += $value;
 			$prevelem = $currelem;
 			$string .= "_$currelem";
 		}
 		elseif($prevelem == $currelem+1){
 			
 			$cont = 2;
 			$value += $value;
 			$prevelem = $currelem;
 			$string .= "_$currelem";
 		}
 		else{
 			
 			$prevelem = $currelem;
 			$cont = 0;
 			$value =1;
 			$string .= "||$prevelem";
 		}
 	}
 	
 	$array1 = explode("||", $string);
 	
 	$maxlen = 0;  $maxelemindex = 0;
 	
 	for($l=0;$l<count($array1);$l++){
 		
 		$singleelem = $array1[$l];
 		
 		$singlearr = explode("_", $singleelem);
 		$singleelemlen = count($singlearr);
 		
 		if($singleelemlen > $maxlen){
 			
 			$maxlen = $singleelemlen;
 			$maxelemindex = $l;
 		}
 	}
 	
 	$maxcontstr = $array1[$maxelemindex];
 	$maxcontstr;
 	$maxcontarr = explode("_", $maxcontstr);
 	$maxcontstrlen = count($maxcontarr);
 	echo $maxcontstrlastelem = $maxcontarr[$maxcontstrlen-1];
 	echo $maxcontstrfirstelem = $maxcontarr[0];
 	
 	if($maxelemindex!=0){
	 	$prevmaxcontstr = $array1[$maxelemindex-1];
	 	$prevmaxcontarr = explode("_", $prevmaxcontstr);
	 	$prevmaxcontstrlen = count($prevmaxcontarr);
	 	echo $prevmaxcontstrlastelem = $prevmaxcontarr[$prevmaxcontstrlen-1];
 	}
 	
 	$nextmaxcontstr = $array1[$maxelemindex+1];
 	$nextmaxcontarr = explode("_", $nextmaxcontstr);
 	$nextmaxcontstrlen = count($nextmaxcontarr);
 	echo $nextmaxcontstrlastelem = $nextmaxcontarr[0];
 	
 	if(($prevmaxcontstrlastelem + $g) == $maxcontstrfirstelem - 1 ){
 		
 		$finalresult = $maxcontstrlen + $g + $prevmaxcontstrlen;
 		$found = true;
 	}
 	elseif(($nextmaxcontstrlastelem - $g) == $maxcontstrlastelem +1){
 		
 		$finalresult = $maxcontstrlen + $g + $nextmaxcontstrlen;
 	}
 	else{
 		$finalresult = $maxcontstrlen;
 	}
 	
 	echo $finalresult;
 	
  	fclose($fr);
  	fclose($fw);
?>
