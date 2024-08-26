<?php
        echo "<br>";
            $idade = 16;
            if($idade > 65){              
                echo $idade." anos, O uso tem que ser com restrições"; 
            }
            elseif($idade >= 16){
                echo $idade." anos, Pode usar o medicamento";        
            }
            else {
                    echo  $idade." anos, é proibido o uso do medicamento";
                }
        ?>