<?php $__env->startSection('title', __('labels.categories')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.categories');
        $page_pretitle = __('labels.list');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.categories'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3 class="card-title"><?php echo e(__('labels.categories')); ?></h3>
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
                                <?php if($createPermission ?? false): ?>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-6 btn-outline-primary" data-bs-toggle="modal"
                                           data-bs-target="#category-modal">
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
                                            <?php echo e(__('labels.add_category')); ?>

                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if($createPermission ?? false): ?>
                            <div class="col-auto">
                                <a href="<?php echo e(route('admin.categories.bulk-upload.page')); ?>" class="btn btn-outline-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 9l5 -5l5 5" />
                                        <path d="M12 4l0 12" />
                                    </svg>
                                    <?php echo e(__('labels.bulk_upload')); ?>

                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="col-auto">
                                <a href="<?php echo e(route('admin.categories.sort')); ?>" class="btn btn-outline-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6l7 0" />
                                        <path d="M4 12l7 0" />
                                        <path d="M4 18l9 0" />
                                        <path d="M15 9l3 -3l3 3" />
                                        <path d="M18 6l0 12" />
                                    </svg>
                                    <?php echo e(__('labels.sort')); ?>

                                </a>
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
                <div class="card-table">
                    <div class="row w-full p-3">
                        <div class="alert alert-info alert-dismissible" role="alert">
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
                            <?php echo e(__('labels.global_scope_config_note')); ?>

                            <a href="<?php echo e(route('admin.settings.show', ['home_general_settings'])); ?>" class="alert-action">
                                Link </a>
                            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                        </div>
                        <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'categories-table','columns' => $columns,'route' => ''.e(route('admin.categories.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php if(($createPermission ?? false)): ?>
        <div class="modal modal-blur fade" id="bulk-upload-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('labels.bulk_upload_categories')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="bulk-upload-form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label required"><?php echo e(__('labels.select_csv_file')); ?></label>
                                <input type="file" name="file" accept=".csv" class="form-control" required />
                                <small class="form-hint"><?php echo e(__('labels.bulk_upload_hint')); ?></small>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <button type="submit" class="btn btn-primary" id="bulk-upload-submit">
                                    <span class="upload-text"><?php echo e(__('labels.upload')); ?></span>
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                </button>
                                <a href="<?php echo e(route('admin.categories.bulk-template')); ?>" class="btn btn-link"><?php echo e(__('labels.download_template')); ?></a>
                            </div>
                        </form>
                        <div class="mt-3 d-none" id="bulk-upload-result">
                            <div class="alert alert-success" id="bulk-success" role="alert"></div>
                            <div class="alert alert-danger d-none" id="bulk-failed" role="alert"></div>
                            <div class="table-responsive d-none" id="bulk-failed-table-wrap">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(__('labels.title')); ?></th>
                                            <th><?php echo e(__('labels.error')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody id="bulk-failed-tbody"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(($createPermission ?? false) || ($editPermission ?? false)): ?>
        <div
            class="modal modal-blur fade"
            id="category-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
            data-bs-backdrop="static"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-submit" action="<?php echo e(route('admin.categories.store')); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="category-id" value=""/>
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo e(__('labels.create_category')); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label required"><?php echo e(__('labels.category_name')); ?></label>
                                <input type="text" class="form-control" name="title"
                                       placeholder="<?php echo e(__('labels.enter_category_name')); ?>"
                                />
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.description')); ?></label>
                                <textarea class="form-control" name="description" rows="3"
                                          placeholder="<?php echo e(__('labels.enter_description')); ?>"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.parent_category')); ?></label>
                                <select type="text" class="form-select" id="select-parent-category" name="parent_id">
                                    <!-- Options will be dynamically loaded -->
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required"><?php echo e(__('labels.image')); ?></label>
                                <input type="file" class="form-control" id="image-upload" name="image"
                                       data-image-url=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.banner')); ?></label>
                                <input type="file" class="form-control" id="banner-upload" name="banner"
                                       data-image-url=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.icon')); ?></label>
                                <input type="file" class="form-control" id="icon-upload" name="icon"
                                       data-image-url=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.active_icon')); ?></label>
                                <input type="file" class="form-control" id="active-icon-upload" name="active_icon"
                                       data-image-url=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.background_type')); ?></label>
                                <select class="form-select" name="background_type" id="background-type-select">
                                    <option value=""><?php echo e(__('labels.select_background_type')); ?></option>
                                    <option value="color"><?php echo e(__('labels.color')); ?></option>
                                    <option value="image"><?php echo e(__('labels.image')); ?></option>
                                </select>
                                <small class="form-text text-muted"><?php echo e(__('labels.background_home_page_note')); ?></small>
                            </div>

                            <div class="mb-3" id="background-color-field" style="display: none;">
                                <label class="form-label required"><?php echo e(__('labels.background_color')); ?></label>
                                <input type="color" class="form-control form-control-color w-100"
                                       name="background_color" id="background-color-input"/>
                            </div>
                            <div class="mb-3" id="background-image-field" style="display: none;">
                                <label class="form-label required"><?php echo e(__('labels.background_image')); ?></label>
                                <input type="file" class="form-control" id="background-image-upload"
                                       name="background_image"
                                       data-image-url=""/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.font_color')); ?></label>
                                <input type="color" class="form-control form-control-color w-100" name="font_color"
                                       id="font-color-input"/>
                            </div>


                            <div class="mb-3">
                                <label class="form-label"><?php echo e(__('labels.commission')); ?></label>
                                <input type="number" class="form-control" name="commission" id="commission"
                                       placeholder="<?php echo e(__('labels.commission_placeholder')); ?>" step="0.01" min="0"
                                       max="100" value="0"/>
                                <small class="form-text text-muted">Enter commission percentage (0-100)</small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="status" id="status-switch"
                                               value="active" checked>
                                        <label class="form-check-label"
                                               for="status-switch"><?php echo e(__('labels.status')); ?></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="requires_approval"
                                               id="approval-switch" value="1" checked>
                                        <label class="form-check-label"
                                               for="approval-switch"><?php echo e(__('labels.requires_approval')); ?></label>
                                    </div>
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
                                <?php echo e(__('labels.create_new_category')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="view-category-offcanvas" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel">Category Details</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card card-sm border-0">
                <label class="fw-medium pb-1">Banner</label>
                <div class="img-box-200px-h card-img">
                    <img id="banner-image" src=""/>
                </div>
                <label class="fw-medium pb-1 pt-3">Image</label>
                <div class="img-box-200px-h card-img">
                    <img id="card-image" src=""/>
                </div>
                <label class="fw-medium pb-1 pt-3">Icon</label>
                <div class="img-box-200px-h card-img">
                    <img id="icon-image" src=""/>
                </div>
                <label class="fw-medium pb-1 pt-3">Active Icon</label>
                <div class="img-box-200px-h card-img">
                    <img id="active-icon-image" src=""/>
                </div>
                <label class="fw-medium pb-1 pt-3">Background</label>
                <div id="background-display">
                    <p class="col-md-8 d-flex justify-content-between">Type: <span id="background-type"
                                                                                   class="fw-medium"></span></p>
                    <div id="background-color-display" style="display: none;">
                        <p class="col-md-8 d-flex justify-content-between">Color: <span id="background-color-value"
                                                                                        class="fw-medium"></span></p>
                        <div class="color-preview" id="background-color-preview"
                             style="width: 50px; height: 50px; border: 1px solid #ccc; border-radius: 4px;"></div>
                    </div>
                    <div id="background-image-display" style="display: none;">
                        <div class="img-box-200px-h card-img">
                            <img id="background-image-preview" src=""/>
                        </div>
                    </div>
                </div>
                <label class="fw-medium pb-1 pt-3">Font Color</label>
                <div id="font-color-display">
                    <p class="col-md-8 d-flex justify-content-between">Color: <span id="font-color-value"
                                                                                    class="fw-medium"></span></p>
                    <div class="color-preview form-control form-control-color w-100" id="font-color-preview"></div>
                </div>
                <div class="card-body px-0">
                    <div>
                        <h4 id="category-name" class="fs-3"></h4>
                        <p id="category-description" class="fs-4"></p>
                        <p class="col-md-8 d-flex justify-content-between">Status: <span id="category-status"
                                                                                         class="badge bg-green-lt text-uppercase fw-medium"></span>
                        </p>
                        <p class="col-md-8 d-flex justify-content-between">Parent Category: <span id="parent-category"
                                                                                                  class="fw-medium"></span>
                        </p>
                        <p class="col-md-8 d-flex justify-content-between">Commission: <span class="fw-medium"></span>%
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['categories']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>