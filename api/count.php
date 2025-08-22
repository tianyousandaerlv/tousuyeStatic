<?php

$file_name=substr(urldecode($_POST['canshu']),1).date("Y-m-d",time()).".txt";
//判断txt文件是否存在
if(file_exists($file_name)){
    //统计+1
    $count = intval(file_get_contents($file_name));
    file_put_contents($file_name, $count + 1);
}else{
    //新建txt文件
    fopen($file_name,"w");
    
    //统计+1
    $count = intval(file_get_contents($file_name));
    file_put_contents($file_name, $count + 1);
}

