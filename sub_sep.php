<?php

	  $dbusername="root";
      $dbpassword="";
      $dbhost="localhost";
      $dbname="result";

      $con= new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
      if(mysqli_connect_error())
      {
            die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_error());
      }
      else
      {
      	$table0="data3";
      	$table1="mech";
      	$table2="civil";
      	$table3="ec";
      	$table4="eee";
      	$table5="cs";
      	$reg="Reg";

      	
      				$qu="select * from $table1";
      				$q=mysqli_query($con,$qu);
      				while ($a=mysqli_fetch_array($q,MYSQLI_BOTH)) {

      					$k=$a['Sub1'];
      					$len=strlen($k);
      					if($len>9){
      						echo "<tr><td>	".substr($k, 0,5);
      						echo "&nbsp;:Absent </td></tr>";
      					}
      					elseif(strpos($k, "FE"))
      					{
      						      echo "<tr><td>	".substr($k, 0,5);
      							// $len=strlen($k);
      							echo "&nbsp;:&nbsp;".substr($k, -3,-1);
      							echo "</td></tr>";
      					}
      					elseif(strpos($k, '+'))
      					{
      							echo "<tr><td>".substr($k, 0,5);
      							// $len=strlen($k);
      							echo "&nbsp;:&nbsp;".substr($k, -3,-1);
      							echo "</td></tr>";
      					}
      					else{
                                                echo "	<tr><td>		".substr($k, 0,5);
      							echo "	&nbsp;:&nbsp;".substr($k,-2,-1);echo "</td></tr>";
      					}
      					
      				}
      			// }	
      		// }
      	// }

      }	
      mysqli_close($con);

?>