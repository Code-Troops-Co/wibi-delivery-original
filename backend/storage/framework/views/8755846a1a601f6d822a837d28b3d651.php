<?php $__env->startSection('title', __('labels.stores')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.stores');
        $page_pretitle = __('labels.list');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.stores'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3 class="card-title"><?php echo e(__('labels.stores')); ?></h3>
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
                    <div class="card-actions">
                        <div class="row g-2">
                            <div class="col-auto">
                                <button class="btn btn-outline-primary" id="refresh">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"/>
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"/>
                                    </svg>
                                    <?php echo e(__('labels.refresh')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-table">
                    <div class="align-items-center d-lg-flex d-block justify-content-between pt-3 px-3">
                        <div class="row w-100">
                            <div class="col-md-3">
                                <label
                                    class="form-label"><?php echo e(__('labels.search_by_seller')); ?></label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       id="select-seller"
                                       multiple
                                       placeholder="<?php echo e(__('labels.enter_seller_name')); ?>"
                                />
                            </div>
                            <div class="col-md-3">
                                <label
                                    class="form-label"><?php echo e(__('labels.filter_by_verification_status')); ?></label>
                                <select class="form-select text-capitalize" id="verification-status">
                                    <option value=""><?php echo e(__('labels.select_status')); ?></option>
                                    <?php $__currentLoopData = $verificationStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($status); ?>"><?php echo e(Str::replace('_', ' ', $status)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label
                                    class="form-label"><?php echo e(__('labels.filter_by_visibility_status')); ?></label>
                                <select class="form-select text-capitalize" id="visibility-status">
                                    <option value=""><?php echo e(__('labels.select_status')); ?></option>
                                    <?php $__currentLoopData = $visibilityStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($vStatus); ?>"><?php echo e(Str::replace('_', ' ', $vStatus)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-2" id="btn-filter">Filter</button>
                    </div>
                    <div class="alert alert-info alert-dismissible m-3" role="alert">
                        <div class="alert-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon alert-icon icon-2"
                            >
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"/>
                                <path d="M12 9h.01"/>
                                <path d="M11 12h1v4h1"/>
                            </svg>
                        </div>
                        <?php echo e(__('messages.verify_store_info')); ?>

                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                    <div class="row w-full p-3">
                        <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'stores-table','columns' => $columns,'route' => ''.e(route('admin.sellers.store.datatable', isset($seller) ? ['seller_id' => $seller->id] : [])).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Datatable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $attributes = $__attributesOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__attributesOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $component = $__componentOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__componentOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app',  ['page' => $menuAdmin['stores']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/stores/index.blade.php ENDPATH**/ ?>