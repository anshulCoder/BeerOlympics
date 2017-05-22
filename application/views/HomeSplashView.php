<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Beer Olympics</title>
    <?php
        if(isset($meta) && myIsArray($meta))
        {
            ?>
            <meta name="description" content="<?php echo $meta['description'];?>" />

            <!-- Schema.org markup for Google+ -->
            <meta itemprop="name" content="<?php echo $meta['title'];?>">
            <meta itemprop="description" content="<?php echo $meta['description'];?>">
            <meta itemprop="image" content="<?php echo $meta['img'];?>">

            <!-- Twitter Card data -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="@godoolally">
            <meta name="twitter:title" content="<?php echo $meta['title'];?>">
            <meta name="twitter:description" content="<?php echo $meta['description'];?>">
            <meta name="twitter:creator" content="@godoolally">
            <!-- Twitter summary card with large image must be at least 280x150px -->
            <meta name="twitter:image:src" content="<?php echo $meta['img'];?>">

            <!-- Open Graph data -->
            <meta property="og:title" content="<?php echo $meta['title'];?>" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="http://beerolympics.in" />
            <meta property="og:image" content="<?php echo $meta['img'];?>" />
            <meta property="og:description" content="<?php echo $meta['description'];?>" />
            <?php

        }
        else
        {
            ?>
            <meta name="description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism." />

            <!-- Schema.org markup for Google+ -->
            <meta itemprop="name" content="Doolally Beer Olympics 2017">
            <meta itemprop="description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism.">
            <meta itemprop="image" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg">

            <!-- Twitter Card data -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="@godoolally">
            <meta name="twitter:title" content="Doolally Beer Olympics 2017">
            <meta name="twitter:description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism.">
            <meta name="twitter:creator" content="@godoolally">
            <!-- Twitter summary card with large image must be at least 280x150px -->
            <meta name="twitter:image:src" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg">

            <!-- Open Graph data -->
            <meta property="og:title" content="Doolally Beer Olympics 2017" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="http://beerolympics.in" />
            <meta property="og:image" content="<?php echo base_url();?>asset/images/beer_olympics_2017.jpg" />
            <meta property="og:description" content="Gulpius. Burpius. Slurpius. The craziest celebration of beer athleticism." />
            <?php

        }
    ?>
	<?php echo $globalStyle; ?>
</head>
<body class="beerHome">
    <main>
        <div class="row" ng-app="beerOlympicApp" ng-controller="validateCtrl">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 text-center">
                <br>
                <img class="img-responsive main-logo" alt="Doolally" src="<?php echo base_url();?>asset/images/splashLogo.png"/>
                <img class="img-responsive beer-olympics-logo" alt="Beer Olympics" src="<?php echo base_url();?>asset/images/BO_logo.png"/>
                <h2 class="splash-text">See you next year at Doolally Beer Olympics 2018!</h2>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-0"></div>

        </div>
        <!-- Alerts -->
        <button type="button" data-duration="5000"  data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-message="Oh snap! Change a few things up and try submitting again." data-type="error" class="btn pmd-ripple-effect btn-danger pmd-z-depth pmd-alert-toggle hide" id="error-alert"></button>
        <div class="progress hide">
            <div class="indeterminate"></div>
        </div>

        <!-- alert Modal-->
        <div tabindex="-1" class="modal fade" id="alert-dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="pmd-card-title-text common-pink-txt"></h2>
                    </div>
                    <div class="modal-body"></div>
                    <div class="pmd-modal-action text-right">
                        <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default bus-booking-btn" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <button data-target="#alert-dialog" data-toggle="modal" id="alert-modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth hide" type="button">Alert without title bar</button>
    </main>
</body>
<?php echo $globalJs; ?>

</html>