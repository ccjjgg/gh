<?php
    $arr = file_get_contents("L6688J.XLSX");
    $data = explode("\n",$arr);
    foreach ($data as $key => $v){
        $a[] = explode("\t",$v);
        unset($a[0]);
    }

    $link = mysqli_connect('127.0.0.1','root','root','yii2basic');
    mysqli_query($link,"set names utf8");
    foreach($a as $key => $v){
        $sql = "insert into user value(null ,'$v[1]','$v[2]','$v[3]')";
        mysqli_query($link,$sql);
    }
    die();
    var_dump($a);die();