

<?php $__env->startSection('title', __('Login')); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.card','data' => []]); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('header', null, []); ?> 
                        <?php echo app('translator')->get('Login'); ?>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('body', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.post','data' => ['action' => route('frontend.auth.login')]]); ?>
<?php $component->withName('forms.post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.login'))]); ?>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo app('translator')->get('E-mail Address'); ?></label>

                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo e(__('E-mail Address')); ?>" value="<?php echo e(old('email')); ?>" maxlength="255" required autofocus autocomplete="email" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo app('translator')->get('Password'); ?></label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>" maxlength="100" required autocomplete="current-password" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input name="remember" id="remember" class="form-check-input" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?> />

                                        <label class="form-check-label" for="remember">
                                            <?php echo app('translator')->get('Remember Me'); ?>
                                        </label>
                                    </div><!--form-check-->
                                </div>
                            </div><!--form-group-->

                            <?php if(config('boilerplate.access.captcha.login')): ?>
                                <div class="row">
                                    <div class="col">
                                        <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script><div id="_g-recaptcha"></div>
                <div class="g-recaptcha"
                    data-sitekey=""
                    data-size="invisible"
                    data-callback="_submitForm"
                    data-badge="bottomright">
                </div><script src="https://www.google.com/recaptcha/api.js" async defer></script><script>var _submitForm,_captchaForm,_captchaSubmit,_execute=true;</script><script>window.addEventListener('load', _loadCaptcha);function _loadCaptcha(){
                _captchaForm=document.querySelector("#_g-recaptcha").closest("form");
                _captchaSubmit=_captchaForm.querySelector('[type=submit]');
                _submitForm=function(){if(typeof _submitEvent==="function"){_submitEvent();grecaptcha.reset();}else{_captchaForm.submit();}};
                _captchaForm.addEventListener('submit',function(e){e.preventDefault();
                if(typeof _beforeSubmit==='function'){_execute=_beforeSubmit(e);}
                if(_execute){grecaptcha.execute();}});}</script>
            
                                        <input type="hidden" name="captcha_status" value="true" />
                                    </div><!--col-->
                                </div><!--row-->
                            <?php endif; ?>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-primary" type="submit"><?php echo app('translator')->get('Login'); ?></button>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.utils.link','data' => ['href' => route('frontend.auth.password.request'),'class' => 'btn btn-link','text' => __('Forgot Your Password?')]]); ?>
<?php $component->withName('utils.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('frontend.auth.password.request')),'class' => 'btn btn-link','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Forgot Your Password?'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                            </div><!--form-group-->

                            <div class="text-center">
                                <?php echo $__env->make('frontend.auth.includes.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
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
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/mykios/resources/views/frontend/auth/login.blade.php ENDPATH**/ ?>