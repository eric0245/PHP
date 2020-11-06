<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");    //mysqli_connect，必須要設定ip(本地端為localhost)，帳號、密碼，以及連結的資料庫(mydb)。
    
    $result=mysqli_query($conn, "select * from user");          //mysqli_query從表格user找出資料。

    $row=mysqli_fetch_array($result);                           //mysqli_fetch_array從$result擷取每筆資料，每fetch一次抓一筆資料。

    echo $row[id] + " " + $row[pwd];                            //輸出[id]和[pwd]。
?>