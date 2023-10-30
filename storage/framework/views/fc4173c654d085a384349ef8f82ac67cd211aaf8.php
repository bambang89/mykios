<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo e(asset('img/brand/coreui.svg#full')); ?>"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo e(asset('img/brand/coreui.svg#signet')); ?>"></use>
        </svg>
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'c-sidebar-nav-link','href' => route('admin.dashboard'),'active' => activeClass(Route::is('admin.dashboard'), 'c-active'),'icon' => 'c-sidebar-nav-icon cil-speedometer','text' => __('Dashboard')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'c-sidebar-nav-link','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('admin.dashboard'), 'c-active')),'icon' => 'c-sidebar-nav-icon cil-speedometer','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </li>

        <?php if(
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        ): ?>
            <li class="c-sidebar-nav-title"><?php echo app('translator')->get('System'); ?></li>

            <li class="c-sidebar-nav-dropdown <?php echo e(activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show')); ?>">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => '#','icon' => 'c-sidebar-nav-icon cil-user','class' => 'c-sidebar-nav-dropdown-toggle','text' => __('Access')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','icon' => 'c-sidebar-nav-icon cil-user','class' => 'c-sidebar-nav-dropdown-toggle','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Access'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if(
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    ): ?>
                        <li class="c-sidebar-nav-item">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.auth.user.index'),'class' => 'c-sidebar-nav-link','text' => __('User Management'),'active' => activeClass(Route::is('admin.auth.user.*'), 'c-active')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.user.index')),'class' => 'c-sidebar-nav-link','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('User Management')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('admin.auth.user.*'), 'c-active'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </li>
                    <?php endif; ?>

                    <?php if($logged_in_user->hasAllAccess()): ?>
                        <li class="c-sidebar-nav-item">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('admin.auth.role.index'),'class' => 'c-sidebar-nav-link','text' => __('Role Management'),'active' => activeClass(Route::is('admin.auth.role.*'), 'c-active')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.auth.role.index')),'class' => 'c-sidebar-nav-link','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Role Management')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(activeClass(Route::is('admin.auth.role.*'), 'c-active'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if($logged_in_user->hasAllAccess()): ?>
            <li class="c-sidebar-nav-dropdown">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => '#','icon' => 'c-sidebar-nav-icon cil-list','class' => 'c-sidebar-nav-dropdown-toggle','text' => __('Logs')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','icon' => 'c-sidebar-nav-icon cil-list','class' => 'c-sidebar-nav-dropdown-toggle','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Logs'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('log-viewer::dashboard'),'class' => 'c-sidebar-nav-link','text' => __('Dashboard')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('log-viewer::dashboard')),'class' => 'c-sidebar-nav-link','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('log-viewer::logs.list'),'class' => 'c-sidebar-nav-link','text' => __('Logs')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('log-viewer::logs.list')),'class' => 'c-sidebar-nav-link','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Logs'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
<?php /**PATH /var/www/mykios/resources/views/backend/includes/sidebar.blade.php ENDPATH**/ ?>