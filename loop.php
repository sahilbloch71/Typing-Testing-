<?php
//Star Pyramid Size
$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>