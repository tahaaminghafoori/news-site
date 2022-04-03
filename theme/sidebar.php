                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">محبوب ترین اخبار</h4>
                        <ul class="post-list-small">
                            <?php $bpquery=mysqli_query($conn,"SELECT * FROM `post` ORDER BY `post`.`phits` DESC Limit 6");
                            while($bpq=mysqli_fetch_array($bpquery)){ ?>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>">
                                                <img data-src="<?php echo $bpq['pimage']; ?>" src="<?php echo $su; ?>img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>"><?php echo $bpq['pname']; ?></a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <?php $aquery=mysqli_query($conn,"SELECT * FROM `admin` Where `id`=".$bpq['pauthor']);$aq=mysqli_fetch_array($aquery); ?>
                                                <a href="<?php echo $su."?get=author&p=".$aq['0']; ?>"><?php echo $aq['1']; ?></a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <?php echo jdate('Y-m-d H:i:s',$bpq['pdate']); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <?php } ?>
                        </ul>
                    </aside> <!-- end widget popular posts -->

                </aside> <!-- end sidebar -->
