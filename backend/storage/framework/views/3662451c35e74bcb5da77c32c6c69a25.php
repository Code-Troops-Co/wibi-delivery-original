<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = $page_title ?? 'Seller Dashboard';
        $page_pretitle = $page_pretitle ?? 'Overview';
    ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(empty($page) || $page != 'login'): ?>
        <?php echo $__env->make('layouts.partials._header', [
            'page_title' => $page_title ?? 'Seller Dashboard',
            'page_pretitle' => $page_pretitle ?? 'Overview',
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="page-body">
        <div class="container-xl">
            <?php echo $__env->yieldContent('seller-content'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/layouts/seller/app.blade.php ENDPATH**/ ?>