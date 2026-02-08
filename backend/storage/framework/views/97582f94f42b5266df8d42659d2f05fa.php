<div>
    <?php if($status == 'active' || $status == 'approved' || $status == 'visible'|| $status == 'published' || $status == 'verified'|| $status == 'paid' || $status == ''): ?>
        <span class="badge bg-green-lt text-uppercase"><?php echo e(Str::replace("_", " ",$status)); ?></span>
    <?php elseif($status == 'inactive' || $status == 'rejected' || $status == 'not_approved' || $status == 'draft' || $status == 'pending_verification' || $status == 'pending'): ?>
        <span class="badge bg-red-lt text-uppercase"><?php echo e(Str::replace("_", " ",$status)); ?></span>
    <?php else: ?>
        <span class="badge bg-indigo-lt text-uppercase"><?php echo e(Str::replace("_", " ",$status)); ?></span>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/wibi-backend/resources/views/partials/status.blade.php ENDPATH**/ ?>