<?php

//if(isset($_POST['submit']))
  // {


    /*  $name=filter_input(INPUT_POST,'tname');
      $user=filter_input(INPUT_POST,'tuname');
      $mob=filter_input(INPUT_POST,'tmob');
      $email=filter_input(INPUT_POST,'temail');
	$pass=filter_input(INPUT_POST,'tpassword');
      $repass=filter_input(INPUT_POST,'trepassword');*/
      
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
            $table="data3";
            $query="SELECT * FROM $table";

            //$query="INSERT INTO $table VALUES(NULL,'$name','$user',$mob,'$email','$pass') ";
            $q=$con->query($query);
            if($q)
            {
                 if ($q->num_rows>0) 
                 {
                 	echo "<table><tr><th>Reg No</th><th>Sub1</th><th>Sub2</th><th>Sub3</th><th>Sub4</th><th>Sub5</th><th>Sub6</th><th>Sub7</th><th>Sub8</th><th>Sub9</th></tr>";
                 	while ($row=$q->fetch_assoc()) 
                 	{
                 		echo "<tr><td>".$row["Reg"]."</td><td>".$row["Sub1"]."</td><td>".$row["Sub2"]."</td><td>".$row["Sub3"]."</td><td>".$row["Sub4"]."</td><td>".$row["Sub5"]."</td><td>".$row["Sub6"]."</td><td>".$row["Sub7"]."</td><td>".$row["Sub8"]."</td><td>".$row["Sub9"]."</td></tr>";
                 	/*
                 		echo "id: ".$row["Registration_Number"]."-Sub1: ".$row["Sub1"]."-Sub2: ".$row["Sub2"]."-Sub3: ".$row["Sub3"]."-Sub4: ".$row["Sub4"]."-Sub5: ".$row["Sub5"]."-Sub6: ".$row["Sub6"]."-Sub7: ".$row["Sub7"]."-Sub8: ".$row["Sub8"]."-Sub9: ".$row["Sub9"]."<br>";*/
                 	}
                 	echo "</table>";
                 }
                 else
                 {
                 	echo "0 results";
                 }
                  //header("location:userloginpage.html");
            }
      }
      mysqli_close($con)
?>