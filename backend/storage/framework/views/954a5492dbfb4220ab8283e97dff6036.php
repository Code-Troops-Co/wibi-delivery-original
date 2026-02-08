<?php use Illuminate\Support\Str; ?>


<?php $__env->startSection('title', __('labels.home_general_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.home_general_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.home_general_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.home_general_settings')); ?></h2>
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
                            <a class="nav-link" href="#pills-general"><?php echo e(__('labels.general')); ?></a>
                            <a class="nav-link" href="#pills-appearance"><?php echo e(__('labels.appearance')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="home_general_settings">

                                <div class="card mb-4" id="pills-general">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.general')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.category_title')); ?></label>
                                            <input type="text" class="form-control" name="title"
                                                   placeholder="<?php echo e(__('labels.enter_category_title')); ?>"
                                                   value="<?php echo e($settings['title'] ?? 'All Categories'); ?>"/>
                                            <small
                                                class="form-text text-muted"><?php echo e(__('labels.category_title_help')); ?></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.search_labels')); ?></label>
                                            <div class="input-group mb-2">
                                                <select class="form-select search-labels" name="searchLabels[]"
                                                        multiple>
                                                    <option value=""><?php echo e(__('labels.eg_search_labels')); ?></option>
                                                    <?php if(!empty($settings['searchLabels'])): ?>
                                                        <?php $__currentLoopData = $settings['searchLabels']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($label); ?>"
                                                                    selected><?php echo e(Str::replace("_", " ",$label)); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                                <button class="btn generate-search-labels-button" type="button"
                                                        title="generate search labels">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                         height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-sparkles m-0">
                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                              fill="none"/>
                                                        <path
                                                            d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm0 -12a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm-7 12a6 6 0 0 1 6 -6a6 6 0 0 1 -6 -6a6 6 0 0 1 -6 6a6 6 0 0 1 6 6z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <small class="form-hint"><?php echo e(__('labels.search_labels_help')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4" id="pills-appearance">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.appearance')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.background_type')); ?></label>
                                            <select class="form-select" name="backgroundType"
                                                    id="background-type-select">
                                                <option value=""><?php echo e(__('labels.select_background_type')); ?></option>
                                                <option
                                                    value="color" <?php echo e(isset($settings['backgroundType']) && $settings['backgroundType'] === 'color' ? 'selected' : ''); ?>><?php echo e(__('labels.color')); ?></option>
                                                <option
                                                    value="image" <?php echo e(isset($settings['backgroundType']) && $settings['backgroundType'] === 'image' ? 'selected' : ''); ?>><?php echo e(__('labels.image')); ?></option>
                                            </select>
                                            <small
                                                class="form-text text-muted"><?php echo e(__('labels.background_type_help')); ?></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.icon')); ?></label>
                                            <input type="file" class="form-control" id="icon-upload" name="icon"
                                                   data-image-url="<?php echo e($settings['icon'] ?? ''); ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.active_icon')); ?></label>
                                            <input type="file" class="form-control" id="active-icon-upload"
                                                   name="activeIcon"
                                                   data-image-url="<?php echo e($settings['activeIcon'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3" id="background-color-field"
                                             style="<?php echo e(isset($settings['backgroundType']) && $settings['backgroundType'] === 'color' ? 'display: block;' : 'display: none;'); ?>">
                                            <label class="form-label"><?php echo e(__('labels.background_color')); ?></label>
                                            <input type="color" class="form-control form-control-color w-100"
                                                   name="backgroundColor" id="background-color-input"
                                                   value="<?php echo e($settings['backgroundColor'] ?? '#ffffff'); ?>"/>
                                            <small
                                                class="form-text text-muted"><?php echo e(__('labels.background_color_help')); ?></small>
                                        </div>
                                        <div class="mb-3" id="background-image-field"
                                             style="<?php echo e(isset($settings['backgroundType']) && $settings['backgroundType'] === 'image' ? 'display: block;' : 'display: none;'); ?>">
                                            <label class="form-label"><?php echo e(__('labels.background_image')); ?></label>
                                            <input type="file" class="form-control" id="background-image-upload"
                                                   name="backgroundImage"
                                                   data-image-url="<?php echo e($settings['backgroundImage'] ?? ''); ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.font_color')); ?></label>
                                            <input type="color" class="form-control form-control-color w-100"
                                                   name="fontColor" id="font-color-input"
                                                   value="<?php echo e($settings['fontColor'] ?? '#000000'); ?>"/>
                                            <small
                                                class="form-text text-muted"><?php echo e(__('labels.font_color_help')); ?></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'home_general_settings'])): ?>
                                        <button type="submit" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path
                                                    d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/>
                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                                                <path d="M14 4l0 4l-6 0l0 -4"/>
                                            </svg>
                                            <?php echo e(__('labels.save')); ?>

                                        </button>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['home_general_settings']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/home_general_settings.blade.php ENDPATH**/ ?>