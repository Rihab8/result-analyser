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

            $query="SELECT * FROM $table5 WHERE Sub1 NOT LIKE '' AND Sub2 NOT LIKE '' AND Sub3 NOT LIKE '' AND Sub4 NOT LIKE '' AND Sub5 NOT LIKE '' AND Sub6 NOT LIKE '' AND Sub7 NOT LIKE '' AND Sub8 NOT LIKE '' AND Sub9 NOT LIKE '' LIMIT 1";
            $total=mysqli_query($con,$query);
            $row=mysqli_fetch_array($total,MYSQLI_BOTH);
            //echo "".substr($row[1],0,5)."<br>".$row[2]."<br>".$row[3]."<br>".$row[4]."<br>".$row[5]."<br>".$row[6]."<br>".$row[7]."<br>".$row[8]."<br>".$row[9];
            $S1=substr($row[1],0,5);
            $S2=substr($row[2],0,6);
            $S3=substr($row[3],0,6);
            $S4=substr($row[4],0,6);
            $S5=substr($row[5],0,6);
            $S6=substr($row[6],0,6);
            $S7=substr($row[7],0,6);
            $S8=substr($row[8],0,6);
            $S9=substr($row[9],0,6);


            echo "Computer Science and Engineering<br><br>";
            $t="SELECT COUNT(Reg) FROM $table5";
            $total=mysqli_query($con,$t);
            $a=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Total students :".$a[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub1  NOT LIKE '%FE%' AND Sub1 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b1=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in ".$S1.":".$b1[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub2  NOT LIKE '%FE%' AND Sub2 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b2=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S2.":".$b2[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub3  NOT LIKE '%FE%' AND Sub3 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b3=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S3.":".$b3[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub4  NOT LIKE '%FE%' AND Sub4 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b4=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S4.":".$b4[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub5  NOT LIKE '%FE%' AND Sub5 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b5=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S5.":".$b5[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub6  NOT LIKE '%FE%' AND Sub6 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b6=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S6.":".$b6[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub7  NOT LIKE '%FE%' AND Sub7 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b7=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S7.":".$b7[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub8  NOT LIKE '%FE%' AND Sub8 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b8=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S8.":".$b8[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub9  NOT LIKE '%FE%' AND Sub9 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $b9=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students eligible in".$S9.":".$b9[0]."<br>";



            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub1  NOT LIKE '%FE%' AND Sub1 NOT LIKE '%F%' AND Sub1 NOT LIKE '%Absent%' AND Sub1 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p1=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S1.":".$p1[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub2  NOT LIKE '%FE%' AND Sub2 NOT LIKE '%F%' AND Sub2 NOT LIKE '%Absent%' AND Sub2 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p2=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S2.":".$p2[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub3  NOT LIKE '%FE%' AND Sub3 NOT LIKE '%F%' AND Sub3 NOT LIKE '%Absent%' AND Sub3 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p3=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S3.":".$p3[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub4  NOT LIKE '%FE%' AND Sub4 NOT LIKE '%F%' AND Sub4 NOT LIKE '%Absent%' AND Sub4 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p4=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S4.":".$p4[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub5  NOT LIKE '%FE%' AND Sub5 NOT LIKE '%F%' AND Sub5 NOT LIKE '%Absent%' AND Sub5 NOT LIKE 'NULL'";
            $total=mysqli_query($con,$t);
            $p5=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S5.":".$p5[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub6  NOT LIKE '%FE%' AND Sub6 NOT LIKE '%F%' AND Sub6 NOT LIKE '%Absent%' AND Sub6 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p6=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S6.":".$p6[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub7  NOT LIKE '%FE%' AND Sub7 NOT LIKE '%F%' AND Sub7 NOT LIKE '%Absent%' AND Sub7 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p7=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S7.":".$p7[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub8  NOT LIKE '%FE%' AND Sub8 NOT LIKE '%F%' AND Sub8 NOT LIKE '%Absent%' AND Sub8 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p8=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S8.":".$p8[0]."<br>";

            $t="SELECT COUNT(Reg) FROM $table5 WHERE Sub9  NOT LIKE '%FE%' AND Sub9 NOT LIKE '%F%' AND Sub9 NOT LIKE '%Absent%' AND Sub9 NOT LIKE ''";
            $total=mysqli_query($con,$t);
            $p9=mysqli_fetch_array($total,MYSQLI_NUM);
            echo "Students passed in".$S9.":".$p9[0]."<br>";

            $p=round(($p1[0]/$b1[0]),4)*100;
            echo "Pass Percentage in".$S1.":".$p."% <br>";

            $p=round(($p2[0]/$b2[0]),4)*100;
            echo "Pass Percentage in".$S2.":".$p."% <br>";

            $p=round(($p3[0]/$b3[0]),4)*100;
            echo "Pass Percentage in".$S3.":".$p."% <br>";

            $p=round(($p4[0]/$b4[0]),4)*100;
            echo "Pass Percentage in".$S4.":".$p."% <br>";

            $p=round(($p5[0]/$b5[0]),4)*100;
            echo "Pass Percentage in".$S5.":".$p."% <br>";

            $p=round(($p6[0]/$b6[0]),4)*100;
            echo "Pass Percentage in".$S6.":".$p."% <br>";

            $p=round(($p7[0]/$b7[0]),4)*100;
            echo "Pass Percentage in".$S7.":".$p."% <br>";

            $p=round(($p8[0]/$b8[0]),4)*100;
            echo "Pass Percentage in".$S8.":".$p."% <br>";

            $p=round(($p9[0]/$b9[0]),4)*100;
            echo "Pass Percentage in".$S9.":".$p."% <br>";





      }
      mysqli_close($con);

?>
