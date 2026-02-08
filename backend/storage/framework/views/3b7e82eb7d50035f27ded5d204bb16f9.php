<?php if($mode === 'settle'): ?>
    <div class="d-flex justify-content-center">
        <?php if($settlePermission ?? false): ?>
            <button class="btn btn-icon btn-outline-primary settle-commission-btn"
                    data-id="<?php echo e($id); ?>"
                    data-order-id="<?php echo e($orderId ?? ''); ?>"
                    data-store="<?php echo e($store_name ?? ''); ?>"
                    data-product="<?php echo e($productTitle ?? ''); ?>"
                    data-commission="<?php echo e($adminCommissionAmount ?? ''); ?>"
                    data-amount="<?php echo e($amountToPay ?? ''); ?>"
                    data-settle-url="<?php echo e($settleUrl ?? ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="icon icon-tabler icons-tabler-outline icon-tabler-cash">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="7" y="9" width="14" height="10" rx="2"/>
                    <circle cx="14" cy="14" r="2"/>
                    <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"/>
                </svg>
            </button>
        <?php endif; ?>
    </div>
<?php else: ?>
    <div>
        <?php if (isset($component)) { $__componentOriginal9891ddf5c80dcab8a9aa20ae030d2455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9891ddf5c80dcab8a9aa20ae030d2455 = $attributes; } ?>
<?php $component = App\View\Components\PartialActions::resolve(['modelName' => ''.e($modelName).'','id' => ''.e($id).'','title' => ''.e($title).'','mode' => ''.e($mode).'','route' => ''.e($route ?? null).'','editPermission' => ''.e($editPermission ?? false).'','deletePermission' => ''.e($deletePermission ?? false).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partial-actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PartialActions::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9891ddf5c80dcab8a9aa20ae030d2455)): ?>
<?php $attributes = $__attributesOriginal9891ddf5c80dcab8a9aa20ae030d2455; ?>
<?php unset($__attributesOriginal9891ddf5c80dcab8a9aa20ae030d2455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9891ddf5c80dcab8a9aa20ae030d2455)): ?>
<?php $component = $__componentOriginal9891ddf5c80dcab8a9aa20ae030d2455; ?>
<?php unset($__componentOriginal9891ddf5c80dcab8a9aa20ae030d2455); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/wibi-backend/resources/views/partials/actions.blade.php ENDPATH**/ ?>