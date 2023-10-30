<?php if($announcements->count()): ?>
    <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.alert','data' => ['type' => $announcement->type,'dismissable' => false,'class' => 'pt-1 pb-1 mb-0']]); ?>
<?php $component->withName('utils.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement->type),'dismissable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'class' => 'pt-1 pb-1 mb-0']); ?>
            <?php echo e((new \Illuminate\Support\HtmlString($announcement->message))); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/mykios/resources/views/includes/partials/announcements.blade.php ENDPATH**/ ?>