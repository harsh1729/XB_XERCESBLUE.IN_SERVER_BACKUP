<?php
        include('database_connection.php');
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $datefrom = $_REQUEST['date_from'];
        $dateto = $_REQUEST['date_to'];
        $query = "select * from dataentryusers where username ='".$username ."' and password ='" .$password."'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result))
        {
            $id = $row['id'];
           	
        }
        $count = mysql_num_rows($result);
        if($count==1)
        {
      
             $result = mysql_query("SELECT sum(rate) FROM qrecord where userid=".$id." and LangId='hi' and datetime between str_to_date('".$datefrom."','%Y-%m-%d') AND DATE_ADD(str_to_date('".$dateto."','%Y-%m-%d'),INTERVAL 1 DAY)"); 
            $row = mysql_fetch_row($result);
            $sum_hindi = $row[0];
             $result1 = mysql_query("SELECT sum(rate) FROM qrecord where userid=".$id." and LangId='en' and datetime between str_to_date('".$datefrom."','%Y-%m-%d') AND DATE_ADD(str_to_date('".$dateto."','%Y-%m-%d'),INTERVAL 1 DAY)"); 
            $row1 = mysql_fetch_row($result1);
            $sum_english = $row1[0];
            echo "hindi:-".$sum_hindi."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "english:-".$sum_english."<br><br>";
            echo "total:".($sum_hindi+$sum_english);
            
        }
        else
        {
            echo "wrong username or password";
        }
    ?>
