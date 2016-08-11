<?php
    if(isset($_GET['on'])) {
        onFunc();
    }
    if(isset($_GET['off'])) {
        offFunc();
    }

    function onFunc(){
        echo "Button on Clicked";
        exec("gpio -g mode 20 out");
        exec("gpio -g write 20 1");
    }
    function offFunc(){
        echo "Button off clicked";
        exec("gpio -g mode 20 out");
        exec("gpio -g write 20 0");
    }
?>