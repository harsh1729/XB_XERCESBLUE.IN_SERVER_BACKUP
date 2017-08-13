<html xmlns="http://www.w3.org/1999/xhtml">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            $Rs_H = 0;
            
            $space = false;
            $q =mysql_query("select * from qrecord where userid=".$id." and LangId='hi' and datetime between str_to_date('".$datefrom."','%Y-%m-%d') AND DATE_ADD(str_to_date('".$dateto."','%Y-%m-%d'),INTERVAL 1 DAY) order by QuesId asc");
            while($row = mysql_fetch_array($q))
            {
                $length =0;
                $question = $row['Question'];
                for($i=1;$i<=strlen($question);$i++)
                {
                    $space = false;
                    if($question[($i-1)] === " ")
                    {
                        if(!$space)
                        {
                            $length = $length+1;
                        }
                        $space = true;
                    }
                    else
                    {
                        $space=false;
                        if(!$space)
                        {
                            $length = $length+1;
                        }
                    }
                }
                $solution = $row['Solution'];
                for($i=1;$i<=strlen($solution);$i++)
                {
                    $space = false;
                    if($solution[($i-1)] === " ")
                    {
                        if(!$space)
                        {
                            $length = $length+1;
                        }
                        $space = true;
                    }
                    else
                    {
                        $space=false;
                        if(!$space)
                        {
                            $length = $length+1;
                        }
                    }
                }
                $optquery = "select * from options where QuesId =".$row['QuesId'];
                $optresult = mysql_query($optquery);
                while($optrow = mysql_fetch_array($optresult))
                {
                    $opttext = $optrow['OptionText'];
                    for($i=1;$i<=strlen($optrow['OptionText']);$i++)
                    {
                        $space = false;
                        if($opttext[($i-1)] === " ")
                        {
                            if(!$space)
                            {
                                $length = $length+1;
                            }
                            $space = true;
                        }
                        else
                        {
                            $space=false;
                            if(!$space)
                            {
                                $length = $length+1;
                            }
                        }
                    }
                }
                $Rs_H = $Rs_H +($length/100)*(.40);
            }
             
             $Rs_E = 0;
            $spaceE = false;
            $qE =mysql_query("select * from qrecord where userid=".$id." and LangId='en' and datetime between str_to_date('".$datefrom."','%Y-%m-%d') AND DATE_ADD(str_to_date('".$dateto."','%Y-%m-%d'),INTERVAL 1 DAY) order by QuesId asc");
            while($rowE = mysql_fetch_array($qE))
            {
                $lengthE =0;
                $questionE = $rowE['Question'];
                for($i=1;$i<=strlen($questionE);$i++)
                {
                    $spaceE = false;
                    if($questionE[($i-1)] === " ")
                    {
                        if(!$spaceE)
                        {
                            $lengthE = $lengthE+1;
                        }
                        $spaceE = true;
                    }
                    else
                    {
                        $spaceE=false;
                        if(!$spaceE)
                        {
                            $lengthE = $lengthE+1;
                        }
                    }
                }
                $solutionE = $rowE['Solution'];
                for($i=1;$i<=strlen($solutionE);$i++)
                {
                    $spaceE = false;
                    if($solutionE[($i-1)] === " ")
                    {
                        if(!$spaceE)
                        {
                            $lengthE = $lengthE+1;
                        }
                        $spaceE = true;
                    }
                    else
                    {
                        $spaceE=false;
                        if(!$spaceE)
                        {
                            $lengthE = $lengthE+1;
                        }
                    }
                    
                }
                $optqueryE = "select * from options where QuesId =".$rowE['QuesId'];
                $optresultE = mysql_query($optqueryE);
                while($optrowE = mysql_fetch_array($optresultE))
                {
                    $opttextE = $optrowE['OptionText'];
                    for($i=1;$i<=strlen($optrowE['OptionText']);$i++)
                    {
                        $spaceE = false;
                        if($opttextE[($i-1)] === " ")
                        {
                            if(!$spaceE)
                            {
                                $lengthE = $lengthE+1;
                            }
                            $spaceE = true;
                        }
                        else
                        {
                            $spaceE=false;
                            if(!$spaceE)
                            {
                                $lengthE = $lengthE+1;
                            }
                        }
                    }
                }
                $Rs_E = $Rs_E+($lengthE/100)*(.35);
            }
         //   echo "letters_H:-".$length."<br>";
        //    echo "letters_E:-".$lengthE."<br>";
         //   $rsE = ($lengthE/100)*(.35);
          //  $rsH = ($length/100)*(.40);
        //    echo "<br> Rs =".($rsH+$rsE);
        echo ($Rs_E+$Rs_H);
        }
        else
        {
            echo "wrong username or password";
        }
    ?>
</html>