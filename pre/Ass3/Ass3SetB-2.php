<?php
        $str1=$_POST['str1'];
        $str2=$_POST['sep'];
        $str3=$_POST['sep_repl'];
        $ch=$_POST['ch'];

        echo "Entered string is $str1<br>";
        echo "Chosen character=$str2.<br>";
        echo "Separator for replace=$str3.<br>";
        
	     switch($ch)
                {
                case 1: 

                  $str_arr = explode ($str2, $str1); 
                  print_r($str_arr);
                     

           //   echo"After splitting the string::<br>";
          //    $s=preg_split("//",$str2);
            //  foreach($s as $v) echo "\t$v <br>";
                        break;
                case 2:

//This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.
                       
	                $str4=str_replace($str2,$str3,$str1);
                        printf("\nAfter replacing string::");
                        echo $str4;
                break;
                
           case 3:
               $str5=strchr($str1,' ');
               echo "\n Last word from the given string ".$str5; 
                break;
        
              
        }

?>