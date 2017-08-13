<?php
include('database_connection.php');
  
            
            $space = false;
            $q =mysql_query("select * from qrecord where  LangId='hi' and rate=0 and datetime like '%2015-03-13%'");
            while($row = mysql_fetch_array($q))
            {
                 $Rs_H = 0;
                $length =0;
                $QuesId =$row['QuesId'];
                $date = $row['datetime'];
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
                $Rs_H = ($length/100)*(.40);
                echo $Rs_H."<br>";
                $update_query = "update qrecord set rate=".$Rs_H.",datetime='".$date."' where QuesId=".$QuesId;
                mysql_query($update_query);
            }
?>