<!doctype html>
<html lang="<?php echo e(htmlLang()); ?>" <?php if (\Illuminate\Support\Facades\Blade::check('langrtl')): ?> dir="rtl" <?php endif; ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(appName()); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', appName()); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'Anthony Rappa'); ?>">
    <?php echo $__env->yieldContent('meta'); ?>

    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(mix('css/frontend.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('after-styles'); ?>
</head>
<body>
    <?php echo $__env->make('includes.partials.read-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.partials.logged-in-as', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.partials.announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="app">
        <?php echo $__env->make('frontend.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div><!--app-->

    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/frontend.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('after-scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/mykios/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>