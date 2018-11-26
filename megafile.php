<?php

$con=mysqli_connect("localhost","root","","result");

if ($con) {
  
  $aa="drop table mech";
  mysqli_query($con,$aa);
  $aa="drop table civil";
  mysqli_query($con,$aa);
  $aa="drop table eee";
  mysqli_query($con,$aa);
  $aa="drop table ec";
  mysqli_query($con,$aa);
  $aa="drop table cs";
  mysqli_query($con,$aa);

  $aa="delete from data3";
  mysqli_query($con,$aa); 

  //print_r($_FILES['csvfile']);
  $file=$_FILES['csvfile']['tmp_name'];
  $handle=fopen($file,"r");
  

  $i=1;
  while (($cont=fgetcsv($handle,1000,","))!==false) 
  {
    $table=rtrim($_FILES['csvfile']['name'],".csv");
    if($i==0)
    {
    $reg=$cont[0];
    $sub1=$cont[1];
    $sub2=$cont[2];
    $sub3=$cont[3];
    $sub4=$cont[4];
    $sub5=$cont[5];
    $sub6=$cont[6];
    $sub7=$cont[7];
    $sub8=$cont[8];
    $sub9=$cont[9];

    $query="CREATE TABLE $table ($reg VARCHAR(20),$sub1 VARCHAR(20),$sub2 VARCHAR(20),$sub3 VARCHAR(20),$sub4 VARCHAR(20),$sub5 VARCHAR(20),$sub6 VARCHAR(20),$sub7 VARCHAR(20),$sub8 VARCHAR(20),$sub9 VARCHAR(20));";
    echo $query,"<br>";
    mysqli_query($con,$query);
    }

    else
    {
      if(strchr($cont[0],"MAC"))
      {
        $l=explode(",",$cont[1]);
        $l=$l + array('NULL','NULL','NULL','NULL','NULL');

        $query="INSERT INTO data3(Reg,Sub1,Sub2,Sub3,Sub4,Sub5,Sub6,Sub7,Sub8,Sub9) VALUES('$cont[0]','$l[0]','$l[1]','$l[2]','$l[3]','$l[4]','$l[5]','$l[6]','$l[7]','$l[8]');";
        echo $query,"<br>";
        mysqli_query($con,$query);
      }
    }
    $i++;
  }

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
	  
  $table="civil";
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


    $table0="data3";
        $table1="mech";
        $table2="civil";
        $table3="ec";
        $table4="eee";
        $table5="cs";
        $reg="Reg";

        

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
              mysqli_query($con,$query6);
			  
			  
}
else
{
  echo "Connection failed";
}
?>