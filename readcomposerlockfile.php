<?php
/**
 * Created by PhpStorm.
 * User: hught
 * Date: 2019/4/28
 * Time: 8:57
 */
//读取copomser.lock文件
$file_path = 'D:\project\ochughtest\composer.lock';
$str = file_get_contents($file_path);
$arr = json_decode($str,true);
$aa = array_merge($arr['packages'],$arr['packages-dev']);
$newArr = [];
foreach($aa as $k=>$v) {
    $newArr['"'.$v['name'].'"'] = $v['version'];
}
echo json_encode($newArr);