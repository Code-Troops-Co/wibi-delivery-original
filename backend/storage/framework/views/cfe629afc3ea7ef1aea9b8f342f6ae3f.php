<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <link rel="icon" href="<?php echo e(!empty($systemSettings['favicon']) ? $systemSettings['favicon'] : ""); ?>"
          sizes="image/x-icon">
    <?php echo $__env->make('layouts.partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<input type="hidden" name="base_url" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="panel" id="panel" data-panel="<?php echo e($panel ?? 'admin'); ?>">
<input type="hidden" id="selected-currency-symbol" value="<?php echo e($systemSettings['currencySymbol'] ?? '$'); ?>">

<!-- BEGIN GLOBAL THEME SCRIPT -->
<script src="<?php echo e(hyperAsset('assets/theme/js/tabler-theme.min.js')); ?>"></script>
<body>
<div class="page-wrapper">
    <div class="auth-page">
        <div class="auth-card">
            <div class="auth-body">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->yieldContent('footer'); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.partials._scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /var/www/wibi-backend/resources/views/layouts/admin/guest.blade.php ENDPATH**/ ?>