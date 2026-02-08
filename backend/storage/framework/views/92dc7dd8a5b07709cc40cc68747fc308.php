<?php $__env->startSection('title', __('labels.sort_categories')); ?>
<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title =  __('labels.sort_categories');
        $page_pretitle = __('labels.list');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' =>  __('labels.sort_categories'), 'url' => '']
    ];
?>
<?php $__env->startSection('admin-content'); ?>
    <div class="page-body">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title"><?php echo e(__('labels.sort_categories') . " (" . ($parentCategories->count()) . ")"); ?></h3>
                        <div>
                            <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> <?php echo e(__('labels.back_to_list')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="sort-info">
                            <h6 class="text-primary mb-2">
                                <i class="fas fa-info-circle"></i> <?php echo e(__('labels.sorting_instructions')); ?>

                            </h6>
                            <p class="mb-0">
                                <?php echo e(__('labels.drag_drop_instruction')); ?>

                            </p>
                        </div>
                        <?php if($parentCategories->isEmpty()): ?>
                            <div class="text-center py-5">
                                <i class="fas fa-inbox text-gray-300" style="font-size: 3rem;"></i>
                                <h5 class="text-gray-500 mt-3"><?php echo e(__('labels.no_categories_found')); ?></h5>
                                <p class="text-gray-400"><?php echo e(__('labels.create_category_first')); ?></p>
                                <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-primary">
                                    <?php echo e(__('labels.add_category')); ?>

                                </a>
                            </div>
                        <?php else: ?>
                            <div class="section-group mb-4">
                                <div class="mt-3">
                                    <div id="categories-sortable-list" class="sortable-container" data-group="categories">
                                        <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="sortable-item" data-id="<?php echo e($category->id); ?>">
                                                <div class="section-info">
                                                    <div class="d-flex align-items-center flex-grow-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-grip-vertical">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M9 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                            <path d="M9 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                            <path d="M9 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                            <path d="M15 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                            <path d="M15 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                            <path d="M15 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                                                        </svg>
                                                        <div class="section-details">
                                                            <h5><span class="section-order"><?php echo e($category->sort_order); ?></span> <?php echo e($category->title); ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="section-meta">
                                                        <div class="mb-2">
                                                            <span class="badge <?php echo e($category->status === 'active' ? 'bg-primary-lt' : 'bg-danger-lt'); ?> ms-2">
                                                                <?php echo e($category->status === 'active' ? __('labels.active') : __('labels.inactive')); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-outline-secondary" id="reset-order"><?php echo e(__('labels.reset_order')); ?></button>
                        <button type="submit" class="btn btn-primary" id="save-category-order">
                            <i class="fas fa-save"></i> <?php echo e(__('labels.save_order')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/vendor/sortablejs/sortable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/sortablejs/jquery-sortable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/category-sort.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['categories']['active'] ?? "", 'sub_page' => $menuAdmin['categories']['route']['sort']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/categories/sort.blade.php ENDPATH**/ ?>