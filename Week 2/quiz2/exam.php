
<?php 
function hitung($string_data)
    {
        $math = preg_replace('([^\\+\\-*\\/%\\^])', ' ', trim($string_data));
        $math = explode(' ', trim($math));
        
        foreach ($math as $key => $hasil)
        {
            if ($hasil)
                $operators[] = $hasil;
        }
        
        $numbers = preg_replace('([^0-9])', ' ', trim($string_data));
        $numbers = explode(' ', $numbers);
        
        $i = 0;
        
        foreach ($numbers AS $key => $hasil)
        {
            if ($key == 0)
            {
                $answer = $hasil;
                continue;
            }
        
            if ($hasil)
            {
                switch ($operators[$i])
                {
                    case '+':
                        $answer += $hasil;
                        break;
                        
                    case '-':
                        $answer -= $hasil;
                        break;
                        
                    case '*':
                        $answer *= $hasil;
                        break;
                        
                    case '/':
                        $answer /= $hasil;
                        break;
                        
                    case '^':
                        $answer ^= $hasil;
                        break;
                        
                    case '%':
                        $answer %= $hasil;
                }
                
                $i++;
            }
        }
        
        return $answer;
    }  
    echo hitung("102*2");
    echo hitung("2+3");
    //dll
?>  