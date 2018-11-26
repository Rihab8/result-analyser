<?php

$con=mysqli_connect("localhost","root","","tut");

if ($con) {
  //print_r($_FILES['csvfile']);
  $file=$_FILES['csvfile']['tmp_name'];
  $handle=fopen($file,"r");
  $i=0;
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
    $query="INSERT INTO $table($reg,$sub1,$sub2,$sub3,$sub4,$sub5,$sub6,$sub7,$sub8,$sub9) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]','$cont[6]','$cont[7]','$cont[8]','$cont[9]');";
    echo $query,"<br>";
    mysqli_query($con,$query);
    }
    $i++;
  }
}
else
{
  echo "Connection failed";
}
?>