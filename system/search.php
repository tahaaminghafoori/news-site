<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
<div class="main-container container pt-40" id="main-container">

<!-- Content -->
<div class="row">

    <!-- Posts -->
    <div class="col-lg-8 blog__content mb-72">
        <h1 class="page-title">نتایج جستجو برای: <?php echo $s; ?></h1>
        <?php while($pq=mysqli_fetch_array($pquery)){ ?>
        <article class="entry card post-list">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(<?php echo $pq['pimage']; ?>)">
                <a href="<?php echo $su."?get=news&p=".$pq['id']; ?>" class="thumb-url"></a>
                <img src="<?php echo $pq['pimage']; ?>" alt="" class="entry__img d-none">
            </div>

            <div class="entry__body post-list__body card__body">
                <div class="entry__header">
                    <h2 class="entry__title">
                        <a href="<?php echo $su."?get=news&p=".$pq['id']; ?>"><?php echo $pq['ptitle']; ?></a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <span>نویسنده:</span>
                            <?php $aquery=mysqli_query($conn,"SELECT * FROM `admin` Where `id`=".$pq['pauthor']);$aq=mysqli_fetch_array($aquery); ?>
                            <a href="<?php echo $su."?get=author&p=".$aq['0']; ?>"><?php echo $aq['1']; ?></a>
                        </li>
                        <li class="entry__meta-date">
                            <?php echo jdate('Y-m-d H:i:s',$pq['pdate']); ?>
                        </li>
                    </ul>
                </div>
                <div class="entry__excerpt">
                    <p><?php echo substr($pq['pdesc'],0,20); ?></p>
                </div>
            </div>
        </article>
        <?php } ?>
        <!-- Pagination -->
        <nav class="pagination">
            <span class="pagination__page pagination__page--current">۱</span>
            <a href="#" class="pagination__page">۲</a>
            <a href="#" class="pagination__page">۳</a>
            <a href="#" class="pagination__page">۴</a>
            <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
        </nav>
    </div> <!-- end posts -->

    <?php require './theme/sidebar.php'; ?>

</div> <!-- end content -->
</div> <!-- end main container -->