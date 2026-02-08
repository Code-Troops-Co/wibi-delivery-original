<?php use App\Enums\Attribute\AttributeTypesEnum; ?>


<?php $__env->startSection('title', __('labels.attributes')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.attributes');
        $page_pretitle = __('labels.seller') . " " . __('labels.attributes');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('seller.dashboard')],
        ['title' => __('labels.attributes'), 'url' => '']
    ];
?>

<?php $__env->startSection('seller-content'); ?>
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3 class="card-title"><?php echo e(__('labels.attributes')); ?></h3>
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
                                <select class="form-select text-capitalize" id="typeFilter">
                                    <option value=""><?php echo e(__('labels.transaction_type')); ?></option>
                                    <?php $__currentLoopData = AttributeTypesEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($value); ?>"><?php echo e(Str::replace("_", " ", $value)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-auto ms-auto">
                                <?php if($createPermission): ?>
                                    <div class="btn-list">
                                        <span class="d-flex flex-column flex-md-row gap-1">
                                            <button type="button" class="btn bg-primary-lt" data-bs-toggle="modal"
                                                    data-bs-target="#attribute-create-update-modal">
                                                <i class="ti ti-plus fs-3"></i>
                                                <?php echo e(__('labels.create_attribute')); ?>

                                            </button>
                                            <button type="button" class="btn bg-indigo-lt" data-bs-toggle="modal"
                                                    data-bs-target="#attribute-value-create-update-modal">
                                                <i class="ti ti-plus fs-3"></i>
                                                <?php echo e(__('labels.create_attribute_value')); ?>

                                            </button>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
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
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a href="#tabs-profile-ex1" class="nav-link active" data-bs-toggle="tab">
                                <?php echo e(__('labels.attributes')); ?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tabs-profile-ex2" class="nav-link" data-bs-toggle="tab">
                                <?php echo e(__('labels.attribute_values')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <div class="tab-pane active show" id="tabs-profile-ex1">

                            <div>
                                <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'attributes-table','columns' => $columns,'route' => ''.e(route('seller.attributes.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                        <div class="tab-pane" id="tabs-profile-ex2">
                            <div>
                                <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'attribute-values-table','columns' => $valuesColumns,'route' => ''.e(route('seller.attributes.values.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>
    </div>
    <?php if(($createPermission ?? false) || ($editPermission ?? false)): ?>
        <div
            class="modal modal-blur fade"
            id="attribute-create-update-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
            data-bs-backdrop="static"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-submit" action="<?php echo e(route('seller.attributes.store')); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo e(__('labels.create_new_attribute')); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="title"><?php echo e(__('labels.title')); ?></label>
                                <input type="text" id="title" name="title" class="form-control"
                                       placeholder="<?php echo e(__('labels.attribute_name')); ?>"
                                       required <?php echo e(old('title') ? 'value=' . old('title') : ''); ?>>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="label"><?php echo e(__('labels.label')); ?></label>
                                <input type="text" id="label" name="label" class="form-control"
                                       placeholder="<?php echo e(__('labels.label')); ?>"
                                       required <?php echo e(old('label') ? 'value=' . old('label') : ''); ?>>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label"><?php echo e(__('labels.swatche_type')); ?></label>
                                <select class="form-select" id="swatche_type" name="swatche_type" required>
                                    
                                    <option value="" selected><?php echo e(__('labels.select_type')); ?></option>
                                    <?php $__currentLoopData = $attributeTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($type); ?>"><?php echo e($type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="#" class="btn"
                               data-bs-dismiss="modal"><?php echo e(__('labels.cancel')); ?></a>
                            <button type="submit" class="btn btn-primary">
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
                                    class="icon icon-2"
                                >
                                    <path d="M12 5l0 14"/>
                                    <path d="M5 12l14 0"/>
                                </svg>
                                <?php echo e(__('labels.create_new_attribute')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div
            class="modal modal-blur fade"
            id="attribute-value-create-update-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
            data-bs-backdrop="static"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-submit attribute-value-form"
                          action="<?php echo e(route('seller.attributes.values.store')); ?>"
                          method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo e(__('labels.create_attribute_value')); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label for="attribute_id" class="form-label"><?php echo e(__('labels.attribute')); ?></label>
                                    <select class="form-select" id="attribute_id" name="attribute_id" required>
                                        <option value=""><?php echo e(__('form.selectAttribute')); ?></option>
                                        
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <div id="dynamic-fields-container">
                                <!-- Initial Field Set -->
                                <div class="field-group mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-end">
                                                <!-- Value (machine name) -->
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label for="values[]"
                                                               class="form-label"><?php echo e(__('form.value')); ?></label>
                                                        <input type="text" name="values[]" class="form-control"
                                                               placeholder="<?php echo e(__('labels.eg_red')); ?>" required
                                                            <?php echo e(old('value') ? 'value=' . old('value') : ''); ?>>
                                                    </div>
                                                </div>

                                                <!-- Dynamic swatche Value field -->
                                                <div class="col-md-2">
                                                    <div class="mb-3 swatche-value-container">
                                                        <label for="swatche_value[]"
                                                               class="form-label"><?php echo e(__('form.swatcheValue')); ?></label>
                                                        <input type="text" name="swatche_value[]"
                                                               class="form-control swatche-value"
                                                               placeholder="<?php echo e(__('labels.enter_swatche_value')); ?>"
                                                               required>
                                                    </div>
                                                </div>
                                                <!-- Remove Button -->
                                                <div class="col-md-1">
                                                    <div class="mb-3 text-end">
                                                        <button type="button" class="btn btn-danger btn-sm remove-field"
                                                                style="display: none;">
                                                            <i class="ti ti-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <button type="button" class="btn btn-success w-100" id="add-more-fields">
                                        <i class="ti ti-plus"></i> <?php echo e(__('labels.add_more_values')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="#" class="btn"
                               data-bs-dismiss="modal"><?php echo e(__('labels.cancel')); ?></a>
                            <button type="submit" class="btn btn-primary">
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
                                    class="icon icon-2"
                                >
                                    <path d="M12 5l0 14"/>
                                    <path d="M5 12l14 0"/>
                                </svg>
                                <?php echo e(__('labels.create_new_attribute_value')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(hyperAsset('assets/js/attribute.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.seller.app', ['page' => $menuSeller['attributes']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/seller/global_product_attributes/index.blade.php ENDPATH**/ ?>