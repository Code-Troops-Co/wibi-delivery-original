<?php
    $segments = request()->segments();
    $start = $start ?? 1; // default: skip first segment (index 0 = 'admin')
?>

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="card">
                <div class="card-body">
                    <h2 class="page-title pb-1"><?php echo e($title); ?></h2>
                    <ol class="breadcrumb breadcrumb-arrows">
                        <?php for($i = $start; $i < $start + $step; $i++): ?>
                            <?php
                                $segment = ucfirst(str_replace('-', ' ', $segments[$i] ?? ''));
                                $url = url(implode('/', array_slice($segments, 0, $i + 1)));
                            ?>

                            <?php if($i < $start + $step - 1): ?>
                                <li class="breadcrumb-item"><a href="<?php echo e($url); ?>"><?php echo e($segment); ?></a></li>
                            <?php else: ?>
                                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/wibi-backend/resources/views/components/page_header.blade.php ENDPATH**/ ?>