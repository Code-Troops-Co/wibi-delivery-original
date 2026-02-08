<?php $__env->startSection('title', __('labels.seller_login')); ?>
<?php $__env->startSection('content'); ?>
<div>
    <div class="page page-center">
        <?php if(($systemSettings['demoMode'] ?? false)): ?>
        <div class="container-fluid">
            <div class="alert alert-warning mt-2" role="alert">
                <div class="alert-icon">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon alert-icon icon-2">
                        <path d="M12 9v4"></path>
                        <path
                            d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                        </path>
                        <path d="M12 16h.01"></path>
                    </svg>
                </div>
                <div>

                    If you can't login to seller panel, please <span><a href="<?php echo e(route('seller.login')); ?>"
                            target="_blank" class="alert-link">click
                            here</a></span> to go to website.
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <?php if(($systemSettings['demoMode'] ?? false)): ?>
                    <img src="<?php echo e(asset('logos/hyper-local-logo.png')); ?>" alt="<?php echo e($systemSettings['appName'] ?? ""); ?>"
                        width="150px">
                    <?php else: ?>
                    <img src="<?php echo e(!empty($systemSettings['logo'])?$systemSettings['logo'] : asset('logos/hyper-local-logo.png')); ?>"
                        alt="<?php echo e($systemSettings['appName'] ?? ""); ?>" width="150px">
                    <?php endif; ?>
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <?php echo $__env->make('layouts.partials._alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <h2 class="h2 text-center mb-4">Login to your Seller Console</h2>
                    <form id="login-form" action="<?php echo e(route('seller.login.post')); ?>" method="post" autocomplete="off"
                        novalidate>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="fcm_token" value="">
                        <input type="hidden" name="device_type" value="web">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="your@email.com"
                                autocomplete="off" />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                                <span class="form-label-description"><a href="<?php echo e(route('seller.password.request')); ?>">I
                                        forgot password</a></span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" name="password" placeholder="Your password"
                                    id="password" autocomplete="off" />
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password" id="password-toggle"
                                        data-bs-toggle="tooltip">
                                        Show
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" />
                                <span class="form-check-label">Stay Signed in</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                    <?php if(($systemSettings['demoMode'] ?? false)): ?>
                    <div class="card mt-3 border-info">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="card-title h4 mb-0"><?php echo e(__('labels.demo_credentials')); ?></h3>
                                <span class="badge bg-info-lt"><?php echo e(__('labels.demo_mode')); ?></span>
                            </div>
                            <div class="row g-3">
                                <div class="col-126">
                                    <div class="border rounded p-3 h-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <strong><?php echo e(__('labels.seller_credentials')); ?></strong>
                                            <button type="button" class="btn btn-sm btn-outline-primary copy-cred"
                                                data-target-form="#login-form"
                                                data-email="<?php echo e(env('DEMO_SELLER_EMAIL', 'demoseller@gmail.com')); ?>"
                                                data-password="<?php echo e(env('DEMO_PASSWORD', '12345678')); ?>">
                                                <?php echo e(__('labels.copy_and_fill')); ?>

                                            </button>
                                        </div>
                                        <div class="text-muted"><?php echo e(__('labels.email')); ?>:
                                            <code><?php echo e(env('DEMO_SELLER_EMAIL', 'demoseller@gmail.com')); ?></code></div>
                                        <div class="text-muted"><?php echo e(__('labels.password')); ?>:
                                            <code><?php echo e(env('DEMO_PASSWORD', '12345678')); ?></code></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
             
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(hyperAsset('assets/js/login.js')); ?>" defer></script>
<script>
    var token = localStorage.getItem('fcm_token');
    if (token) {
        document.querySelector('input[name="fcm_token"]').value = token;
    }
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.copy-cred');
        if (!btn) return;
        e.preventDefault();
        const form = document.querySelector(btn.getAttribute('data-target-form'));
        if (!form) return;
        const email = btn.getAttribute('data-email');
        const password = btn.getAttribute('data-password');
        const emailInput = form.querySelector('input[name="email"]');
        const passInput = form.querySelector('input[name="password"]');
        if (emailInput) emailInput.value = email;
        if (passInput) passInput.value = password;
        try {
            navigator.clipboard && navigator.clipboard.writeText(password);
        } catch (err) {
            // noop
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.seller.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/seller/auth/login.blade.php ENDPATH**/ ?>