<?php
    print_r($_COOKIE); 
    // $_COOKIE['my_Oleg'] = "Oleg";
    setcookie("my_cookie", 'OLEG', time() + 3600);
?>