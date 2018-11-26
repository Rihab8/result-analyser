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

      	// $query1="SELECT * FROM $table0;";
      	// $result=$con->query($query1);
      	// if($result)
      	// {
      		// if($result->num_rows>0)
      		// {
      			// while($userData=$result->fetch_assoc())
      			// {

    				// $userID=$userData['Reg_No'];
      		// 		$sub1=$userData['Sub1'];
      		// 		$sub2=$userData['Sub2'];
      		// 		$sub3=$userData['Sub3'];
      		// 		$sub4=$userData['Sub4'];
      		// 		$sub5=$userData['Sub5'];
      		// 		$sub6=$userData['Sub6'];
      		// 		$sub7=$userData['Sub7'];
      		// 		$sub8=$userData['Sub8'];
      		// 		$sub9=$userData['Sub9'];

      				$query2="INSERT INTO $table1(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9)
      				SELECT Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9
      				FROM $table0 where Reg like '%MAC%ME%'";
      				mysqli_query($con,$query2);

      				$query3="INSERT INTO $table2(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9)
      				SELECT Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9
      				FROM $table0 where Reg like '%MAC%CE%'";
      				mysqli_query($con,$query3);

                              $query4="INSERT INTO $table5(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9)
      				SELECT Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9
      				FROM $table0 where Reg like '%MAC%CS%'";
      				mysqli_query($con,$query4);

                              $query5="INSERT INTO $table4(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9)
      				SELECT Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9
      				FROM $table0 where Reg like '%MAC%EE%'";
      				mysqli_query($con,$query5);

      				$query6="INSERT INTO $table3(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9)
      				SELECT Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9
      				FROM $table0 where Reg like '%MAC%EC%'";



      				/*VALUES('$userID','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9')*/

      				mysqli_query($con,$query6);

      				
      		
      	
      }	
      mysqli_close($con);

?>