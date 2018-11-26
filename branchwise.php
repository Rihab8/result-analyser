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
            $table1="mech";
            $table2="civil";
            $table3="ec";
            $table4="eee";
            $table5="cs";
            $reg="Reg";

            echo "Mechanical Engineering<br><br>";
            $t="SELECT COUNT(Reg) FROM $table1";
            $total=mysqli_query($con,$t);
            $a=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Total students :".$a[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub1  NOT LIKE '%FE%' AND Sub1 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b1=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub1 :".$b1[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub2  NOT LIKE '%FE%' AND Sub2 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b2=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub2 :".$b2[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub3  NOT LIKE '%FE%' AND Sub3 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b3=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub3 :".$b3[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub4  NOT LIKE '%FE%' AND Sub4 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b4=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub4 :".$b4[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub5  NOT LIKE '%FE%' AND Sub5 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b5=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub5 :".$b5[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub6  NOT LIKE '%FE%' AND Sub6 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b6=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub6 :".$b6[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub7  NOT LIKE '%FE%' AND Sub7 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b7=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub7 :".$b7[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub8  NOT LIKE '%FE%' AND Sub8 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b8=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub8 :".$b8[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub9  NOT LIKE '%FE%' AND Sub9 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b9=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in Sub9 :".$b9[0]."<br>";



            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub1  NOT LIKE '%FE%' AND Sub1 NOT LIKE '%F%' AND Sub1 NOT LIKE '%Absent%' AND Sub1 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p1=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub1 :".$p1[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub2  NOT LIKE '%FE%' AND Sub2 NOT LIKE '%F%' AND Sub2 NOT LIKE '%Absent%' AND Sub2 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p2=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub2 :".$p2[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub3  NOT LIKE '%FE%' AND Sub3 NOT LIKE '%F%' AND Sub3 NOT LIKE '%Absent%' AND Sub3 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p3=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub3 :".$p3[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub4  NOT LIKE '%FE%' AND Sub4 NOT LIKE '%F%' AND Sub4 NOT LIKE '%Absent%' AND Sub4 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p4=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub4 :".$p4[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub5  NOT LIKE '%FE%' AND Sub5 NOT LIKE '%F%' AND Sub5 NOT LIKE '%Absent%' AND Sub5 NOT LIKE 'NULL'";
            $total=mysqli_query($con,$t);
            $p5=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub5 :".$p5[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub6  NOT LIKE '%FE%' AND Sub6 NOT LIKE '%F%' AND Sub6 NOT LIKE '%Absent%' AND Sub6 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p6=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub6 :".$p6[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub7  NOT LIKE '%FE%' AND Sub7 NOT LIKE '%F%' AND Sub7 NOT LIKE '%Absent%' AND Sub7 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p7=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub7 :".$p7[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub8  NOT LIKE '%FE%' AND Sub8 NOT LIKE '%F%' AND Sub8 NOT LIKE '%Absent%' AND Sub8 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p8=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub8 :".$p8[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table1 WHERE Sub9  NOT LIKE '%FE%' AND Sub9 NOT LIKE '%F%' AND Sub9 NOT LIKE '%Absent%' AND Sub9 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p9=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in Sub9 :".$p9[0]."<br>";

            $p=($p1[0]/$b1[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p2[0]/$b2[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p3[0]/$b3[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p4[0]/$b4[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p5[0]/$b5[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p6[0]/$b6[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p7[0]/$b7[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p8[0]/$b8[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";

            $p=($p9[0]/$b9[0])*100;
            echo "Pass Percentage in Sub1 : ".$p."% <br>";





      }
      mysqli_close($con);

?>