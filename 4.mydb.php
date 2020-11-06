<?php
    error_reporting(0);                                         //error_reporting()設置PHP的報錯級別並返回當前級別，相當於禁用錯誤報告。
    
    $conn = mysqli_connect("localhost","root","", "mydb");      //mysqli_connect，必須要設定ip(本地端為localhost)，帳號、密碼，以及連結的資料庫(mydb)。
    if (mysqli_connect_error($conn))                            //返回一個字符串描述的最後連接錯誤。
        die("資料庫連線錯誤");                                   //die()函數輸出一條消息，並退出當前腳本，該函數是exit()函數的別名。

    mysqli_set_charset($conn, "utf8");                          //mysqli_set_charset()函數規定當與數據庫服務器進行數據傳送時要使用的默認字符集。
    $result=mysqli_query($conn, "select * from user");          //mysqli_query從表格user找出資料。
    while ($row=mysqli_fetch_array($result)) {                  //mysqli_fetch_array從$result擷取每筆資料
        echo $row[id];                                          //輸出[id]。
        echo " ";                                               //echo代表的是輸出的意思。
        echo $row[pwd];                                         //輸出[pwd]。
        echo "<br>";                                            //echo代表的是輸出的意思，<br>=換行。
    }
?>