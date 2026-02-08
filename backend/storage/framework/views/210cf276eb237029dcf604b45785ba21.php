<?php $__env->startSection('title', __('labels.promos')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.promos');
        $page_pretitle = __('labels.list');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.promos'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3 class="card-title"><?php echo e(__('labels.promos')); ?></h3>
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
                                           data-bs-target="#promo-modal">
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
                                            <?php echo e(__('labels.add_promo')); ?>

                                        </a>
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
                <div class="card-table">
                    <div class="row w-full p-3">
                        <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'promos-table','columns' => $columns,'route' => ''.e(route('admin.promos.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php if(($createPermission ?? false) || ($editPermission ?? false)): ?>
        <div
            class="modal modal-blur fade"
            id="promo-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
            data-bs-backdrop="static"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-submit" action="<?php echo e(route('admin.promos.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="promo-id" value=""/>
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo e(__('labels.create_promo')); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.promo_code')); ?></label>
                                        <input type="text" class="form-control" name="code"
                                               placeholder="<?php echo e(__('labels.enter_promo_code')); ?>"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.discount_type')); ?></label>
                                        <select class="form-select text-capitalize" name="discount_type"
                                                id="discount-type" required>
                                            <option value=""><?php echo e(__('labels.select_discount_type')); ?></option>
                                            <?php $__currentLoopData = \App\Enums\PromoDiscountTypeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($value); ?>"><?php echo e(\Illuminate\Support\Str::replace("_", " ", $value)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required"><?php echo e(__('labels.description')); ?></label>
                                <textarea class="form-control" name="description" rows="3"
                                          placeholder="<?php echo e(__('labels.enter_description')); ?>"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('labels.discount_amount_or_percent')); ?></label>
                                        <input type="number" class="form-control" name="discount_amount"
                                               placeholder="<?php echo e(__('labels.enter_discount_amount')); ?>"
                                               step="0.01" min="0" required/>
                                        <small
                                            class="form-text text-muted"><?php echo e(__('messages.discount_amount_percent_or_amount')); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('labels.max_discount_value')); ?></label>
                                        <input type="number" class="form-control" name="max_discount_value"
                                               placeholder="<?php echo e(__('labels.enter_max_discount_value')); ?>"
                                               step="0.01" min="0"/>
                                        <small
                                            class="form-text text-muted"><?php echo e(__('labels.required_for_percentage_discount')); ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.start_date')); ?></label>
                                        <input type="datetime-local" class="form-control" name="start_date" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.end_date')); ?></label>
                                        <input type="datetime-local" class="form-control" name="end_date" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.min_order_total')); ?></label>
                                        <input type="number" class="form-control" name="min_order_total"
                                               placeholder="<?php echo e(__('labels.enter_min_order_total')); ?>"
                                               step="0.01" min="0"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.promo_mode')); ?></label>
                                        <select class="form-select" name="promo_mode" required>
                                            <option value=""><?php echo e(__('labels.select_promo_mode')); ?></option>
                                            <option value="instant"><?php echo e(__('labels.instant')); ?></option>
                                            <option value="cashback"><?php echo e(__('labels.cashback')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.max_total_usage')); ?></label>
                                        <input type="number" class="form-control" name="max_total_usage"
                                               placeholder="<?php echo e(__('labels.enter_max_total_usage')); ?>"
                                               min="1"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.max_usage_per_user')); ?></label>
                                        <input type="number" class="form-control" name="max_usage_per_user"
                                               placeholder="<?php echo e(__('labels.enter_max_usage_per_user')); ?>"
                                               min="1"/>
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
                                <?php echo e(__('labels.create_new_promo')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="view-promo-offcanvas" aria-labelledby="offcanvasEndLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasEndLabel"><?php echo e(__('labels.promo_details')); ?></h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card card-sm border-0">
                <div class="card-body px-0">
                    <div>
                        <h4 id="promo-code" class="fs-3"></h4>
                        <p id="promo-description" class="fs-4"></p>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.discount_type')); ?>:</span>
                                    <span id="promo-discount-type" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.discount_amount_or_percent')); ?>:</span>
                                    <span id="promo-discount-amount" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.start_date')); ?>:</span>
                                    <span id="promo-start-date" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.end_date')); ?>:</span>
                                    <span id="promo-end-date" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.usage_count')); ?>:</span>
                                    <span id="promo-usage-count" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.max_total_usage')); ?>:</span>
                                    <span id="promo-max-total-usage" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.max_usage_per_user')); ?>:</span>
                                    <span id="promo-max-usage-per-user" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.min_order_total')); ?>:</span>
                                    <span id="promo-min-order-total" class="fw-medium"></span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span><?php echo e(__('labels.max_discount_value')); ?>:</span>
                                    <span id="promo-max-discount-value" class="fw-medium"></span>
                                </p>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/promo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['promos']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/promos/index.blade.php ENDPATH**/ ?>