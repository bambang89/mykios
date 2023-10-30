<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(appName()); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', appName()); ?>">
        <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'Anthony Rappa'); ?>">
        <?php echo $__env->yieldContent('meta'); ?>

        <?php echo $__env->yieldPushContent('before-styles'); ?>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="<?php echo e(mix('css/frontend.css')); ?>" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <?php echo $__env->yieldPushContent('after-styles'); ?>
    </head>
    <body>
        <?php echo $__env->make('includes.partials.read-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.logged-in-as', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="app" class="flex-center position-ref full-height">
            <div class="top-right links">
                <?php if(auth()->guard()->check()): ?>
                    <?php if($logged_in_user->isUser()): ?>
                        <a href="<?php echo e(route('frontend.user.dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                    <?php endif; ?>

                    <a href="<?php echo e(route('frontend.user.account')); ?>"><?php echo app('translator')->get('Account'); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('frontend.auth.login')); ?>"><?php echo app('translator')->get('Login'); ?></a>

                    <?php if(config('boilerplate.access.user.registration')): ?>
                        <a href="<?php echo e(route('frontend.auth.register')); ?>"><?php echo app('translator')->get('Register'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div><!--top-right-->

            <div class="content">
                <?php echo $__env->make('includes.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="title m-b-md">
                    <example-component></example-component>
                </div><!--title-->

                <div class="links">
                    <a href="http://laravel-boilerplate.com" target="_blank"><i class="fa fa-book"></i> <?php echo app('translator')->get('Docs'); ?></a>
                    <a href="https://github.com/rappasoft/laravel-boilerplate" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                </div><!--links-->
            </div><!--content-->
        </div><!--app-->

        <?php echo $__env->yieldPushContent('before-scripts'); ?>
        <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
        <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
        <script src="<?php echo e(mix('js/frontend.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('after-scripts'); ?>
    </body>
</html>
<?php /**PATH /var/www/mykios/resources/views/frontend/index.blade.php ENDPATH**/ ?>