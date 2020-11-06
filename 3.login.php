<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))    //echo代表的是輸出的意思，且$_GET必須使用大寫來表示，如果[id]輸入john且[pwd]輸入john1234。
        echo "Welcome";                                       //echo代表的是輸出的意思，成功的話會顯示歡迎。
    else
        echo "fail login";                                    //echo代表的是輸出的意思，失敗的話會顯示登入失敗。
?>