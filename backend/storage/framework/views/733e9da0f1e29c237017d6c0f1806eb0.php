<?php $__env->startSection('title', __('labels.storage_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.storage_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.storage_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.storage_settings')); ?></h2>
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
    <!-- BEGIN PAGE BODY -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-sm-2 d-none d-lg-block">
                    <div class="sticky-top">
                        <h3><?php echo e(__('labels.menu')); ?></h3>
                        <nav class="nav nav-vertical nav-pills" id="pills">
                            <a class="nav-link" href="#pills-aws"><?php echo e(__('labels.aws_s3')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="storage">
                                <div class="card mb-4" id="pills-aws">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.aws_s3')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.aws_access_key_id')); ?></label>
                                            <input type="text" class="form-control" name="awsAccessKeyId"
                                                   placeholder="<?php echo e(__('labels.aws_access_key_id_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['awsAccessKeyId'] ?? '****'), '****', 3, 8) : ($settings['awsAccessKeyId'] ?? '')); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.aws_secret_access_key')); ?></label>
                                            <input type="text" class="form-control" name="awsSecretAccessKey"
                                                   placeholder="<?php echo e(__('labels.aws_secret_access_key_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['awsSecretAccessKey'] ?? '****'), '****', 3, 8) : ($settings['awsSecretAccessKey'] ?? '')); ?>"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.aws_region')); ?></label>
                                            <input type="text" class="form-control" name="awsRegion"
                                                   placeholder="<?php echo e(__('labels.aws_region_placeholder')); ?>"
                                                   value="<?php echo e($settings['awsRegion'] ?? ''); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.aws_bucket')); ?></label>
                                            <input type="text" class="form-control" name="awsBucket"
                                                   placeholder="<?php echo e(__('labels.aws_bucket_placeholder')); ?>"
                                                   value="<?php echo e($settings['awsBucket'] ?? ''); ?>" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.aws_asset_url')); ?></label>
                                            <input type="url" class="form-control" name="awsAssetUrl"
                                                   placeholder="<?php echo e(__('labels.aws_asset_url_placeholder')); ?>"
                                                   value="<?php echo e($settings['awsAssetUrl'] ?? ''); ?>" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'storage'])): ?>
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

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['storage']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/storage.blade.php ENDPATH**/ ?>