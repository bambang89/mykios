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
    <link href="<?php echo e(mix('css/backend.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('after-styles'); ?>
</head>
<body class="c-app">
    <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="c-wrapper c-fixed-components">
        <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.read-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.logged-in-as', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.partials.announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <?php echo $__env->make('includes.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div><!--fade-in-->
                </div><!--container-fluid-->
            </main>
        </div><!--c-body-->

        <?php echo $__env->make('backend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!--c-wrapper-->

    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/backend.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('after-scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/mykios/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>