<table id="<?php echo e($id); ?>" data-datatable data-route="<?php echo e($route); ?>" data-columns='<?php echo json_encode($columns, 15, 512) ?>'
       data-options='<?php echo json_encode($options ?? [], 15, 512) ?>'
       class="<?php echo e($class ?? 'table table-striped table-bordered table-vcenter text-nowrap w-100'); ?> data-table">
    <thead class="table-light">
    <tr>

        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($column['label'] ?? ''); ?></th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<?php /**PATH /var/www/wibi-backend/resources/views/components/datatable.blade.php ENDPATH**/ ?>