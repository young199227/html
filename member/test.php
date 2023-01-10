<?php

    $pas = substr(md5("123456"),10,8);

    $hsah = password_hash($pas,PASSWORD_DEFAULT);

    echo $hsah; 

    echo "<br>";

    if(password_verify($pas,$hsah)){

        echo "密碼正確";

    }else{
        echo "密碼錯誤";
    }


?>