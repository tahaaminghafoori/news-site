<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
        <!-- Trending Now -->
        <div class="container">
            <div class="trending-now">
                <span class="trending-now__label">
                    <i class="ui-flash"></i>
                    خبرهای داغ</span>
                <div class="newsticker">
                    <ul class="newsticker__list">
                        <?php $bpquery=mysqli_query($conn,"SELECT * FROM `post` ORDER BY `post`.`phits` DESC Limit 3");
                        while($bpq=mysqli_fetch_array($bpquery)){ ?>
                        <li class="newsticker__item"><a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>" class="newsticker__item-url"><?php echo $bpq['pname']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="newsticker-buttons">
                    <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-left"></i></button>
                    <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="main-container container pt-24" id="main-container">

            <!-- Carousel posts -->
            <section class="section mb-0">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title">پربازدیدترین اخبار</h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <?php $bpquery=mysqli_query($conn,"SELECT * FROM `post` ORDER BY `post`.`phits` DESC Limit 5");
                    while($bpq=mysqli_fetch_array($bpquery)){ ?>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo $bpq['pimage']; ?>');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>"><?php echo $bpq['pname']; ?></a>
                                </h2>
                            </div>
                            <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>" class="thumb-url"></a>
                        </div>
                    </article>
                    <?php } ?>
                </div> <!-- end slider -->

            </section> <!-- end carousel posts -->
            
            <?php $cnquery=mysqli_query($conn,"SELECT * FROM `cat`");
            while($cnq=mysqli_fetch_array($cnquery)){ ?>
            <!-- Carousel posts -->
            <section class="section mb-0">
                <div class="title-wrap title-wrap--line">
                    <h3 class="section-title"><?php echo $cnq['cname']; ?></h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <?php $bpquery=mysqli_query($conn,"SELECT * FROM `post` ORDER BY `post`.`id` DESC ");
                    foreach(mysqli_fetch_array($bpquery) as $carray){
                    $cp=explode(' ',$carray['pcat']);
                    if(in_array($cnq['id'],$cp)){ ?>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('<?php echo $carray['pimage']; ?>');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="<?php echo $su."?get=news&p=".$carray['id']; ?>"><?php echo $carray['pname']; ?></a>
                                </h2>
                            </div>
                            <a href="<?php echo $su."?get=news&p=".$carray['id']; ?>" class="thumb-url"></a>
                        </div>
                    </article>
                    <?php }} ?>
                </div> <!-- end slider -->

            </section> <!-- end carousel posts -->
            <?php } ?>

        </div> <!-- end main container -->