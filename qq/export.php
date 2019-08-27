<?php
    $link = mysqli_connect('127.0.0.1','root','root','yii2basic');
    mysqli_query($link,"set names utf8");
    $sql = "select * from user";
    $a = mysqli_query($link,$sql);
    while ($res = mysqli_fetch_assoc($a)){
        $arr[] = $res;
    }
    $str = "id\t名称\t价钱\t密码\n";
    foreach ($arr as $key => $v){
        $str.=implode("\t",$v)."\n";
    }
    header('Content-type: application/XLSX');

    // It will be called downloaded.pdf
    header('Content-Disposition: attachment; filename="L6688J.XLSX"');
    echo $str;
