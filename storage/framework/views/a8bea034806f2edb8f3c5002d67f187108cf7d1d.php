<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <a class="c-header-brand d-lg-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo e(asset('img/brand/coreui.svg#full')); ?>"></use>
        </svg>
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?php echo e(route('frontend.index')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>

        <?php if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1): ?>
            <li class="c-header-nav-item dropdown">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['text' => __(getLocaleName(app()->getLocale())),'class' => 'c-header-nav-link dropdown-toggle','id' => 'navbarDropdownLanguageLink','dataToggle' => 'dropdown','ariaHaspopup' => 'true','ariaExpanded' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(getLocaleName(app()->getLocale()))),'class' => 'c-header-nav-link dropdown-toggle','id' => 'navbarDropdownLanguageLink','data-toggle' => 'dropdown','aria-haspopup' => 'true','aria-expanded' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php echo $__env->make('includes.partials.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>
        <?php endif; ?>
    </ul>

    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'c-header-nav-link','dataToggle' => 'dropdown','href' => '#','role' => 'button','ariaHaspopup' => 'true','ariaExpanded' => 'false']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'c-header-nav-link','data-toggle' => 'dropdown','href' => '#','role' => 'button','aria-haspopup' => 'true','aria-expanded' => 'false']); ?>
                 <?php $__env->slot('text', null, []); ?> 
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="<?php echo e($logged_in_user->avatar); ?>" alt="<?php echo e($logged_in_user->email ?? ''); ?>">
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2">
                    <strong><?php echo app('translator')->get('Account'); ?></strong>
                </div>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['class' => 'dropdown-item','icon' => 'c-icon mr-2 cil-account-logout','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'dropdown-item','icon' => 'c-icon mr-2 cil-account-logout','onclick' => 'event.preventDefault();document.getElementById(\'logout-form\').submit();']); ?>
                     <?php $__env->slot('text', null, []); ?> 
                        <?php echo app('translator')->get('Logout'); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.logout'),'id' => 'logout-form','class' => 'd-none']]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.logout')),'id' => 'logout-form','class' => 'd-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </li>
    </ul>

    <div class="c-subheader justify-content-between px-3">
        <?php echo $__env->make('backend.includes.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="c-subheader-nav mfe-2">
            <?php echo $__env->yieldContent('breadcrumb-links'); ?>
        </div>
    </div><!--c-subheader-->
</header>
<?php /**PATH /var/www/mykios/resources/views/backend/includes/header.blade.php ENDPATH**/ ?>