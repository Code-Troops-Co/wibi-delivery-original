<?php $__env->startSection('title', __('labels.email_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.email_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.email_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.email_settings')); ?></h2>
                <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-sm-2 d-none d-lg-block">
                    <div class="sticky-top">
                        <h3><?php echo e(__('labels.menu')); ?></h3>
                        <nav class="nav nav-vertical nav-pills" id="pills">
                            <a class="nav-link" href="#pills-smtp"><?php echo e(__('labels.smtp')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="email">
                                <div class="card mb-4" id="pills-smtp">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.smtp')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.smtp_host')); ?></label>
                                            <input type="text" class="form-control" name="smtpHost"
                                                   placeholder="<?php echo e(__('labels.smtp_host_placeholder')); ?>"
                                                   value="<?php echo e($settings['smtpHost'] ?? ''); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.smtp_port')); ?></label>
                                            <input type="number" class="form-control" name="smtpPort"
                                                   placeholder="<?php echo e(__('labels.smtp_port_placeholder')); ?>"
                                                   value="<?php echo e($settings['smtpPort'] ?? ''); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.smtp_email')); ?></label>
                                            <input type="email" class="form-control" name="smtpEmail"
                                                   placeholder="<?php echo e(__('labels.smtp_email_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['smtpEmail'] ?? '****'), '****', 3, 8) : ($settings['smtpEmail'] ?? '')); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.smtp_password')); ?></label>
                                            <input type="password" class="form-control" name="smtpPassword"
                                                   placeholder="<?php echo e(__('labels.smtp_password_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['smtpPassword'] ?? '****'), '****', 3, 8) : ($settings['smtpPassword'] ?? '')); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.smtp_encryption')); ?></label>
                                            <select class="form-select" name="smtpEncryption" required>
                                                <option value=""
                                                        disabled <?php echo e(!isset($settings['smtpEncryption']) ? 'selected' : ''); ?>><?php echo e(__('labels.smtp_encryption_placeholder')); ?></option>
                                                <option
                                                    value="tls" <?php echo e(isset($settings['smtpEncryption']) && $settings['smtpEncryption'] === 'tls' ? 'selected' : ''); ?>>
                                                    TLS
                                                </option>
                                                <option
                                                    value="ssl" <?php echo e(isset($settings['smtpEncryption']) && $settings['smtpEncryption'] === 'ssl' ? 'selected' : ''); ?>>
                                                    SSL
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.smtp_content_type')); ?></label>
                                            <select class="form-select" name="smtpContentType" required>
                                                <option value=""
                                                        disabled <?php echo e(!isset($settings['smtpContentType']) ? 'selected' : ''); ?>><?php echo e(__('labels.smtp_content_type_placeholder')); ?></option>
                                                <option
                                                    value="text" <?php echo e(isset($settings['smtpContentType']) && $settings['smtpContentType'] === 'text' ? 'selected' : ''); ?>>
                                                    Text
                                                </option>
                                                <option
                                                    value="html" <?php echo e(isset($settings['smtpContentType']) && $settings['smtpContentType'] === 'html' ? 'selected' : ''); ?>>
                                                    HTML
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'email'])): ?>
                                            <button type="submit"
                                                    class="btn btn-primary ms-auto"><?php echo e(__('labels.submit')); ?></button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['email']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/email.blade.php ENDPATH**/ ?>