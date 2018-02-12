<?php
        function displaySymbol($randVal, $pos)
        {
        /*    if($randVal == 0)
            {
                echo '<imgsrc = "img/seven.png" alt = "seven" title = "Seven" width = "70"/>';
            }    
            else if($randVal == 1)
            {
                echo '<img src = "img/cherry.png" alt = "cherry" title = "Cherry" width = "70"/>';
            }
            else if($randVal == 2)
            {
                echo '<img src = "img/lemon.png" alt = "lemon" title = "Lemon" width = "70"/>';
            }
            else
            {
                echo '<img src = "img/bar.png" alt = "bar" title = "Bar" width = "70"/>';
            }*/
            switch($randVal)
            {
                case 0: $symbol = "seven";
                        break;
                case 1: $symbol ="cherry";
                        break;
                case 2: $symbol = "lemon";
                        break;
                case 3: $symbol = "bar";
                        break;
            }
            echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt = '$symbol' title = '".ucfirst($symbol)."' width = '70'/>";
        }
        function displayPoints($randVal1, $randVal2, $randVal3)
        {
            echo "<div id = 'output'>";
            if($randVal1 == $randVal2 && $randVal2 == $randVal3)
            {
                switch($randVal1)
                {
                    case 0: $totalPoints = 1000;
                            echo "<h1>Jackpot!</h1>";
                            break;
                    case 1: $totalPoints = 500;
                            break;
                    case 2: $totalPoints = 250;
                            break;
                    case 3: $totalPoints = 900;
                            break;
                }
                echo "<h2>You Won $totalPoints Points!</h2>";
            }
            else 
            {
                echo "<h3>Try Again!</h3>";                
            }
            echo "</div>";
        }
        function play()
        {
            for($i = 1; $i < 4; $i++)
            {
                ${"randVal".$i} = rand(0,3);
                displaySymbol(${"randVal".$i}, $i);
            }
            displayPoints($randVal1, $randVal2, $randVal3);
        }
?>