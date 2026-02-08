<?php use App\Enums\Attribute\AttributeTypesEnum; ?>
<div>
    <?php if($data->attribute->swatche_type === AttributeTypesEnum::COLOR()): ?>
        <div style="width: 35px; height: 35px; background-color: <?php echo e($data->swatche_value); ?>; border-radius: 4px; padding: 2px; border:solid 1px;"></div>
    <?php elseif($data->attribute->swatche_type === AttributeTypesEnum::IMAGE()): ?>
        <a href="<?php echo e($data->swatche_value); ?>" class="" target="_blank"
           data-fslightbox="gallery">
            <img src="<?php echo e($data->swatche_value); ?>" alt="<?php echo e("Image"); ?>" width="100" height="50">
        </a>
    <?php else: ?>
        <span><?php echo e($data->swatche_value); ?></span>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/wibi-backend/resources/views/seller/global_product_attributes/partials/swatche-values.blade.php ENDPATH**/ ?>