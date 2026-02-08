<div>
    <!-- Photo -->
    <?php if($image !== null): ?>
        <a href="<?php echo e($image); ?>" class="" target="_blank"
           data-fslightbox="gallery">
            <img src="<?php echo e($image); ?>" alt="<?php echo e($title ?? "Image"); ?>" width="100" height="50">
        </a>
    <?php else: ?>
        <span class="text-muted">No Image</span>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/wibi-backend/resources/views/partials/image.blade.php ENDPATH**/ ?>