<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>

        <!-- Footer -->
        <footer class="footer footer--light">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <a href="index.html">
                                    <img src="<?php echo $su; ?>assets/img/logo_default_white.png" srcset="<?php echo $su; ?>assets/img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                                </a>
                                <p class="copyright">

                                    تمامی حقوق مادی و معنوی قالب و سایت متعلق به تگ تچ میباشد و هرگونه کپی برداری شرعا حرام و پیگرد قانونی  دارد.

                                </p>
                                <div class="socials socials--large socials--rounded mb-24">
                                    <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                    <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                    <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                    <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                    <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                                </div>
                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget widget_nav_menu">
                                <h4 class="widget-title">برچسب های داغ</h4>
                                <ul>
                                    <?php $btquery=mysqli_query($conn,"SELECT * FROM `tag` ORDER BY `tag`.`tcount` DESC Limit 6");
                                    while($btq=mysqli_fetch_array($btquery)){ ?>
                                    <li><a href="<?php echo $su."?get=tag&p=".$btq['id']; ?>">#<?php echo $btq['tname'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <aside class="widget widget-popular-posts">
                                <h4 class="widget-title">محبوب ترین اخبار</h4>
                                <ul class="post-list-small">
                                    <?php $bpquery=mysqli_query($conn,"SELECT * FROM `post` ORDER BY `post`.`phits` DESC Limit 2");
                                    while($bpq=mysqli_fetch_array($bpquery)){ ?>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>">
                                                        <img data-src="<?php echo $bpq['pimage']; ?>" src="<?php echo $su; ?>assets/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="<?php echo $su."?get=news&p=".$bpq['id']; ?>"><?php echo $bpq['pname']; ?></a>
                                                </h3>
                                                <ul class="entry__meta">
                                                    <li class="entry__meta-author">
                                                        <span>نویسنده:</span>
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
                            </aside>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_mc4wp_form_widget">
                                <h4 class="widget-title">خبرنامه</h4>
                                <p class="newsletter__text">
                                    <i class="ui-email newsletter__icon"></i>
                                    برای اطلاع از آخرین خبرها مشترک شوید
                                </p>
                                <form action="" class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="form-group">
                                            <input type="email" name="EMAIL" placeholder="ایمیل" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->
        </footer> <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="<?php echo $su; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/easing.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/owl-carousel.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/flickity.pkgd.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/twitterFetcher_min.js"></script>
    <script src="<?php echo $su; ?>assets/js/jquery.newsTicker.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo $su; ?>assets/js/scripts.js"></script>
    
</body>
</html>