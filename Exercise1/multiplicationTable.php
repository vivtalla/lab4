<?php
	echo "<table border=5 width=50%>";
	for ($r = 1; $r <= 101; $r++ ) {
	   $v=1;
	   echo "<tr>";
        if($r==1)
	         echo "<td>x</td>";
	      else{
	         $v=$r-1;
	         echo "<td>$v</td>";
            }
	    echo "<td>".$v ."</td>";
	    for ( $c = 2; $c <= 100; $c++ ) {
	            echo "<td>".$v * $c."</td>";
	        }
	    echo "</tr>";
	}
	echo "</table>";
	?>
