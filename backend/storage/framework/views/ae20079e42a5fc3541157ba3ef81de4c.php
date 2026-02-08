<?php $__env->startSection('title', __('labels.seller_withdrawals')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.seller_withdrawals');
        $page_pretitle = __('labels.admin') . " " . __('labels.seller_withdrawals');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.seller_withdrawals'), 'url' => '']
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('labels.pending_withdrawal_requests')); ?></h3>
                            <div class="card-actions">
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <a href="<?php echo e(route('admin.seller-withdrawals.history')); ?>" class="btn btn-outline-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-history">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 8l0 4l2 2"/>
                                                <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5"/>
                                            </svg>
                                            <?php echo e(__('labels.withdrawal_history')); ?>

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
                        <div class="card-body">
                            <div class="row w-full p-3">
                                <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'seller-withdrawals-table','columns' => $columns,'route' => ''.e(route('admin.seller-withdrawals.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <!-- WITHDRAWAL REQUEST MODAL -->
    <div class="modal modal-blur fade" id="withdrawalRequestModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-primary"></div>
                <div class="modal-body text-center py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check icon-lg text-primary">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95"/>
                        <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44"/>
                        <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92"/>
                        <path d="M8.56 20.31a9 9 0 0 0 3.44 .69"/>
                        <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95"/>
                        <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44"/>
                        <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92"/>
                        <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69"/>
                        <path d="M9 12l2 2l4 -4"/>
                    </svg>
                    <h3><?php echo e(__('labels.process_withdrawal_request')); ?></h3>
                    <div class="text-secondary"><?php echo e(__('labels.confirm_withdrawal_request_message')); ?></div>
                    <div class="mt-3">
                        <div class="text-muted"><?php echo e(__('labels.seller')); ?>: <span id="withdrawal-seller"></span></div>
                        <div class="text-muted"><?php echo e(__('labels.amount')); ?>: <span id="withdrawal-amount"></span></div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="withdrawal-status" class="form-label"><?php echo e(__('labels.status')); ?></label>
                            <select id="withdrawal-status" class="form-select">
                                <option value="approved"><?php echo e(__('labels.approved')); ?></option>
                                <option value="rejected"><?php echo e(__('labels.rejected')); ?></option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="withdrawal-remark" class="form-label"><?php echo e(__('labels.admin_remark')); ?></label>
                            <textarea id="withdrawal-remark" class="form-control" rows="3" placeholder="<?php echo e(__('labels.optional_remark')); ?>"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-secondary w-100" data-bs-dismiss="modal"><?php echo e(__('labels.cancel')); ?></button>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary w-100" id="confirmWithdrawal" data-bs-dismiss="modal"><?php echo e(__('labels.confirm')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/seller-withdrawals.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['seller_management']['active'] ?? "", 'sub_page' => $menuAdmin['seller_management']['route']['seller_withdrawals']['sub_active']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/seller_withdrawals/index.blade.php ENDPATH**/ ?>