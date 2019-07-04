<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WDStorage</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.ico')); ?>">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(<?php echo e(asset('img/Slanted-Gradient.svg')); ?>);">
                        <span class="login100-form-title-1">
                            <img src="<?php echo e(asset('img/logowarrylabs-03.png')); ?>" height="120px">
                        </span>
                    </div>
                    <form class="login100-form validate-form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <?php if($errors->has('email')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                            <span class="label-input100">Email</span>
                            <input type="email" class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Enter email">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                <?php echo e(__('Send Password Reset Link')); ?>

                            </button>
                        </div>
                        <div class="flex-sb-m w-full p-b-30">
                            <div class="contact100-form-checkbox">
                            </div>
                            <div>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link txt1" href="<?php echo e(route('login')); ?>">
                                        <?php echo e(__('Back to login')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>