<?php


      $dbusername="root";
      $dbpassword="";
      $dbhost="localhost";
      $dbname="result";

      
      $reg="Reg";
      $sub1="Sub1";
      $sub2="Sub2";
      $sub3="Sub3";
      $sub4="Sub4";
      $sub5="Sub5";
      $sub6="Sub6";
      $sub7="Sub7";
      $sub8="Sub8";
      $sub9="Sub9";


      $con= new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
      
      if(mysqli_connect_error())
      {
            die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_error());
      }
      else
      {	$table="civil";
      	$query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
		echo $query,"<br>";
		mysqli_query($con,$query);

		echo "Table created";

		$table="ec";
      	$query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
		echo $query,"<br>";
		mysqli_query($con,$query);

		echo "Table created";

		$table="eee";
      	$query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
		echo $query,"<br>";
		mysqli_query($con,$query);

		echo "Table created";

		$table="mech";
      	$query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
		echo $query,"<br>";
		mysqli_query($con,$query);

		echo "Table created";

		$table="cs";
      	$query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
		echo $query,"<br>";
		mysqli_query($con,$query);

		echo "Table created";




      }
      mysqli_close($con)

?>