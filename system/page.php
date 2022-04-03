<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
<!-- Breadcrumbs -->
<div class="container">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="<?php echo $su; ?>" class="breadcrumbs__url">خانه</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            <?php echo $pq['pname']; ?>
        </li>
    </ul>
</div>

<div class="main-container container" id="main-container">
    <!-- post content -->
    <div class="blog__content mb-72">
        <h1 class="page-title"><?php echo $pq['pname']; ?></h1>
        <img src="<?php echo $pq['pimage']; ?>" class="page-featured-img">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="entry__article">
                    <?php echo $pq['pdesc']; ?>
                </div>
            </div>
        </div>
    </div> <!-- end post content -->
</div> <!-- end main container -->