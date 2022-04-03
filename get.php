<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;}
$ptitle='صفحه اصلی';
require './theme/header.php';
if($get == 'index' AND $p == null){
require './system/index.php';
}elseif($get == 'news' AND $p != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `post` WHERE `id`=$p");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/news.php';
    }else{
        require './system/404.php';
    }
}elseif($get == 'page' AND $p != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `page` WHERE `id`=$p");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/page.php';
    }else{
        require './system/404.php';
    }
}elseif($get == 'cat' AND $p != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `cat` WHERE `id`=$p");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/cat.php';
    }else{
        require './system/404.php';
    }
}elseif($get == 'tag' AND $p != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `tag` WHERE `id`=$p");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/tag.php';
    }else{
        require './system/404.php';
    }
}elseif($get == 'author' AND $p != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `admin` WHERE `id`=$p");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/author.php';
    }else{
        require './system/404.php';
    }
}elseif($get == null AND $p == null AND $s != null){
    $pquery=mysqli_query($conn,"SELECT * FROM `post` WHERE `pdesc` LIKE '%$p%'");$pq=mysqli_fetch_array($pquery);
    if($pq != null){
        require './system/search.php';
    }else{
        require './system/404.php';
    }
}else{
    require './system/404.php';
}
require './theme/footer.php'; ?>