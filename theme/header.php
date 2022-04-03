<?php if(!defined('pactive')){include '../include/functions.php';header('Location: '.$su);exit;} ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <title><?php echo $config['stitle']; ?> | <?php echo $ptitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php echo $config['sdesc'];; ?>">
    <!-- Css -->
    <link rel="stylesheet" href="<?php echo $su; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $su; ?>assets/css/font-icons.css" />
    <link rel="stylesheet" href="<?php echo $su; ?>assets/css/style.css" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo $su; ?>assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $su; ?>assets/img/afavicon.png">
    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="<?php echo $su; ?>assets/js/lazysizes.min.js"></script>
</head>
<body class="style-default style-rounded">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <main class="main oh" id="main">

        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Logo -->
                        <a href="<?php echo $su; ?>" class="logo">
                            <img class="logo__img" src="<?php echo $su; ?>assets/img/logo_default.png" alt="logo">
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="active">
                                    <a href="<?php echo $su; ?>">صفحه اصلی</a>
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">دسته بندی ها</a>
                                    <ul class="nav__dropdown-menu">
                                        <?php $mcqury=mysqli_query($conn,"Select * From `cat` Where `menu`=1");
                                        while($mcq=mysqli_fetch_array($mcqury)){ ?>
                                        <li><a href="<?php echo $su."?get=cat&p=".$mcq['id']; ?>"><?php echo $mcq['cname'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                
                                <?php $mcqury=mysqli_query($conn,"Select * From `page` Where `menu`=1");
                                while($mcq=mysqli_fetch_array($mcqury)){ ?>
                                <li class="nav__dropdown">
                                    <a href="<?php echo $su."?get=page&p=".$mcq['id']; ?>"><?php echo $mcq['pname'] ?></a>
                                </li>
                                <?php } ?>

                            </ul> <!-- end menu -->
                        </nav> <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                    <i class="ui-search nav__search-trigger-icon"></i>
                                </a>
                                <div class="nav__search-box" id="nav__search-box">
                                    <form class="nav__search-form" method="get">
                                        <input name="search" type="text" placeholder="جستجو" class="nav__search-input">
                                        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                            <i class="ui-search nav__search-icon"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end nav right -->

                    </div> <!-- end flex-parent -->
                </div> <!-- end container -->

            </div>
        </header> <!-- end navigation -->