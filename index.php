<?php require './include/functions.php';
define('pactive', '');
//System
if(empty($_REQUEST['get']) AND empty($_REQUEST['p']) AND empty($_REQUEST['search'])){
    $get='index';
    $p=null;
    $s=null;
}elseif(empty($_REQUEST['get']) AND empty($_REQUEST['p']) AND !empty($_REQUEST['search'])){
    $get=null;
    $p=null;
    $s=$_REQUEST['search'];
}else{
    $get=$_REQUEST['get'];
    $p=$_REQUEST['p'];
    $s=null;
}
//Get Content
require './get.php'; ?>