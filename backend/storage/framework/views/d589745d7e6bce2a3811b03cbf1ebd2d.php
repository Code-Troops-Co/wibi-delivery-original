<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?>
        | <?php echo e(!empty($systemSettings['appName']) ? $systemSettings['appName'] : config('app.name')); ?></title>
    <link rel="icon" href="<?php echo e($systemSettings['favicon'] ?? asset('logos/hyper-local-favicon.png')); ?>"
        sizes="image/x-icon">
    <?php echo $__env->make('layouts.partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body class="layout-fluid">
    <input type="hidden" name="base_url" id="base_url" value="<?php echo e(url('/')); ?>">
    <input type="hidden" name="user_id" id="user_id" value="<?php echo e($user->id ?? ""); ?>">
    <input type="hidden" name="panel" id="panel" data-panel="<?php echo e($panel ?? 'admin'); ?>">
    <input type="hidden" id="selected-currency-symbol" value="<?php echo e($systemSettings['currencySymbol'] ?? '$'); ?>">
    <script src="<?php echo e(asset('assets/theme/js/tabler-theme.min.js')); ?>"></script>
    <div class="page">
        <?php echo $__env->make('layouts.partials._sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="page-wrapper">

            <?php echo $__env->make('layouts.partials._alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.partials._footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

    <?php echo $__env->make('layouts.partials._scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html><?php /**PATH /var/www/wibi-backend/resources/views/layouts/main.blade.php ENDPATH**/ ?>