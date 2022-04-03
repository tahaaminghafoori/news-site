<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
    <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="<?php echo $su; ?>" class="breadcrumbs__url">خانه</a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                    <a href="<?php echo $su."?get=tag&p=".$pq['id']; ?>" class="breadcrumbs__url"><?php echo $pq['name']; ?></a>
                </li>
            </ul>
        </div>


        <div class="main-container container" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-72">
                    <h1 class="page-title"><?php echo $pq['name']; ?></h1>
                    <?php $cquery=mysqli_query($conn,"SELECT * FROM `post`");
                    while($cq=mysqli_fetch_array($cquery)){
                        if($cq['pauthor'] == $pq['id']){ ?>
                    <div class="row card-row">

                        <div class="col-md-6">
                            <article class="entry card">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="<?php echo $su."?get=news&p=".$cq['0']; ?>">
                                        <div class="thumb-container thumb-70">
                                            <img data-src="<?php echo $cq['3']; ?>" src="<?php echo $su."assets/"; ?>img/empty.png" class="entry__img lazyload" alt="<?php echo $cq['1']; ?>" />
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body card__body">
                                    <div class="entry__header">

                                        <h2 class="entry__title">
                                            <a href="<?php echo $su."?get=news&p=".$cq['0']; ?>"><?php echo $cq['1']; ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="<?php echo $su."?get=author&p=".$pq['0']; ?>"><?php echo $pq['name']; ?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?php echo jdate('Y-m-d H:i:s',$cq['2']); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?php echo substr($cq['5'],0,20); ?>. . .</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php }} ?>
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