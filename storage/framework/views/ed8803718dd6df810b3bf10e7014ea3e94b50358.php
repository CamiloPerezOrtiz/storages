<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <title>WDStorages</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main_start.css')); ?>">
    <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pace.min.js')); ?>"></script>
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.ico')); ?>">
</head>
<body id="top">
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo e(asset('img/platilla3-01.jpg')); ?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="home-content">
            <div class="row home-content__main">
                <h3>Warriors Defender Storage</h3>
                <h1>
                    It is a backup solution that <br>
                    stores information in the cloud <br>
                    or on site, in a simple and efficient <br>
                    way in order to prevent against disasters.
                </h1>
                <div class="home-content__buttons">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn--stroke">
                        LOGIN
                    </a>
                </div>
            </div>
        </div>
        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/WarriorsLabs"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/warriorsfim"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://mx.linkedin.com/in/warriorsdefender"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a>
            </li>
            <li>
                <a href="https://warriorslabs.com/"><i class="fa fa-globe" aria-hidden="true"></i><span>Web</span></a>
            </li>
        </ul>
    </section>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>