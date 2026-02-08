<?php $__env->startSection('title', __('labels.product_faqs')); ?>
<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title =  __('labels.product_faqs');
        $page_pretitle = __('labels.seller') . " " . __('labels.products');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('seller.dashboard')],
        ['title' => __('labels.products'), 'url' => route('seller.products.index')],
        ['title' =>  __('labels.product_faqs'), 'url' => '']
    ];
?>

<?php $__env->startSection('seller-content'); ?>
    <!-- Page body -->
    <div class="page-body">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title"><?php echo e(__('labels.product_faqs')); ?></h3>
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
                                    <select class="form-select" id="faqStatusFilter">
                                        <option value=""><?php echo e(__('labels.status')); ?></option>
                                        <?php $__currentLoopData = \App\Enums\ActiveInactiveStatusEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type); ?>"><?php echo e(ucfirst($type)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <?php if($createPermission ?? false): ?>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#product-faq-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="12" y1="5" x2="12" y2="19"/>
                                                <line x1="5" y1="12" x2="19" y2="12"/>
                                            </svg>
                                            <?php echo e(__('labels.add_product_faq')); ?>

                                        </button>
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
<?php $component = App\View\Components\Datatable::resolve(['id' => 'product-faqs-table','columns' => $columns,'route' => ''.e(route('seller.product_faqs.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <!-- Product FAQ Modal -->
    <?php if(($createPermission ?? false) || ($editPermission ?? false)): ?>
        <div class="modal modal-blur fade" id="product-faq-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="product-faq-modal-title"><?php echo e(__('labels.add_product_faq')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form-submit" id="product-faq-form" method="POST"
                          action="<?php echo e(route('seller.product_faqs.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.product')); ?></label>
                                        <select class="form-select" id="select-product" name="product_id" required>
                                            <option value=""><?php echo e(__('labels.select_product')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.question')); ?></label>
                                        <textarea class="form-control" id="question" name="question" rows="3"
                                                  placeholder="<?php echo e(__('labels.enter_question')); ?>" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label required"><?php echo e(__('labels.answer')); ?></label>
                                        <textarea class="form-control" id="answer" name="answer" rows="4"
                                                  placeholder="<?php echo e(__('labels.enter_answer')); ?>" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('labels.status')); ?></label>
                                        <select class="form-select text-capitalize" id="status" name="status">
                                            <?php $__currentLoopData = \App\Enums\ActiveInactiveStatusEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($status); ?>"><?php echo e($status); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn" data-bs-dismiss="modal">
                                <?php echo e(__('labels.cancel')); ?>

                            </a>
                            <button type="submit" class="btn btn-primary ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="12" y1="5" x2="12" y2="19"/>
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                </svg>
                                <?php echo e(__('labels.submit')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(hyperAsset('assets/js/product.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.seller.app', ['page' => $menuSeller['products']['active'] ?? "", 'sub_page' => $menuSeller['products']['route']['product_faqs']['sub_active']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/seller/product_faqs/index.blade.php ENDPATH**/ ?>