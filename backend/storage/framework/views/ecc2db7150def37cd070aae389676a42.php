<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
                
                    
                        
                        
                    
                        
                        
                    
                        
                        
                    
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        <?php echo e(date('Y')); ?>

                        <a href="<?php echo e(url('/')); ?>" class="link-secondary"><?php echo e($systemSettings['appName'] ??
                            config('app.name')); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer><?php /**PATH /var/www/wibi-backend/resources/views/layouts/partials/_footer.blade.php ENDPATH**/ ?>