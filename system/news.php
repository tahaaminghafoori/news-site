<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
        <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="<?php echo $su; ?>" class="breadcrumbs__url">خانه</a>
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current">
                    <a href="<?php echo $su."?get=news&p=".$pq['id']; ?>" class="breadcrumbs__url"><?php echo $pq['pname']; ?></a>
                </li>
            </ul>
        </div>

        <div class="main-container container" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- post content -->
                <div class="col-lg-8 blog__content mb-72">
                    <div class="content-box">

                        <!-- standard post -->
                        <article class="entry mb-0">

                            <div class="single-post__entry-header entry__header">
                                <?php $pcat=explode(' ',$pq['pcat']);
                                foreach($pcat as $carray){
                                $cquery=mysqli_query($conn,"SELECT * FROM `cat` Where `id`=".$carray);$cq=mysqli_fetch_array($cquery); ?>
                                <a href="<?php echo $su."?get=cat&p=".$cq['0']; ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--green"><?php echo $cq['1']; ?></a>
                                <?php } ?>
                                <h1 class="single-post__entry-title">
                                    <?php echo $pq['pname']; ?>
                                </h1>

                                <div class="entry__meta-holder">
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <?php $aquery=mysqli_query($conn,"SELECT * FROM `admin` Where `id`=".$pq['pauthor']);$aq=mysqli_fetch_array($aquery); ?>
                                            <a href="<?php echo $su."?get=author&p=".$aq['id']; ?>"><?php echo $aq['name']; ?></a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <?php echo jdate('Y-m-d H:i:s',$pq['pdate']); ?>
                                        </li>
                                    </ul>

                                    <ul class="entry__meta">
                                        <li class="entry__meta-views">
                                            <i class="ui-eye"></i>
                                            <?php $phit=++$pq['phits'];
                                            mysqli_query($conn,"UPDATE `post` SET `phits`=$phit WHERE `id`=$p"); ?>
                                            <span><?php echo $pq['phits']++; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end entry header -->

                            <div class="entry__img-holder">
                                <img src="<?php echo $pq['pimage']; ?>" width="822" height="522" alt="<?php echo $pq['pname']; ?>" class="entry__img">
                            </div>

                            <div class="entry__article-wrap">

                                <div class="entry__article">
                                    
                                    <?php echo $pq['pdesc']; ?>

                                    <!-- tags -->
                                    <div class="entry__tags">
                                        <i class="ui-tags"></i>
                                        <span class="entry__tags-label">برچسب ها:</span>
                                        <?php $ptag=explode(' ',$pq['ptag']);
                                        foreach($ptag as $tarray){
                                        $tquery=mysqli_query($conn,"SELECT * FROM `tag` Where `id`=$tarray");$tq=mysqli_fetch_array($tquery); ?>
                                        <a href="<?php echo $su."?get=tag&p=".$tq['0']; ?>" rel="tag"><?php echo $tq['1']; ?></a>
                                        <?php } ?>
                                    </div> <!-- end tags -->

                                </div> <!-- end entry article -->
                            </div> <!-- end entry article wrap -->

                    </div> <!-- end content box -->
                </div> <!-- end post content -->

                <?php require './theme/sidebar.php'; ?>

            </div> <!-- end content -->
        </div> <!-- end main container -->