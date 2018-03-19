<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/3/19
 * Time: 18:32
 */

$zhanghao=$_REQUEST['zhanghao'];
$pass=$_REQUEST['pass'];
if($zhanghao==='admin'){
    echo 'true';
}else{
    echo 'false';
}

