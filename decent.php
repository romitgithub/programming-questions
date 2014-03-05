<?php


	$fr = fopen("php://stdin", "r");
  	$fw = fopen("php://stdout", "w");

  	fscanf($fr, "%d", $testcases);

  	for ($i=0; $i < $testcases; $i++) { 
  		
  		fscanf($fr, "%d", $num);

  		if ($num<3 or $num==4) {
  			echo "-1\n";
  		}
  		else{

  			$result = 0;

  			if (($num%3) == 0) {
  				for ($j=0; $j < $num; $j++) { 
  					$toadd = 5*pow(10, $j);

  					$result += $toadd;
  				}
  			}
  			else{

  				for ($y=1; (5*$y) <= $num; $y++) { 
  				
                if ((($num-(5*$y)) % 3) == 0) {
                    
                    $x = $num-(5*$y);
                    break;
                }	  				
          }
          $result = 0;$result1=0;$result2=0;
          for ($k=0; $k < 5*$y; $k++) { 
            
              $toadd = 3*pow(10, $k);

              $result1 += $toadd;

          }
          for ($l=0; $l < $x; $l++) { 
            
             
              $toaddd = 5*pow(10, $l);

              $result2 += $toaddd;

          }
                
                $res1 = (string)$result1;
                $res2 = (string)$result2;
                
            if($res2=="0"){$result=$res1;}
           	else{
         		 $result = "$res2$res1";
  			}}



  			echo "$result\n";
  		}
  	}

?>
