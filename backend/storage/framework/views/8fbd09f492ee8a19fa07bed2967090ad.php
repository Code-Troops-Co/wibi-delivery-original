<?php $__env->startSection('title', isset($banner) ? __('labels.edit_banner') : __('labels.create_banner')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = isset($banner) ? __('labels.edit_banner') : __('labels.create_banner');
        $page_pretitle = __('labels.admin') . " " . __('labels.management');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.banners'), 'url' => route('admin.banners.index')],
        ['title' => isset($banner) ? __('labels.edit_banner') : __('labels.create_banner'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(isset($banner) ? __('labels.edit_banner') : __('labels.create_banner')); ?></h2>
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
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="<?php echo e(route('admin.banners.index')); ?>"
                       class="btn btn-outline-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="9,14 4,9 9,4"/>
                            <path d="M20 20v-7a4 4 0 0 0-4-4H4"/>
                        </svg>
                        <?php echo e(__('labels.back_to_list')); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row row-deck row-cards">
            <form class="form-submit"
                  action="<?php echo e(isset($banner) ? route('admin.banners.update', $banner->id) : route('admin.banners.store')); ?>"
                  method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('labels.banner_information')); ?></h3>
                    </div>
                    <div class="card-body">
                        <!-- Scope fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.scope_type')); ?></label>
                                    <select class="form-select" name="scope_type" id="scopeType">
                                        <option value=""><?php echo e(__('labels.select_scope_type')); ?></option>
                                        <?php $__currentLoopData = $scopeTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scopeType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($scopeType); ?>"
                                                <?php echo e(old('scope_type', $banner->scope_type ?? 'global') == $scopeType ? 'selected' : ''); ?>>
                                                <?php echo e(ucfirst($scopeType)); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['scope_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3" id="scopeCategoryField" style="display: none;">
                                    <label class="form-label"><?php echo e(__('labels.scope_category')); ?></label>
                                    <select class="form-select" name="scope_id" id="select-root-category">
                                        <option value=""><?php echo e(__('labels.select_category')); ?></option>
                                        <?php if(!empty($scopeCategory)): ?>
                                            <option value="<?php echo e($scopeCategory->id); ?>" selected><?php echo e($scopeCategory->title); ?></option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['scope_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.title')); ?></label>
                                    <input type="text" class="form-control" name="title"
                                           value="<?php echo e(old('title', $banner->title ?? '')); ?>"
                                           placeholder="<?php echo e(__('labels.enter_banner_title')); ?>">
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.type')); ?></label>
                                    <select class="form-select" name="type" id="bannerType">
                                        <option value=""><?php echo e(__('labels.select_banner_type')); ?></option>
                                        <?php $__currentLoopData = $bannerTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->value); ?>"
                                                <?php echo e(old('type', $banner->type ?? '') == $type->value ? 'selected' : ''); ?>>
                                                <?php echo e(ucfirst($type->value)); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Dynamic fields based on banner type -->
                        <div id="productField" class="row" style="display: none;">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.product')); ?></label>
                                    <select class="form-select" name="product_id" id="select-product">
                                        <option value=""><?php echo e(__('labels.select_product')); ?></option>
                                        <?php if(isset($banner) && $banner->product_id): ?>
                                            <option value="<?php echo e($banner->product_id); ?>" selected>
                                                <?php echo e($banner->product->title ?? ''); ?>

                                            </option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div id="categoryField" class="row" style="display: none;">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.category')); ?></label>
                                    <select class="form-select" name="category_id" id="select-category">
                                        <option value=""><?php echo e(__('labels.select_category')); ?></option>
                                        <?php if(isset($banner) && $banner->category_id): ?>
                                            <option value="<?php echo e($banner->category_id); ?>" selected>
                                                <?php echo e($banner->category->title ?? ''); ?>

                                            </option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div id="brandField" class="row" style="display: none;">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.brand')); ?></label>
                                    <select class="form-select" name="brand_id" id="select-brand">
                                        <option value=""><?php echo e(__('labels.select_brand')); ?></option>
                                        <?php if(isset($banner) && $banner->brand_id): ?>
                                            <option value="<?php echo e($banner->brand_id); ?>" selected>
                                                <?php echo e($banner->brand->title ?? ''); ?>

                                            </option>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['brand_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div id="customField" class="row" style="display: none;">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.custom_url')); ?></label>
                                    <input type="text" class="form-control" name="custom_url" value="<?php echo e($banner->custom_url ?? ''); ?>"/>
                                    <?php $__errorArgs = ['brand_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.position')); ?></label>
                                    <select class="form-select" name="position" id="bannerPosition">
                                        <option value=""><?php echo e(__('labels.select_banner_position')); ?></option>
                                        <?php $__currentLoopData = $bannerPositions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($position->value); ?>"
                                                <?php echo e(old('type', $banner->position ?? '') == $position->value ? 'selected' : ''); ?>>
                                                <?php echo e(ucfirst($position->value)); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required"><?php echo e(__('labels.visibility_status')); ?></label>
                                    <select class="form-select" name="visibility_status">
                                        <option
                                            value="draft" <?php echo e(old('visibility_status', $banner->visibility_status ?? 'draft') == 'draft' ? 'selected' : ''); ?>>
                                            <?php echo e(__('labels.draft')); ?>

                                        </option>
                                        <option
                                            value="published" <?php echo e(old('visibility_status', $banner->visibility_status ?? '') == 'published' ? 'selected' : ''); ?>>
                                            <?php echo e(__('labels.published')); ?>

                                        </option>
                                    </select>
                                    <?php $__errorArgs = ['visibility_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label"><?php echo e(__('labels.display_order')); ?></label>
                                    <input type="number" class="form-control" name="display_order" min="0"
                                           value="<?php echo e(old('display_order', $banner->display_order ?? 0)); ?>"
                                           placeholder="<?php echo e(__('labels.enter_display_order')); ?>">
                                    <?php $__errorArgs = ['display_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('labels.banner_image')); ?></label>
                            <input type="file" class="filepond" name="banner_image" accept="image/*"
                                   data-max-files="1" data-image-url="<?php echo e($banner->banner_image ?? ""); ?>">
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="<?php echo e(route('admin.banners.index')); ?>"
                               class="btn btn-link"><?php echo e(__('labels.cancel')); ?></a>
                            <button type="submit" class="btn btn-primary ms-auto">
                                <?php echo e(isset($banner) ? __('labels.update_banner') : __('labels.create_banner')); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(hyperAsset('assets/js/banner.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app',['page' => $menuAdmin['banners']['active'] ?? "", 'sub_page' => $menuAdmin['banners']['route']['create']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/banners/form.blade.php ENDPATH**/ ?>